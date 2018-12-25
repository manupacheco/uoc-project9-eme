<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <?php include 'partials/css-imports.php'; ?>  
        <link href="estilos_categorias.css" rel="stylesheet">
       
    </head>
    
    <body>
        <div class="row">
                 <div class="col-12"> 
                    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
                    <a class="navbar-brand" href="index.php">Grupo EME</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#inicio" aria-controls="barracolapsa" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="inicio">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                      <li class="nav-item">
                          <a class="nav-link" href="index.php">Inicio</a> 
                      </li>
                      <li class="nav-item">
                      <a class="nav-link" href="categorias.php">Categorías</a>
                      </li>
                      
                      
<!-- El enlace a la administración no debe estar disponible en la pantalla de registro cuando aún no hemos abierto sesión.
                      <li class="nav-item">
                      <a class="nav-link" href="administracion.html">Administración</a>
                      </li>
-->
                    </ul>
                      
    </div>
    </nav>
  </div>
            
            <h1 align="center" ><br>CATEGORÍAS</h1>
                       
                   <div id="categorias" class="col-12" align="center">
                       <ul>
                   	
                       <a href="electronica.php" style="text-decoration: none"><p><img src="img/boton_verde.jpg" width="25" height="25"/>&nbsp &nbsp ELECTRONICA</p></a><br>
                   	<a href="hogar.php" style="text-decoration: none"><p><img src="img/boton_verde.jpg" width="25" height="25"/>&nbsp &nbsp SONIDO</p></a><br>
                   	<a href="sonido.php" style="text-decoration: none"><p><img src="img/boton_verde.jpg" width="25" height="25"/>&nbsp &nbsp HOGAR</p></a>
                       </ul>
                   </div>
                       
                   
                   
                   
            </div>             
    </body>
</html>
