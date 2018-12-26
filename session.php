<?php session_start();
if ((isset($_SESSION['usuario'])) && (!empty($_SESSION['usuario']))) {
    $usuario=$_SESSION['usuario'];
} else {
    $usuario=NULL;
}
if ((isset($_SESSION['cantidadproductos'])) && (!empty($_SESSION['cantidadproductos']))) {
    $cantidadproducto=$_SESSION['cantidadproductos'];
} else {
    $cantidadproductos=NULL;
}
?>

