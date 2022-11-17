<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>BUSCADOR DE CLIENTES</title>
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

    <form action="servidorBuscador.php" method="post">   
        <h1 class="tituloTrabajadores">BUSCA LOS CLIENTES POR MARCA Y COLOR DE ROPA</h1>

        <label for="color">COLOR A BUSCAR</label><br>
            <select name="color" id="color">
                <option value="Rojo">ROJO</option>
                <option value="Azul">AZUL</option>
                <option value="Verde">VERDE</option>
                <option value="Amarillo">AMARILLO</option>
                <option value="Morado">MORADO</option>
                <option value="Blanco">BLANCO</option>
                <option value="Negro">NEGRO</option>
        </select><br><br>

        <label for="marca">MARCA A BUSCAR</label><br>
            <select name="marca" id="marca">
                <option value="Adidas">ADIDAS</option>
                <option value="Nike">NIKE</option>
                <option value="Fila">FILA</option>
                <option value="Volcom">VOLCOM</option>
                <option value="Puma">PUMA</option>
                <option value="Castore">CASTORE</option>
                <option value="PepeJeans">PEPE-JEANS</option>
        </select><br><br>

        <div class="submit">
            <input type="submit" value="Enviar" id="enviar">
        </div>

    </form>

</body>
</html>