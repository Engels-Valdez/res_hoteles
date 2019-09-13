<?php require_once('../view/page/layout/head.php') ?>
    <title>Reservaciones</title>
</head>
<body class="bg-light">
<div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="../view/asset/mery.png" alt="" width="150" height="72">
    <h2>Reservacion</h2>
    <p class="lead">Por favor complete este formulario con informacion real, esta informacion es delicada y estamos comprometidos con la confidencialidad de la misma.</p>
  </div>

  <div class="row">
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Datos de reservacion</h4>
      <form class="needs-validation" novalidate>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">Nombre</label>
            <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
            <div class="invalid-feedback">
              El campo nombre es obligatorio.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Apellido</label>
            <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
            <div class="invalid-feedback">
              El campo apellido es obligatorio.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="email">Correo</label>
          <div class="input-group">z
            <div class="input-group-prepend">
              <span class="input-group-text">@</span>
            </div>
            <input type="email" class="form-control" id="username" placeholder="Correo para enviar la reservacion" required>
            <div class="invalid-feedback" style="width: 100%;">
              Debe poner un correo valido.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="telefono">Telefono<span class="text-muted">*</span></label>
          <input type="phone" class="form-control" id="email" placeholder="Ejemplo: 000-000-0000">
          <div class="invalid-feedback">
            Por favor debe ingresar un telefono valido.
          </div>
        </div>

        <div class="mb-3">
          <label for="check-in">Check-in</label>
          <input type="date" class="form-control" id="check-in" placeholder="check-in" required>
          <div class="invalid-feedback">
            Por favor debe introducir una fecha check-in.
          </div>
        </div>

        <div class="mb-3">
          <label for="check-out">Check-out</label>
          <input type="date" class="form-control" id="check-out" placeholder="check-out">
        </div>

        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="cantidad">Cantidad de persona</label>
            <select class="custom-select d-block w-100" id="cantidad" required>
              <option value="">1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
            <div class="invalid-feedback">
              Debe seleccionar la cantidad de persona.
            </div>
          </div>
          <div class="mb-3">
          <label for="precio">Precio por persona.</label>
          <input type="text" class="form-control" id="precio" readonly required>
        </div>
          <div class="col-md-3 mb-3">
            <label for="total">Total</label>
            <input type="text" class="form-control" id="Total" readonly required>
          </div>
        </div>

        <hr class="mb-4">

        <h4 class="mb-3">Metodo de pago</h4>

        <div class="d-block my-3">
          <div class="custom-control custom-radio">
            <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="paypal">PayPal</label>
          </div>
        </div>
       
        
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
      </form>
    </div>
  </div>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2017-{{ site.time | date: "%Y" }} Company Name</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>

<script src="../view/js/jquery-3.4.1.min.js"></script>
<script src="../view/js/main.js"></script>
<script src="../view/js/bootstrap.min.js"></script>
<script src="../view/js/form-validation.js"></script>
</body>
</html>