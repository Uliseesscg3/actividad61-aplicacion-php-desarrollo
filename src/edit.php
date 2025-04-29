<?php
include_once("config.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>actividad61UlCu</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-4">
    <header class="mb-4">
        <h1 class="text-center">actividad61UlCu</h1>
    </header>
    
    <main>
        <ul class="nav nav-tabs mb-4">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="add.html">Alta Pokemon</a>
            </li>
        </ul>
        <h2 class="mb-4">Modificación Pokemon</h2>

<?php
$pokemon_id = $_GET['pokemon_id'];
$pokemon_id = $mysqli->real_escape_string($pokemon_id);

$resultado = $mysqli->query("SELECT nombre, tipo, stats, habilidad, region FROM pokemon WHERE pokemon_id = $pokemon_id");

$fila = $resultado->fetch_array();
$nombre = $fila['nombre'];
$tipo = $fila['tipo'];
$stats = $fila['stats'];
$habilidad = $fila['habilidad'];
$region = $fila['region'];

$mysqli->close();
?>

    <form action="edit_action.php" method="post" class="bg-white p-4 rounded shadow-sm">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $nombre;?>" required>
        </div>

        <div class="mb-3">
            <label for="tipo" class="form-label">Tipo</label>
            <input type="text" class="form-control" name="tipo" id="tipo" value="<?php echo $tipo;?>" required>
        </div>

        <div class="mb-3">
            <label for="stats" class="form-label">Stats</label>
            <input type="number" class="form-control" name="stats" id="stats" value="<?php echo $stats;?>" required>
        </div>

        <div class="mb-3">
            <label for="region" class="form-label">Region</label>
            <select class="form-select" name="region" id="region">
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

        <div class="mb-3">
            <label for="habilidad" class="form-label">Habilidad</label>
            <input type="text" class="form-control" name="habilidad" id="habilidad" value="<?php echo $habilidad;?>" required>
        </div>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <input type="hidden" name="pokemon_id" value=<?php echo $pokemon_id;?>>
            <input type="button" class="btn btn-secondary me-md-2" value="Cancelar" onclick="location.href='index.php'">
            <input type="submit" class="btn btn-primary" name="modifica" value="Guardar">
        </div>
    </form>
    </main>    
    <footer class="mt-4 text-center text-muted">
        Created by ULISES CUADRADO GARCIA &copy; 2024
    </footer>
</div>
<!-- Bootstrap JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>