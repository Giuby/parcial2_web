<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Detalle de registro</title>
</head>
<body>
<?php 

	$registros = array(
		array("id" => 1, "nombre" => "Mr.Skeleton", "edad" => 17, "sexo" => "M"),
		array("id" => 2, "nombre" => "Giuby", "edad" => 18, "sexo" => "M"),
		array("id" => 3, "nombre" => "Paulero", "edad" => 17, "sexo" => "M"),
		array("id" => 4, "nombre" => "Orion", "edad" => 19, "sexo" => "M"),
		array("id" => 5, "nombre" => "Iyoshka", "edad" => 23, "sexo" => "M"),
		array("id" => 6, "nombre" => "Weeyker", "edad" => 30, "sexo" => "M"),
		array("id" => 7, "nombre" => "Una_Mujer_Aleatoria", "edad" => 25, "sexo" => "F"),
	);

	

	if (isset($_GET["id"])) {
		$id = $_GET["id"] - 1;
		echo "<h1>Datos de la persona</h1><hr>";
		echo "ID: ". $_GET["id"] . "<br>";
		echo "Nombre: ". $registros[$id]["nombre"] . "<br>";
		echo "edad: ". $registros[$id]["edad"] . "<br>";
		echo "sexo: ". $registros[$id]["sexo"] . "<br>";
	}
	else
	{
		echo "<h1>El dato de ID es requerido</h1>";
	}
 ?>
</body>
</html>