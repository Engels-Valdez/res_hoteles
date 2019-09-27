
<div class="modal fade" id="fotoHotel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Foto hotel</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="foto" class="col-form-label">Subir una foto:</label>
            <input type="file" name="fotoHotel" class="form-control-file form-control-sm" id="foto" required>
          </div>
          <div class="form-group">
            <select name="idHotel" class="form-control form-control-sm" required>
            <option value="">Riu</option>
            </select>
          </div>
          <div class="form-group">
          <select name="imagenPrincHotel" class="form-control form-control-sm" required> 
            <option value="active">Principal</option>
            <option value="not">Secundaria</option>
            </select>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Agregar</button>
      </div>
      </form>
    </div>
  </div>
</div>