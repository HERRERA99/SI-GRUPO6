<html>
	<head>
		<link rel="stylesheet" href="formularioestilo.css">
		<title>Formulario</title>
	</head>
	<body>
	<h1>Formulario</h1>
		<form action="servidor.php" method="post">
			<fieldset>
			  <legend>Alta en el servicio</legend>	 
			  <div>
				<label for="nombre" >Nombre*</label>
				<input type="text" placeholder="nombre" id="nombre"  name="nombre" required/>
			 </div>
			  <div>
				<label for="apellidos">Apellidos*</label>
				<input type="text"  placeholder="apellidos" id="apellidos" name="apellidos" size="50" required/>
			  </div>
			  <div>
				<label for="dni" >DNI*</label>
				<input type="text"  id="dni" name="dni" size="10" maxlength="9" required/>
			  </div>
			  <div>
				<label for="contrasena">Password*</label>
				<input type="password" id="contrasena" name="contrasena" required/>
			  </div>
			 
				<input class="btn" type="submit" value="Darme de alta" />
			 
			</fieldset>
		</form>
		
		
		
		
	</body>
</html>