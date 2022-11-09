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