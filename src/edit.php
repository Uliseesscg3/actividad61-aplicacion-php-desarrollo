<?php
//Incluye fichero con parámetros de conexión a la base de datos
include_once("config.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<title>actividad61UlCu</title>
</head>
<body>
<div>
	<header>
		<h1>actividad61UlCu</h1>
	</header>
	
	<main>				
	<ul>
		<li><a href="index.php" >Inicio</a></li>
		<li><a href="add.html" >Alta Pokemon</a></li>
	</ul>
	<h2>Modificación Pokemon</h2>


<?php


/*Obtiene el id del registro del empleado a modificar, idempleado, a partir de su URL. Este tipo de datos se accede utilizando el método: GET*/

//Recoge el id del empleado a modificar a través de la clave idempleado del array asociativo $_GET y lo almacena en la variable idempleado
$pokemon_id = $_GET['pokemon_id'];

//Con mysqli_real_scape_string protege caracteres especiales en una cadena para ser usada en una sentencia SQL.
$pokemon_id = $mysqli->real_escape_string($pokemon_id);


//Se selecciona el registro a modificar: select
$resultado = $mysqli->query("SELECT nombre, tipo, stats, habilidad, region FROM pokemon WHERE pokemon_id = $pokemon_id");

//Se extrae el registro y lo guarda en el array $fila
//Nota: También se puede utilizar el método fetch_assoc de la siguiente manera: $fila = $resultado->fetch_assoc();
$fila = $resultado->fetch_array();
$nombre = $fila['nombre'];
$tipo = $fila['tipo'];
$stats = $fila['stats'];
$habilidad = $fila['habilidad'];
$region = $fila['region'];

//Se cierra la conexión de base de datos
$mysqli->close();
?>

<!--FORMULARIO DE EDICIÓN. Al hacer click en el botón Guardar, llama a la página (form action="edit_action.php"): edit_action.php
-->

	<form action="edit_action.php" method="post">
		<div>
			<label for="nombre">Nombre</label>
			<input type="text" name="nombre" id="nombre" value="<?php echo $nombre;?>" required>
		</div>

		<div>
			<label for="tipo">Tipo</label>
			<input type="text" name="tipo" id="tipo" value="<?php echo $tipo;?>" required>
		</div>

		<div>
			<label for="stats">Stats</label>
			<input type="number" name="stats" id="stats" value="<?php echo $stats;?>" required>
		</div>

		<div>
			<label for="region">Region</label>
			<select name="region" id="region" placeholder="region">
				<option value="<?php echo $region;?>" selected><?php echo $region;?></option>
				<option value="Kanto">Kanto</option>
				<option value="Johto">Johto</option>
				<option value="Hoenn">Hoenn</option>
				<option value="Sinnoh">Sinnoh</option>
				<option value="Teselia">Teselia</option>
				<option value="Kalos">Kalos</option>
				<option value="Alola">Alola</option>
				<option value="Galar">Galar</option>
				<option value="Paldea">Paldea</option>
				<option value="Hisui">Hisui</option>
			</select>	
		</div>

		<div>
			<label for="habilidad">Habilidad</label>
			<input type="text" name="habilidad" id="habilidad" value="<?php echo $habilidad;?>" required>
		</div>

		<div >
			<input type="hidden" name="pokemon_id" value=<?php echo $pokemon_id;?>>
			<input type="submit" name="modifica" value="Guardar">
			<input type="button" value="Cancelar" onclick="location.href='index.php'">
		</div>
	</form>
	</main>	
	<footer>
		Created by ULISES CUADRADO GARCIA &copy; 2024
  	</footer>
</div>
</body>
</html>

