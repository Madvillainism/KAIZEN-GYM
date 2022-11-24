<?php
include("connect.php");



if(!isset($_SERVER['HTTP_REFERER'])){
  die( header( 'location: ../../index.html' ) );

}





if(!isset($_SERVER['HTTP_REFERER'])){
  die( header( 'location: ../../index.html' ) );

}










$query= "SELECT * FROM membresia ORDER BY nAcceso";
$result = mysqli_query($mysqli, $query);
$filas = mysqli_num_rows($result);

$query2= "SELECT * FROM area ORDER BY nAcceso";
$result2 = mysqli_query($mysqli, $query2);
$filas2 = mysqli_num_rows($result2);


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
    <a href="../cliente/admin-cliente.php" class="button"><i class="bi bi-people-fill mx-2"></i>Clientes</a>
    <a href="../Trainer/admin-trainer.php"  class="button"><i class="bi bi-person-square mx-2"></i>Entrenador</a>
    <a href="../Componentes/admin-componentes.php" class="button-main"><i class="bi bi-box mx-2"></i>Componentes</a>
    <div class="button" data-bs-toggle="modal" data-bs-target="#exit"><i class="bi bi-door-closed-fill mx-2"></i>Salir
    </div>
  </nav>
  <div class="container app">
    <div class="row px-4 py-3">
      <h1 class="h1 text-center mb-3"><i class="bi bi-box mx-2 mx-2"></i>Componentes</h1>
      <div clas="col-4">
      </div>
    </div>
    <div class="row px-4">
      <div class="col-6">
        <h2 class="text-center"><i class="bi bi-bricks mx-2"></i>Areas</h2>
      </div>
      <div class="col-6">
        <h2 class="text-center"><i class="bi bi-award mx-2"></i>Membresia</h2>
      </div>
    </div>
    <div class="row px-4 py-3">
    <div class="col-5">
        <div class="table trainer">
          <div class="header">
            <div class="item">Nv Acceso</div>
            <div class="item">Membresia</div>
            <!-- <div class="item">Costo</div> -->
          </div>
          <?php
          if ($filas2 > 0) {
            while ($row = mysqli_fetch_array($result2)) {
          ?>
          <div class="row">

          <div style="display: none;" id="dato">
              <?php echo $row['idArea'] ?>
            </div>
          
            <div id="dato">
              <?php echo $row['nAcceso'] ?>
            </div>
            <div>
              <?php echo $row['nombre'] ?>
            </div>

          </div>

          <?php
            }
          ?>
        </div>
        <?php
          }
          ?>
        </div>
        <div class="col-1 px-2 align-v">
        <button class="btn btn-primary my-1 w-75" data-bs-toggle="modal" data-bs-target="#addArea">
          <i class="bi bi-plus-square"></i>
        </button>
        <button class="btn btn-primary my-1 w-75" data-bs-toggle="modal" data-bs-target="#deleteArea">
          <i class="bi bi-dash-square"></i>
        </button>
      </div>
      <div class="col-5">
        <div class="table trainer">
          <div class="header">
            <div class="item">Nv Acceso</div>
            <div class="item">Membresia</div>
            <div class="item">Precio</div>
            <!-- <div class="item">Costo</div> -->
          </div>
          <?php
          if ($filas > 0) {
            while ($row = mysqli_fetch_array($result)) {
          ?>
          <div class="row">

            <div style="display: none;" id="dato">
              <?php echo $row['idMembresia'] ?>
            </div>
            <div>
              <?php echo $row['nAcceso'] ?>
            </div>
            <div>
              <?php echo $row['nombre'] ?>
            </div>
            <div>
              <?php echo $row['precio'] ?> $
            </div>

          </div>

          <?php
            }
          ?>
        </div>
        <?php
          }
          ?>
        </div>
        <div class="col-1 px-2 align-v">
        <button class="btn btn-primary my-1 w-75" data-bs-toggle="modal" data-bs-target="#addMembresia">
          <i class="bi bi-plus-square"></i>
        </button>
        <button class="btn btn-primary my-1 w-75" data-bs-toggle="modal" data-bs-target="#deleteMembresia">
          <i class="bi bi-dash-square"></i>
        </button>
      </div>
      </div>

    </div>
  </div>
  <footer class="footer mt-2 mt-lg-0 p-3 d-flex w-100">
    <h2 class="h6 text-white"><i class="bi bi-c-circle-fill mx-2"></i>Copyright 2020-2022</h2>
  </footer>
  <!--------------------------------------- Modal --------------------------------------->
  <!--------- Añadir Area Modal --------->
  <div class="modal fade" id="addArea" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title h3"><i class="bi bi-bricks mx-2"></i>Añadir Area</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="component-from-admin.php" method="POST">
            <div class="row">
              <div class="col-1"></div>
              <div class="col-10">
            <input type="hidden" name="type" value="area"/>
                <label for="name" class="form-label mt-2 fs-5">Nombre de Area</label>
                <input required type="text" id="name" class="form-control" name="nombreR"
                  placeholder="Ingrese el Nombre">

                  <label for="name" class="form-label mt-2 fs-5">Nivel de Acceso</label>
                <input required min=0 type="number" id="name" class="form-control" name="accesoR"
                  placeholder="Ingrese el Nombre">
              </div>

              
              <div class="col-1"></div>
            </div>

            <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
          </form>
        </div>

      </div>
    </div>
  </div>
  <!--------- Borrar Area Modal --------->
  <div class="modal fade" id="deleteArea" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title h3"><i class="bi bi-award mx-2"></i>Eliminar Area</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ¿Desea eliminar esta Area?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-primary"  onclick="boomA()">Eliminar</button>
        </div>
      </div>
    </div>
  </div>
  <!--------- Añadir Membresia Modal --------->
  <div class="modal fade" id="addMembresia" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title h3"><i class="bi bi-award mx-2"></i>Añadir Membresia</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="component-from-admin.php" method="POST">
            <div class="row">
              <div class="col-1"></div>
              <div class="col-10">
            <input type="hidden" name="type" value="membre"/>
                <label for="name" class="form-label mt-2 fs-5">Nombre de Membresia</label>
                <input required type="text" id="name" class="form-control" name="nombreR"
                  placeholder="Ingrese el Nombre">
                  <label for="access" class="form-label mt-2 fs-5">Nivel de Acceso</label>
                <input required type="number" min=0 id="name" class="form-control" name="accesoR"
                  placeholder="Ingrese el Nombre">
                  <label for="precio" class="form-label mt-2 fs-5">Precio</label>
                <input required type="number" min=0 id="name" class="form-control" name="precioR"
                  placeholder="Ingrese el Nombre">
              </div>
           
              <div class="col-1"></div>
            </div>
          
          
            <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
          
          </form>
        </div>

      </div>
    </div>
  </div>
  <!--------- Borrar Membresia Modal --------->
  <div class="modal fade" id="deleteMembresia" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title h3"><i class="bi bi-award mx-2"></i>Eliminar Membresia</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ¿Desea eliminar el Membresia?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-primary"  onclick="boom()">Eliminar</button>
        </div>
      </div>
    </div>
  </div>
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
          <button type="button"  onclick="location.href='destroy.php'" class="btn btn-primary">Confirmar</button>

        </div>
      </div>
    </div>
  </div>
  <script src="events.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
    crossorigin="anonymous"></script>
  <script src="../../js/behavior.js"></script>
</body>

</html>