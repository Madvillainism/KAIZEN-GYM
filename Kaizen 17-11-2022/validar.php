<?php
session_start();
include("connect.php");

echo "<script>alert('sexo')</script>";

if (isset($_POST["cedula"])) {
    $dato = $_POST["cedula"];
    $query = "SELECT*FROM clientes where cedula = '$dato' "; //query para la tabla

    $result = mysqli_query($mysqli, $query);

    //busca datos de filas y columnas de la tabla
    $filas = mysqli_num_rows($result);
    $row = mysqli_fetch_array($result);
    mysqli_close($mysqli); //Cierre de conexion con bdd

    $id = $row['idCliente'];
    echo $id;
    $_SESSION['id'] = $id;
    //checkeo del dato en form con los datos en tabla
    //echo $filas; Para probar las coincidencias

    if ($filas = 1) {
        //mysqli_close($mysqli); Cierre de conexion
        echo "xd";
        echo "<script>window.location.href='admin/Cliente/cliente-from-login.php'</script>";
    } else {
        echo "xd";
    }
}
