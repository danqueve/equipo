<?php
session_start();
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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['username'];
    $contrasena = $_POST['password']; // Debería estar hasheada en una aplicación real

    $sql = "SELECT * FROM usuarios2 WHERE username = ? AND password = ?"; // Suponiendo que la tabla se llama 'usuarios'
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $usuario, $contrasena);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $_SESSION['usuario'] = $usuario;
        header("Location: welcome.php");
        exit();
    } else {
        echo "Usuario o contraseña incorrectos.";
    }
}

$conn->close();
?>
