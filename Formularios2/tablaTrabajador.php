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
                
                echo"<table border=\"2\">";
				echo"<tr><th>DNI</th><th>Nombre y apellidos</th><th>Fecha de nacimiento</th></th><th>Domicilio</th><th>Email</th><th>Contraseña</th><th>Trayectoría laboral</th><th>Puesto en la empresa</th><th>Foto del DNI</th><th>Grado de felicidad con la empresa</th></tr>";

                foreach($trabajadores->trabajador as $trabajador){																	
                    echo"<tr><td>$trabajador[dni]</td><td>$trabajador->nombreApellidos</td><td>$trabajador->fechaNacimiento</td><td>$trabajador->domicilio</td><td>$trabajador->email</td><td>$trabajador->password</td><td>$trabajador->trayectoriaLaboral</td><td>$trabajador->puestoEmpresa</td><td>$trabajador->dniFoto</td><td>$trabajador->rango</td></tr>";									
					
				}
				echo"</table>";
				
			}else{
				exit("No se pudo abrir el archivo usuarios.xml");
			}
	 	?>
    </body>
    
</html>