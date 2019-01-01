

<!doctype html>
<html lang="es">
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
                
                
                
                
    
        <h2><br>Sonido</h2><br><br>
                   
                   
        <?php
			
			include("conexion.php");
			
			$sql="SELECT titulo FROM productos INNER JOIN categorias ON productos.IdProducto = categorias.IdProducto2";
			$result = $conn->prepare($sql);
                        $result->execute(); 
                        $result->fetch(PDO::FETCH_BOTH);
                        
			while($producto = $result){
				
			
					
			echo		"<a href='detalle.php' style='text-decoration: none'><p><img src='img/boton_verde.jpg' width='25' height='25'/>&nbsp &nbsp ".$producto['titulo']."</p></a><br>";
	
				
			}
				
			
			
			
			
		?>
                   

                   <!--<div id="lista">
                   	
                   	
                   	<a href="detalle.php" style="text-decoration: none"><p><img src="img/boton_azul.jpg" width="25" height="25"/>&nbsp &nbsp Producto 1 sonido</p></a><br>
                   	<a href="detalle.php" style="text-decoration: none"><p><img src="img/boton_azul.jpg" width="25" height="25"/>&nbsp &nbsp Producto 2 sonido</p></a><br>
                   	<a href="detalle.php" style="text-decoration: none"><p><img src="img/boton_azul.jpg" width="25" height="25"/>&nbsp &nbsp Producto 3 sonido</p></a>
                   	
                   </div>-->

                   
                   
                   
            </div>  
            
  <body>
</html>