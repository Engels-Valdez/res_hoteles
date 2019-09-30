<?php require_once('../view/page/layout/head.php') ?>
    <title>Mery Tours | Registrar</title>
</head>
<body class="text-center">

<div class="container">
    <div class="row">
        <div class="col-md-5 offset-3">
            <div class="mt-5">
                <form class="needs-validation" method="post">
                <img src="../view/asset/mery.png" class="mb-4" alt="" srcset="" width="150">
                <h1 class="h3 mb-3 font-weight-normal">Datos de registro</h1>
                <label for="inputNombre" class="sr-only">Nombre</label>
                <input type="text" name="nombre" id="inputNombre" class="form-control" placeholder="Nombre" required>
                <hr>
                <label for="inputApellido" class="sr-only">Apellido</label>
                <input type="text" name="apellido" id="inputApellido" class="form-control" placeholder="Apellido" required>
                <hr>
                 <label for="inputEmail" class="sr-only">Email address</label>
                <input type="email" name="correo" id="inputEmail" class="form-control" placeholder="Direccion de correo" >
                <hr>
                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" name="pass" id="inputPassword" class="form-control" placeholder="Password" required>
                <button class="btn btn-lg btn-warning btn-block mt-3" type="submit" name="btnInciar" value="iniciar">Registrar</button>
                <p class="mt-5 mb-3 text-muted">¿Tienes una cuenta? <a href="login.php">Iniciar</a></p>
            </form>
            </div>
        </div>
    </div>
</div>


<script src="../view/js/jquery-3.4.1.min.js"></script>
<script src="../view/js/main.js"></script>
<script src="../view/js/bootstrap.min.js"></script>
<script src="../view/js/form-validation.js"></script>
</body>
</html>