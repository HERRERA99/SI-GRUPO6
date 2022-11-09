<html>
	<head>
		<title>Respuesta</title>
	</head>
	<body>
	<h1>Datos procesados</h1>
		
		<ul>
		<?PHP
			$nombreApellidos=$_POST["nombreApellidos"];
			$fechaNacimiento=$_POST["fechaNacimiento"];
			$domicilio=$_POST["domicilio"];
            $email=$_POST["email"];
            $password=$_POST["password"];
            $dni=$_POST["dni"];
            $trayectoriaLaboral=$_POST["trayectoriaLaboral"];
            $puestoEmpresa=$_POST["puestoEmpresa"];
            $dniFoto=$_POST["dniFoto"];
            $rango=$_POST["rango"];



            
			
			
			
			if(file_exists("trabajadores.xml")){
				$trabajadores=simplexml_load_file("trabajadores.xml");
				$nuevoTrabajador=$trabajadores->addchild("nuevoTrabajador");
				$nuevoTrabajador->addchild("nombreApellidos",$nombreApellidos);
				$nuevoTrabajador->addchild("fechaNacimiento",$fechaNacimiento);
				$nuevoTrabajador->addchild("domicilio",$domicilio);
                $nuevoTrabajador->addchild("email",$email);
                $nuevoTrabajador->addchild("password",$password);
                $nuevoTrabajador->addAttribute("dni",$dni);
                $nuevoTrabajador->addchild("trayectoriaLaboral",$trayectoriaLaboral);
                $nuevoTrabajador->addchild("puestoEmpresa",$puestoEmpresa);
                $nuevoTrabajador->addchild("dniFoto",$dniFoto);
                $nuevoTrabajador->addchild("rango",$rango);
				if($trabajadores->asXML("trabajadores.xml")){
					echo"<p>Se actualizo el archivo con estos datos:</p>";
					echo "<ul>";
					echo "<li>Nombre y apellidos: $nombreApellidos</li>";
					echo "<li>Fecha de nacimiento: $fechaNacimiento</li>";
					echo "<li>Domicilio: $domicilio</li>";
                    echo "<li>Email: $email</li>";
                    echo "<li>Contraseña: $password</li>";
                    echo "<li>DNI: $dni</li>";
                    echo "<li>Trayectoria laboral: $trayectoriaLaboral</li>";
                    echo "<li>Puesto en la empresa: $puestoEmpresa</li>";
                    echo "<li>Foto del dni: $dniFoto</li>";
                    echo "<li>Grado de satisfacción con la empresa: $rango</li>";
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