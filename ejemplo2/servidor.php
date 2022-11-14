<html>
	<head>
		<title>Respuesta</title>
	</head>
	<body>
	<h1>Datos procesados</h1>
		
		
		<?PHP
			$nombre=$_POST["nombre"];
			$apellidos=$_POST["apellidos"];
			$dni=$_POST["dni"];
			
			
			
			if(file_exists("usuarios.xml")){
				$encontrado=FALSE;
				$usuarios=simplexml_load_file("usuarios.xml");
				
				foreach($usuarios->usuario as $usuario){
					if ($usuario["dni"]==$dni){
						$encontrado=TRUE;
						echo"<p>No se puede insertar el elemento. Se encontró un usuario con estos datos:</p>";
						echo "<ul>";
							echo "<li>Nombre: ".$usuario->nombre."</li>";
							echo "<li>Apellidos: ".$usuario->apellidos."</li>";
							echo "<li>DNI: ".$usuario["dni"]."</li>";
						echo "</ul>";
						echo"<p>Debe dar de baja al usuario previamente si desea insertar uno con ese DNI</p>";
						
					}
				}

				if(!$encontrado){
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

				}
				
				
			}else{
				exit("No se pudo abrir el archivo usuarios.xml");
			}
	 	?>
		
		
	</body>
</html>