
    let paypal = document.getElementById('mpaypal');
    let creditoT = document.getElementById('mtarjeta');
    let metodoC = document.getElementById('metodoC');

    paypal.addEventListener('click', ()=>{

        metodoC.innerHTML = `
        <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label for="mailCP">Cuenta de paypal</label>
            <input type="email" name="mailCP" id="mailCP" class="form-control" required>
          </div>
        </div>
      </div> 
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label for="claveCP">Contraseña</label>
            <input type="password" name="claveCP" id="claveCP" class="form-control" required>
          </div>
        </div>
      </div> 
        
        `;

    });

    creditoT.addEventListener('click', ()=>{

        metodoC.innerHTML = `
        <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="nombreT">Nombre de la tarjeta</label>
            <input type="text" name="tarjetaNombre" id="nombreT" class="form-control" required>
          </div>
        </div>
        <div class="col-md-6">
        <div class="form-group">
            <label for="numeroT">Numero de tarjeta</label>
            <input type="text" name="tarjetaNnumer" id="numeroT" class="form-control" placeholder="0000-0000-0000-0000" required>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            <label for="fechaET">Fecha de expiracion</label>
            <input type="text" name="tarjetaFecha" id="fechaET" class="form-control" placeholder="00/00" required>
          </div>
        </div>
        <div class="col-md-3">
        <div class="form-group">
            <label for="cvvT">CVV</label>
            <input type="text" name="tarjetaCvv" id="cvvT" class="form-control" placeholder="000" required>
          </div>
        </div>
      </div>
        
        `;

    });