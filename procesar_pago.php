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

$mensaje = "";
$redirect = "";

// Asegurarse de que el usuario está logueado
if (!isset($_SESSION['usuario'])) {
    echo "<script type='text/javascript'>alert('No estás logueado.'); window.location = 'index.php';</script>";
    exit();
}

$usuarioLogueado = $_SESSION['usuario']; // Obtener el nombre de usuario de la sesión

// Procesar pago
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dni = $_POST['dni'];

    // Verificar si el DNI ya está registrado
    $sql = "SELECT registro, usuario_registro FROM pagos_registrados WHERE dni = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $dni);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // DNI ya registrado
        $row = $result->fetch_assoc();
        $hora_registro = $row['registro'];
        $usuario_registro = $row['usuario_registro'];
        $mensaje = "El pago para el DNI " . $dni . " ya fue registrado a las " . $hora_registro . " por el usuario: " . $usuario_registro;
        $redirect = "welcome.php";
    } else {
        // DNI no registrado, proceder con el registro
        $apellido_dir = $_POST['apellido_dir'];
        $nombre_dir = $_POST['nombre_dir'];
        $cto_dir = $_POST['cto_dir'];
        $apellido = $_POST['apellido'];
        $nombre = $_POST['nombre'];
        $mesa = $_POST['mesa'];
        $escuela = $_POST['escuela'];

        // Agregar el usuario logueado al INSERT
        $sql = "INSERT INTO pagos_registrados (apellido_dir, nombre_dir, cto_dir, dni, apellido, nombre, mesa, escuela, usuario_registro) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssssiss", $apellido_dir, $nombre_dir, $cto_dir, $dni, $apellido, $nombre, $mesa, $escuela, $usuarioLogueado);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            $mensaje = "Pago registrado con éxito por " . $usuarioLogueado;
            $redirect = "welcome.php";
        } else {
            $mensaje = "Error al registrar el pago: " . $stmt->error;
        }
    }
}

$conn->close();

// Mostrar alerta y redirigir si es necesario
if (!empty($mensaje)) {
    echo "<script type='text/javascript'>alert('$mensaje');";
    if (!empty($redirect)) {
        echo "window.location = '$redirect';";
    }
    echo "</script>";
}
?>
