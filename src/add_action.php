<?php
include_once("config.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Alta Pokemon</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-4">
    <header class="mb-4">
        <h1 class="text-center">actividad61UlCu</h1>
    </header>
    <main class="bg-white p-4 rounded shadow-sm">

<?php
if(isset($_POST['inserta'])) 
{
    $nombre = $mysqli->real_escape_string($_POST['nombre']);
    $tipo = $mysqli->real_escape_string($_POST['tipo']);
    $stats = $mysqli->real_escape_string($_POST['stats']);
    $habilidad = $mysqli->real_escape_string($_POST['habilidad']);
    $region = $mysqli->real_escape_string($_POST['region']);

    if(empty($nombre) || empty($tipo) || empty($stats) || empty($habilidad) || empty($region)) 
    {
        echo '<div class="alert alert-danger">';
        if(empty($nombre)) {
            echo "<div>Campo nombre vacío.</div>";
        }

        if(empty($tipo)) {
            echo "<div>Campo tipo vacío</div>";
        }

        if(empty($stats)) {
            echo "<div>Campo stats vacío.</div>";
        }

        if(empty($habilidad)) {
            echo "<div>Campo habilidad vacío.</div>";
        }

        if(empty($region)) {
            echo "<div>Campo region vacío.</div>";
        }
        echo '</div>';
        $mysqli->close();
        echo '<a href="javascript:self.history.back();" class="btn btn-warning">Volver atrás</a>';
    }
    else
    {
        $result = $mysqli->query("INSERT INTO pokemon (nombre, tipo, stats, habilidad, region) VALUES ('$nombre', '$tipo', '$stats', '$habilidad', '$region')");    
        $mysqli->close();
        echo '<div class="alert alert-success">Registro añadido correctamente...</div>';
        echo '<a href="index.php" class="btn btn-primary">Ver resultado</a>';
    }
}
?>
    </main>
</div>
<!-- Bootstrap JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>