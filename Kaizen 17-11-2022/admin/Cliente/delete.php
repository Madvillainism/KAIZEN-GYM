<?php
include('connect.php');

$id = $_GET['id'];

$query = "DELETE FROM clientes WHERE idCliente = '$id'";

$result = mysqli_query($mysqli, $query);

if ($result === TRUE) {
    echo "<script>alert('deletion completed')</script>";
    echo "<script>window.location.href='admin-cliente.php'</script>";
} else {
    echo "pajuo";
}
