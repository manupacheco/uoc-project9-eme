<?php

require_once("./conexion.php");
// variables del formulario 
$a = $_POST['nombre_usuario']; 
$b = $_POST['apellidos']; 
$k = $_POST['telefono'];
$l = $_POST['email'];
$m = $_POST['usuario'];
$n = $_POST['password'];









// iniciar transacción 
$conn->beginTransaction();

try { 




// tabla 4 
$sql =  "INSERT INTO usuarios (fecha,usuario, password, nombre, apellidos,mail, telefono )VALUES ( NOW(),:usuario, :password, :nombre,:apellidos,:email,:telefono) ;";
$result = $conn->prepare($sql); 

$result->bindValue(':usuario', $m, PDO::PARAM_STR); 
$result->bindValue(':password', $n, PDO::PARAM_STR);
$result->bindValue(':nombre', $a, PDO::PARAM_STR);
$result->bindValue(':apellidos', $b, PDO::PARAM_STR);
$result->bindValue(':telefono', $k, PDO::PARAM_STR);
$result->bindValue(':email', $l, PDO::PARAM_STR);
$result->execute();

$conn->commit(); 
echo 'Datos insertados'; 
} catch (PDOException $e) { 
// si ocurre un error hacemos rollback para anular todos los insert 
$conn->rollback(); 
echo $e->getMessage();; 
} 
