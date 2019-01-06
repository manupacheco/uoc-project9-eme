<!Doctype html>
<html lang ="es">
<head>
    
    <title>formulario</title> 
    <meta charset="UTF-8">
    <?php include 'session.php'; ?>
    <?php require_once ("./conexion.php");?>
    <?php include 'codigo.php';?>
    <?php include 'partials/css-imports.php'; ?>
   


</head>

<body>
    
<div class="row">
                <div class="col-12">
                    <img src="img/logo.png" class="img-rounded img-fluid float-center enter" title="Logo eme" alt="Logo eme" />
                </div>
            </div>
        
            <!-- El siguiente renglón de la rejilla será el menú de navegación -->
            <div class="row">
                 <div class="col-12"> 
                    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
                    <a class="navbar-brand" href="index.php">Grupo EME</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#inicio" aria-controls="barracolapsa" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="inicio">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                      <li class="nav-item active">
                      <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                       <a class="nav-link" href="categorias.php">Categorías</a>
                      </li>
                      
                      
                    </ul>
                      
                      
    </div>
    </nav>
  </div>    


<?php
 $codigo = new codigo();

 $consulta = $codigo->seleccionar($usuario);
 
 $usuario = $_COOKIE['usuario'];
 $password = (filter_input(INPUT_POST, 'password'));
 $nombre = (filter_input(INPUT_POST, 'nombre'));
 $apellidos = (filter_input(INPUT_POST, 'apellidos'));
 $mail = (filter_input(INPUT_POST, 'mail'));
 $telefono = (filter_input(INPUT_POST, 'telefono'));
 $foto = (filter_input(INPUT_POST, 'foto'));
 $fecha_modificacion = "NOW()";
 

// iniciar transacción 

?>
<main>
<div class="formulario">
<h2>Modificar datos personales</h2> 
<form action="modifdatusu.php" method="post">
    
    
    <label for = "usuario"> Usuario</label>
    <input type = "text"   name = "usuario" id = "usuario" size = "30" value="<?php echo $consulta[2];/*$consulta['usuario'];*/?>" ><br><br>
    
     <label for = "password"> Contraseña</label>
    <input type = "password"   name = "password" id = "password" size = "30" value="<?php echo $consulta[3];?>" ><br><br>
    
    <label for = "nombre"> Nombre</label>
    <input type = "text"   name = "nombre" id = "nombre" size = "30" value="<?php echo $consulta[4];?>" ><br><br>
   
    <label for = "apellidos"> Apellidos</label>
    <input type = "text"   name = "apellidos" id = "apellidos" size = "30" value="<?php echo $consulta[5];?>" ><br><br>
    
    <label for = "mail"> Email</label>
    <input type = "email"   name = "mail" id = "mail" size = "30" value="<?php echo $consulta[6];?>" ><br><br>
    
    <label for = "usuario"> Telefono</label>
    <input type = "text"   name = "telefono" id = "telefono" size = "30" value="<?php echo $consulta[7];?>" ><br><br>
    
    <label for = "foto"> Foto</label>
    <input type = "file"   name = "foto" id = "foto" size = "30" value="<?php echo $consulta[8];?>" ><br><br>
    
    <button type ="submit" value = "Modificar datos"id = "Enviar1" name="Enviar1">Modificar datos</button>
    <button type ="submit" value = "Eliminar datos" id = "Enviar2" name="Enviar2">Eliminar datos</button>
</form>


</div>
</main>
</body>
<footer>Grupo EME Proyecto 9</footer>
</html>Proyecto 9</footer>
</html>
