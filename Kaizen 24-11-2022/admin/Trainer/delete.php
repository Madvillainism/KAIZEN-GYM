<?php
include('connect.php');

if(!isset($_SERVER['HTTP_REFERER'])){
    die( header( 'location: ../../index.html' ) );
  
  }



$id = $_GET['id'];

$query = "DELETE FROM entrenador WHERE idEntrenador = '$id'";

$result = mysqli_query($mysqli, $query);

if ($result === TRUE) {
    echo "<script>alert('deletion completed')</script>";
    echo "<script>window.location.href='admin-trainer.php'</script>";
} else {
    echo "pajuo";
}
