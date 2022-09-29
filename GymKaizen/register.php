<?php

include('connect.php');

    if(isset($_POST["submitR"])){
        $correoR = $_POST["correoR"];
        $cedulaR = $_POST["cedulaR"];
    } //validacion

$sql = "INSERT INTO clientes (cedula, correo)
VALUES ('$cedulaR', '$correoR')";

    if($mysqli->query($sql) === TRUE){
        echo "<script language='javascript'>alert('Registro completado')</script>";
    }else{
        echo "errorcito en: " . $mysqli->error;
    } 
    $mysqli->close();

    $correoR = "";
    $cedulaR = "";
?>