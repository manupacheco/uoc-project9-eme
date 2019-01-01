<?php

 


class codigo {   
    
public function getusuario () 
    
    {
      
        return $this->usuario;   
               
        
    }
    
    public function setusuario ($usuario)
    {
       
        $this->usuario = $usuario;
    
    }
    
    public function getpassword () 
    
    {
      
        return $this->password;   
               
        
    }
    
    public function setpassword ($password)
    {
       
        $this->password = $password;
    
    }
 
public function login($usuario, $password){

    require_once  "./conexion.php";
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
$_SESSION['usuario']=$usuario; // Storing user session value

// header("Location: datosusuario.php"); 

echo "Bienvenido $usuario <a href = datosusuario.php> Ver datos</a><br>";
echo    "<a href = valoraciones.php> Valorar producto</a><br>" ;
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
}

public function seleccionar($usuario){
    
include "./conexion.php"; 

$conn->beginTransaction();   

try { 
// tabla 1 
$sql = "SELECT * FROM usuarios WHERE usuario = :usuario ;"; 
$result = $conn->prepare($sql); 
$result->bindValue(':usuario', $usuario, PDO::PARAM_STR);
$result->execute(); 
$count = $result->rowCount();
$fila = $result->fetch(PDO::FETCH_BOTH);






$conn->commit(); 
   }
 
catch(PDOException $e) {
echo '{"error":{"text":'. $e->getMessage() .'}}';
}
}
}