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
                <a class="nav-link active" href="index.php">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="add.html">Añadir Pokemon</a>
            </li>
        </ul>

        <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Tipo</th>
                        <th>Stats</th>
                        <th>Habilidad</th>
                        <th>Region</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>

<?php
$resultado = $mysqli->query("SELECT * FROM pokemon ORDER BY pokemon_id");
$mysqli->close();

if ($resultado->num_rows > 0) {
    while($fila = $resultado->fetch_array()) {
        echo "<tr>";
        echo "<td>".$fila['pokemon_id']."</td>";
        echo "<td>".$fila['nombre']."</td>";
        echo "<td>".$fila['tipo']."</td>";
        echo "<td>".$fila['stats']."</td>";
        echo "<td>".$fila['habilidad']."</td>";
        echo "<td>".$fila['region']."</td>";
        echo "<td class='text-nowrap'>";
        echo "<a href=\"edit.php?pokemon_id=$fila[pokemon_id]\" class=\"btn btn-sm btn-warning me-1\">Editar</a>";
        echo "<a href=\"delete.php?pokemon_id=$fila[pokemon_id]\" onClick=\"return confirm('¿Está segur@ que desea eliminar el pokemon?')\" class=\"btn btn-sm btn-danger\">Eliminar</a>";
        echo "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='7' class='text-center'>No hay pokémons registrados</td></tr>";
}
?>
                </tbody>
            </table>
        </div>
    </main>
    <footer class="mt-4 text-center text-muted">
        Created by ULISES CUADRADO GARCIA &copy; 2025
    </footer>
</div>
<!-- Bootstrap JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>