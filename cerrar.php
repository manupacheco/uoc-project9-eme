<?php session_start();
//Se destruyen las sesión iniciadas y nos dirije a la página principal
session_destroy();
header("Location: index.php");				
?>
