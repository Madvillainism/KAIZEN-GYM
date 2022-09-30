<?php

include('connect.php');

    if(empty($_POST["correoR"]==false)){
        $correoR = $_POST["correoR"];
        $cedulaR = $_POST["cedulaR"];

        $sql = "INSERT INTO clientes (cedula, correo)
        VALUES ('$cedulaR', '$correoR')";
        
            if($mysqli->query($sql) === TRUE){
                
                echo "<script language='javascript'>alert('Registro completado')</script>";
                header("refresh:0.2;url=registro.php");
   
            }else{
                echo "errorcito en: " . $mysqli->error;
            } 
            $mysqli->close();
        
            $correoR = "";
            $cedulaR = "";

    } //validacion


?>