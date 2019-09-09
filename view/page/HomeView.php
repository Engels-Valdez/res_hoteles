<?php require_once('../view/page/layout/head.php') ?>
    <title>Mery Tours | Home</title>
</head>
<body class="bg-gris">
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
                    
                    <form id="frm-busquedaHoteles">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <input type="text" name="hotel" placeholder="Buscar hoteles" class="form-control form-control-sm">
                            </div>
                            <div class="col-md-4">
                                <select name="ciudad" class="form-control form-control-sm">
                                    <option value="">Santo Domingo</option>
                                    <option value="">Bavaro Punta Cana</option>
                                    <option value="">Puerto Plata</option>
                                    <option value="">La romana</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <input type="date" class="form-control form-control-sm" name="desde">
                            </div>
                            <div class="col-md-5">
                                <input type="date" class="form-control form-control-sm" name="hasta">
                            </div>
                        </div>
                        <div class="row mt-3">  
                            <div class="col-md-4">
                                <input type="submit" name="enviar" value="Buscar" class="btn btn-warning btn-sm btn-block">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="custom-control custom-checkbox mt-3">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">Busqueda avanzada</label>
                                </div>
                            </div>
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
                <i class="fas fa-globe-americas mt-5" style="font-size: 100px; margin-left: 80px;"></i>
                <div class="row"><span class="badge badge-danger mt-2" style="margin:auto">America</span></div>
            </div>
            <div class="col-md-3">
                <i class="fas fa-globe-europe mt-5" style="font-size: 100px; margin-left: 80px;"></i>
                <div class="row"><span class="badge badge-danger mt-2" style="margin:auto">Europa</span></div>
            </div>
            <div class="col-md-3">
                <i class="fas fa-globe-asia mt-5" style="font-size: 100px; margin-left: 80px;"></i>
                <div class="row"><span class="badge badge-danger mt-2" style="margin:auto">Asia</span></div>
            </div>
            <div class="col-md-3">
                <i class="fas fa-globe-africa mt-5" style="font-size: 100px; margin-left: 80px;"></i>
                <div class="row"><span class="badge badge-danger mt-2" style="margin:auto">Africa</span></div>
            </div>
        </div>
    </div>
</div>
<!--{Modals-->
<?php require_once('../view/page/layout/modal-aviso.php'); ?>
<!--Modals}-->

<!--Contenido prinpical-->
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-gris">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Hoteles</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-12">
            <Span class="resultado-busqueda">Resultados de la busqueda</Span>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10">
            <main>
                <section>
                   <article>
                   <div class="articulos mb-3">
                        <div class="barra bg-warning">En oferta con un 30% de descuento</div>
                        <div class="row">
                            <div class="col-md-4">
                                <!--<img src="../view/asset/riu.jpg" class="rounded" alt="..." width=" 300">-->
                                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                        <img src="../view/asset/riu.jpg" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                        <img src="../view/asset/riu2.jpg" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                        <img src="../view/asset/riu3.jpg" class="d-block w-100" alt="...">
                                        </div>
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
                                <p class="titulo-post"> <a href="#"><b>RIU Palace Punta Cana All Inclusive</b></a></p>
                                <span class="ciudad-post">Punta Cana</span>
                                <p><span class="ubicacion-post">Calle/central no.1</span></p>
                                <p>
                                    <i class="fas fa-star estrella-v"></i>
                                    <i class="fas fa-star estrella-v"></i>
                                    <i class="fas fa-star estrella-v"></i>
                                    <i class="fas fa-star estrella-v"></i>
                                    <i class="fas fa-star estrella-v"></i>
                                </p>
                            </div>
                            <div class="col-md-2">
                            <a href="#" class="btn btn-primary " style="margin-top:150px">Ver mas</a>
                            </div>
                        </div>
                   </div> 
                   </article>
                   <article>
                   <div class="articulos mb-3">
                        <div class="barra bg-warning">En oferta con un 30% de descuento</div>
                        <div class="row">
                            <div class="col-md-4">
                                <!--<img src="../view/asset/riu.jpg" class="rounded" alt="..." width=" 300">-->
                                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                        <img src="../view/asset/riu3.jpg" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                        <img src="../view/asset/riu.jpg" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                        <img src="../view/asset/riu2.jpg" class="d-block w-100" alt="...">
                                        </div>
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
                                <p class="titulo-post"> <a href="#"><b>RIU Palace Punta Cana All Inclusive</b></a></p>
                                <span class="ciudad-post">Punta Cana</span>
                                <p><span class="ubicacion-post">Calle/central no.1</span></p>
                                <p>
                                    <i class="fas fa-star estrella-v"></i>
                                    <i class="fas fa-star estrella-v"></i>
                                    <i class="fas fa-star estrella-v"></i>
                                    <i class="fas fa-star estrella-v"></i>
                                    <i class="fas fa-star estrella-v"></i>
                                </p>
                            </div>
                            <div class="col-md-2">
                            <a href="#" class="btn btn-primary " style="margin-top:150px">Ver mas</a>
                            </div>
                        </div>
                   </div> 
                   </article>
                   <article>
                   <div class="articulos mb-3">
                        <div class="barra bg-warning">En oferta con un 30% de descuento</div>
                        <div class="row">
                            <div class="col-md-4">
                                <!--<img src="../view/asset/riu.jpg" class="rounded" alt="..." width=" 300">-->
                                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                        <img src="../view/asset/riu3.jpg" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                        <img src="../view/asset/riu2.jpg" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                        <img src="../view/asset/riu.jpg" class="d-block w-100" alt="...">
                                        </div>
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
                                <p class="titulo-post"> <a href="#"><b>RIU Palace Punta Cana All Inclusive</b></a></p>
                                <span class="ciudad-post">Punta Cana</span>
                                <p><span class="ubicacion-post">Calle/central no.1</span></p>
                                <p>
                                    <i class="fas fa-star estrella-v"></i>
                                    <i class="fas fa-star estrella-v"></i>
                                    <i class="fas fa-star estrella-v"></i>
                                    <i class="fas fa-star estrella-v"></i>
                                    <i class="fas fa-star estrella-v"></i>
                                </p>
                            </div>
                            <div class="col-md-2">
                            <a href="#" class="btn btn-primary " style="margin-top:150px">Ver mas</a>
                            </div>
                        </div>
                   </div> 
                   </article>
                   <article>
                   <div class="articulos mb-3">
                        <div class="barra bg-warning">En oferta con un 30% de descuento</div>
                        <div class="row">
                            <div class="col-md-4">
                                <!--<img src="../view/asset/riu.jpg" class="rounded" alt="..." width=" 300">-->
                                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                        <img src="../view/asset/riu.jpg" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                        <img src="../view/asset/riu2.jpg" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                        <img src="../view/asset/riu3.jpg" class="d-block w-100" alt="...">
                                        </div>
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
                                <p class="titulo-post"> <a href="#"><b>RIU Palace Punta Cana All Inclusive</b></a></p>
                                <span class="ciudad-post">Punta Cana</span>
                                <p><span class="ubicacion-post">Calle/central no.1</span></p>
                                <p>
                                    <i class="fas fa-star estrella-v"></i>
                                    <i class="fas fa-star estrella-v"></i>
                                    <i class="fas fa-star estrella-v"></i>
                                    <i class="fas fa-star estrella-v"></i>
                                    <i class="fas fa-star estrella-v"></i>
                                </p>
                            </div>
                            <div class="col-md-2">
                            <a href="#" class="btn btn-primary " style="margin-top:150px">Ver mas</a>
                            </div>
                        </div>
                   </div> 
                   </article>
                </section>
            </main>
        </div>
        <div class="col-md-2">
            <aside>
                <div class="card" style="width: 18rem;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d241953.25400494854!2d-68.61143202233569!3d18.640665633413388!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8ea891645dcbfe77%3A0x61881cfaed12f6f3!2sPunta%20Cana!5e0!3m2!1ses-419!2sdo!4v1568046050297!5m2!1ses-419!2sdo" width="286" height="350" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                <div class="card-body">
                    <center><p class="card-text">Localizacion</p></center> 
                </div>
                </div>
            </aside>
        </div>
    </div>
</div>    
<?php require_once('../view/page/layout/footer.php') ?>

<script src="../view/js/jquery-3.4.1.min.js"></script>
<script src="../view/js/main.js"></script>
<script src="../view/js/bootstrap.min.js"></script>
</body>
</html>