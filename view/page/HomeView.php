<?php require_once('../view/page/layout/head.php') ?>
    <title>Mery Tours | Home</title>
</head>
<body>
<!--Iconos de las redes sociales-->
<ul class="ul-redes-sociales">
    <li class="li-redes-sociales"><a href="#"><i id="f" class="fab fa-facebook-square"></i></a></li>
    <li class="li-redes-sociales"><a href="#"><i id="i" class="fab fa-instagram"></i></a></li>
    <li class="li-redes-sociales"><a href="#"><i id="y" class="fab fa-youtube"></i></a></li>
</ul>

<header>
    <?php require_once('../view/page/layout/nav.php') ?>
</header>
<img src="../view/asset/fondo.webp" alt="" style="width: 100%; height: 520px;" class="mt-5">
<div class="buscador">
<div class="container">
    <div class="row">
        <div class="col-md-12">
                <div class="jumbotron mt-4 opat">
                    
                    <div class="mb-3 pb">
                        Aqui puedes buscar tu hotel!
                    </div>
                    <div class="row">
                        <div class="ml-3">
                            <button class="btn btn btn-success mb-3"><i class="fas fa-hotel fa-spin"></i></button>
                        </div>
                        <div class="ml-1">
                            <button class="btn btn btn-warning mb-3" data-toggle="modal" data-target="#exampleModalCenter" data-placement="top" title="Viajes"><i class="fas fa-plane"></i></button>
                        </div>
                        <div class="ml-1">
                            <button class="btn btn btn-warning mb-3" data-toggle="modal" data-target="#exampleModalCenter" data-placement="top" title="Renta de vehiculos"><i class="fas fa-car"></i></button>
                        </div>
                        <div class="ml-1">
                            <button class="btn btn btn-warning mb-3" data-toggle="modal" data-target="#exampleModalCenter" data-placement="top" title="Cruceros"><i class="fas fa-ship"></i></button>
                        </div>
                        <div class="ml-1">
                            <button class="btn btn btn-warning mb-3" data-toggle="modal" data-target="#exampleModalCenter" data-placement="top" title="Actividades"><i class="fas fa-snowboarding"></i></button>
                        </div>
                        <div class="ml-1">
                            <button class="btn btn btn-warning mb-3" data-toggle="modal" data-target="#exampleModalCenter" data-placement="top" title="Rentas vacacionales"><i class="fas fa-home"></i></button>
                        </div>
                    </div>
                    
                    <form id="frmBusquedaHoteles" action="home.php" method="post">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <input type="text" name="hotel" placeholder="Buscar hoteles" class="form-control form-control-sm">
                            </div>
                            <div class="col-md-4">
                                <select name="ciudad" class="form-control form-control-sm">
                                    <option value="Santo Domingo">Santo Domingo</option>
                                    <option value="Punta Cana">Punta Cana</option>
                                    <option value="Puerto Plata">Puerto Plata</option>
                                    <option value="La Romana">La Romana</option>
                                    <option value="Sosua">Sosua</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <input type="date" class="form-control form-control-sm" name="desde" required min="<?php $hoy=date("Y-m-d"); echo $hoy;?>">
                            </div>
                            <div class="col-md-5">
                                <input type="date" class="form-control form-control-sm" name="hasta" required min="<?php $hoy=date("Y-m-d"); echo $hoy;?>">
                            </div>
                        </div>
                        <div class="row mt-3">  
                            <div class="col-md-4">
                                <input type="submit" name="buscarHotel" id="buscarHoteles" value="Buscar hoteles" class="btn btn-warning btn-sm btn-block" onclick="res();">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                            <?php if( isset($msj) ) : ?>
                                <div class="alert alert-warning alert-dismissible fade show mt-3" role="alert">
                                    <strong>Aviso!</strong> No puede haber campos vacio en la busqueda.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            <?php endif;?>
                            <?php if( isset($msjDate) ) : ?>
                                <div class="alert alert-warning alert-dismissible fade show mt-3" role="alert">
                                    <strong>Aviso!</strong> <?= $msjDate?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            <?php endif;?>
                        </div>
                    </form>
                </div>
        </div>
    </div>   
</div>
</div>
<div class="post-destinos mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <!--<i class="fas fa-globe-americas mt-5" style="font-size: 100px; margin-left: 80px;"></i>-->
                <img src="../view/asset/puntacana.png" alt="" srcset="" style=" width: 100px; margin-left: 80px;" class="mt-5">
                <div class="row"><span class="badge badge-danger mt-2" style="margin:auto">Zona Este</span></div>
            </div>
            <div class="col-md-3">
                <img src="../view/asset/puertoplanta.jpg" alt="" srcset="" style=" width: 170px; margin-left: 50px;" class="mt-5">
                <div class="row"><span class="badge badge-danger mt-2" style="margin:auto">Zona Norte</span></div>
            </div>
            <div class="col-md-3">
                <img src="../view/asset/sosua.png" alt="" srcset="" style=" width: 200px; margin-left: 60px;" class="mt-5">
                <div class="row"><span class="badge badge-danger mt-2" style="margin:auto">Zona Norte</span></div>
            </div>
            <div class="col-md-3">
                <img src="../view/asset/capcana.png" alt="" srcset="" style=" width: 110px; margin-left: 60px;" class="mt-5">
                <div class="row"><span class="badge badge-danger mt-2" style="margin:auto">Zona Este</span></div>
            </div>
        </div>
    </div>
</div>
<!--{Modals-->
<?php require_once('../view/page/layout/modal-aviso.php'); ?>
<!--Modals}-->

<!--Contenido prinpical-->
<div class="container">
    <!-- <div class="row mb-3">
        <div class="col-md-12" id='resultado'>
            <Span class="resultado-busqueda" >Resultados de la busqueda</Span>
        </div>
    </div> -->
    <div class="row">
        <div class="col-md-10">
            <main>
                <section>
                    <?php foreach($hoteles as $fh) : ?>
                   <article>
                   <div class="articulos mb-3 border" id="articulo">
                        <div class="barra bg-warning">En oferta con un 30% de descuento</div>
                        <div class="row">
                            <div class="col-md-6">
                                <!--<img src="../view/asset/riu.jpg" class="rounded" alt="..." width=" 300">-->
                                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <?php foreach( $fotos as $ft ) : ?>
                                        <div class="carousel-item <?= $ft['imagen_principal']?>">
                                            <img src="<?= $ft['foto'] ?>" class="d-block w-100" alt="...">
                                        </div>
                                        <?php endforeach;?>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6"> 
                                <p class="titulo-post"> <a href="hotel.php?id=<?= $fh['id']?>&fecha-entrada=<?= $desde?>&fecha-salida=<?= $hasta?>" target="blank"><b><?=$fh['nombre']?></b></a></p>
                                <hr>
                                <span class="ciudad-post"><?=$fh['provincia']?></span>
                                <p><span class="ubicacion-post">C/av.<?=$fh['calle']?></span></p>
                                <hr>
                                <p>
                                    <?php for($i = 0; $i < $fh['prestigio']; $i++) : ?>
                                    <i class="fas fa-star estrella-v"></i>
                                <?php endfor;?>
                                </p>
                            </div>
                        </div>
                   </div> 
                   </article>
                <?php endforeach;?>
                </section>
            </main>
        </div>
    </div>
</div>    
<?php require_once('../view/page/layout/footer.php') ?>

<script src="../view/js/jquery-3.4.1.min.js"></script>
<script src="../view/js/main.js"></script>
<script src="../view/js/bootstrap.min.js"></script>
</body>
</html>