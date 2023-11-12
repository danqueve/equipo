<?php
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

$sql = "SELECT * FROM pagos_registrados";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ver Registros</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<?php include "nav1.php" ?>
<div class="container mt-5">
    <h2>Registros de Pagos</h2>
    <table class="table table-striped table-bordered">
        <thead>
            <tr class="table-warning">
                <th>#</th>
                <th>Dirigente</th>
                <th>Nombre</th>
                <th>Cto</th>
                <th>DNI</th>
                <th>Apellido</th>
                <th>Nombre</th>
                <th>Mesa</th>
                <th>Escuela</th>
                <th>Usuario</th>
                <th>Fecha de Registro</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                // Mostrar datos de cada fila
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>".$row["id"]."</td>";
                    echo "<td>".$row["apellido_dir"]."</td>";
                    echo "<td>".$row["nombre_dir"]."</td>";
                    echo "<td>".$row["cto_dir"]."</td>";
                    echo "<td>".$row["dni"]."</td>";
                    echo "<td>".$row["apellido"]."</td>";
                    echo "<td>".$row["nombre"]."</td>";
                    echo "<td>".$row["mesa"]."</td>";
                    echo "<td>".$row["escuela"]."</td>";
                    echo "<td>".$row["usuario_registro"]."</td>";
                    echo "<td>".$row["registro"]."</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='11'>No se encontraron registros</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

</body>
</html>
