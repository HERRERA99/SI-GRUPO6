<html>
	<head>
		<link rel="stylesheet" href="formularioestilo.css">
		<title>Formulario</title>
	</head>
	<body>
	<h1>Formulario</h1>
		<form action="borrar.php" method="post">
			<fieldset>
			  <legend>Borrar usuario</legend>	 
			  
			  <div>
				<label for="dni" >DNI*</label>
				<input type="text"  id="dni" name="dni" size="10" maxlength="9" required/>
			  </div>
			  
              <input class="btn" type="submit" value="Darme de baja" />
			
            </fieldset>
		</form>
		
		
		
		
	</body>
</html>