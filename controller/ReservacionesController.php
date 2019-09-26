<?php session_start();
    require_once('../model/ReservacionesModel.php');
    date_default_timezone_set('UTC');

    //Para el php mailer
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require '../phpmailer/Exception.php';
    require '../phpmailer/PHPMailer.php';
    require '../phpmailer/SMTP.php';
    /////////////////////////////////////

    function enviarPorCorreo($correoEnv,$nombreHb,$nombreHt,$fechaEntrada,$fechaSalida,$cantPers){

        $mail = new PHPMailer(true);

            try {
                //Server settings
                $mail->SMTPDebug = 0;                                       // Enable verbose debug output
                $mail->isSMTP();                                            // Set mailer to use SMTP
                $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                $mail->Username   = 'engels.valdezcastillo@gmail.com';                     // SMTP username
                $mail->Password   = 'PHE220728?';                               // SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption, `PHPMailer::ENCRYPTION_SMTPS` also accepted
                $mail->Port       = 587;                                    // TCP port to connect to

                //Recipients
                $mail->setFrom('engels.valdezcastillo@gmail.com', 'INFO MERY TOURS');
                $mail->addAddress("$correoEnv");     // Add a recipient
 

                // Attachments
                //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

                // Content
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = 'Notificacion de reserva';
                $mail->Body    = "
                            <h3>Equipo de Mery Tours</h3>
                            <p>Usted acaba de reservar la habitacion <b>$nombreHb</b> del hotel <b>$nombreHt</b>, para <b>$cantPers</b> huesped. </p><br>
                            <table>
                                <thead>
                                    <tr>
                                        <th>Fecha de entrada</th>
                                        <th>Fecha de salida</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>$fechaEntrada</td>
                                        <td>$fechaSalida</td>
                                    </tr>
                                </tbody>
                            </table>
                ";
                //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                $mail->send();
                return $msjME = "<div class='alert alert-primary'>Los datos de su reservacion fueron enviados a tu correo</div>";
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }

    }

    if( !isset( $_SESSION['Seccion'] ) ){

        header('Location: login.php');

    }
    
    $id_habitacion = $_GET['id'];
    $entrada = $_GET['entrada'];
    $salida = $_GET['salida'];
    $en = new DateTime($entrada);
    $sa = new DateTime($salida);
    $noches = $en->diff($sa);
    $id = $_SESSION['Seccion'][0]['id'];

    if( $_SERVER['REQUEST_METHOD'] == 'GET' && !empty( $id_habitacion ) ){

        $resv = new ReservacionesModel();
        $idPrecio = $resv->getIdPrecioHabitaciones($id_habitacion);
        $datosT = $resv->getTarjetaCredito( $id );
        if( empty($idPrecio) ){

            header('Location: error.php');

        }
      
    }

        //Datos que se van a almacenar en la tabla de reservaciones
        $nombreP = $_POST['nombreP'];
        $apellidoP = $_POST['apellidoP'];
        $correoP = $_POST['correoP'];
        $telefonoP = $_POST['telefonoP'];
        $fechaEntrada = $_POST['fechaEntrada'];
        $fechaSalida = $_POST['fechaSalida'];
        $cantAdulto = $_POST['cantAdulto'];
        $cantNino = $_POST['cantNino'];
        $cantPers = $cantAdulto+$cantNino;
        $precioNoche = $_POST['precioNoche'];
        $total = $_POST['total'];
        $frmReserv = $_POST['frmReserv'];
        $id_habitacion = $_GET['id'];
        $id_usuario = $_SESSION['Seccion'][0]['id'];

        if( $_SERVER['REQUEST_METHOD'] == 'POST' && !empty( $frmReserv ) ){
            
            $resv2 = new ReservacionesModel();
            $resv2->setReservacion($nombreP,$apellidoP,$correoP,$telefonoP,$fechaEntrada,$fechaSalida,$cantPers,$precioNoche,$total,$id_habitacion,$id_usuario);
            $habitaciones = $resv2->getIdPrecioHabitaciones($id_habitacion);
            foreach($habitaciones as $hbt){
                $nombreHb = $hbt['tipo'];
                $nombreHt = $hbt['nombre'];
            }
            
            $mesajeConfirmacion = enviarPorCorreo( "$correoP","$nombreHb","$nombreHt","$fechaEntrada","$fechaSalida","$cantPers" );
        }
        

    @require_once('../view/page/ReservacionesView.php');
?>