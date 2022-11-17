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
    <form action="servidorBusca.php" method="post">   
        <h1 class="tituloTrabajadores">BUSCA CLIENTES</h1>

        <label for="colorFiltro">COLOR</label><br>
        <input type="text" name="colorFiltro" id="colorFiltro"><br><br>

        <label for="marcaFiltro">MARCA</label><br>
        <input type="text" name="marcaFiltro" id="marcaFiltro"><br><br>

        <div class="submit">
            <input type="submit" value="Enviar" id="enviar">
        </div>
        
</body>