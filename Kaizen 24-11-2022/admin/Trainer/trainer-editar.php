<?php
include("connect.php");


if(!isset($_SERVER['HTTP_REFERER'])){
  die( header( 'location: ../../index.html' ) );

}



$id = $_GET['id'];
//Obtener datos del cliente para editar
$query = "SELECT*FROM entrenador WHERE idEntrenador = '$id'";

$result = mysqli_query($mysqli, $query);

$filas = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../scss/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Heebo&display=swap" rel="stylesheet">
  <title>Home</title>
</head>

<body>
  <div class="top"></div>
  <nav class="sidebar">
    <hr>
    <a href="../../admin/cliente/admin-cliente.php" class="button"><i class="bi bi-people-fill mx-2"></i>Clientes</a>
    <a href="admin-trainer.php" class="button-main"><i class="bi bi-person-square mx-2"></i>Entrenador</a>
    <a href="../../admin/Componentes/admin-componentes.php" class="button"><i class="bi bi-box mx-2"></i>Componentes</a>
    <div class="button" data-bs-toggle="modal" data-bs-target="#exit"><i class="bi bi-door-closed-fill mx-2"></i>Salir</div>
  </nav>
  <div class="container app">
    <div class="row px-4 py-3">
      <h1 class="h1 text-center my-2"><i class="bi bi-person-square mx-2"></i>Editar Entrenador</h1>
      <div class="col-12 p-2">
        <div class="row Edit-container">
          <form action="trainer-from-admin.php" method="POST">
          <input type="hidden" name="id" value="<?php echo $id; ?>"/>
            <input type="hidden" name="type" value="modif"/>
              <label` for="name" class="form-label mt-2 fs-5"><i class="bi bi-postcard me-1"></i>Cedula</label>
                <input id="cel" class="form-control" name="cedulaR" value="<?php echo $row['cedula']; ?>" placeholder="Ingrese la cedula" required="" type="text" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)">
                <div class="row">
                  <div class="col-6">
                    <label for="name" class="form-label mt-2 fs-5"><i class="bi bi-person-check me-1"></i>Nombre</label>
                    <!-- Definicion de campo, establecer que es obligatorio y los caracteres permitidos en linea siguiente-->
                    <input required type="text" id="name" class="form-control" name="nombreR" value="<?php echo $row['nombre']; ?>" placeholder="Ingrese el Nombre">
                  </div>
                  <div class="col-6">
                    <label for="name" class="form-label mt-2 fs-5"><i class="bi bi-person-check-fill me-1"></i>Apellido</label>
                    <!-- Definicion de campo, establecer que es obligatorio y los caracteres permitidos en linea siguiente-->
                    <input required type="text" id="lname" class="form-control" name="apellidoR" value="<?php echo $row['apellido']; ?>" placeholder="Ingrese el Apellido">
                  </div>
                </div>
                <label for="name" class="form-label mt-2 fs-5"><i class="bi bi-phone-vibrate me-1"></i>Telefono</label>
                <div class="row">
                  <div class="col-3">
                    <!-- Definicion de campo, establecer que es obligatorio y los caracteres permitidos en linea siguiente, ademas del minimo y maximo de caracteres-->
                    <input required id="tlf1" class="form-control" name="tele1R" placeholder="XXXX" type="text" value="<?php $tele=explode("-",$row['telefono']); echo $tele [0];?>" maxlength="4" minlength="4" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)">
                  </div>
                  <div class="col-9">
                    <!-- Definicion de campo, establecer que es obligatorio y los caracteres permitidos en linea siguiente, ademas del minimo y maximo de caracteres-->
                    <input required type="number" id="tlf2" class="form-control" name="tele2R" placeholder="XXXXXXX" type="text" value="<?php $tele=explode("-",$row['telefono']); echo $tele [1];?>" maxlength="7" minlength="7" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)">
                  </div>
                </div>
                
                <div class="row">
                  <div class="col-6">
                    <label for="email" class="form-label mt-2 fs-5"><i class="bi bi-award me-2"></i>Sueldo</label>
                    <div class="col-12 d-flex">
                      <input required id="tlf1" class="form-control" name="SueldoR" placeholder="XXXX" value="<?php echo $row['sueldo']; ?>" type="number"
                      maxlength="4" minlength="4">
                      <label class="form-label mx-3 fs-4"> $</label>
                    </div>
                  </div>
                  <div class="col-6">
                    <label for="email" class="form-label mt-2 fs-5"><i class="bi bi-envelope me-2"></i>Correo</label>
                    <input required type="email" id="email" class="form-control" name="correoR" value="<?php echo $row['correo']; ?>"
                      placeholder="Ingrese el correo electronico">
                  </div>
                </div>
                <div class="container py-3 px-0">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                  <button type="submit" class="btn btn-primary">Guardar</button>
  
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>
  <footer class="footer mt-2 mt-lg-0 p-3 d-flex w-100">
    <h2 class="h6 text-white"><i class="bi bi-c-circle-fill mx-2"></i>Copyright 2020-2022</h2>
  </footer>
    <!--------- Salir Modal --------->
    <div class="modal fade" id="exit" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title h3"><i class="bi bi-door-closed-fill me-2"></i>Salir</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            ¿Desea salir del sistema?
          </div>
          <div class="modal-footer">
          <button type="button"  onclick="location.href='destroy.php'" class="btn btn-primary">Confirmar</button>

          </div>
        </div>
      </div>
    </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
    crossorigin="anonymous"></script>
  <script src="../js/behavior.js"></script>
</body>

</html>