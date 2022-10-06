<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="scss/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Heebo&display=swap" rel="stylesheet">
  <title>Bienvenido Administrador</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark p-2 p-lg-0">
    <div class="container-fluid">
      <a class="navbar-brand px-2 logo" href="#">KAIZEN</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link px-3 my-1 my-lg-0 mx-1 active" href="./index.html">Inicio</a>
          <!-- <div class="separator d-none d-md-block"></div> -->
          <!-- <a class="nav-link px-3 my-1 my-lg-0 mx-1 btn btn-primary" href="./login.html"><i
              class="bi bi-person-fill me-1"></i>Iniciar Sesión</a>
          <a class="nav-link px-3 my-1 my-lg-0 mx-1 btn btn-outline-primary" href="./register.html"><i
              class="bi bi-person-plus-fill me-1"></i>Registrarse</a> -->
        </div>
      </div>
    </div>
  </nav>
  
    <div class="row my-10 mx-10">
      <h2 class="h1 fw-bold text-center my-4">ADMINISTRADOR:</h2>
      <h2 class="display-3 text-danger text-center"> <!--PRINT USUARIO NOMBRE-->
          <?php
          include('connect.php');
          $dato = $_SESSION['id']; //trae el id del inicio de sesion
          $dato2= $_SESSION['usuario'];
          $dato3= $_SESSION['pass'];
          
          $sql = "SELECT * FROM Admins where idAdmin = '$dato' and usuario= '$dato2' and pass= '$dato3' "; //query
          $result= mysqli_query($mysqli,$sql);

          $filas = mysqli_num_rows($result); //fila donde se encuentra el dato
          $row = mysqli_fetch_array($result); //columna donde se encuentra el dato
      
          if($filas > 0){
            echo $row["usuario"]; //print del nombre de quien inicia sesion
        } else{
          echo "<script language='javascript'>alert('un error se ha producido')</script>";
          header('refresh:0.1;url=login-admin.php');
        }
          mysqli_close($mysqli);
        ?>
        </h2>

        <div class="container w-100">
    <div class="row m-2 g-lg-5 g-3">
      <div class="col-12 col-lg-6 section my-4 m-lg-0">
        <a href="#" class="main">
          <div class="hidden-content p-lg-3 p-3">
            <div class="text-white h1 fw-bold">MODIFICAR DATOS</div>
            <div class="subtitle h4">Seccion Para Actualizar todos los datos de un cliente, asi como de limpieza de registros.</div>
          </div>
          <img src="./src/img/Cliente.jpg" class="img">
        </a>
      </div>
      <div class="col-12 col-lg-6 section">
        <a href="./registro.php" class="main">
          <div class="hidden-content p-3 w-100">
            <div class="text-white h1 fw-bold">REGISTRAR CLIENTE</div>
            <div class="subtitle h4">Seccion Para el Registro de Nuevos Clientes.</div>
          </div>
          <img src="./src/img/Admin.jpg" class="img">
        </a>
      </div>
    </div>
  </div>


        
    </div>

    <footer class="footer p-2 d-flex w-100">
    <h2 class="h6 text-white">Kaizen Gym</h2>
    <h2 class="h6 text-white"><i class="bi bi-c-circle-fill"></i>Copyright 2020-2022</h2>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
    crossorigin="anonymous"></script>
</body>
</html>