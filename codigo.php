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
$fila=$result->fetch(PDO::FETCH_BOTH);

return $fila;

$IdUsuario =$fila[0]; 

$conn->commit(); 

if($count)
{
setcookie("usuario",$usuario,strtotime( '+30 days' ),"/",false, false);
setcookie("IdUsuario",$IdUsuario,strtotime( '+30 days' ),"/",false, false);
$_SESSION['usuario']=$usuario; // Storing user session value



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


public function valorar($IdProducto,$IdUsuario,$puntuacion,$comentario,$fechacreac){
    
    include "./conexion.php"; 

    $conn->beginTransaction();   

    try { 
        if ( isset($_COOKIE['usuario']) || isset($_COOKIE['IdUsuario']) ) {
    //Obtenemos datos.  
    $usuario = $_COOKIE['usuario'] ?: '';
    
    $usuario = (string)$usuario;
    $Idusuario = $_COOKIE['IdUsuario'];
    
    $sql2 = "SELECT * FROM valoraciones WHERE IdProducto = :IdProducto ;";
    $result2 = $conn->prepare($sql2); 
    $result2->bindValue(':IdProducto', $IdProducto, PDO::PARAM_INT); 
    $result2->execute(); 
    $count = $result2->rowCount();
    
    
 if ($count = 1)   {
$sql =  "UPDATE valoraciones SET IdProducto = :IdProducto , IdUsuario = :IdUsuario, puntuacion = :puntuacion, comentario = :comentario, fechacreac = NOW() WHERE IdProducto like :IdProducto ;";
$result = $conn->prepare($sql); 

$result->bindValue(':IdProducto', $IdProducto, PDO::PARAM_INT); 
$result->bindValue(':IdUsuario', $Idusuario, PDO::PARAM_INT);
$result->bindValue(':puntuacion', $puntuacion, PDO::PARAM_INT);
$result->bindValue(':comentario', $comentario, PDO::PARAM_STR);

$result->execute(); 
 }
 if ($count = 0)   {
$sql3 =  "INSERT INTO valoraciones (IdProducto, IdUsuario, puntuacion, comentario,fechacreac )VALUES (:IdProducto, :IdUsuario,:puntuacion,:comentario, NOW()) ;";
$result3 = $conn->prepare($sql3); 

$result3->bindValue(':IdProducto', $IdProducto, PDO::PARAM_INT); 
$result3->bindValue(':IdUsuario', $Idusuario, PDO::PARAM_INT);
$result3->bindValue(':puntuacion', $puntuacion, PDO::PARAM_INT);
$result3->bindValue(':comentario', $comentario, PDO::PARAM_STR);

$result3->execute(); 
 }
 
 
 }



$conn->commit();       
        
    } catch (PDOException $e) { 
// si ocurre un error hacemos rollback para anular todos los insert 
$conn->rollback(); 
echo $e->getMessage();; 
} 
    
}

}
