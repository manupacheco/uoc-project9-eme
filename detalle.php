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

<h1><br>DETALLE</h1>
			
		<h2><br>PRODUCTO: <?php echo $row[2] ; ?>&nbsp &nbsp PRECIO:<?php echo $row[1]."€" ; ?> </h2>	
			
			
		<div id="detalle">	
			<div id="tabla">
			<table width="95%" border="0" cellspacing="0" cellpadding="1"> 
				<tr bgcolor="#990033" align="center"> 
					<td><b><font color="#FFFFFF">Características del producto</font></b></td> 
				</tr> 
				<tr bgcolor="#990033"> 
					<td> 
						<table width="100%" border="0" cellspacing="0" cellpadding="4"> 
							<tr bgcolor="#FFFFFF"> 
								
								<td><img src="img/imagen_producto.jpg" width="100" height="100"/></td>
								
								<!--Características propias del producto-->
								<td> <?php echo $row[3] ; ?></td> 
							</tr> 
						</table> 
					</td> 
				</tr> 
			</table>
            </div>





 </body>
</html>

