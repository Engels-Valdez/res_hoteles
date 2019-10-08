<?php require_once('../view/page/layout/head.php') ?>
<link rel="stylesheet" href="../view/css/tarjeta.css">
    <title>Mery Tours | Tarjeta-Pago</title>
</head>
<body>
<header>
    <?php require_once('../view/page/layout/nav.php') ?>
</header>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="cont mt-5">
                    <br>
                    <h1 class="display-4">Tarjeta de credito</h1>
                    <?php if( !empty( $listaT ) ) : ?>
                    <?php foreach( $listaT as $ltf ) : ?>
                    <div style="display:<?= $v1 ?>">
                    <div class="tarjeta mt-5 mb-5">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10">
                                    <p><?= $ltf['numero'] ?></p>
                                </div>
                                <div class="col-md-2">
                                <i class="fas fa-credit-card" style="font-size: 40px;"></i>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="mt-5"><?= $ltf['nombre'] ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <p><?= $ltf['expiracion'] ?></p>
                                </div>
                                <div class="col-md-6">
                                    <p><?= $ltf['cvv'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <a href="?editar-tarjeta=<?= $ltf['numero'] ?>">Editar</a>
                                <a href="?eliminar-tarjeta=<?= $ltf['numero'] ?>">Eliminar</a>
                            </div>
                        </div>
                    </div>
                    </div>
                    <?php endforeach;?>
                    <?php else : ?>
                    <div class="tarjeta mt-5 mb-5">
                        <form method="post">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="form-group mb-5 mt-2">
                                        <input type="text" name="numero" class="form-control form-control-sm" placeholder="0000-0000-0000-0000">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                <button type="submit" name="btnAgregar" value="add" class="btn btn-warning"><i class="fas fa-credit-card" style="font-size: 40px;"></i></button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group mt-2">
                                        <input type="text" name="nombre" class="form-control form-control-sm" placeholder="Nombre Apellido">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="fecha" class="form-control form-control-sm" placeholder="00/00">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="clave" class="form-control form-control-sm" placeholder="0000">
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                    <?php endif;?>
                    <div style="display: <?= $v2 ?> ">
                    <?php foreach( $listaT as $ltfe ) : ?>
                    <div class="tarjeta mt-5 mb-5">
                        <form method="post">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="form-group mb-5 mt-2">
                                        <input type="text" name="numero" value="<?= $ltfe['numero'] ?>" class="form-control form-control-sm" placeholder="0000-0000-0000-0000">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                <button type="submit" name="btnEditar" value="edit" class="btn btn-warning"><i class="fas fa-credit-card" style="font-size: 40px;"></i></button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group mt-2">
                                        <input type="text" name="nombre" value="<?= $ltfe['nombre'] ?>" class="form-control form-control-sm" placeholder="Nombre Apellido">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="fecha" value="<?= $ltfe['expiracion'] ?>" class="form-control form-control-sm" placeholder="00/00">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="clave"  value="<?= $ltfe['cvv'] ?>"class="form-control form-control-sm" placeholder="0000">
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                    <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php require_once('../view/page/layout/footer.php') ?>

<script src="../view/js/jquery-3.4.1.min.js"></script>
<script src="../view/js/main.js"></script>
<script src="../view/js/bootstrap.min.js"></script>
<script src="../view/js/form-validation.js"></script>
</body>
</html>