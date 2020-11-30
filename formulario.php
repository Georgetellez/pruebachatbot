<html>
<head>
	<title>Benjamin Cruz Sarmiento</title>
</head>
<body>
<?php 
		$nombre = $_REQUEST['nombre'];
		$apellidopaterno = $_REQUEST['apellidopaterno'];
		$apellidomaterno = $_REQUEST['apellidomaterno'];
		$curp = $_REQUEST['curp'];
		$correo = $_REQUEST['correo'];
		$contraseña = $_REQUEST['contraseña'];

		//$nombre = "ana";
		//$apellidopaterno = "natalia";
		//$apellidomaterno = "roque";
		//$curp = "wdas";
		//$correo = "asdas";
		//$contrasena = "sdfsd";

		$conexion = pg_connect("host=localhost port=5432 dbname=tramites user=postgres password=benja1995") or die ("Problema con la conexion");
		$datos = pg_query($conexion,"insert into tramites(nombre,apellidopaterno,apellidomaterno,curp,correo,contraseña) values ('$nombre','$apellidopaterno','$apellidomaterno','$curp','$correo','$contraseña')") or die ("Problema en el select: ".pg_last_error($conexion));
		if (!$datos) {
			echo "Hubo algun error";
		}else {
			echo "Datos insertados correctamente <br><a href = 'tramites.html'> Volver </a>" ;
		}
		//while($reg=pg_fetch_array($registros)){
		//	echo "Codigo de curso: ".$reg['codigo']."<br>";
		//	echo "Nombre del curso: ".$reg['nombrecurso']."<br>";
		//	echo "Ciclo escolar: ".$reg['cicloescolar']."<br>";
		//	echo "Inicio del curso: ";

		//	switch ($reg['iniciocurso']) {
		//		case "2020-04-01":
		//			echo "2020-04-01";
		//			break;
		//		case "2020-05-01": 
		//			echo "2020-05-01";
		//			break; 
		//		case "2020-06-01":
		//			echo "2020-06-01";
		//			break;
		//		case "2020-07-01": 
		//			echo "2020-07-01";
		//			break; 
		//		case "2020-08-01":
		//			echo "2020-08-01";
		//			break;
		//	}
		//	echo "<br>";
		//	echo "<br>";
		//}
		pg_close($conexion);
	 ?>
</body>
</html>