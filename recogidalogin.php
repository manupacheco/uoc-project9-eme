<?php

include "codigo.php";

$codigo = new codigo();
$codigo->setusuario(filter_input(INPUT_POST, 'usuario'));
$codigo ->setpassword(filter_input(INPUT_POST, 'password'));

$usuario = $codigo->usuario;
$password = $codigo->password;

$login= $codigo ->login($usuario, $password);

?>