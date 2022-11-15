<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>BORRAR TRABAJADOR</title>
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
		<div class="datosBorrado" style="margin:50px">
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
								echo "<li>Nombre y Apellidos: ".$trabajador->nombreApellidos."</li>";
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
						echo"<p>No se ha encontrado ningún usuario con este DNI: $dni</p>";
					}
									
					
				}else{
					exit("No se pudo abrir el archivo trabajadores.xml");
				}
			?>
		</div>
	</body>
</html>