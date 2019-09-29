<?php session_start(); ?>
<!-- Image and text -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <a href="home.php"><img src="../view/asset/mery.png" width="150" height="40" class="d-inline-block align-top" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <div class="col-md-5 offset-10">
    <ul class="navbar-nav mr-auto">
    <?php if( isset( $_SESSION['Seccion'] ) ) : ?>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?= $_SESSION['Seccion'][0]['nombre'] ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <?php if( $_SESSION['Seccion'][0]['tipo'] == 1 ) : ?>
          <a class="dropdown-item" href="dashotel.php">Hoteles</a>
          <a class="dropdown-item" href="#">Habitaciones</a>
          <a class="dropdown-item" href="#">Usuarios</a>
          <div class="dropdown-divider"></div>
          <?php endif;?>
          <a class="dropdown-item" href="cerrar.php">Cerrar seccion</a>
        </div>
      </li>
      <?php else : ?>
      <li><a href="login.php">Iniciar seccion</a></li>
      <?php endif;?>
    </ul>
    </div>
  </div>
</nav>

<script src="../view/js/animation.js"></script>