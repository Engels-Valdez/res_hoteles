<?php require_once('../view/page/layout/head.php') ?>
    <title>Mery Tours | Habitaciones</title>
</head>
<body>
<header>
    <?php require_once('../view/page/layout/nav.php') ?>
</header>
<body>
    
<div class="container">
    <div class="row">
        <div class="col-md-8 animation-izquierda"><br>
        <h1 class="display-4 mt-5">Habitaciones</h1> 
        <button type="button" class="btn btn-primary mt-2" data-toggle="modal" data-target=".bd-example-modal-xl">Ver Habitaciones</button>

            <!-- //////////////////////////////Formulario para agregar un hotel////////////////////////////////////// -->
            <div style="display:<?= $visibilidadAdd ?>">
            <form class="needs-validation mt-3" novalidate method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="tipo">Tipo</label>
                        <input type="text" name="tipo" id="tipo" class="form-control form-control-sm"  required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="precio">Precio</label>
                        <input type="text"  name="precio" id="precio" class="form-control form-control-sm" placeholder="$RD:" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="precioOferta">Precio de oferta</label>
                        <input type="text" name="precioOferta" id="precioOferta" class="form-control form-control-sm" placeholder="$RD:" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="cant_cama">Cantidad de cama</label>
                        <input type="number" name="cant_cama" id="cant_cama" class="form-control form-control-sm" min="1" max="2" required>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="cant_adulto">Cantidad de adultos</label>
                        <input type="number" name="cant_adulto" id="cant_adulto" class="form-control form-control-sm" min="1" max="4" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="cant_nino">Cantidad de niños</label>
                        <input type="number" name="cant_nino" id="cant_nino" class="form-control form-control-sm" min="0" max="4" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="tamano">Tamaño de la habitacion</label>
                        <input type="text" name="tamano" id="tamano" class="form-control form-control-sm" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="detalle">Detalles de la habitacion</label>
                        <textarea name="detalle" id="detalle" class="form-control form-control-sm" cols="10" rows="5"></textarea>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="disponibilidad">Disponibilidad</label>
                        <input type="number" name="disponibilidad" id="disponibilidad" class="form-control form-control-sm" required>
                    </div>
                </div>
                <div class="col-md-9">
                    <label for="id_hotel">Hotel</label>
                    <select  name="id_hotel" id="id_hotel" class="form-control form-control-sm" required>
                        <option>Selecciones un hotel</option>
                        <option value="9">Nickelodeon Hotels</option>
                    </select>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="foto">Subir una foto</label>
                        <input type="file" name="foto" class="form-control-file form-control-sm" id="foto" require>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group"> 
                        <label>-</label>
                        <input type="submit" name="frmHabitacionesAdd" id="frmHabitaciones" class="btn btn-warning btn-sm btn-block" value="Agregar">
                    </div>
                </div>
                </div>
                </form>
            </div>
            <!-- /////////////////////////////Formulario para editar ////////////////////////////////////-->
            <div style="display:<?= $visibilidadEdit?>">
            <?php foreach( $habitacionesEditarList as $hbedli ) : ?>
            <form class="needs-validation mt-3" novalidate method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="tipo">Tipo</label>
                        <input type="text" name="tipo" id="tipo" class="form-control form-control-sm" value="<?= $hbedli['tipo'] ?>" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="precio">Precio</label>
                        <input type="text"  name="precio" id="precio" class="form-control form-control-sm" placeholder="$RD:" value="<?= $hbedli['precio'] ?>" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="precioOferta">Precio de oferta</label>
                        <input type="text" name="precioOferta" id="precioOferta" class="form-control form-control-sm" placeholder="$RD:" value="<?= $hbedli['precio_oferta'] ?>" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="cant_cama">Cantidad de cama</label>
                        <input type="number" name="cant_cama" id="cant_cama" class="form-control form-control-sm" min="1" max="2" value="<?= $hbedli['cant_cama'] ?>" required>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="cant_adulto">Cantidad de adultos</label>
                        <input type="number" name="cant_adulto" id="cant_adulto" class="form-control form-control-sm" min="1" max="4" value="<?= $hbedli['cant_adulto'] ?>" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="cant_nino">Cantidad de niños</label>
                        <input type="number" name="cant_nino" id="cant_nino" class="form-control form-control-sm" min="0" max="4" value="<?= $hbedli['cant_niño'] ?>" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="tamano">Tamaño de la habitacion</label>
                        <input type="text" name="tamano" id="tamano" class="form-control form-control-sm" value="<?= $hbedli['tamaño'] ?>" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="detalle">Detalles de la habitacion</label>
                        <textarea name="detalle" id="detalle" class="form-control form-control-sm" cols="10" rows="5" value="<?= $hbedli['detalle'] ?>" ></textarea>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="disponibilidad">Disponibilidad</label>
                        <input type="number" name="disponibilidad" id="disponibilidad" class="form-control form-control-sm" value="<?= $hbedli['disponibilidad'] ?>" required>
                    </div>
                </div>
                <div class="col-md-9">
                    <label for="id_hotel">Hotel</label>
                    <select  name="id_hotel" id="id_hotel" class="form-control form-control-sm" required>
                        <option>Selecciones un hotel</option>
                        <option value="9">Nickelodeon Hotels</option>
                    </select>
                </div>
                <!-- <div class="col-md-12">
                    <div class="form-group">
                        <label for="foto">Subir una foto</label>
                        <input type="file" name="foto" class="form-control-file form-control-sm" id="foto" value="" require>
                    </div>
                </div> -->
                <div class="col-md-12">
                    <div class="form-group"> 
                        <label>-</label>
                        <input type="submit" name="frmHabitacionesEdit" id="frmHabitacionesEdit" class="btn btn-success btn-sm btn-block" value="Editar">
                    </div>
                </div>
                </div>
                </form>
                <?php endforeach;?>
            </div>
        </div>
        
    </div>
</div>


<?php require_once('../view/page/modals/modal-tabla-habitaciones.php') ?>
<?php require_once('../view/page/layout/footer.php') ?>

<script src="../view/js/jquery-3.4.1.min.js"></script>
<script src="../view/js/main.js"></script>
<script src="../view/js/bootstrap.min.js"></script>
<script src="../view/js/form-validation.js"></script>
<script>
window.sr = ScrollReveal();
sr.reveal('.animation-izquierda',{
    duration: 2000,
    origin: 'left',
    distance: '300px'

});

sr.reveal('.animation-derecha',{
    duration: 2000,
    origin: 'right',
    distance: '300px'

});
</script>
</body>
</html>