<!Doctype html>
<html>
<head>
    
    <title>formulario</title> 
    <meta charset="UTF-8">
    <?php include 'session.php'; ?>


</head>

<body>
    
    
</body>

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

$sql = "SELECT * FROM usuarios WHERE usuario like :usuario ;"; 
$result = $conn->prepare($sql); 
$result->bindValue(':usuario', $usuario, PDO::PARAM_STR);
$result->execute(); 
$fila = $result->fetch(PDO::FETCH_BOTH);







$conn->commit(); 


}

catch(PDOException $e) {
echo '{"error":{"text":'. $e->getMessage() .'}}';
}
?>

<form action="modifdatosusuario.php" method="post">
    
    <label for = "usuario"> Usuario</label>
    <input type = "text"   name = "usuario" id = "usuario" size = "30" value="<?php echo $fila[2];?>" ><br><br>
    
     <label for = "password"> Contraseña</label>
    <input type = "password"   name = "password" id = "password" size = "30" value="<?php echo $fila[3];?>" ><br><br>
    
    <label for = "nombre"> Nombre/label>
    <input type = "text"   name = "nombre" id = "nombre" size = "30" value="<?php echo $fila[4];?>" ><br><br>
   
    <label for = "apellidos"> Apellidos/label>
    <input type = "text"   name = "apellidos" id = "apellidos" size = "30" value="<?php echo $fila[5];?>" ><br><br>
    
    <label for = "mail"> Usuario/label>
    <input type = "email"   name = "mail" id = "mail" size = "30" value="<?php echo $fila[6];?>" ><br><br>
    
    <label for = "usuario"> Usuario/label>
    <input type = "text"   name = "usuario" id = "usuario" size = "30" value="<?php echo $fila[7];?>" ><br><br>
    
    <label for = "telefono"> Telefono/label>
    <input type = "text"   name = "telefono" id = "telefono" size = "30" value="<?php echo $fila[8];?>" ><br><br>
    
    <button type ="button" name="modificar">Modificar datos</button>
</form>
</html>