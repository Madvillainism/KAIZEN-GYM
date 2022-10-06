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
    <title>Home</title>
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
    <div class="container w-75">
        <div class="row my-5 mx-auto align-items-center">
            <h2 class="h1 fw-bold text-center"><i class="bi bi-person-fill me-2"></i>INICIAR SESION</h2>
            <h3 class="h2 fw-bold text-center orange">ADMINISTRADOR</h3>
            <div class="col-12 col-lg-6 p-3">
                <img src="./src/img/vertical2.jpg" class="img">
            </div>
            <div class="col-12 col-lg-6 p-3 text-center text-lg-start">


            <form action="validar.php" method="POST">
                <label for="email" class="form-label mt-2 fs-5"><i class="bi bi-envelope me-2"></i>Usuario</label>
                <input type="text" id="email" class="form-control" name="user" placeholder="Ingrese su Identificacion">
                <label for="password" class="form-label mt-2 fs-5"><i class="bi bi-braces-asterisk me-2"></i>Contraseña</label>
                <input type="password" id="password"  name="password" class="form-control" placeholder="Ingrese su contraseña">
                <input type="submit" name="submit" id="" class="btn btn-primary my-3 w-100" value="Ingresar">
                <input type="hidden" name="ROL" value="admin"/>
            </form>



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