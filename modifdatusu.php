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

<?php
$codigo = new codigo();

 $consulta = $codigo->seleccionar($usuario);
 
 
 
 $usuario = $_COOKIE['usuario'];
 $password = (filter_input(INPUT_POST, 'password'));
 $nombre = (filter_input(INPUT_POST, 'nombre'));
 $apellidos = (filter_input(INPUT_POST, 'apellidos'));
 $mail = (filter_input(INPUT_POST, 'mail'));
 $telefono = (filter_input(INPUT_POST, 'telefono'));
 $foto = (filter_input(INPUT_POST, 'foto'));
 $fecha_modificacion = "NOW()";
 switch ((filter_input(INPUT_POST, 'Enviar1')) || (filter_input(INPUT_POST, 'Enviar2'))) {
         
          case true: 
                 if  ((filter_input(INPUT_POST, 'Enviar1'))) { 
             
             $consulta3 = $codigo->update($usuario, $password, $nombre,$apellidos,$mail,$telefono, $foto, $fecha_modificacion);
             echo "Datos modificados correctamente";
             
            }
            if ((filter_input(INPUT_POST, 'Enviar2'))) { 
             
             $consulta2 = $codigo->delete($usuario);
             echo 'Datos borrados'; 
         }

              break;

            default:
                
              break;
      }
         
     
         

         
         
         ?>
    <p>Para volver a la página de inicio<a href = index.php> Click aqui</a><br></p>

</body>