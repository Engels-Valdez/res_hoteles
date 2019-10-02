<?php require_once('../view/page/layout/head.php') ?>
    <title>Mery Tours | Dashoteles</title>
</head>
<body>
<header>
    <?php require_once('../view/page/layout/nav.php') ?>
</header>
<body>
    
<div class="container">
    <div class="row">
        <div class="col-md-12 animation-arriba"><br>
                <h1 class="display-4 mt-5">Datos de los hoteles</h1>
                <!-- Formulario para agregar un hotel -->
            <div style="display:<?= $visiblidadAdd?>">
            <form class="needs-validation mt-5" novalidate method="post">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nombre">Nombre hotel</label>
                        <input type="text" name="nombreHotel" id="nombre" class="form-control form-control-sm"  required>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label>//////</label>
                        <button type="button" class="btn btn-sm btn-dark" data-toggle="modal" data-target="#fotoHotel" data-whatever="@getbootstrap">Agregar fotos</button>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="form-group">
                        <label>//////</label>
                        <button type="button" class="btn btn-sm btn-dark" data-toggle="modal" data-target="#lugaresHotel" data-whatever="@getbootstrap">Lugares</button>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="provincia">Provincia</label>
                        <select  name="provinciaHotel" id="provincia" class="form-control form-control-sm" required>
                            <option>Selecciones una provincia</option>
                            <option>Azua</option>
                            <option>Bahoruco</option>
                            <option>Dajabón</option>
                            <option>Distrito Nacional</option>
                            <option>Duarte, San Francisco de Macorís</option>
                            <option>Elías Piña</option>
                            <option>El Seibo</option>
                            <option>Espaillat, Moca</option>
                            <option>Hato Mayor</option>
                            <option>Hermanas Mirabal, Salcedo</option>
                            <option>Independencia, Jimaní</option>
                            <option>La Altagracia</option>
                            <option>La Romana</option>
                            <option>La Vega</option>
                            <option>María Trinidad Sánchez, Nagua</option>
                            <option>Monseñor Nouel, Bonao</option>
                            <option>Monte Cristi</option>
                            <option>Monte Plata</option>
                            <option>Pedernales</option>
                            <option>Peravia, Baní</option>
                            <option>Puerto Plata</option>
                            <option>Samaná</option>
                            <option>Sánchez Ramírez, Cotuí</option>
                            <option>San Cristóbal</option>
                            <option>San José de Ocoa</option>
                            <option>San Juan</option>
                            <option>San Pedro de Macorís</option>
                            <option>Santiago</option>
                            <option>Santiago Rodríguez</option>
                            <option>Santo Domingo</option>
                            <option>Valverde</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="calle">Calle</label>
                        <input type="text" name="calleHotel" id="calle" class="form-control form-control-sm" placeholder="c/ejmeplp" required>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="prestigio">Prestio</label>
                        <input type="number" name="pretigioHotel" id="prestigio" class="form-control form-control-sm" min="1" max="6" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="localizacion">Localizacion</label>
                        <input type="text" name="localizacionHotel" id="localizacion" class="form-control form-control-sm" placeholder="Bubicacion de google masp" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group"> 
                        <label>-</label>
                        <input type="submit" name="frmAddHotel" id="frmAddHotel" class="btn btn-warning btn-sm btn-block" value="AgregarHotel">
                    </div>
                </div>
                </div>
                </form>
            </div>

            <!-- Formulario para editar un hotel -->
            <div style="display:<?= $visiblidadEdit?>">
            <?php foreach( $hotelesParaEditar as $hpe ) : ?>
            <form class="needs-validation mt-5" novalidate method="post">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nombre">Nombre hotel</label>
                        <input type="text" name="nombreHotelU" id="nombre" class="form-control form-control-sm" value="<?= $hpe['nombre'] ?>" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="provincia">Provincia</label>
                        <select  name="provinciaHotelU" id="provincia" class="form-control form-control-sm" required>
                            <option>Selecciones una provincia</option>
                            <option>Azua</option>
                            <option>Bahoruco</option>
                            <option>Dajabón</option>
                            <option>Distrito Nacional</option>
                            <option>Duarte, San Francisco de Macorís</option>
                            <option>Elías Piña</option>
                            <option>El Seibo</option>
                            <option>Espaillat, Moca</option>
                            <option>Hato Mayor</option>
                            <option>Hermanas Mirabal, Salcedo</option>
                            <option>Independencia, Jimaní</option>
                            <option>La Altagracia</option>
                            <option>La Romana</option>
                            <option>La Vega</option>
                            <option>María Trinidad Sánchez, Nagua</option>
                            <option>Monseñor Nouel, Bonao</option>
                            <option>Monte Cristi</option>
                            <option>Monte Plata</option>
                            <option>Pedernales</option>
                            <option>Peravia, Baní</option>
                            <option>Puerto Plata</option>
                            <option>Samaná</option>
                            <option>Sánchez Ramírez, Cotuí</option>
                            <option>San Cristóbal</option>
                            <option>San José de Ocoa</option>
                            <option>San Juan</option>
                            <option>San Pedro de Macorís</option>
                            <option>Santiago</option>
                            <option>Santiago Rodríguez</option>
                            <option>Santo Domingo</option>
                            <option>Valverde</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="calle">Calle</label>
                        <input type="text" name="calleHotelU" id="calle" class="form-control form-control-sm" placeholder="c/ejmeplp" value="<?= $hpe['calle'] ?>"required>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="prestigio">Prestio</label>
                        <input type="number" name="prestigioHotelU" id="prestigio" class="form-control form-control-sm" min="1" max="6" value="<?= $hpe['prestigio'] ?>"required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="localizacion">Localizacion</label>
                        <input type="text" name="localizacionHotelU" id="localizacion" class="form-control form-control-sm" placeholder="Bubicacion de google masp" value="<?= $hpe['localizacion'] ?>" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group"> 
                        <label>-</label>
                        <input type="submit" name="frmUpdateHotel" id="frmUpdateHotel" class="btn btn-success btn-sm btn-block" value="Modificar-Hotel">
                    </div>
                </div>
                </div>
                </form>
            <?php endforeach;?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 animation-abajo">
            <div class="table-responsive mt-3">
                <table class="table table-hover table-warning table-responsive">
                    <thead class="thead-inverse">
                        <tr>
                            <th>ID</th>
                            <th>HOTEL</th>
                            <th>PROVINCIA</th>
                            <th>CALLE</th>
                            <th>PRESTIGIO</th>
                            <th>LOCALIZACION</th>
                            <th>ELEGIR UNA OPCION</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach( $HotelAll as $h_all ) : ?>
                            <tr>
                                <td scope="row"><?= $h_all['id'] ?></td>
                                <td><?= $h_all['nombre'] ?></td>
                                <td><?= $h_all['provincia'] ?></td>
                                <td><?= $h_all['calle'] ?></td>
                                <td><?= $h_all['prestigio'] ?></td>
                                <td><?= $h_all['localizacion'] ?></td>
                                <td>
                                    <a href="?eliminar=<?= $h_all['id'] ?>" class="btn btn-danger">Borrar</a>
                                    <a href="?id-modificar-hotel=<?= $h_all['id'] ?>" class="btn btn-success">Actualizar</a>
                                </td>
                            </tr>
                        <?php endforeach;?>
                        </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php require_once('modals/modal-foto-hotel.php') ?>
<?php require_once('modals/modal-lugares-hotel.php') ?>
<?php require_once('modals/modal-servicios-hotel.php') ?>
<?php require_once('../view/page/layout/footer.php') ?>

<script src="../view/js/jquery-3.4.1.min.js"></script>
<script src="../view/js/main.js"></script>
<script src="../view/js/bootstrap.min.js"></script>
<script src="../view/js/form-validation.js"></script>
<script>
window.sr = ScrollReveal();
sr.reveal('.animation-arriba',{
    duration: 2000,
    origin: 'right',
    distance: '300px'

});

sr.reveal('.animation-abajo',{
    duration: 2000,
    origin: 'left',
    distance: '300px'

});
</script>
</body>
</html>