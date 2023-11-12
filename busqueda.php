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

// Buscar DNI
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['buscar'])) {
    $dni = $_POST['dni'];
    $sql = "SELECT apellido_dir, nombre_dir, cto_dir, dni, apellido, nombre, mesa, escuela FROM datos_registro WHERE dni = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $dni);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        $mensaje = "No se encontraron registros para el DNI proporcionado.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>

   
    <title>Carga de DNI</title>
    <?php include "head.php" ?>
</head>


<body class="bg-info">
<?php include "nav1.php" ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header">
                    Buscar Registro
                </div>
                <div class="card-body">
                    <form method="post">
                        <div class="form-group">
                            <label for="dni">DNI:</label>
                            <input type="text" class="form-control" name="dni">
                        </div>
                        <button type="submit" name="buscar" class="btn btn-primary">Buscar</button>
                    </form>
                </div>
            </div>

            <?php if (isset($row)): ?>
                <div class="card mt-4">
                    <div class="card-body">
                        <form method="post" action="procesar_pago.php">
                            <!-- Repetir esto para cada campo del formulario -->
                            <div class="form-group">
                                <label for="apellido_dir">Dirigente:</label>
                                <input type="text" class="form-control" name="apellido_dir" value="<?php echo htmlspecialchars($row['apellido_dir']); ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="nombre_dir">Nombre:</label>
                                <input type="text" class="form-control" name="nombre_dir" value="<?php echo htmlspecialchars($row['nombre_dir']); ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="dni">DNI:</label>
                                <input type="text" class="form-control" name="dni" value="<?php echo htmlspecialchars($row['dni']); ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="apellido">Apellido:</label>
                                <input type="text" class="form-control" name="apellido" value="<?php echo htmlspecialchars($row['apellido']); ?>"readonly>
                            </div>
                            <div class="form-group">
                                <label for="nombre">Nombre:</label>
                                <input type="text" class="form-control" name="nombre" value="<?php echo htmlspecialchars($row['nombre']); ?>"readonly>
                            </div>
                            <div class="form-group">
                                <label for="cto_dir">Circuito:</label>
                                <input type="text" class="form-control" name="cto_dir" value="<?php echo htmlspecialchars($row['cto_dir']); ?>"readonly>
                            </div>
                            <div class="form-group">
                                <label for="escuela">Escuela:</label>
                                <input type="text" class="form-control" name="escuela" value="<?php echo htmlspecialchars($row['escuela']); ?>"readonly>
                            </div>
                            <div class="form-group">
                                <label for="mesa">Mesa:</label>
                                <input type="text" class="form-control" name="mesa" value="<?php echo htmlspecialchars($row['mesa']); ?>"readonly>
                            </div>
                            <!-- ... otros campos ... -->
                            <button type="submit" class="btn btn-success">Pagar</button>
                        </form>
                    </div>
                </div>
            <?php elseif (isset($mensaje)): ?>
                <div class="alert alert-warning mt-4"><?php echo $mensaje; ?></div>
            <?php endif; ?>
        </div>
    </div>
</div>

</body>
</html>