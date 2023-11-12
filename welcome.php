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
<html>
<head>
    <title>Bienvenido</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body class="bg-success">
<?php include "nav1.php" ?>

<?php
session_start(); // Iniciar la sesión

// Verificar si el usuario está logueado
if (!isset($_SESSION['usuario'])) {
    header("Location: index.php"); // Redirigir al login si no hay sesión
    exit();
}

$usuario = $_SESSION['usuario']; // Obtener el nombre de usuario de la sesión
?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card text-center">
                <div class="card-header">Bienvenido, <?php echo htmlspecialchars($usuario); ?></div>
                <div class="card-body">
                    
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
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
