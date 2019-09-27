
<div class="modal fade" id="lugaresHotel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Lugares cercanos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="lugarHotel" class="col-form-label">Nombre del lugar:</label>
            <input type="text" name="lugarHotel" class="form-control form-control-sm" id="lugarHotel" required>
          </div>
          <div class="form-group">
            <label for="idHotel" class="col-form-label">Hotel:</label>
            <select name="idHotel" class="form-control form-control-sm" required>
            <option value="">Riu</option>
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