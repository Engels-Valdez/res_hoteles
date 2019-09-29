
<style>
table {
  display: block;
  height: 250px;
  overflow-y: auto;
}
</style>
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
        <form method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="foto" class="col-form-label">Subir una foto:</label>
            <input type="file" name="fotoHotel" class="form-control-file form-control-sm" id="foto" required>
          </div>
          <div class="form-group">
            <select name="idFotoHotel" class="form-control form-control-sm" required>
            <option>Seleccione un hotel</option>
            <option>-------------------------------------------</option> 
            <?php foreach( $HotelAll as $hnombre ) : ?>
            <option value="<?= $hnombre['id']?>"><?= $hnombre['nombre']?></option>
            <?php endforeach;?>
            </select>
          </div>
          <div class="form-group">
          <select name="imagenPrincHotel" class="form-control form-control-sm" required>
            <option>Seleccione la imagen principal o secundaria</option> 
            <option>-------------------------------------------</option> 
            <option value="active">Principal</option>
            <option value="not">Secundaria</option>
            </select>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary btn-sm" name="btnAddFotoHotel" value="Agregar Foto Hotel">
      </div>
      </form>
     
      <div class="table-responsive container">
        <table class="table table-warning mb-3 mt-3" id="dtVerticalScrollExample">
          <thead>
            <tr>
              <th>Imagen</th>
              <th>Clase</th>
              <th>Cod-hotel</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
          <?php foreach( $fotosHoteles as $g_f_h) : ?>
            <tr>
              <td><img src="<?= $g_f_h['foto'] ?>" alt="" width="50"></td>
              <td><?= $g_f_h['imagen_principal'] ?></td>
              <td>#00154<?= $g_f_h['id_hotel'] ?></td>
              <td>
                  <a href="?eliminar-foto-hotel=<?= $g_f_h['id']?>" class="btn btn-sm btn-danger">Eliminar</a>
              </td>
            </tr>
          <?php endforeach; ?>
          </tbody>
        </table><br>
      </div>
    </div>
  </div>
</div>

