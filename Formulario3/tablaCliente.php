<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Practica Sistemas de la Información</title>
    <link rel="stylesheet" type="text/css" href="index.css"/>
</head>

    <header>
        <div class="container">
            <img src="logo.png" class="logo">
            <h1 class="logo">
                LA SUPERMODA
            </h1>
        </div>
    </header>
    
    <body class="fondo">
        
    <?PHP
			if(file_exists("clientes.xml")){
				$clientes=simplexml_load_file("clientes.xml");
                
                echo "<table class=\"tabla\" border=\"1\" cellpading=\"7\" cellspacing=\"8\">";
                echo"<tr> <td class=\"encabezadosTabla\"> DNI </td> <td class=\"encabezadosTabla\"> NOMBRE</td> <td class=\"encabezadosTabla\">APELLIDO 1</td> <td class=\"encabezadosTabla\"> APELLIDO 2 </td> <td class=\"encabezadosTabla\"> EMAIL </td> <td class=\"encabezadosTabla\"> DIRECCIÓN</td> <td class=\"encabezadosTabla\"> TELEFONO</td> <td class=\"encabezadosTabla\"> COLOR FAVORITO </td> <td class=\"encabezadosTabla\"> MARCA FAVORITA</td> <td class=\"encabezadosTabla\"> FECHA DE NACIMIENTO</td>  </tr>";
                foreach($clientes->nuevoCliente as $cliente){																	
                    echo"<tr><td>$cliente[dni]</td><td>$cliente->nombre</td><td>$cliente->apellido1</td><td>$cliente->apellido2</td><td>$cliente->correo</td><td>$cliente->direccion</td><td>$cliente->telefono</td><td>$cliente->colorFav</td><td>$cliente->marcaFav</td><td>$cliente->fechaNacimiento</td></tr>";									
					
				}
				echo"</table>";
				
			}else{
				exit("No se pudo abrir el archivo usuarios.xml");
			}
	 	?>
    </body>
    
</html>