<!-- Modal -->
<div class="modal fade" id="myTipo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agregar un Tipo de Equipo</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>Tipo de Equipo:</label>
          <input type="text" name="equipo" class="form-control" required onkeyup="javascript:this.value=this.value.toUpperCase();">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" onclick="registrar();">Guardar</button>
      </div>
    </div>
  </div>
</div>