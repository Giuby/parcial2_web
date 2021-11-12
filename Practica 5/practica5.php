<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Práctica 5. Intercambio de variable 	PHP</title>
</head>
<body>
	<h1>Zuñiga Velez Felipe</h1>
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
	?>
	<h1>Tabla de registros</h1><hr>
	<table border=1>
		<thead>
			<tr>
				<td>ID</td>
				<td>Nombre</td>
				<td>Edad</td>
				<td>Sexo</td>
				<td>Detalle</td>
			</tr>
		</thead>
		<tbody>
			<?php 
				for ($i=0; $i < count($registros); $i++) { 
					echo "<tr>";
						echo "<td>".$registros[$i]["id"]."</td>";
						echo "<td>".$registros[$i]["nombre"]."</td>";
						echo "<td>".$registros[$i]["edad"]."</td>";
						echo "<td>".$registros[$i]["sexo"]."</td>";
						echo "<td><a href='practica5_detalle.php?id=".$registros[$i]["id"]."'>Ver detalle</a></td>";
					echo "</tr>";
				}
			?>
		</tbody>
	</table>
</body>
</html>