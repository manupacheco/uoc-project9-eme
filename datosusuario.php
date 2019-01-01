<!Doctype html>
<html>
<head>
    
    <title>formulario</title> 
    <meta charset="UTF-8">
    <?php include 'session.php'; ?>
    <?php require_once ("./conexion.php");?>
    <?php include 'codigo.php';?>


</head>

<body>
    
    
</body>

<?php
 $codigo = new codigo();
 $codigo ->setusuario(filter_input(INPUT_POST, 'usuario'));
 $codigo->setpassword(filter_input(INPUT_POST, 'password'));
 $usuario = $codigo->usuario ;
 $password = $codigo->password ;
 $consulta = $codigo->seleccionar($usuario);
 

// iniciar transacción 

?>
<div class="container">
<h2>Modificar datos personales</h2> 
<form action="modifdatosusuario.php" method="post">
    
    
    <label for = "usuario"> Usuario</label>
    <input type = "text"   name = "usuario" id = "usuario" size = "30" value="<?php echo $consulta['usuario'];?>" ><br><br>
    
     <label for = "password"> Contraseña</label>
    <input type = "password"   name = "password" id = "password" size = "30" value="<?php echo $consulta[3];?>" ><br><br>
    
    <label for = "nombre"> Nombre</label>
    <input type = "text"   name = "nombre" id = "nombre" size = "30" value="<?php echo $fila[4];?>" ><br><br>
   
    <label for = "apellidos"> Apellidos</label>
    <input type = "text"   name = "apellidos" id = "apellidos" size = "30" value="<?php echo $fila[5];?>" ><br><br>
    
    <label for = "mail"> Usuario</label>
    <input type = "email"   name = "mail" id = "mail" size = "30" value="<?php echo $fila[6];?>" ><br><br>
    
    <label for = "usuario"> Usuario</label>
    <input type = "text"   name = "usuario" id = "usuario" size = "30" value="<?php echo $fila[7];?>" ><br><br>
    
    <label for = "telefono"> Telefono</label>
    <input type = "text"   name = "telefono" id = "telefono" size = "30" value="<?php echo $fila[8];?>" ><br><br>
    
    <button type ="button" name="modificar">Modificar datos</button>
</form>

</div>


</html>