<html>
	<head>
		<title>Borrar</title>
	</head>
	<body>
	<h1>Datos borrados</h1>
		
		
		<?PHP
			
			$dni=$_POST["dni"];
			
			
			
			if(file_exists("trabajadores.xml")){
				$encontrado=-1;
				$trabajadores=simplexml_load_file("trabajadores.xml");
				$contador = -1; 
				foreach($trabajadores->nuevoTrabajador as $trabajador){
                    $contador++;;
					if ($trabajador["dni"]==$dni){
						$encontrado=$contador;
                        echo"<p> Se encontró un trabajador con estos datos:</p>";
						echo "<ul>";
							echo "<li>Nombre: ".$trabajador->nombre."</li>";
							echo "<li>Apellidos: ".$trabajador->apellidos."</li>";
							echo "<li>DNI: ".$trabajador["dni"]."</li>";
						echo "</ul>";
						
                       
						
						
					}
				}

				if($encontrado>=0){
                        unset($trabajadores->nuevoTrabajador[$encontrado]);                        
                        if($trabajadores->asXML("trabajadores.xml")){
                            echo"<p>Se ha dado de baja al trabajador</p>";
                        
                        
                        }else{
                            
							echo"<p>No se pudo actualizar el archivo</p>";
                        }
					
				}else{
					echo"<p>No se ha encontrado ningún usuario con ese DNI</p>";
				}
								
				
			}else{
				exit("No se pudo abrir el archivo trabajadores.xml");
			}
	 	?>
		
		
	</body>
</html>