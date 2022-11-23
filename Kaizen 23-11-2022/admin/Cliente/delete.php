<?php
include('connect.php');




if(!isset($_SERVER['HTTP_REFERER'])){
    die( header( 'location: ../../index.html' ) );
  
  }
  





$id = $_GET['id'];

$query = "DELETE FROM clientes WHERE idCliente = '$id'";

$result = mysqli_query($mysqli, $query);

if ($result === TRUE) {
    echo "<script>alert('deletion completed')</script>";
    echo "<script>window.location.href='admin-cliente.php'</script>";
} else {
    echo "pajuo";
}
