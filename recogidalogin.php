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
$codigo->setusuario(filter_input(INPUT_POST, 'usuario'));
$codigo ->setpassword(filter_input(INPUT_POST, 'password'));

$usuario = $codigo->usuario;
$password = $codigo->password;

$login= $codigo ->login($usuario, $password);




?>
<main>
    <div class="container">
        <h2><?php echo "Bienvenido $usuario <a href = datosusuario.php> Ver datos</a><br>";?> </h2>
        <p> Si quiere valorar un producto  <a href = valoraciones.php> Picnhe aqui</a><br> </p>
    </div>                 
</main>
                
</body>
<footer>Grupo EME Proyecto 9</footer>
</html>
