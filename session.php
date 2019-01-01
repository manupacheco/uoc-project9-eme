<?php session_start();
if ((isset($_SESSION['usuario'])) ) {
    $usuario=$_SESSION['usuario']->getValue("usuario");
    
  
} else {
    $usuario=NULL;
}

?>

