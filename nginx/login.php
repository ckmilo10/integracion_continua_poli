<!doctype html>
<html lang="ar" dir="rtl">

<?php
$host = 'db'; // El nombre del servicio en docker-compose
$db = 'sistema_telefonico';
$user = 'myuser';
$pass = 'mypass';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<h2>✅ Conexión exitosa a la base de datos MySQL</h2>";
} catch (PDOException $e) {
    echo "<h2>❌ Error de conexión: " . $e->getMessage() . "</h2>";
}
?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/845dc7496d.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="css/estilos.css">

    <title class="text-center">CRUD</title>

<link rel="stylesheet" href="myProjects/webProject/icofont/css/icofont.min.css">
    <link rel="stylesheet" href="myProjects/webProject/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="myProjects/webProject/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="myProjects/webProject/bootstrap/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="myProjects/webProject/bootstrap/css/bootstrap.rtl.css">
    <link rel="stylesheet" href="myProjects/webProject/bootstrap/css/bootstrap.rtl.css.map">
    <link rel="stylesheet" href="myProjects/webProject/bootstrap/css/bootstrap.min.css.map">
    <link rel="stylesheet" href="myProjects/webProject/fontawesome/css/all.min.css.map">

     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Modal</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBxcG/lpHGWPQUkhZjootBvZEqlPfaw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>


<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
              <p class="text-white-50 mb-5">Ingrese su correo</p>

              <div data-mdb-input-init class="form-outline form-white mb-4">
                <input type="email" id="typeEmailX" class="form-control form-control-lg" />
                <label class="form-label" for="typeEmail">Correo</label>
              </div>

              <div data-mdb-input-init class="form-outline form-white mb-4">
                <input type="password" id="typePasswordX" class="form-control form-control-lg" />
                <label class="form-label" for="typePasswordX">Contraseña</label>
              </div>

              <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="/crud/password.php">Olvidó su contraseña</a></p>

              <button data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-light btn-lg px-5" type="submit" ><a href="/crud/password.php" style="color: azure;">Login</a></button>

              <div class="d-flex justify-content-center text-center mt-4 pt-1">
                <a href="https://github.com/ckmilo10/integracion_continua_poli"><i class="fa-brands fa-github"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
              </div>

            </div>

           

          </div>
        </div>
      </div>
    </div>
  </div>
</section>