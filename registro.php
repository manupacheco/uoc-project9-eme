<html>
    <head>
        <?php include 'partials/css-imports.php'; ?> 
    </head>
    <body>
          <div class="row">
                 <div class="col-12"> 
                    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
                    <a class="navbar-brand" href="index.html">Grupo EME</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#inicio" aria-controls="barracolapsa" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="inicio">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                      <li class="nav-item">
                          <a class="nav-link" href="index.html">Inicio</a> 
                      </li>
                      <li class="nav-item">
                      <a class="nav-link" href="categorias.html">Categorías</a>
                      </li>
                      
                      <li class="nav-item">
                      <a class="nav-link" href="contacto.php">Contacto</a>
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
              
              </div>
                   <div class="row mt2">
                   <div class="col-12 text-center">
                        <h1 id="formulario_registro">Formulario de Registro</h1>
                    </div>
                    </div>
                   <div class="row mt-2">
                      <div class="col-12">
                       <form name="fvalida" enctype="multipart/form-data" action="recogidaregistro.php" method="post" onsubmit="return validarForm()">
                         <div class="form-group col-centrar">
                               <input type="text" class="form-control" name="nombre_usuario" id="nombre_usuario" placeholder="Introduzca su nombre" required>
                              <input type="text" class="form-control" name="apellidos" id="apellidos" placeholder="Introduzca sus apellidos" aria-describedby="namehelp" required>
                              <small id="namehelp" class="form-text text-muted">Su nombre y apellidos no serán visibles para el resto de usuarios.</small>
                    
                           </div>
                        
                        
                        
                        
                            <input type="tel" class="form-control" name="telefono" id="telefono" placeholder="Teléfono" required>
                            <input type="email" class="form-control" name="email" id="email" placeholder="E-mail" required>
                            <label for="foto">Foto:</label>
                            <input type="file" class="form-control" name="foto" id="foto">
                        
                        
                           <div class="form-group">
                            <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Introduzca su nombre de usuario" required>
                            <input type="password" class="form-control" name="password" name="password" id="password" placeholder="Introduzca su contraseña" required>
                            <input type="password" class="form-control" name="password2" id="password2" placeholder="Repita la contraseña" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Enviar</button><button type="reset" class="btn btn-warning ml-1">Limpiar</button>
                        </div>
                       </form>
                       </div>
                       </div>
        </div>
    </body>
</html>
 

