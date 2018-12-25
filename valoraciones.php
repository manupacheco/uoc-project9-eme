<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <?php include 'partials/css-imports.php'; ?>
        <?php include "selec_producto.php";  ?>
    
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
        
        <content class="container">
          <ul> 
          
          <img src=img/<?php echo $row[0]?> width="100"/>  <br>
          <p> <?php echo $row[2] ; ?> </p><br>
    
          </ul>   
          
           
            <form action="valorar_producto.php" method="post">
                
            <label for = "puntuacion"> Elije la puntuacion</label>
            <select name = "puntuacion" id = "puntuacion" required >
            <option value = "1"> 1 </option>
            <option value = "2"> 2 </option>
            <option value = "3" > 3 </option> 
            <option value = "4"> 4 </option> 
            <option value = "5" selected> 5 </option> 
            <option value = "6"> 6 </option> 
            <option value = "7"> 7 </option> 
            <option value = "8"> 8 </option> 
            <option value = " 9"> 9  </option> 
            <option value = "10"> 10 </option> 
            
        
              </select> <br><br> 
        
            <label for = "comentario"> Ingrese su comentario </label>
            <input type = "text" placeholder = "Escriba su comentario" maxlength = "200" name = "comentario" id = "comentario" size = "100" ><br><br>
                
            <button type="submit" style="margin-top: 10%" name="valorar" class="btn btn-success">Valorar</button>
            </form> 
      </content>
    </main>
        
    </body>
</html>

<?php

