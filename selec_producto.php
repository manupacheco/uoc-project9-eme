<?php


include"./conexion.php";

// iniciar transacción 
$conn->beginTransaction();

try { 

$sql = "SELECT * FROM productos;"; 
$result = $conn->prepare($sql); 
$result->execute(); 










foreach ($result as $row){
    
 
}
$conn->commit(); }


catch(PDOException $e) {
echo '{"error":{"text":'. $e->getMessage() .'}}';
}

