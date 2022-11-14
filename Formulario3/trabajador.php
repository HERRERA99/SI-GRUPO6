<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>FORMULARIO TRABAJADOR</title>
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
    <form action="servidorTrabajadores.php" method="post">   
        <h1 class="tituloTrabajadores">FORMULARIO PARA TRABAJADORES</h1>

        <label for="nom">Nombre y Apellidos*</label><br>
        <input required type="text" name="nombreApellidos" id="nombreApellidos"><br>

        <label for="Fecha">Fecha de nacimiento*</label><br>
        <input required type="date" name="fechaNacimiento" id="fechaNacimiento" value="2022-10-31"/><br>

        <label for="site">Domicilio*</label><br>
        <input required type="text" name="domicilio" id="domicilio"><br>

        <label for="login">Email*</label><br>
        <input required type="email" name="email" id="email"><br>

        <label for="pass">Contraseña*</label><br>
        <input required type="password" name="password" id="password"><br>

        <label for="dni">DNI</label><br>
        <input required type="text" name="dni" id="dni"><br>

        <label for="laboral">Trayectoria laboral</label><br>
        <textarea name="trayectoriaLaboral" id="trayectoriaLaboral" cols="30" rows="10"></textarea><br>

        <label for="puesto">Puesto en la empresa</label><br>
        <select name="puestoEmpresa" id="puestoEmpresa">
            <option value="Jefe">Jefe</option>
            <option value="Sub-director">Sub-director</option>
            <option value="Secretario">Secretario</option>
            <option value="Marketing">Marketing</option>
            <option value="Publicidad">Publicidad</option>
            <option value="Mozo de almacén">Mozo de almacén</option>
            <option value="Dependiente">Dependiente</option>
        </select><br>

        <label for="dni">Foto del dni*</label><br>
        <input required type="file" name="dniFoto" id="dniFoto"><br>

        <label for="rango">Rango de satisfacción con la empresa</label>
        <input type="range" name="rango" id="rango" min="0" max="10"><br><br>

        <div class="submit">
            <input type="submit" value="Enviar" id="enviar">
        </div>
    </form>
</body>
</html>