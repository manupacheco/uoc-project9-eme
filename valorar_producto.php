<?php

include "selec_producto.php"; 
require_once("./conexion.php");

$a =$_POST['puntuacion'];
$b = $_POST['comentario'];
$c= $row[3];
$d = "1";


// iniciar transacción 
$conn->beginTransaction();

try { 


$sql ="INSERT INTO valoraciones (IdProducto,IdUsuario,puntuacion, comentario,fechacreac) VALUES (:IdProducto,:IdUsuario, :puntuacion,:comentario,NOW()) ;";
$result = $conn->prepare($sql); 
$result->bindValue(':IdUsuario', $d, PDO::PARAM_STR); 
$result->bindValue(':IdProducto', $c, PDO::PARAM_INT); 
$result->bindValue(':puntuacion', $a, PDO::PARAM_STR); 
$result->bindValue(':comentario', $b, PDO::PARAM_STR); 
$result->execute();


$conn->commit(); 
echo 'Valoracion insertada'; 
} catch (PDOException $e) { 
// si ocurre un error hacemos rollback para anular todos los insert 
$conn->rollback(); 
echo $e->getMessage();; 
} 

