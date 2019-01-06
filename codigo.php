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

   include  "./conexion.php";
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
setcookie("usuario",$usuario,strtotime( '+30 days' ),"/",false, false);
$_SESSION['usuario']=$usuario; // Storing user session value

//header("Location: datosusuario.php"); 


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
if ( isset($_COOKIE['usuario'])) {
    //Obtenemos datos.  
    $usuario = $_COOKIE['usuario'] ?: '';
    
    $usuario = (string)$usuario;

    
    
    $sql = "SELECT * FROM usuarios WHERE usuario = :usuario ;"; 
    $result = $conn->prepare($sql); 
    $result->bindValue(':usuario', $usuario, PDO::PARAM_STR);
    $result->execute(); 
    $fila = $result->fetch(PDO::FETCH_BOTH);
    
    
}


return $fila;











$conn->commit(); 
   }
 
catch(PDOException $e) {
echo '{"error":{"text":'. $e->getMessage() .'}}';
}
}


public function modificar($usuario){
    
    include "./conexion.php"; 

    $conn->beginTransaction();   

    try { 




// tabla 4 
$sql =  "INSERT INTO usuarios (usuario, password, nombre, apellidos,mail, telefono,foto,fecha_modificacion )VALUES (:usuario, :password, :nombre,:apellidos,:email,:telefono, :foto,NOW()) ;";
$result = $conn->prepare($sql); 

$result->bindValue(':usuario', $m, PDO::PARAM_STR); 
$result->bindValue(':password', $n, PDO::PARAM_STR);
$result->bindValue(':nombre', $a, PDO::PARAM_STR);
$result->bindValue(':apellidos', $b, PDO::PARAM_STR);
$result->bindValue(':telefono', $k, PDO::PARAM_STR);
$result->bindValue(':email', $l, PDO::PARAM_STR);
$result->bindValue(':foto', $c, PDO::PARAM_STR);
$result->execute();

$conn->commit(); 
echo 'Datos insertados'; 
} catch (PDOException $e) { 
// si ocurre un error hacemos rollback para anular todos los insert 
$conn->rollback(); 
echo $e->getMessage();; 
} 
    
}
}
