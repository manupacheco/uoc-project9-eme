<?php


include"./conexion.php";

// iniciar transacción 
$conn->beginTransaction();

try { 

$sql = "SELECT * FROM productos;"; 
$result = $conn->prepare($sql); 
$result->execute(); 


return $result;



$conn->commit(); }


catch(PDOException $e) {
echo '{"error":{"text":'. $e->getMessage() .'}}';
}

