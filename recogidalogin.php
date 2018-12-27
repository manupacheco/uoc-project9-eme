<?php
require_once("./conexion.php");
   

$usuario = $_POST['usuario'];
$password = $_POST['password'];
   


// iniciar transacción 
$conn->beginTransaction();
 switch (empty($usuario)||empty($password)) {
     
 
case true:
     echo "Campos obligatorios sin rellenar <br/>";
 
case false:
try { 
// tabla 1 
$sql = "SELECT IdUsuario FROM usuarios WHERE usuario = :usuario AND password = :password ;"; 
$result = $conn->prepare($sql); 
$result->bindValue(':usuario', $usuario, PDO::PARAM_STR);
$result->bindValue(':password', $password, PDO::PARAM_STR);
$result->execute(); 
$count = $result->rowCount();
$data=$result->fetch(PDO::FETCH_OBJ);




$conn->commit(); 

if($count)
{
$_SESSION['IdUsuario']=$data->IdUsuario; // Storing user session value

header("Location: datosusuario.php"); 


}
else
{
echo "Usuario no registrado";  
} 
}
 
catch(PDOException $e) {
echo '{"error":{"text":'. $e->getMessage() .'}}';
}
 }
