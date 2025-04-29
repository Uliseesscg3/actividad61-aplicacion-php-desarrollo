<?php
include("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Pokemon</title>
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
$pokemon_id = $_GET['pokemon_id'];
$pokemon_id = $mysqli->real_escape_string($pokemon_id);

$result = $mysqli->query("DELETE FROM pokemon WHERE pokemon_id = $pokemon_id");

$mysqli->close();
echo '<div class="alert alert-success">Registro borrado correctamente...</div>';
echo '<a href="index.php" class="btn btn-primary">Ver resultado</a>';
?>
    </main>
</div>
<!-- Bootstrap JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

