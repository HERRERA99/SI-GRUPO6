<html>
	<head>
		<title>Respuesta</title>
	</head>
	<body>
	<h1>Datos procesados</h1>
		
		<ul>
		<?PHP
			$nombre=$_POST["nombre"];
			$apellidos=$_POST["apellidos"];
			$dni=$_POST["dni"];
			
			
			
			if(file_exists("usuarios.xml")){
				$usuarios=simplexml_load_file("usuarios.xml");
				$nuevousuario=$usuarios->addchild("usuario");
				$nuevousuario->addchild("nombre",$nombre);
				$nuevousuario->addchild("apellidos",$apellidos);
				$nuevousuario->addAttribute("dni",$dni);
				if($usuarios->asXML("usuarios.xml")){
					echo"<p>Se actualizo el archivo con estos datos:</p>";
					echo "<ul>";
					echo "<li>Nombre: $nombre</li>";
					echo "<li>Apellidos: $apellidos</li>";
					echo "<li>DNI: $dni</li>";
					echo "</ul>";
				}else{
					echo"<p>No se pudo actualizar el archivo</p>";
				}
			}else{
				exit("No se pudo abrir el archivo usuarios.xml");
			}
	 	?>
		
		</ul>
		
		
	</body>
</html>