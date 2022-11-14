<html>
	<head>
		<link rel="stylesheet" href="index.css">
		<title>Formulario</title>
	</head>

    <header>
        <div class="container">
            <img src="logo.png" class="logo">
            <h1 class="logo">
                LA SUPERMODA
            </h1>
        </div>
    </header>


	<body>
		<form action="borrarTrabajador.php" method="post" class="borrar">
            <h1 class="tituloTrabajadores">FORMULARIO PARA TRABAJADORES</h1>

            <label for="dni">DNI</label><br>
            <input required type="text" name="dni" id="dni"><br>

            <div class="submit">
                <input type="submit" value="ENVIAR" id="enviar">
            </div>
        </form>
	</body>
</html>