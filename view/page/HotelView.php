<?php require_once('../view/page/layout/head.php') ?>
    <title>Hoteles</title>
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
                            <div class="col-md-12">
                                <p class="titulo-post"> <a href="#"><b>RIU Palace Punta Cana All Inclusive</b></a></p>
                                <hr>
                            </div>
                            <div class="col-md-12">
                                <p>
                                    <i class="fas fa-star estrella-v"></i>
                                    <i class="fas fa-star estrella-v"></i>
                                    <i class="fas fa-star estrella-v"></i>
                                    <i class="fas fa-star estrella-v"></i>
                                    <i class="fas fa-star estrella-v"></i>
                                </p>
                                <hr>
                            </div>
                            <div class="col-md-12">
                                <p><span class="ubicacion-post">Calle/central no.1</span></p>
                                <hr>
                            </div>
                            <div class="col-md-12">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d241953.25400494854!2d-68.61143202233569!3d18.640665633413388!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8ea891645dcbfe77%3A0x61881cfaed12f6f3!2sPunta%20Cana!5e0!3m2!1ses-419!2sdo!4v1568127480103!5m2!1ses-419!2sdo"  height="250" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
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
            <h1 class="display-4">Habitaciones disponibles</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <section>
                <article>
                    <div class="articulos border mt-5">
                        <div class="row">
                            <div class="col-md-3">
                            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
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
                            <div class="col-md-3 mt-3">
                                <span class="titulo-post"><b>Junior Suite</b></span><hr>
                                <i class="fas fa-user-friends"> Capacidad para 2 adultos</i><br>
                                <i class="fas fa-baby"> 2 niños</i><br>
                                <i class="fas fa-bed"> 2 cama king size</i>
                            </div>
                            <div class="col-md-3 mt-3">
                                Wifi incluido, desayuno, estacionamiento sin valet,
                                todo incluido. <br><hr>
                                <span>tamaño: 100 pies cuadrado</span>
                            </div>
                            <div class="col-md-3 mt-3">
                                <span class="badge badge-danger">Orferta $RD: 5,000.00</span><br>
                                <span>$RD: <b>10,000.00</b> por noche</span><br> <hr>
                                <a href="../rt/reservaciones.php" class="btn btn-primary btn-sm">Reservar</a>
                            </div>
                        </div>
                    </div>
                </article>
            </section>
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