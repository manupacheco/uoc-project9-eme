<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include 'partials/css-imports.php'; ?>
    <title>MVALORACIONES</title>
  </head>
  <body>
    <main>
      <?php include 'partials/navbar.php'; ?>
      <content class="container">
        <div class="welcome-info">
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odit corrupti iusto expedita delectus illo obcaecati eaque error, veritatis aliquid et sed accusamus a temporibus, numquam aperiam, nostrum exercitationem facilis culpa.
        </div>
        <div class="filters">
          <div id="categories" class="dropdown">
            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Categorias
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </div>
          <div id="price" class="dropdown">
            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Price
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </div>
          <div id= "reates" class="dropdown">
            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Valoracion
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </div>
        </div>
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
    <?php include 'partials/footer.php'; ?>
  </body>
</html>