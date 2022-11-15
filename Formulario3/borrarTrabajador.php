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
		<div style="margin:50px">
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
								echo "<li>Nombre y Apellidos: <b>".$trabajador->nombreApellidos."</b></li>";
								echo "<li>DNI: <b>".$trabajador["dni"]."</b></li>";
								echo "<li>Domicilio: <b>".$trabajador->domicilio."</b></li>";
								echo "<li>Email: <b>".$trabajador->email."</b></li>";
								echo "<li>Puesto en la empresa: <b>".$trabajador->puestoEmpresa."</b></li>";
							echo "</ul>";
						}
					}

					if($encontrado>=0){
							unset($trabajadores->nuevoTrabajador[$encontrado]);                        
							if($trabajadores->asXML("trabajadores.xml")){
								echo"<p>Se ha dado de baja al trabajador</p>";
								echo "<form action=\"indexBorrarTrabajador.php\" style=\"padding-top: 20px\"><button>Borrar trabajador</button></form>";
								echo "<form action=\"trabajador.php\" style=\"padding-top: 20px\"><button>Añadir trabajador</button></form>";
							}else{
								echo"<p>No se pudo actualizar el archivo</p>";
							}
						
					}else{
						echo"<p>No se ha encontrado ningún usuario con este DNI: <b>$dni</b></p>";
						echo "<form action=\"indexBorrarTrabajador.php\" style=\"padding-top: 20px\"><button>Borrar trabajador</button></form>";
						echo "<form action=\"trabajador.php\" style=\"padding-top: 20px\"><button>Añadir trabajador</button></form>";
					}
									
					
				}else{
					exit("No se pudo abrir el archivo trabajadores.xml");
				}
			?>
		</div>
	</body>
</html>