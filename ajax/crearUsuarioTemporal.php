<?php
session_start();

require_once '../controladores/usuarios.controlador.php';


if (($_SESSION["rol"] == 1 || $_SESSION["rol"] == 10) && isset($_POST)) {
    $peticion = new ControladorUsuarios();
    $respuesta = $peticion->ctrCrearUsuario();
    var_dump($respuesta);
    die();
} else {
    var_dump("Entre aqui ELSE");
    die();
}
