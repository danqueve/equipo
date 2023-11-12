<!DOCTYPE html>
<html>
<head>
    <title>Registro</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header">Crear Cuenta</div>
                <div class="card-body">
                    <form action="procesar_registro.php" method="post">
                        <div class="form-group">
                            <label for="username">Usuario:</label>
                            <input type="text" class="form-control" name="username" required>
                        </div>
                        <div class="form-group">
                            <label for="text">Contraseña:</label>
                            <input type="text" class="form-control" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-success">Registrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
