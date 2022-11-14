<html>
	<head>
		<title>Respuesta</title>
	</head>
	<body>
	<h1>Datos procesados</h1>
		
		<ul>
		<?PHP
			$nombre=$_POST["nombre"];
			$apellido1=$_POST["apellido1"];
			$apellido2=$_POST["apellido2"];
            $correo=$_POST["correo"];
            $dni=$_POST["dni"];
            $direccion=$_POST["direccion"];
            $telefono=$_POST["telefono"];
            $colorFav=$_POST["colorFav"];
            $marcaFav=$_POST["marcaFav"];
            $fechaNacimiento=$_POST["fechaNacimiento"];


            
			
			if(file_exists("clientes.xml")){
				$clientes=simplexml_load_file("clientes.xml");
				$nuevoCliente=$clientes->addchild("nuevoCliente");
				$nuevoCliente->addchild("nombre",$nombre);
				$nuevoCliente->addchild("apellido1",$apellido1);
				$nuevoCliente->addchild("apellido2",$apellido2);
                $nuevoCliente->addchild("correo",$correo);
                $nuevoCliente->addAttribute("dni",$dni);
                $nuevoCliente->addchild("direccion",$direccion);
                $nuevoCliente->addchild("telefono",$telefono);
                $nuevoCliente->addchild("colorFav",$colorFav);
                $nuevoCliente->addchild("marcaFav",$marcaFav);
                $nuevoCliente->addchild("fechaNacimiento",$fechaNacimiento);
				
                if($clientes->asXML("clientes.xml")){
					echo"<p>Se actualizo el archivo con estos datos:</p>";
					echo "<ul>";
					echo "<li>Nombre: $nombre</li>";
					echo "<li>Apellido 1: $apellido1</li>";
					echo "<li>Apellido 2: $apellido2</li>";
                    echo "<li>Correo Electrónico: $correo</li>";
                    echo "<li>DNI: $dni</li>";
                    echo "<li>Dirección: $direccion</li>";
                    echo "<li>Teléfono: $telefono</li>";
                    echo "<li>Color Favorito: $colorFav</li>";
                    echo "<li>Marca Favorita: $marcaFav</li>";
                    echo "<li>Fecha de Nacimiento: $fechaNacimiento</li>";
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