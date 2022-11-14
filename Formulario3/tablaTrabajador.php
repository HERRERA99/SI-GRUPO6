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
			if(file_exists("trabajadores.xml")){
				$trabajadores=simplexml_load_file("trabajadores.xml");
                
                echo "<table class=\"tabla\" border=\"1\" cellpading=\"7\" cellspacing=\"8\">";
                echo"<tr> <td class=\"encabezadosTabla\"> DNI </td> <td class=\"encabezadosTabla\"> NOMBRE Y APELLIDOS </td> <td class=\"encabezadosTabla\"> FECHA DE NACIMIENTO </td> <td class=\"encabezadosTabla\"> DOMICILIO </td> <td class=\"encabezadosTabla\"> EMAIL </td> <td class=\"encabezadosTabla\"> CONTRASEÑA</td> <td class=\"encabezadosTabla\"> TRAYECTORIA LABORAL</td> <td class=\"encabezadosTabla\"> PUESTO EN LA EMPRESA </td> <td class=\"encabezadosTabla\"> FOTO PERSONAL</td> <td class=\"encabezadosTabla\"> SATISFACCIÓN CON LA EMPRESA</td>  </tr>";
				
                foreach($trabajadores->nuevoTrabajador as $trabajador){																	
                    echo"<tr><td>$trabajador[dni]</td><td>$trabajador->nombreApellidos</td><td>$trabajador->fechaNacimiento</td><td>$trabajador->domicilio</td><td>$trabajador->email</td><td>$trabajador->password</td><td>$trabajador->trayectoriaLaboral</td><td>$trabajador->puestoEmpresa</td><td>$trabajador->dniFoto</td><td>$trabajador->rango</td></tr>";									
					
				}
				echo"</table>";
				
			}else{
				exit("No se pudo abrir el archivo usuarios.xml");
			}
	 	?>
    </body>
    
</html>