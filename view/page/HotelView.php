<?php require_once('../view/page/layout/head.php') ?>
    <title>Mery Tours | Hoteles</title>
</head>
<body>
<header>
    <?php require_once('../view/page/layout/nav.php') ?>
</header>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <main>
                <div class="row" style="margin-top:100px">
                    <div class="col-md-8">
                        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel1">
                            <div class="carousel-inner">
                                <?php foreach( $fotoHotel as $fth ) : ?>
                                <div class="carousel-item <?= $fth['imagen_principal'] ?>">
                                    <img src="<?= $fth['foto'] ?>" class="d-block w-100" alt="...">
                                </div>
                                <?php endforeach;?>
                            </div>
                                <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon text-dark" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <?php foreach( $hotel as $ht ) : ?>
                            <div class="col-md-12">
                                <p class="titulo-post"> <a href="#"><b><?= $ht['nombre'] ?></b></a></p>
                                
                            </div>
                            <div class="col-md-12">
                                <p>
                                    <?php for($i = 0; $i < $ht['prestigio']; $i++) : ?>
                                    <i class="fas fa-star estrella-v"></i>
                                    <?php endfor; ?>
                                </p>
                                
                            </div>
                            <div class="col-md-12">
                                <p><span class="ubicacion-post"><?= $ht['provincia'] ?> / <?= $ht['calle'] ?></span></p>
                                
                            </div>
                            <div class="col-md-12">
                                <iframe src="<?= $ht['localizacion'] ?>"  height="100" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                            </div>
                            <?php endforeach; ?>
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th scope="col">Lugares cercanos</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach( $lugares as $lch ) : ?>
                                            <tr>               
                                                <td><i class="fas fa-map-signs"></i> <?= $lch['lugar']?></td>                                         
                                            </tr> 
                                        <?php endforeach; ?> 
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <hr>
            <span class="titulo-post">Habitaciones disponibles</span>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <section>
                <?php foreach( $habitaciones as $hth ) : ?>
                <article>
                    <div class="articulos border mt-5">
                        <div class="row">
                            <div class="col-md-3">
                            <!-- <div id="carouselExampleFade2" class="carousel slide carousel-fade" data-ride="carousel2">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="../view/asset/ha3.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="../view/asset/ha1.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="../view/asset/ha3.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                                <a class="carousel-control-prev" href="#carouselExampleFade2" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon text-dark" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleFade2" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div> -->
                            <img src="<?= $hth['foto'] ?>" class="d-block w-100" alt="...">
                            </div>
                            <div class="col-md-3 mt-3">
                                <span class="titulo-post"><b><?= $hth['tipo'] ?></b></span><hr>
                                <i class="fas fa-user-friends"> Capacidad para <?= $hth['cant_adulto'] ?> adultos</i><br>
                                <i class="fas fa-baby"> <?= $hth['cant_niño'] ?> niños</i><br>
                                <i class="fas fa-bed"> <?= $hth['cant_cama'] ?> cama king size</i>
                            </div>
                            <div class="col-md-3 mt-3">
                                <?= $hth['detalle'] ?> <br>
                                
                            </div>
                            <div class="col-md-3 mt-3">
                                <span class="badge badge-danger">Orferta $RD: <?= $hth['precio_oferta'] ?></span><br>
                                <span>$RD: <b><?= $hth['precio'] ?></b> por noche</span><br> <hr>
                                <a href="../rt/reservaciones.php?id=<?= $hth['id'] ?>&entrada=<?= $entrada ?>&salida=<?= $salida ?>" class="btn btn-primary btn-sm">Reservar</a>
                            </div>
                        </div>
                    </div>
                </article>
                <?php endforeach;?>
            </section>
            <br>
            <section>
                <div class="comentarios">
                    <div class="container">
                        <div class="row">
                        <?php foreach( $comentarios as $cth ) : ?>
                            <p class="mt-5">Comentarios</p>
                            
                            <div class="col-md-12">
                            <hr>
                            <article>
                                <h5><?= $cth['nombre'] ?> <?= $cth['apellido'] ?></h5> <p>dice:</p>
                                <p>'<?= $cth['descripcion'] ?>'</p>
                                <div>
                                    <span class="badge badge-danger">Publicado <?= $cth['fecha'] ?></span>        
                                </div>
                                
                            </article>
                            </div>
                            <?php endforeach; ?>
                            <?php if( isset( $_SESSION['Seccion'] ) ) : ?>
                            <div class="col-md-12">
                                    <form method="post" class="mt-3">
                                        <div class="form-group">
                                            <textarea class="form-control" name="comentario" id="" cols="30" rows="5"></textarea>
                                        </div>
                                        <input type="submit" class="btn btn-primary" name="frmComentario" value="Comentar">
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php else : ?>
                <div class="alert alert-warning mt-5">
                    <p>Debes <a href="login.php">iniciar seccion</a> para poder poner tu comentario.</p>
                </div>
            <?php endif;?>
        </div>
    </div>
</div>
<br>
<br>
<br>

<br>
<?php require_once('../view/page/layout/footer.php') ?>

<script src="../view/js/jquery-3.4.1.min.js"></script>
<script src="../view/js/main.js"></script>
<script src="../view/js/bootstrap.min.js"></script>
</body>
</html>