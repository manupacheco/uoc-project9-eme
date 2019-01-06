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


public function update($usuario, $password, $nombre,$apellidos,$mail,$telefono, $foto, $fecha_modificacion){
    
    include "./conexion.php"; 

    $conn->beginTransaction();   

    try { 

if ( isset($_COOKIE['usuario'])) {
    //Obtenemos datos.  
    $usuario = $_COOKIE['usuario'] ?: '';
    
    $usuario = (string)$usuario;

    


// tabla 4 
$sql =  "UPDATE usuarios SET usuario = :usuario , password = :password, nombre = :nombre, apellidos = :apellidos, mail = :mail, telefono = :telefono, foto_personal = :foto, fecha_modificacion = NOW() WHERE usuario like :usuario ;";
$result = $conn->prepare($sql); 

$result->bindValue(':usuario', $usuario, PDO::PARAM_STR); 
$result->bindValue(':password', $password, PDO::PARAM_STR);
$result->bindValue(':nombre', $nombre, PDO::PARAM_STR);
$result->bindValue(':apellidos', $apellidos, PDO::PARAM_STR);
$result->bindValue(':telefono', $telefono, PDO::PARAM_STR);
$result->bindValue(':mail', $mail, PDO::PARAM_STR);
$result->bindValue(':foto', $foto, PDO::PARAM_STR);
$result->execute();
}
if ($result) {
           
           
         
           
           
       }else {
           
       
           
           echo "Error ocurrido al modificar datos en el sistema. Contacte con el administrador.";
          
       }
$conn->commit(); 

} catch (PDOException $e) { 
// si ocurre un error hacemos rollback para anular todos los insert 
$conn->rollback(); 
echo $e->getMessage();; 
} 
    
}
public function delete($usuario){
    
    include "./conexion.php"; 

    $conn->beginTransaction();   

    try { 

if ( isset($_COOKIE['usuario'])) {
    //Obtenemos datos.  
    $usuario = $_COOKIE['usuario'] ?: '';
    
    $usuario = (string)$usuario;



$sql =  "DELETE FROM usuarios WHERE usuario=:usuario; ";
$result = $conn->prepare($sql); 

$result->bindValue(':usuario', $usuario, PDO::PARAM_STR); 
$result->execute();
}
$conn->commit(); 

} catch (PDOException $e) { 
// si ocurre un error hacemos rollback para anular todos los insert 
$conn->rollback(); 
echo $e->getMessage();; 
} 
    
}
}
