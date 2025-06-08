<?php
require_once 'conexion.php'; // Incluye tu archivo de conexión

session_start(); // Inicia la sesión PHP

$message = '';
$success_message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Captura los datos del formulario
    $first_name = trim($_POST['first_name']);
    $last_name = trim($_POST['last_name']);
    $email = trim($_POST['email']);
    // $date = $_POST['date']; // Si quieres guardar la fecha de nacimiento, puedes añadir un campo en la BD
    $rol = trim($_POST['rol']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Validación de entrada
    if (empty($first_name) || empty($last_name) || empty($email) || empty($rol) || empty($password) || empty($confirm_password)) {
        $message = "Por favor, completa todos los campos.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "Formato de email inválido.";
    } elseif (strlen($password) < 6) {
        $message = "La contraseña debe tener al menos 6 caracteres.";
    } elseif ($password !== $confirm_password) {
        $message = "Las contraseñas no coinciden.";
    } else {
        // Hashear la contraseña
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Verificar si el email ya existe
        $stmt_check = $pdo->prepare("SELECT id FROM users WHERE email = ?");
        $stmt_check->execute([$email]);
        if ($stmt_check->fetch()) {
            $message = "El email ya está registrado.";
        } else {
            // Insertar nuevo usuario
            $stmt_insert = $pdo->prepare(
                "INSERT INTO users (first_name, last_name, email, rol, password) VALUES (?, ?, ?, ?, ?)"
            );
            if ($stmt_insert->execute([$first_name, $last_name, $email, $rol, $hashed_password])) {
                $success_message = "Registro exitoso. Ahora puedes iniciar sesión.";
                // Opcional: Redirigir al login después del registro
                // header("Location: login.php?registered=true");
                // exit();
            } else {
                $message = "Error al registrar el usuario.";
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <title>Registro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/estilos.css"> <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="signup-form">
    <form action="registro.php" method="post"> <h2>BIENVENIDO A REGISTRO SUPERMERCADO</h2>
        <p class="hint-text"></p>
        <?php if ($message): ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $message; ?>
            </div>
        <?php endif; ?>
        <?php if ($success_message): ?>
            <div class="alert alert-success" role="alert">
                <?php echo $success_message; ?> <a href="login.php" class="alert-link">Inicia Sesión</a>
            </div>
        <?php endif; ?>

        <div class="form-group">
            <div class="row">
                <div class="col"><input type="text" class="form-control" name="first_name" placeholder="Nombre" required="required" value="<?php echo htmlspecialchars($first_name ?? ''); ?>"></div>
                <div class="col"><input type="text" class="form-control" name="last_name" placeholder="Apellido" required="required" value="<?php echo htmlspecialchars($last_name ?? ''); ?>"></div>
            </div>
        </div>
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Correo" required="required" value="<?php echo htmlspecialchars($email ?? ''); ?>">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="rol" placeholder="Rol" required="required" value="<?php echo htmlspecialchars($rol ?? ''); ?>">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Contraseña" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="confirm_password" placeholder="Confirme la contraseña" required="required">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block">Registro</button>
        </div>
    </form>
    <div class="text-center">¿Ya tienes una cuenta? <a href="login.php">Iniciar Sesión</a></div> </div>
</body>
</html>