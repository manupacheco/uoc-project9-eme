<?php


$db = 'eme'; 
$host = 'localhost'; 
$user = 'root'; 
$pass = ''; 
$conn = new PDO("mysql:dbname=".$db.";host=".$host,$user, $pass); 
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

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

