<?php

	/*-------------------------
	Autor: Obed Alvarado
	Web: obedalvarado.pw
	Mail: info@obedalvarado.pw
	---------------------------*/
	/* Connect To Database*/
	require_once ("../configu/db.php");//Contiene las variables de configuracion para conectar a la base de datos
	require_once ("../configu/conexion.php");//Contiene funcion que conecta a la base de datos
	
	$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
	if($action == 'ajax'){
		// escaping, additionally removing everything that could be (html/javascript-) code
         $q = mysqli_real_escape_string($con,(strip_tags($_REQUEST['q'], ENT_QUOTES)));
		 $aColumns = array( 'FALLA_DESC');//Columnas de busqueda
		 $sTable = "falla";
		 $sWhere = "";
		if ( $_GET['q'] != "" )
		{
			$sWhere = "WHERE (";
			for ( $i=0 ; $i<count($aColumns) ; $i++ )
			{
				$sWhere .= $aColumns[$i]." LIKE '%".$q."%' OR ";
			}
			$sWhere = substr_replace( $sWhere, "", -3 );
			$sWhere .= ')';
		}
		include 'pagination.php'; //include pagination file
		//pagination variables
		$page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;
		$per_page = 5; //how much records you want to show
		$adjacents  = 4; //gap between pages after number of adjacents
		$offset = ($page - 1) * $per_page;
		//Count the total number of row in your table*/
		$count_query   = mysqli_query($con, "SELECT count(*) AS numrows FROM $sTable  $sWhere");
		$row= mysqli_fetch_array($count_query);
		$numrows = $row['numrows'];
		$total_pages = ceil($numrows/$per_page);
		$reload = './index.php';
		//main query to fetch the data
		$sql="SELECT * FROM  $sTable $sWhere LIMIT $offset,$per_page";
		$query = mysqli_query($con, $sql);
		//loop through fetched data
		if ($numrows>0){
			
			?>
			<div class="table-responsive">
			  <table class="table">
				<tr  class="warning">
					<th>#</th>
					<th>Falla Descripción</th>
					<th>Precio</th>
					<th style="width: 36px;">Agregar</th>
				</tr>
				<?php
				while ($row=mysqli_fetch_array($query)){
					$id_producto=$row['ID_FALLA'];
					//$codigo_producto=$row['codigo_producto'];
					$nombre_producto=$row['FALLA_DESC'];
					$id_marca_producto=$row['RELA_PRECIO'];
					//$codigo_producto=$row["codigo_producto"];
					$sql_marca=mysqli_query($con, "select * from precio join falla on RELA_PRECIO = ID_PRECIO where ID_PRECIO ='$id_marca_producto'");
					$rw_marca=mysqli_fetch_array($sql_marca);
					//$nombre_marca=$rw_marca['PRECIO_DESCRIPCION'];
					$precio_venta=$rw_marca["PRECIO_DESCRIPCION"];
					$precio_venta=number_format($precio_venta,2);
					?>
					<tr>
						<td class='col-xs-1'>
						<input type="text" class="form-control" style="text-align:right" id="falla_<?php echo $id_producto; ?>"  value="<?php echo $id_producto ?>" readonly>
						</td>
						<td><?php echo $nombre_producto ?></td>
						<td class='col-xs-2'>
						<input type="text" class="form-control" style="text-align:right" id="precio_venta_<?php echo $id_producto; ?>"  value="<?php echo $precio_venta;?>" readonly>
						</td>
						<td class='text-center'><a class='btn btn-info'href="#" onclick="agregar('<?php echo $id_producto ?>')"><i class="glyphicon glyphicon-plus"></i></a></td>
					</tr>
					<?php
				}
				?>
				<tr>
					<td colspan=5><span class="pull-right"><?
					 echo paginate($reload, $page, $total_pages, $adjacents);
					?></span></td>
				</tr>
			  </table>
			</div>
			<?php
		}
	}
?>