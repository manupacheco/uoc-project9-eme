<?php


// variables del formulario 
$a = $_POST['nombre_usuario']; 
$b = $_POST['apellidos']; 
$k = $_POST['telefono'];
$l = $_POST['email'];
$m = $_POST['usuario'];
$n = $_POST['password'];







// conectar la base da datos 
$db = 'eme'; 
$host = 'localhost'; 
$user = 'root'; 
$pass = ''; 
$conn = new PDO("mysql:dbname=".$db.";host=".$host,$user, $pass); 
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// iniciar transacción 
$conn->beginTransaction();

try { 




// tabla 4 
$sql =  "INSERT INTO usuarios (usuario, password, nombre, apellidos,mail, telefono )VALUES ( :usuario, :password, :nombre,:apellidos,:email,:telefono) ;";
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