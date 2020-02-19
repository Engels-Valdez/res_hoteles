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
      <form class="needs-validation" novalidate method="post">
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">Nombre</label>
            <input type="text" class="form-control" name="nombreP" id="firstName" placeholder="" value="" required>
            <div class="invalid-feedback">
              El campo nombre es obligatorio.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Apellido</label>
            <input type="text" class="form-control" name="apellidoP" id="lastName" placeholder="" value="" required>
            <div class="invalid-feedback">
              El campo apellido es obligatorio.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="email">Correo</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">@</span>
            </div>
            <input type="email" class="form-control" name="correoP" id="username" placeholder="correo@correo.com" required>
            <div class="invalid-feedback" style="width: 100%;">
              Debe poner un correo valido.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="telefono">Telefono<span class="text-muted">*</span></label>
          <input type="phone" class="form-control" name="telefonoP" id="email" placeholder="000-000-0000">
          <div class="invalid-feedback">
            Por favor debe ingresar un telefono valido.
          </div>
        </div>

        <div class="mb-3">
          <label for="check-in">Check-in</label>
          <input type="text" class="form-control" name="fechaEntrada" id="check-in" placeholder="check-in" value="<?= $entrada?>"required readonly>
          <div class="invalid-feedback">
            Por favor debe introducir una fecha check-in.
          </div>
        </div>
        <div class="mb-3">
          <label for="check-out">Check-out</label>
          <input type="text" class="form-control" name="fechaSalida" id="check-out" placeholder="check-out" value="<?= $salida?>" readonly>
        </div>

        <div class="row">
          <div class="col-md-5 mb-3">
          <?php foreach( $idPrecio as $ip ) : ?>
            <label for="cantidad_adultos">Cantidad de adultos</label>
            <select class="custom-select d-block w-100" name="cantAdulto" id="cantidad_adultos" required>
              <?php for($i = 0; $i < $ip['cant_adulto']; $i++) : ?>
              <option value="<?= $i + 1  ?>"><?= $i + 1  ?></option>
              <?php endfor; ?>
            </select>
            <div class="invalid-feedback">
              Debe seleccionar la cantidad de adultos.
            </div>
          </div>
          <div class="col-md-7 mb-3">
            <label for="cantidad_nino">Cantidad de niños</label>
            <select class="custom-select d-block w-100" name="cantNino" id="cantidad_nino" required>
            <?php for($i = 0; $i < $ip['cant_niño']; $i++) : ?>
              <option value="<?= $i + 1 ?>"><?= $i + 1 ?></option>
              <?php endfor; ?>
            </select>
            <div class="invalid-feedback">
              Debe seleccionar la cantidad de niños.
            </div>
          </div>
          <div class="col-md-6 mb-3">
         
          <label for="precio">Precio por noche.</label>
          <input type="text" class="form-control"  name="precioNoche" id="precio"  value="<?= $ip['precio_oferta']?>" readonly required>
          
          </div>
          <div class="col-md-6 mb-3">
            <label for="total">Total</label>
            <input type="text" class="form-control" name="total" id="Total" value="<?= $ip['precio_oferta'] * $noches->format('%a%') ?>"readonly required>
          </div>
        </div>
        <?php endforeach; ?>
        <hr class="mb-4">
        
        <h4 class="mb-3">Metodo de pago</h4>

        <div class="d-block my-3">
          <div class="custom-control custom-radio">
            <input id="mpaypal" name="mpago" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="mpaypal">PayPal</label>
          </div>
        </div>
        <div class="d-block my-3">
          <div class="custom-control custom-radio">
            <input id="mtarjeta" name="mpago" type="radio" class="custom-control-input" checked required>
            <label class="custom-control-label" for="mtarjeta">Tarjeta de credito</label>
          </div>
        </div>
        <div id="metodoC">
        
          <?php if(!empty( $datosT)) : ?>
        <?php foreach($datosT as $dtc) : ?>
        <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="nombreT">Nombre de la tarjeta</label>
            <input type="text" name="tarjetaNombre" id="nombreT" class="form-control" value="<?= $dtc['nombre'] ?>" required>
          </div>
        </div>
        <div class="col-md-6">
        <div class="form-group">
            <label for="numeroT">Numero de tarjeta</label>
            <input type="text" name="tarjetaNnumer" id="numeroT" class="form-control" placeholder="0000-0000-0000-0000" value="<?= $dtc['numero'] ?>" required>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            <label for="fechaET">Fecha de expiracion</label>
            <input type="text" name="tarjetaFecha" id="fechaET" class="form-control" placeholder="00/00" value="<?= $dtc['expiracion'] ?>" required>
          </div>
        </div>
        <div class="col-md-3">
        <div class="form-group">
            <label for="cvvT">CVV</label>
            <input type="text" name="tarjetaCvv" id="cvvT" class="form-control" placeholder="000" value="<?= $dtc['cvv'] ?>" required>
          </div>
        </div>
      </div>
      <?php endforeach;?>
      <?php else : ?>
 
        
       
        <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="nombreT">Nombre de la tarjeta</label>
            <input type="text" name="tarjetaNombre" id="nombreT" class="form-control" value="" required>
          </div>
        </div>
        <div class="col-md-6">
        <div class="form-group">
            <label for="numeroT">Numero de tarjeta</label>
            <input type="text" name="tarjetaNnumer" id="numeroT" class="form-control" placeholder="0000-0000-0000-0000" value="" required>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            <label for="fechaET">Fecha de expiracion</label>
            <input type="text" name="tarjetaFecha" id="fechaET" class="form-control" placeholder="00/00" value="" required>
          </div>
        </div>
        <div class="col-md-3">
        <div class="form-group">
            <label for="cvvT">CVV</label>
            <input type="text" name="tarjetaCvv" id="cvvT" class="form-control" placeholder="000" value="" required>
          </div>
        </div>
      </div>
      <?php endif;?>
      
        </div>
        <?= $mesajeConfirmacion; ?>
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit" name="frmReserv" value="env-frmReserv">Continue to checkout</button><br><br><br><br>
      </form>
    </div>
  </div>
</div>


<script src="../view/js/jquery-3.4.1.min.js"></script>
<script src="../view/js/main.js"></script>
<script src="../view/js/bootstrap.min.js"></script>
<script src="../view/js/form-validation.js"></script>
</body>
</html>