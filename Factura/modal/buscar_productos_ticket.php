	
	<!-- Modal -->
	<div class="modal fade bs-example-modal-lg" id="myTicket" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel">Buscar productos p/ Ticket</h4>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal">
			  <div class="form-group">
				<div class="col-sm-6">
				  <input type="text" class="form-control" placeholder="Buscar productos" id="q" onkeyup="Buscar()";>
				</div>
				<button type="button" class="btn btn-default" onclick="load(1)"><span class='glyphicon glyphicon-search'></span> Buscar</button>
			  </div>
			</form>
			<div id="loader" style="position: absolute;	text-align: center;	top: 55px;	width: 100%;display:none;"></div><!-- Carga gif animado -->
			<div class="outer_div" ></div><!-- Datos ajax Final -->
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
			
		  </div>
		</div>
	  </div>
	</div>
	