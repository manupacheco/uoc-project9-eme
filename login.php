<html>
    <head>
        <?php include 'partials/css-imports.php';include 'session.php'; ?>
       
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
                      <li class="nav-item active">
                      <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                       <a class="nav-link" href="categorias.php">Categorías</a>
                      </li>
                      <?php
						if($usuario==NULL){
							echo "<li class='nav-item'>";
                      echo "<a class='nav-link disabled' href='cerrar.php'>Logout</a>";							
                      echo "</li>";
                        } else {
							echo "<li class='nav-item '>";
                      echo "<a class='nav-link' href='cerrar.php'>Cerrar</a>";
                      echo "</li>";
                        }
						?>
<!-- El enlace a la administración no debe estar disponible en la pantalla de login cuando aún no hemos abierto sesión.
                      <li class="nav-item">
                      <a class="nav-link" href="administracion.php">Administración</a>
                      </li>
-->
                    </ul>
                      
                    </ul>
                      <form class="form-inline my-2 my-lg-0">
                       <button type="button" name="registro" class="btn btn-outline-warning mx-4" onclick="location.href='registro.php'">Registrarse</button>
                        <button type="button" name="login" class="btn btn-outline-success" onclick="location.href='login.php'">Iniciar Sesión</button>
                    </form>
                      
    </div>
    </nav>
  </div>
             
             
             
             
                        <h1><br>INICIAR SESIÓN</h1>
                       
                       <div id="formulario_login" class="modal-body">
		<center><table>
				
                        <form action="recogidalogin.php" method="post" class="form-group">
				<tr><td><center><strong>Usuario:</strong>     <input type="text" name="usuario" id="usuario" style=" text-align: center; margin: 0px auto;border-radius: 10px 10px 10px 10px;moz-border-radius: 10px 10px 10px 10px;webkit-border-radius:10px 10px 10px 10px;border: 1px solid #000000;"></center></td></tr>
				<tr><td><center><strong>Password:</strong>     <input type="password" name="password" id="password" style=" text-align: center; margin: 0px auto;border-radius: 10px 10px 10px 10px;moz-border-radius: 10px 10px 10px 10px;webkit-border-radius:10px 10px 10px 10px;border: 1px solid #000000;"></center></td></tr>
				<tr><td><center> <button type="submit" style="margin-top: 10%" name="login" class="btn btn-success">Acceder</button></center></td></tr>
				
				</form>
		</table></center>
			
	</div>
    </body>
</html>