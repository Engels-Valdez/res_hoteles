
<style>
table {
  display: block;
  height: 400px;
  overflow-y: auto;
}
</style>

<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
        <div class="modal-body">
        <div class="table-resposive mt-5">
            <table class="table table-hover table-striped table-warning my-5">
                <thead>
                <tr>
                    <th>Tipo</th>
                    <th>Precio</th>
                    <th>Precio de oferta</th>
                    <th>Cantidad de Cama</th>
                    <th>Cantidad de adultos</th>
                    <th>Cantidad de niños</th>
                    <th>Tamaño</th>
                    <th>Detalle</th>
                    <th>Diponible</th>
                    <th>Hotel</th>
                    <th>Foto</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach( $listaHabitaciones as $listHab ) : ?>
                    <tr>
                        <td><?= $listHab['tipo'] ?></td>
                        <td><?= $listHab['precio'] ?></td>
                        <td><?= $listHab['precio_oferta'] ?></td>
                        <td><?= $listHab['cant_cama'] ?></td>
                        <td><?= $listHab['cant_adulto'] ?></td>
                        <td><?= $listHab['cant_niño'] ?></td>
                        <td><?= $listHab['tamaño'] ?></td>
                        <td><?= $listHab['detalle'] ?></td>
                        <td><?= $listHab['disponibilidad'] ?></td>
                        <td><?= $listHab['nombre'] ?></td>
                        <td><img src="<?= $listHab['foto'] ?>" alt="" width="100"></td>
                        <td>
                          <a href="?eliminar-habitacion=<?= $listHab['id'] ?>" class="btn btn=sm btn-danger btn-block">Eliminar</a>
                          <a href="?editar-habitacion=<?= $listHab['id'] ?>" class="btn btn-sm- btn-success btn-block">Editar</a>
                        </td>
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>
        </div>
        </div>
    </div>
  </div>
</div>