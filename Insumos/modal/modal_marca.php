<!-- Modal -->
<div class="modal fade" id="myMarca" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <div id="resultados_ajax_catego"></div>
          <label>Marca</label>
          <input type="text" name="marcas" class="form-control" required onkeyup="javascript:this.value=this.value.toUpperCase();">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success" onclick="registrar();">Save changes</button>
      </div>
    </div>
  </div>
</div>