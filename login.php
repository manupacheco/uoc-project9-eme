<html>
    <head>
        <?php include 'partials/css-imports.php'; ?>
    </head>
    <body>
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