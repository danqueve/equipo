<?php
// Iniciar sesión (si aún no está iniciada)
session_start();

// Verificar si el usuario ha iniciado sesión
if (isset($_SESSION['usuario'])) {
    $usuario_actual = $_SESSION['usuario'];
} else {
    // Redirigir al inicio de sesión si el usuario no ha iniciado sesión
    header("Location: index.php"); // Ajusta la URL según tu estructura de carpetas
    exit();
}

// Conexión a la base de datos
$servername = "localhost";
$username = "ourjxora_alejandro";
$password = "Meri0803";
$dbname = "ourjxora_dirigentes";
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Consulta SQL para obtener los registros del usuario actual
$sql = "SELECT * FROM pagos_registrados WHERE usuario_registro = ? ORDER BY apellido_dir, nombre_dir";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $usuario_actual);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ver Registros</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="bg-success">
<?php include "nav1.php" ?>

<div class="container mt-5">
    <h2>Registros de Pagos (Usuario: <?php echo htmlspecialchars($usuario_actual); ?>)</h2>
    <?php
    if ($result->num_rows > 0) {
        $current_apellido_dir = "";
        $current_nombre_dir = "";
        $counter = 1;

        while ($row = $result->fetch_assoc()) {
            if ($current_apellido_dir != $row["apellido_dir"] || $current_nombre_dir != $row["nombre_dir"]) {
                if ($current_apellido_dir != "" && $current_nombre_dir != "") {
                    echo "</tbody></table>";
                }
                $current_apellido_dir = $row["apellido_dir"];
                $current_nombre_dir = $row["nombre_dir"];
                $counter = 1;

                echo "<h3>Dirigente: " . htmlspecialchars($current_apellido_dir) . " " . htmlspecialchars($current_nombre_dir) . "</h3>";
                echo "<table class='table-warning table table-striped table-bordered'>";
                echo "<thead><tr><th>#</th><th>Dirigente</th><th>Nombre</th><th>Cto</th><th>DNI</th><th>Apellido</th><th>Nombre</th><th>Mesa</th><th>Escuela</th><th>Registro</th></tr></thead>";
                echo "<tbody>";
            }

            echo "<tr>";
            echo "<td>".$counter."</td>";
            echo "<td>".$row["apellido_dir"]."</td>";
            echo "<td>".$row["nombre_dir"]."</td>";
            echo "<td>".$row["cto_dir"]."</td>";
            echo "<td>".$row["dni"]."</td>";
            echo "<td>".$row["apellido"]."</td>";
            echo "<td>".$row["nombre"]."</td>";
            echo "<td>".$row["mesa"]."</td>";
            echo "<td>".$row["escuela"]."</td>";
            echo "<td>".$row["registro"]."</td>";
            echo "</tr>";

            $counter++;
        }

        echo "</tbody></table>";
    } else {
        echo "<p>No se encontraron registros para este usuario.</p>";
    }
    ?>
    
</div>

</body>
</html>
