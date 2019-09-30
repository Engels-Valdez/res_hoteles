<?php session_start();
    require_once('../model/HotelModel.php');
    require_once('../model/FotoHotelModel.php');
    require_once('../public/file.php');

    if( !isset( $_SESSION['Seccion'] ) ){

        header('Location: login.php');

    }elseif( $_SESSION['Seccion'][0]['tipo'] == 2 ){

        header('Location: login.php');

    }else{
       // Mostrar, borrar, modificar y agregar hoteles
        $frmAddHotel = $_POST['frmAddHotel'];
        $nombreHotel = $_POST['nombreHotel'];
        $provinciaHotel = $_POST['provinciaHotel']; 
        $calleHotel = $_POST['calleHotel'];
        $pretigioHotel = $_POST['pretigioHotel'];
        $localizacionHotel = $_POST['localizacionHotel'];

        $idEliminar = $_GET['eliminar'];

        $idModificarHotel = $_GET['id-modificar-hotel'];
        $frmUpdateHotel = $_POST['frmUpdateHotel'];
        $visiblidadAdd = 'block';
        $visiblidadEdit = 'none';
        
        $getHotelModel = new HotelModel();
        $HotelAll = $getHotelModel->getHotelesAll();

        if( $_SERVER['REQUEST_METHOD']=='POST' && !empty( $frmAddHotel ) ){

            $hm = new HotelModel();
            $hm->setHotel($nombreHotel,$provinciaHotel,$calleHotel,$pretigioHotel,$localizacionHotel);

        }

        if( $_SERVER['REQUEST_METHOD'] == 'GET' && !empty( $idEliminar ) ){

            $hme = new HotelModel();
            $hme->eliminarHotel( $idEliminar );
            header('Location: dashotel.php');

        }

        if( $_SERVER['REQUEST_METHOD'] == 'POST' && !empty( $frmUpdateHotel ) ){

            $ah = new HotelModel();
            $ah->actualizarHotel( $idModificarHotel, $_POST['nombreHotelU'], $_POST['provinciaHotelU'], $_POST['calleHotelU'], $_POST['prestigioHotelU'], $_POST['localizacionHotelU'] );
            header('Location: dashotel.php');

        }

        if( $_SERVER['REQUEST_METHOD'] == 'GET' && !empty( $idModificarHotel ) ){

            $visiblidadAdd = 'none';
            $visiblidadEdit = 'block';

            $sah = new HotelModel();
            $hotelesParaEditar = $sah->getHotel( $idModificarHotel );

        }
        ////////////////////////////////////////////////////////////////////////////////////////////////////

        //Mostrar, borrar y agregar fotos de los hotels en modal.

        $getFotoHotel = new FotoHotelModel();
        $fotosHoteles = $getFotoHotel->getFotosHotel();

        $btnAddFotoHotel = $_POST['btnAddFotoHotel'];
        $nombreImagen = $_FILES['fotoHotel']['name'];
        $tipoImagen = $_FILES['fotoHotel']['type'];
        $idFotoHotel = $_POST['idFotoHotel'];
        $imagenPrincHotel = $_POST['imagenPrincHotel'];

        $eliminar_foto_hotel = $_GET['eliminar-foto-hotel'];

        if( $_SERVER['REQUEST_METHOD']=='POST' && !empty( $btnAddFotoHotel ) ){

            if( $tipoImagen == 'image/jpg' || $tipoImagen == 'image/png' || $tipoImagen == 'image/jpeg'){

                move_uploaded_file( $_FILES['fotoHotel']['tmp_name'], RUTA.'/reshoteles/view/asset/'.$nombreImagen );
                $getFotoHotel->setFotoHotel( $nombreImagen, $idFotoHotel, $imagenPrincHotel );

            }else{
                echo "
                    <div class='container'>
                        <div class='row mt-5'>
                            <div class='col-md-6'>
                            <div class='alert alert-warning alert-dismissible fade show mt-5' role='alert'>
                            <strong>Aviso!</strong> Este tipo de archivo no es permitido por la pagina.
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                              <span aria-hidden='true'>&times;</span>
                            </button>
                          </div>
                            </div>
                        </div>
                    </div>
                ";
            }

        }

        if( $_SERVER['REQUEST_METHOD'] == 'GET' && !empty( $eliminar_foto_hotel ) ){

            $elim = new FotoHotelModel();
            $elim->eliminarFooHotel( $eliminar_foto_hotel );
            header('Location: dashotel.php');
        }

        ////////////////////////////////////////////////////////////////////////////////////////////////////
        

    }

    require_once('../view/page/DashotelView.php');
?>