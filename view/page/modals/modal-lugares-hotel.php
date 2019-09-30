

<style>
table {
  display: block;
  height: 250px;
  overflow-y: auto;
}
</style>
<div class="modal fade" id="lugaresHotel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Lugares cercano hotel</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post">
          <div class="form-group">
            <label for="lugarHotel" class="col-form-label">Lugar:</label>
            <input type="text" name="lugarHotel" class="form-control form-control-sm" id="lugarHotel" required>
          </div>
          <div class="form-group">
            <label for="idHotel" class="col-form-label">Hotel:</label>
            <select name="idHotelLugar" class="form-control form-control-sm" required>
            <?php foreach( $HotelAll as $hnombre ) : ?>
            <option value="<?= $hnombre['id']?>"><?= $hnombre['nombre']?></option>
            <?php endforeach;?>
            </select>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-sm btn-primary" name="frmLugares" value="Agregar-Lugar">
      </div>
      </form>
      <div class="table-responsive container">
      <table class="table table-warning table-hover mt-3 " id="dtVerticalScrollExample">
        <thead>
          <tr>
            <th>Lugar</th>
            <th>Hotel</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach( $lugarModList as $lugHot ) : ?>
          <tr>
            <td><?= $lugHot['lugar'] ?></td>
            <td><?= $lugHot['nombre'] ?></td>
            <td><a href="?eliminar-lugar-hotel=<?= $lugHot['id'] ?>" class="btn btn-sm btn-block btn-danger">Eliminar</a></td>
          </tr>
        <?php endforeach;?>
        </tbody>
      </table>
      <div>
    </div>
  </div>
</div>