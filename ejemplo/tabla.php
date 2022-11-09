<html>
	<head>
		<title>Tabla</title>
	</head>
	<body>
	<h1>Contenido de la especifiacion XML</h1>
			
		<?PHP
							
			
			if(file_exists("usuarios.xml")){
				$usuarios=simplexml_load_file("usuarios.xml");
				echo"<table border=\"2\">";
						echo"<tr><th>DNI</th><th>Nombre</th><th>Apellidos</th></tr>";
				foreach($usuarios->usuario as $usuario){																	
					echo"<tr><td>$usuario[dni]</td><td>$usuario->nombre</td><td>$usuario->apellidos</td></tr>";									
					
				}
				echo"</table>";
				
			}else{
				exit("No se pudo abrir el archivo usuarios.xml");
			}
	 	?>
		
	
		
		
	</body>
</html>



echo "<table class=\"tabla\" border=\"1\" cellpading=\"7\" cellspacing=\"8\">";
						echo"<tr> <td class=\"encabezadosTabla\"> DNI </td> <td class=\"encabezadosTabla\"> NOMBRE Y APELLIDOS </td> <td class=\"encabezadosTabla\"> FECHA DE NACIMIENTO </td> <td class=\"encabezadosTabla\"> DOMICILIO </td> <td class=\"encabezadosTabla\"> EMAIL </td> <td class=\"encabezadosTabla\"> CONTRASEÑA</td> <td class=\"encabezadosTabla\"> TRAYECTORIA LABORAL</td> <td class=\"encabezadosTabla\"> PUESTO EN LA EMPRESA </td> <td class=\"encabezadosTabla\"> FOTO PERSONAL</td> <td class=\"encabezadosTabla\"> SATISFACCIÓN CON LA EMPRESA</td>  </tr>";
				