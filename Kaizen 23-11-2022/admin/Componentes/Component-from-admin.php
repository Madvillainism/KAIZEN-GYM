<?php
include('connect.php');


if(!isset($_SERVER['HTTP_REFERER'])){
    die( header( 'location: ../../index.html' ) );
  
  }


$type=$_POST["type"];



//Toma de datos desde el Formulario de Registro para almacenar 
  

            if($type=="membre"){


                $nombre= $_POST["nombreR"];
                $acceso=$_POST["accesoR"];
                $precio=$_POST["precioR"];



        $sql = "INSERT INTO membresia (nombre,precio,nAcceso)
        VALUES ('$nombre','$precio','$acceso')";
        
            if($mysqli->query($sql) === TRUE){
//Notificar de la carga de los datos y regreso a la pagina de registro una vez confirmado
                echo "<script language='javascript'>
                alert('Registro completado!')</script>";
                header("refresh:0.2;url=admin-componentes.php");
            }else{
                echo "errorcito en: " . $mysqli->error;
            } 
            $mysqli->close();
}else{


    $nombre= $_POST["nombreR"];
    $acceso=$_POST["accesoR"];


    $sql = "INSERT INTO area (nombre,nAcceso)
    VALUES ('$nombre','$acceso')";
    
        if($mysqli->query($sql) === TRUE){
//Notificar de la carga de los datos y regreso a la pagina de registro una vez confirmado
            echo "<script language='javascript'>
            alert('Registro completado!')</script>";
            header("refresh:0.2;url=admin-componentes.php");
        }else{
            echo "errorcito en: " . $mysqli->error;
        } 
        $mysqli->close();


}

