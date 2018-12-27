<?php


require_once("./conexion.php");
// iniciar transacción 
$conn->beginTransaction();

try { 

$sql = "SELECT enlace, precio, titulo, descripcion FROM imagenes INNER JOIN productos WHERE imagenes.idProducto3 = productos.IdProducto;"; 
$result = $conn->prepare($sql); 
$result->execute(); 








$conn->commit(); 


}

catch(PDOException $e) {
echo '{"error":{"text":'. $e->getMessage() .'}}';
}

