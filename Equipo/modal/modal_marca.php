<!-- Modal -->
<div class="modal fade" id="myMarca" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agregar una Marca</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>Marca:</label>
          <input type="text" name="marca" class="form-control" required onkeyup="javascript:this.value=this.value.toUpperCase();">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" onclick="registrarMarca();">Guardar</button>
      </div>
    </div>
  </div>
</div>