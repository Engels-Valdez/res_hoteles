<?php require_once('../view/page/layout/head.php') ?>
    <title>Mery Tours | Login</title>
</head>
<body class="text-center">

<div class="container">
    <div class="row">
        <div class="col-md-5 offset-3">
            <div class="mt-5">
                <form method="post">
                <img src="../view/asset/mery.png" class="mb-4" alt="" srcset="" width="150">
                <h1 class="h3 mb-3 font-weight-normal">Por favor inicie seccion</h1>
                 <label for="inputEmail" class="sr-only">Email address</label>
                <input type="email" name="correo" id="inputEmail" class="form-control" placeholder="Direccion de correo" required autofocus>
                <hr>
                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" name="pass" id="inputPassword" class="form-control" placeholder="Password" required>
                <button class="btn btn-lg btn-warning btn-block mt-3" type="submit" name="btnInciar" value="iniciar">Iniciar</button>
                <p class="mt-5 mb-3 text-muted"><a href="#">Registrate</a></p>
            </form>
            </div>
        </div>
    </div>
</div>


<script src="../view/js/jquery-3.4.1.min.js"></script>
<script src="../view/js/main.js"></script>
<script src="../view/js/bootstrap.min.js"></script>
</body>
</html>