<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    
    <?php include 'partials/css-imports.php'; ?>
   <?php include "selec_producto.php";  ?>
    <title>MVALORACIONES</title>
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
                      <form class="form-inline my-2 my-lg-0">
                       <button type="button" name="registro" class="btn btn-outline-warning mx-4" onclick="location.href='registro.php'">Registrarse</button>
                        <button type="button" name="login" class="btn btn-outline-success" onclick="location.href='login.php'">Iniciar Sesión</button>
                    </form>
                      
    </div>
    </nav>
  </div>
    <main>
   
      <content class="container">
          <div > 
         <?php foreach ($result as $row){
   
 
            ?>
          <img src=img/<?php echo $row[0]?> width="100"/>  <br>
        <p>    <?php echo $row[2] ; ?></p> <br>
        <p>   <?php echo $row[1] ; ?>  euros</p><br>
        <p>   <?php echo $row[3] ; ?></p> <br>
        <p>   <?php echo $row['descripcion'] ; ?> </p><br>
    
          </div>   <?php
          }
         
          ?>
          
      </content>
    </main>

  </body>
</html>
