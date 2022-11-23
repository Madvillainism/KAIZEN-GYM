<?php
include("connect.php");





if(!isset($_SERVER['HTTP_REFERER'])){
  die( header( 'location: ../../index.html' ) );

}








$query = "SELECT idCliente, nombre, cedula, saldo FROM clientes";
$result = mysqli_query($mysqli, $query);
$filas = mysqli_num_rows($result);

$query2= "SELECT * FROM membresia";
$result2 = mysqli_query($mysqli, $query2);

$options = "";

while($row2 = mysqli_fetch_array($result2))
{
    $options = $options."<option>$row2[1]</option>";
}

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
  <title>ADMIN</title>
  <script type="text/javascript">
    funtion preventback(){window.history.forward()};
    settim
  </script>




  <script>
                function habilitarCombo(valor){
                if(valor=="NORMAL"){
   
                document.getElementById("entrenador").disabled = true;
                document.getElementById("entrenador").selectedIndex ="0";
                }
                else {
    
                document.getElementById("entrenador").disabled = false;
                document.getElementById("entrenador").selectedIndex ="1";


                }
                }


</script>

</head>

<body>
  
  <div class="top"></div>
  <nav class="sidebar">
    <hr>
    <a href="../cliente/admin-cliente.php" class="button-main"><i class="bi bi-people-fill mx-2"></i>Clientes</a>
    <a href="../Trainer/admin-trainer.php" class="button"><i class="bi bi-person-square mx-2"></i>Entrenador</a>
    <a href="../Componentes/admin-componentes.php" class="button"><i class="bi bi-box mx-2"></i>Componentes</a>
    <div class="button" data-bs-toggle="modal" data-bs-target="#exit"><i class="bi bi-door-closed-fill mx-2"></i>Salir
    </div>
  </nav>
  <div class="container app">
    <div class="row px-4 py-3">
      <h1 class="h1 text-center mb-3"><i class="bi bi-people-fill mx-2"></i>Clientes</h1>
      <div clas="col-4">
        <h4 class="text-center">Total Clientes:
          <?php echo $filas ?>
        </h4>
      </div>
    </div>
    <div class="row px-4 py-3">
      <div class="col-10">
        <div class="table client">
          <div class="header">
            <!-- <div class="item">ID</div> -->
            <div class="item">ID</div>
            <div class="item">Nombre</div>
            <div class="item">Cedula</div>
            <div class="item">Saldo</div>
          </div>
          <?php
          if ($filas > 0) {
            while ($row = mysqli_fetch_array($result)) {
          ?>
          <div class="row">

            <div id="dato">
              <?php echo $row['idCliente'] ?>
            </div>
            <div>
              <?php echo $row['nombre'] ?>
            </div>
            <div>
              <?php echo $row['cedula'] ?>
            </div>
            <div>
              <?php echo $row['saldo'] ?>
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
      <div class="col-2 px-2 align-v">
        <button class="btn btn-primary my-1 w-100" data-bs-toggle="modal" data-bs-target="#addClient">
          <i class="bi bi-person-plus-fill me-2"></i>Agregar
        </button>
        <button class="btn btn-primary my-1 w-100" onclick="boom()">
          <i class="bi bi-person-dash-fill me-2"></i>Eliminar
        </button>
        <button onclick="show()" class="btn btn-primary my-1 w-100">
          <i class="bi bi-zoom-in me-2"></i>Ver
        </button>
        <button class="btn btn-primary my-1 w-100" onclick="update()">
          <i class="bi bi-pencil-square me-2"></i>Editar
        </button>
        <button class="btn btn-primary my-1 w-100" data-bs-toggle="modal" data-bs-target="#editBalance">
          <i class="bi bi-cash-coin me-2"></i>Saldo
        </button>
      </div>
      <div class="col-12">
        <label for="name" class="mt-2 fs-5 me-2">Cobro automático los primeros 5 dias del mes</label>
        <input id=""  name="cedulaR" type="checkbox" class="me-3">
        <button class="btn btn-primary my-1 w-25" data-bs-toggle="modal" data-bs-target="#saveCobro">Guardar</button>
      </div>
    </div>
  </div>
  <footer class="footer mt-2 mt-lg-0 p-3 d-flex w-100">
    <h2 class="h6 text-white"><i class="bi bi-c-circle-fill mx-2"></i>Copyright 2020-2022</h2>
  </footer>
  <!--------------------------------------- Modal --------------------------------------->
  <!--------- Agregar Modal --------->
  <div class="modal fade" id="addClient" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title h3"><i class="bi bi-person-plus-fill mx-2"></i>Agregar Cliente</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="row mx-auto w-100 align-items-center">
          <div class="col-12 px-5 py-4 text-center text-lg-start">
            <form action="register-from-admin.php" method="POST">
            <input type="hidden" name="type" value="agregar"/>
              <label for="name" class="form-label mt-2 fs-5"><i class="bi bi-postcard me-1"></i>Cedula</label>
              <input id="cel" class="form-control" name="cedulaR" placeholder="Ingrese la cedula" required=""
                type="text" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)">
              <div class="row">
                <div class="col-6">
                  <label for="name" class="form-label mt-2 fs-5"><i class="bi bi-person-check me-1"></i>Nombre</label>
                  <!-- Definicion de campo, establecer que es obligatorio y los caracteres permitidos en linea siguiente-->
                  <input required type="text" id="name" class="form-control" name="nombreR"
                    placeholder="Ingrese el Nombre">
                </div>
                <div class="col-6">
                  <label for="name" class="form-label mt-2 fs-5"><i
                      class="bi bi-person-check-fill me-1"></i>Apellido</label>
                  <!-- Definicion de campo, establecer que es obligatorio y los caracteres permitidos en linea siguiente-->
                  <input required type="text" id="lname" class="form-control" name="apellidoR"
                    placeholder="Ingrese el Apellido">
                </div>
              </div>
              <label for="name" class="form-label mt-2 fs-5"><i class="bi bi-phone-vibrate me-1"></i>Telefono</label>
              <div class="row">
                <div class="col-3">
                  <!-- Definicion de campo, establecer que es obligatorio y los caracteres permitidos en linea siguiente, ademas del minimo y maximo de caracteres-->
                  <input required id="tlf1" class="form-control" name="tele1R" placeholder="XXXX" type="text"
                    maxlength="4" minlength="4" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)">
                </div>
                <div class="col-9">
                  <!-- Definicion de campo, establecer que es obligatorio y los caracteres permitidos en linea siguiente, ademas del minimo y maximo de caracteres-->
                  <input required type="number" id="tlf2" class="form-control" name="tele2R" placeholder="XXXXXXX"
                    type="text" maxlength="7" minlength="7"
                    onkeypress="return (event.charCode >= 48 && event.charCode <= 57)">
                </div>
              </div>
              <label for="" class="form-label mt-2 fs-5"><i class="bi bi-mailbox me-2"></i>Dirección</label>
              <input required type="text" id="direccion" class="form-control" name="direccionR"
                placeholder="Ingrese el correo electronico">
              <label for="email" class="form-label mt-2 fs-5"><i class="bi bi-envelope me-2"></i>Correo</label>
              <input required type="email" id="email" class="form-control" name="correoR"
                placeholder="Ingrese el correo electronico">
              <div class="row">
                <div class="col-6">
                  <label for="email" class="form-label mt-2 fs-5"><i class="bi bi-award me-2"></i>Membresia</label>
                  <select name="membreR" class="form-control" id="membresia" onchange="habilitarCombo(this.value);">
                  <?php echo $options;?>
                  </select>
                </div>
                <div class="col-6">
                  <label for="email" class="form-label mt-2 fs-5"><i
                      class="bi bi-emoji-sunglasses me-2"></i>Entrenador</label>
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
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
              </div>
            </form>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!--------- Borrar Modal --------->
  <div class="modal fade" id="deleteClient" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title h3"><i class="bi bi-person-dash-fill mx-2"></i>Eliminar Cliente</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ¿Desea eliminar el cliente?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-primary">Eliminar</button>
        </div>
      </div>
    </div>
  </div>
  <!--------- Guardar Modal --------->
  <div class="modal fade" id="saveCobro" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title h3"><i class="bi bi-person-dash-fill mx-2"></i>Modificar Cobro</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ¿Desea actualizar el cobro automatico de clientes?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-primary">Aceptar</button>
        </div>
      </div>
    </div>
  </div>
  <!--------- Saldo Modal --------->
  <div class="modal fade" id="editBalance" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title h3"><i class="bi bi-cash-coin me-2"></i>Editar Saldo</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h5></i>Cliente: </b>Roberto Palmar</h5>
          <div class="form-saldo">
            <h5></i>Saldo: </b>-50$</h5>
            <div class="form-div">
              <h5></i>Actualización: </b></h5>
              <!-- COLOCAR SALDO ACTUAL EN INPUT PARA MODIFICAR -->
              <input type="number" class="ms-3 w-25 form-control">
              <h5 class="ms-2"> $</h5>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-primary">Confirmar</button>
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






