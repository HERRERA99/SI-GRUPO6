<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="index.css"/>
    <title>Practica Sistemas de la Información</title>
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
    <form action="servidorClientes.php" method="post">
            <h1 class="tituloTrabajadores">Registro de Cliente</h1>

            <label for="Nombre">Nombre*:</label><br>
            <input required type="text" name="nombre" id="nombre"><br><br>
            <label for="apellido1">Apellido1*:</label><br>
            <input required type="text" name="apellido1" id="apellido1"><br><br>
            <label for="apellido2">Apellido2*:</label><br>
            <input required type="text" name="apellido2" id="apellido2"><br><br>
            <label for="Correo">Correo Electronico*:</label><br>
            <input required type="email" name="correo" id="Correo"><br><br>
            <label for="dni">DNI*:</label><br>
            <input required pattern="[0-9]{8}[A-Za-z]" type="text" name="dni" id="dni"><br><br>
            <label for="direccion">Domicilio:</label><br>
            <input type="text" name="direccion" id="Direccion"><br><br>
            <label for="Telefono">Numero de Telefono:</label><br>
            <input pattern="[0-9]{9}" type="text" name="telefono" id="Telefono"><br><br>
            <label for="color">Color favorito:</label><br>
            <input type="text" name="colorFav" id="color"><br><br>
            <label for="Marca">Marca favorita:</label><br>
            <input type="text" name="marcaFav" id="Marca"><br><br>
            <label for="edad">Fecha Nacimiento:</label>
            <input type="date" name="fechaNacimiento" id="edad"><br><br>
            <div class="submit">
                <input type="submit" value="Enviar" id="enviar">
            </div>
        </form> 
    </body>
    </html>