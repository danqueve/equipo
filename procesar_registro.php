<?php
$servername = "localhost";
$username = "ourjxora_alejandro";
$password = "Meri0803";
$dbname = "ourjxora_dirigentes";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['username'];
    $contrasena = $_POST['password']; // Debería estar hasheada en una aplicación real

    // Comprobar si el usuario ya existe
    $sql = "SELECT * FROM usuarios2 WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $usuario);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 0) {
        $sql = "INSERT INTO usuarios2 (username, password) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $usuario, $contrasena);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            $mensaje = "Registro exitoso.";
        } else {
            $mensaje = "Error en el registro.";
        }
    } else {
        $mensaje = "El usuario ya existe.";
    }
}

$conn->close();

// Mostrar alerta y redirigir si es necesario
if (!empty($mensaje)) {
    echo "<script type='text/javascript'>alert('$mensaje');";
    if ($mensaje == "Registro exitoso.") {
        echo "window.location = 'index.php';";
    }
    echo "</script>";
}
?>