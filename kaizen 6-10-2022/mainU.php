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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Heebo&display=swap" rel="stylesheet">

  <title>Bienvenido Usuario</title>
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
      <img src="./src/img/fondo.jpg">
      <h2 class="h1 fw-bold text-center my-4">USUARIO:</h2>
      <h2 class="display-3 text-danger text-center"> <!--PRINT USUARIO NOMBRE-->
          <?php
          include('connect.php');
          $dato = $_SESSION['id']; //trae el id del inicio de sesion
          $dato2= $_SESSION['nombre'];
          $dato3= $_SESSION['pass'];

          $sql = "SELECT * FROM clientes where idCliente = '$dato' and nombre= '$dato2' and pass= '$dato3'"; //query
          $result= mysqli_query($mysqli,$sql);

          $filas = mysqli_num_rows($result); //fila donde se encuentra el dato
          $row = mysqli_fetch_array($result); //columna donde se encuentra el dato
      
          if($filas > 0){
            echo $row["nombre"]; //print del nombre de quien inicia sesion
        } else{
          echo "<script language='javascript'>alert('un error se ha producido')</script>";
          header('refresh:0.1;url=login-user.php');

        }
          mysqli_close($mysqli);
        ?>
        </h2>

        <div class="row my-5 mx-auto w-75 align-items-center">

            <div class="col-12 text-center text-lg-start">
                
          <div class="row">
                 
            <div class="col-4">
                  <label for="name" class="form-label mt-2 fs-5"><i class="bi bi-postcard me-1"></i>Cedula: </label> 
            </div>

            <div class="col-4">
                  <label for="name" class="form-label mt-2 fs-5"><i class="bi bi-person-check me-1"></i>Nombre: </label>
            </div>

            <div class="col-4">
                  <label for="name" class="form-label mt-2 fs-5"><i class="bi bi-person-check-fill me-1"></i>Apellido: </label>
            </div>

          </div>

          <div class="row">
                 
                 <div class="col-4">
                       <label for="name" class="form-label mt-2 fs-5">
                       <?php echo $row["cedula"]; ?>
                      </label> 
                 </div>
     
                 <div class="col-4">
                       <label for="name" class="form-label mt-2 fs-5">
                       <?php echo $row["nombre"]; ?>
                       </label>
                 </div>
     
                 <div class="col-4">
                       <label for="name" class="form-label mt-2 fs-5">
                       <?php echo $row["apellido"]; ?>
                       </label>
                 </div>
     
               </div>

               <br>
<br>
<br>



          <div class="row">
                 
            <div class="col-4">
              <label for="name" class="form-label mt-2 fs-5"><i class="bi bi-phone-vibrate me-1"></i>Telefono:</label>
            </div>

            <div class="col-4">
              <label for="" class="form-label mt-2 fs-5"><i class="bi bi-mailbox me-2"></i>Dirección:</label>
            </div>

            <div class="col-4">
            <label for="email" class="form-label mt-2 fs-5"><i class="bi bi-envelope me-2"></i>Correo:</label>
            </div>

          </div>

          <div class="row">
                 
                 <div class="col-4">
                   <label for="name" class="form-label mt-2 fs-5">
                   <?php echo $row["telefono"]; ?>
                   </label>
                 </div>
     
                 <div class="col-4">
                   <label for="" class="form-label mt-2 fs-5">
                   <?php echo $row["direccion"]; ?>
                   </label>
                 </div>
     
                 <div class="col-4">
                 <label for="email" class="form-label mt-2 fs-5">
                 <?php echo $row["correo"]; ?>
                 </label>
                 </div>
     
               </div>



<br>
<br>
<br>



          <div class="row">

            <div class="col-3">
                    
              <label for="email" class="form-label mt-2 fs-5"><i class="bi bi-award me-2"></i>Membresia:</label>

            </div>

            <div class="col-3">

              <label for="email" class="form-label mt-2 fs-5"><i class="bi bi-emoji-sunglasses me-2"></i>Entrenador:</label>

            </div>


            <div class="col-3">
                    
              <label for="email" class="form-label mt-2 fs-5"><i class="bi bi-bandaid me-2"></i>Discapacidad:</label>

            </div>

            <div class="col-3">
                    
              <label for="email" class="form-label mt-2 fs-5"><i class="bi bi-currency-dollar"></i>Saldo:</label>

            </div>

          </div>


          <div class="row">

                <div class="col-3">
                <label for="email" class="form-label mt-2 fs-5"><?php echo $row["membresia"]; ?>
                </label>
                </div>

                <div class="col-3">
                <label for="email" class="form-label mt-2 fs-5"><?php echo $row["entrenador"]; ?>
                </label>
                </div>


                <div class="col-3">
                <label for="email" class="form-label mt-2 fs-5"><?php echo $row["discapacidad"]; ?>
                </label>
                </div>


                <div class="col-3">
                <label for="email" class="form-label mt-2 fs-5"><?php echo $row["saldo"]; ?> $
                </label>
                </div>

</div>


 
            <div></div>

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