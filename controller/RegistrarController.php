<?php  

require_once('../model/RegistrarModel.php');  

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$pass = $_POST['pass'];

$msj;

if( $_SERVER['REQUEST_METHOD'] == 'POST' ){

    $acces = new RegistrarModel();
    $usuariosV = $acces->getValidarUsuarios($correo);
     if( $usuariosV['correo'] == $correo ){

    echo <<<S
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Oh no!</strong> Este usuario esta en uso ya.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
S;

     }else{
    $acces->addUser( $nombre, $apellido, $correo, $pass );

    echo <<<S
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
    <strong>Felicidades!</strong> fuiste agrado a nuestra platafoma.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
S;
     }
}

require_once('../view/page/RegistrarView.php');

?>