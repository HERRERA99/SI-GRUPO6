<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="index.css"/>
    <title>Servidor filtro</title>
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
    <div style="margin:50px">
        <?php
            $colorFiltro = $_POST["colorFiltro"];
            $marcaFiltro = $_POST["marcaFiltro"];
            $clientesTodo = array();
            $clientesMarca = array();
            $clientesColor = array();
            $todo = FALSE;
            $color = FALSE;
            $marca = FALSE;

            if(file_exists("clientes.xml")){
                $clientes=simplexml_load_file("clientes.xml");
                echo"<p>Filtros de busqueda seleccionados:</p>";
                        echo "<ul>";
                        echo "<li>Color a buscar: <b>$colorFiltro</b></li>";
                        echo "<li>Marca a buscar: <b>$marcaFiltro</b></li>";
                echo "</ul>";

                foreach($clientes->nuevoCliente as $cliente){
                    if($cliente->colorFav==$colorFiltro && $cliente->marcaFav==$marcaFiltro){
                        array_push($clientesTodo,$cliente);
                        $todo = TRUE;
                    }else if($cliente->marcaFav == $marcaFiltro){
                        array_push($clientesMarca,$cliente);
                        $marca = TRUE;
                    }else if($cliente->colorFav == $colorFiltro){
                        array_push($clientesColor,$cliente);
                        $color =TRUE;
                    }
                }

                if($todo){
                    echo "<h1>CLIENTES QUE COINCIDEN CONTIGO EN TODO</h1>";
                    echo "<table class=\"tabla\" border=\"1\" cellpading=\"7\" cellspacing=\"8\">";
                    echo"<tr> <td class=\"encabezadosTabla\"> DNI </td> <td class=\"encabezadosTabla\"> NOMBRE</td> <td class=\"encabezadosTabla\">APELLIDO 1</td> <td class=\"encabezadosTabla\"> APELLIDO 2 </td> <td class=\"encabezadosTabla\"> EMAIL </td> <td class=\"encabezadosTabla\"> DIRECCIÓN</td> <td class=\"encabezadosTabla\"> TELEFONO</td> <td class=\"encabezadosTabla\"> COLOR FAVORITO </td> <td class=\"encabezadosTabla\"> MARCA FAVORITA</td> <td class=\"encabezadosTabla\"> FECHA DE NACIMIENTO</td>  </tr>";
                    foreach($clientesTodo as $cliente){
                        echo"<tr><td>$cliente[dni]</td><td>$cliente->nombre</td><td>$cliente->apellido1</td><td>$cliente->apellido2</td><td>$cliente->correo</td><td>$cliente->direccion</td><td>$cliente->telefono</td><td>$cliente->colorFav</td><td>$cliente->marcaFav</td><td>$cliente->fechaNacimiento</td></tr>";									
                    }
                    echo"</table>";
                }
                if($color){
                    echo "<h1>CLIENTES QUE COINCIDEN CONTIGO EN EL COLOR</h1>";
                    echo "<table class=\"tabla\" border=\"1\" cellpading=\"7\" cellspacing=\"8\">";
                    echo"<tr> <td class=\"encabezadosTabla\"> DNI </td> <td class=\"encabezadosTabla\"> NOMBRE</td> <td class=\"encabezadosTabla\">APELLIDO 1</td> <td class=\"encabezadosTabla\"> APELLIDO 2 </td> <td class=\"encabezadosTabla\"> EMAIL </td> <td class=\"encabezadosTabla\"> DIRECCIÓN</td> <td class=\"encabezadosTabla\"> TELEFONO</td> <td class=\"encabezadosTabla\"> COLOR FAVORITO </td> <td class=\"encabezadosTabla\"> MARCA FAVORITA</td> <td class=\"encabezadosTabla\"> FECHA DE NACIMIENTO</td>  </tr>";
                    foreach($clientesColor as $cliente){
                        echo"<tr><td>$cliente[dni]</td><td>$cliente->nombre</td><td>$cliente->apellido1</td><td>$cliente->apellido2</td><td>$cliente->correo</td><td>$cliente->direccion</td><td>$cliente->telefono</td><td>$cliente->colorFav</td><td>$cliente->marcaFav</td><td>$cliente->fechaNacimiento</td></tr>";									
                    }
                    echo"</table>";
                }
                if($marca){
                    echo "<h1>CLIENTES QUE COINCIDEN CONTIGO EN LA MARCA</h1>";
                    echo "<table class=\"tabla\" border=\"1\" cellpading=\"7\" cellspacing=\"8\">";
                    echo"<tr> <td class=\"encabezadosTabla\"> DNI </td> <td class=\"encabezadosTabla\"> NOMBRE</td> <td class=\"encabezadosTabla\">APELLIDO 1</td> <td class=\"encabezadosTabla\"> APELLIDO 2 </td> <td class=\"encabezadosTabla\"> EMAIL </td> <td class=\"encabezadosTabla\"> DIRECCIÓN</td> <td class=\"encabezadosTabla\"> TELEFONO</td> <td class=\"encabezadosTabla\"> COLOR FAVORITO </td> <td class=\"encabezadosTabla\"> MARCA FAVORITA</td> <td class=\"encabezadosTabla\"> FECHA DE NACIMIENTO</td>  </tr>";
                    foreach($clientesMarca as $cliente){
                        echo"<tr><td>$cliente[dni]</td><td>$cliente->nombre</td><td>$cliente->apellido1</td><td>$cliente->apellido2</td><td>$cliente->correo</td><td>$cliente->direccion</td><td>$cliente->telefono</td><td>$cliente->colorFav</td><td>$cliente->marcaFav</td><td>$cliente->fechaNacimiento</td></tr>";									
                    }
                    echo"</table>";
                }
                if(!$marca && !$color && !$todo){
                    echo "<h1>NO HAY NADIE QUE COINCIDA CON TUS GUSTOS</h1>";
                    echo "<form action=\"indexBuscaCliente.php\" style=\"padding-top: 20px\"><button>Cambia los filtros</button></form>";
                }


            }else{
                exit("No se pudo abrir el archivo clientes.xml");
            }


        ?>
    </div>
</body>
</html>