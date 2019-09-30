<?php require_once('../view/page/layout/head.php') ?>
    <title>Mery Tours | Usuarios</title>
</head>
<body>
<header>
    <?php require_once('../view/page/layout/nav.php') ?>
</header>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="animation mt-5"><br>
                <h1 class="display-4"> Usuarios registrados </h1>
                <table class="table table-hover table-warning mt-3">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Correo</th>
                            <th>Tipo</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach( $usuario as $usl ) : ?>
                        <tr>
                            <td><?= $usl['nombre'] ?></td>
                            <td><?= $usl['apellido'] ?></td>
                            <td><?= $usl['correo'] ?></td>
                            <td>
                            <?php 
                                if ($usl['tipo'] == 2){
                                    echo 'user';
                                }else{
                                    echo 'Admin';
                                }
                            ?>
                            </td>
                        </tr>
                    <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br>
<?php require_once('../view/page/layout/footer.php') ?>

<script src="../view/js/jquery-3.4.1.min.js"></script>
<script src="../view/js/main.js"></script>
<script src="../view/js/bootstrap.min.js"></script>
<script src="../view/js/form-validation.js"></script>
<script>
window.sr = ScrollReveal();
sr.reveal('.animation',{
    duration: 2000,
    origin: 'left',
    distance: '300px'

});

</script>
</body>
</html>