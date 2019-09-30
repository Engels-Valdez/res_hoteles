<?php
    require_once('../model/UsuarioModel.php');

    $insUsu = new UsuarioModel();
    $usuario = $insUsu->getUsuarios();

    require_once('../view/page/UsuarioView.php');
?>