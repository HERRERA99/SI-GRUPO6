<html>
	<head>
		<title>Borrar</title>
	</head>
	<body>
	<h1>Datos borrados</h1>
		
		
		<?PHP
			
			$dni=$_POST["dni"];
			
			
			
			if(file_exists("usuarios.xml")){
				$encontrado=-1;
				$usuarios=simplexml_load_file("usuarios.xml");
				$contador = -1; 
				foreach($usuarios->usuario as $usuario){
                    $contador++;;
					if ($usuario["dni"]==$dni){
						$encontrado=$contador;
                        echo"<p> Se encontró un usuario con estos datos:</p>";
						echo "<ul>";
							echo "<li>Nombre: ".$usuario->nombre."</li>";
							echo "<li>Apellidos: ".$usuario->apellidos."</li>";
							echo "<li>DNI: ".$usuario["dni"]."</li>";
						echo "</ul>";
						
                       
						
						
					}
				}

				if($encontrado>=0){
                        unset($usuarios->usuario[$encontrado]);                        
                        if($usuarios->asXML("usuarios.xml")){
                            echo"<p>Se ha dado de baja al usuario</p>";
                        
                        
                        }else{
                            
							echo"<p>No se pudo actualizar el archivo</p>";
                        }
					
				}else{
					echo"<p>No se ha encontrado ningún usuario con ese DNI</p>";
				}
								
				
			}else{
				exit("No se pudo abrir el archivo usuarios.xml");
			}
	 	?>
		
		
	</body>
</html>