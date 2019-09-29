
<div class="modal fade" id="servHotel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Servicios hotel</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="servicioHotel" class="col-form-label">Servicio:</label>
            <input type="text" name="servicioHotel" class="form-control form-control-sm" id="servicioHotel" required>
          </div>
          <div class="form-group">
            <label for="idHotel" class="col-form-label">Hotel:</label>
            <select name="idHotel" class="form-control form-control-sm" required>
            <?php foreach( $HotelAll as $hnombre ) : ?>
            <option value="<?= $hnombre['id']?>"><?= $hnombre['nombre']?></option>
            <?php endforeach;?>
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