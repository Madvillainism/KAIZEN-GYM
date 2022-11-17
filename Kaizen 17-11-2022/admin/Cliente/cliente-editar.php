<?php
include("connnect.php");
$id = $_GET['id'];
//Obtener datos del cliente para editar
$query = "SELECT*FROM clientes WHERE idCliente = '$id'";

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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
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
    <a href="/admin/cliente/admin-cliente.html" class="button-main"><i class="bi bi-people-fill mx-2"></i>Clientes</a>
    <a href="/admin/Trainer/admin-trainer.html" class="button"><i class="bi bi-person-square mx-2"></i>Entrenador</a>
    <a href="/admin/Componentes/admin-componentes.html" class="button"><i class="bi bi-box mx-2"></i>Componentes</a>
    <div class="button" data-bs-toggle="modal" data-bs-target="#exit"><i class="bi bi-door-closed-fill mx-2"></i>Salir</div>
  </nav>
  <div class="container app">
    <div class="row px-4 py-3">
      <h1 class="h1 text-center my-2"><i class="bi bi-people-fill mx-2"></i>Editar Cliente</h1>
      <div class="col-12 p-2">
        <div class="row Edit-container">
          <form action="updateuser.php" method="POST">
            <label` for="name" class="form-label mt-2 fs-5"><i class="bi bi-postcard me-1"></i>Cedula</label>
              <input id="cel" class="form-control" name="cedulaR" placeholder="Ingrese la cedula" required="" type="text" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)">
              <div class="row">
                <div class="col-6">
                  <label for="name" class="form-label mt-2 fs-5"><i class="bi bi-person-check me-1"></i>Nombre</label>
                  <!-- Definicion de campo, establecer que es obligatorio y los caracteres permitidos en linea siguiente-->
                  <input required type="text" id="name" class="form-control" name="nombreR" placeholder="Ingrese el Nombre">
                </div>
                <div class="col-6">
                  <label for="name" class="form-label mt-2 fs-5"><i class="bi bi-person-check-fill me-1"></i>Apellido</label>
                  <!-- Definicion de campo, establecer que es obligatorio y los caracteres permitidos en linea siguiente-->
                  <input required type="text" id="lname" class="form-control" name="apellidoR" placeholder="Ingrese el Apellido">
                </div>
              </div>
              <label for="name" class="form-label mt-2 fs-5"><i class="bi bi-phone-vibrate me-1"></i>Telefono</label>
              <div class="row">
                <div class="col-3">
                  <!-- Definicion de campo, establecer que es obligatorio y los caracteres permitidos en linea siguiente, ademas del minimo y maximo de caracteres-->
                  <input required id="tlf1" class="form-control" name="tele1R" placeholder="XXXX" type="text" maxlength="4" minlength="4" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)">
                </div>
                <div class="col-9">
                  <!-- Definicion de campo, establecer que es obligatorio y los caracteres permitidos en linea siguiente, ademas del minimo y maximo de caracteres-->
                  <input required type="number" id="tlf2" class="form-control" name="tele2R" placeholder="XXXXXXX" type="text" maxlength="7" minlength="7" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)">
                </div>
              </div>
              <label for="" class="form-label mt-2 fs-5"><i class="bi bi-mailbox me-2"></i>Dirección</label>
              <input required type="text" id="direccion" class="form-control" name="direccionR" placeholder="Ingrese el correo electronico">
              <label for="email" class="form-label mt-2 fs-5"><i class="bi bi-envelope me-2"></i>Correo</label>
              <input required type="email" id="email" class="form-control" name="correoR" placeholder="Ingrese el correo electronico">
              <div class="row">
                <div class="col-6">
                  <label for="email" class="form-label mt-2 fs-5"><i class="bi bi-award me-2"></i>Membresia</label>
                  <select name="membreR" class="form-control" id="membresia" onchange="habilitarCombo(this.value);">
                    <option value="NORMAL">NORMAL</option>
                    <option value="GOLD">GOLD</option>
                    <option value="PLATINUM">PLATINUM</option>
                  </select>
                </div>
                <div class="col-6">
                  <label for="email" class="form-label mt-2 fs-5"><i class="bi bi-emoji-sunglasses me-2"></i>Entrenador</label>
                  <select name="entreR" class="form-control" id="entrenador" disabled="true" ;>
                    <option value="NO">NO</option>
                    <option value="SI">SI</option>
                  </select>
                  <input type="hidden" name="entreR2" value="NO" />
                </div>
                <div class="col-12">
                  <label for="email" class="form-label mt-2 fs-5"><i class="bi bi-bandaid me-2"></i>Discapacidad</label>
                  <select name="discaR" class="form-control" id="Disca">
                    <option value="NO">NO</option>
                    <option value="SI">SI</option>
                  </select>
                </div>
              </div>
              <div class="container py-3 px-0">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Guardar</button>
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
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-primary">Confirmar</button>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  <script src="../js/behavior.js"></script>
</body>

</html>