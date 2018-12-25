<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include 'partials/css-imports.php'; ?>
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
                    <a class="navbar-brand" href="index.html">Grupo EME</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#inicio" aria-controls="barracolapsa" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="inicio">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                      <li class="nav-item active">
                      <a class="nav-link" href="index.html">Inicio <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                       <a class="nav-link" href="categorias.php">Categorías</a>
                      </li>
                      
                      <li class="nav-item">
                      <a class="nav-link" href="contacto.php">Contacto</a>
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
    
        <ul>
          <?php 
            foreach (['Uno', 'Dos', 'Tres'] as $product){
              echo "<li class='row prod'>";
              echo  "<div class='prod-image col-sm'>";
              echo   "<img src='https://images.unsplash.com/photo-1527527753602-fb58e749276a?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=ef70f382036e43544a8b3303363adb03&auto=format&fit=crop&w=3350&q=80' alt='foto'>";
              echo  "</div>";
              echo  "<div class='prod-info col-sm'>";
              echo    "<h3>Producto " . $product ."</h3>";
              echo    "<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam, itaque. Officiis similique consequuntur quibusdam libero. Enim numquam iure maiores, deleniti ut, aliquid ea ducimus consequuntur consectetur amet magni voluptate deserunt?</p>";
              echo    "<div class='rate'>";
              echo      "<div class='stars'>";
              echo        "<i class='fas fa-star'></i>";
              echo        "<i class='fas fa-star'></i>";
              echo        "<i class='fas fa-star'></i>";
              echo        "<i class='fas fa-star'></i>";
              echo        "<i class='far fa-star'></i>";
              echo      "</div>";
              echo      "<button class='btn btn-outline-dark'>...</button>";
              echo    "</div>";
              echo  "</div>";
              echo "</li>";
            }
          ?>
        </ul>
      </content>
    </main>

  </body>
</html>