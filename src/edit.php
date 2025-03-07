<?php
//Incluye fichero con parámetros de conexión a la base de datos
include_once("config.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<title>actividad61_ulcu</title>
</head>
<body>
<div>
	<header>
		<h1>actividad61_ulcu</h1>
	</header>
	
	<main>				
	<ul>
		<li><a href="index.php" >Inicio</a></li>
		<li><a href="add.html" >Alta</a></li>
	</ul>
	<h2>Modificación pokemon</h2>


<?php


/*Obtiene el id del registro del empleado a modificar, idempleado, a partir de su URL. Este tipo de datos se accede utilizando el método: GET*/

//Recoge el id del empleado a modificar a través de la clave idempleado del array asociativo $_GET y lo almacena en la variable idempleado
$id = $_GET['id'];

//Con mysqli_real_scape_string protege caracteres especiales en una cadena para ser usada en una sentencia SQL.
$id = $mysqli->real_escape_string($id);


//Se selecciona el registro a modificar: select
$resultado = $mysqli->query("SELECT id, nombre, tipo1, tipo2, habilidad, stat_total FROM pokemon WHERE id = $id");

//Se extrae el registro y lo guarda en el array $fila
//Nota: También se puede utilizar el método fetch_assoc de la siguiente manera: $fila = $resultado->fetch_assoc();
$fila = $resultado->fetch_array();
$id = $fila['id'];
$name = $fila['nombre'];
$type1 = $fila['tipo1'];
$type2 = $fila['tipo2'];
$hability = $fila['habilidad'];
$stat = $fila['stat_total'];

//Se cierra la conexión de base de datos
$mysqli->close();
?>

<!--FORMULARIO DE EDICIÓN. Al hacer click en el botón Guardar, llama a la página (form action="edit_action.php"): edit_action.php
-->

	<form action="edit_action.php" method="post">
		<div>
			<label for="id">id</label>
			<input type="number" name="id" id="id" value="<?php echo $id;?>" required>
		</div>

		<div>
			<label for="name">Nombre</label>
			<input type="text" name="name" id="name" value="<?php echo $name;?>" required>
		</div>

		<div>
			<label for="type1">tipo1</label>
			<input type="text" name="type1" id="type1" value="<?php echo $type1;?>" required>
		</div>

		<div>
			<label for="type2">tipo2</label>
			<select name="type2" id="type2" placeholder="tipo2">
				<option value="<?php echo $type2;?>" selected><?php echo $type2;?></option>
				<option value="" disabled selected>Seleccione un tipo</option>
				<option value="Normal">Normal</option>
				<option value="Lucha">Lucha</option>
				<option value="Siniestro">Siniestro</option>
				<option value="Fantasma">Fantasma</option>
				<option value="Psiquico">Psiquico</option>
				<option value="Fuego">Fuego</option>
				<option value="Planta">Planta</option>
				<option value="Agua">Agua</option>
				<option value="Bicho">Bicho</option>
				<option value="Volador">Volador</option>
				<option value="Hada">Hada</option>
				<option value="Electrico">Electrico</option>
				<option value="Hielo">Hielo</option>
				<option value="Dragon">Dragon</option>
				<option value="Tierra">Tierra</option>
				<option value="Roca">Roca</option>
				<option value="Acero">Acero</option>
				<option value="Veneno">Veneno</option>
				<option value=" ">  </option>
			</select>	
		</div>

		
		<div>
			<label for="hability">Habilidad</label>
			<input type="text" name="hability" id="hability" value="<?php echo $hability;?>" required>
		</div>

		<div>
			<label for="stat">stat_total</label>
			<input type="text" name="stat" id="stat" value="<?php echo $stat;?>" required>
		</div>

		<div >
			<input type="hidden" name="id" value=<?php echo $id;?>>
			<input type="submit" name="modifica" value="Guardar">
			<input type="button" value="Cancelar" onclick="location.href='index.php'">
		</div>
	</form>
	</main>	
	<footer>
		Created by the IES Miguel Herrero team &copy; 2024
  	</footer>
</div>
</body>
</html>

