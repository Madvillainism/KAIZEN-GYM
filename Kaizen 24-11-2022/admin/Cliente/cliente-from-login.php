<?php
session_start();
include("connect.php");







if(!isset($_SERVER['HTTP_REFERER'])){
    die( header( 'location: ../../index.html' ) );
  
  }
  










$id = $_SESSION['id'];
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
    <title>Info</title>
</head>

<body>
    <div class="top"></div>
    <nav class="sidebar">
        <hr>
        <div class="button" data-bs-toggle="modal" data-bs-target="#exit"><i class="bi bi-door-closed-fill mx-2"></i>Salir</div>
    </nav>
    <div class="container app">
        <div class="row px-4 py-3">
            <h1 class="h1 text-center my-2"><i class="bi bi-people-fill mx-2"></i>Hola!</h1>
            <div class="col-12 p-2">
                <div class="row Info-container">
                    <div class="col-5">
                        <img src="../../src/img/User.jpg" class="image">
                    </div>
                    <div class="col-7 info">
                        <div class="section">
                            <h5># <?php echo "$id"; ?></h5>
                            <?php
                            $query = "SELECT*FROM clientes where idCliente = '$id' ";

                            $result = mysqli_query($mysqli, $query);

                            $filas = mysqli_num_rows($result);
                            $row = mysqli_fetch_array($result);
                            ?>
                        </div>
                        <div class="section">
                            <h5>
                                <b><i class="bi bi-person-check me-2"></i>
                                    Nombre: </b> <?php echo $row['nombre']; ?>
                            </h5>
                        </div>
                        <div class="section">
                            <h5>
                                <b><i class="bi bi-postcard me-2"></i>
                                    C??dula: </b><?php echo $row['cedula']; ?>
                            </h5>
                        </div>
                        <div class="section">
                            <h5><b><i class="bi bi-cash-coin me-2"></i>
                                    Saldo: </b><?php echo $row['saldo']; ?>
                            </h5>
                        </div>
                        <div class="section">
                            <h5><b><i class="bi bi-phone-vibrate me-2">

                                    </i>Tel??fono: </b><?php echo $row['telefono']; ?>
                            </h5>
                        </div>
                        <div class="section">
                            <h5><b><i class="bi bi-mailbox me-2"></i>
                                    Direcci??n: </b><?php echo $row['direccion']; ?>
                            </h5>
                        </div>
                        <div class="section">
                            <h5><b><i class="bi bi-envelope me-2"></i>
                                    Correo: </b><?php echo $row['correo']; ?>
                            </h5>
                        </div>
                        <div class="section">
                            <h5><b><i class="bi bi-award me-2"></i>
                                    Membresia: </b><?php echo $row['membresia']; ?>
                            </h5>
                        </div>
                        <div class="section">
                            <h5><b><i class="bi bi-emoji-sunglasses me-2"></i>
                                    Entrenador: </b><?php echo $row['entrenador']; ?>
                            </h5>
                        </div>
                        <div class="section">
                            <h5><b><i class="bi bi-bandaid me-2"></i>
                                    Discapacidad: </b><?php echo $row['discapacidad']; ?>
                            </h5>
                        </div>
                    </div>
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
                    ??Desea salir del sistema?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button"  onclick="location.href='destroy.php'" class="btn btn-primary">Confirmar</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="../js/behavior.js"></script>
</body>

</html>