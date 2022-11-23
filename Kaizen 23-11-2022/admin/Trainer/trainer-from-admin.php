<?php
include('connect.php');



if(!isset($_SERVER['HTTP_REFERER'])){
    die( header( 'location: ../../index.html' ) );
  
  }




//Toma de datos desde el Formulario de Registro para almacenar 
$type=$_POST["type"];

        $cedulaR = $_POST["cedulaR"];
        $nombreR=$_POST["nombreR"];
        $apellidoR=$_POST["apellidoR"];
        $teleR=$_POST["tele1R"] . "-". $_POST["tele2R"];
        $sueldoR=$_POST["SueldoR"];
        $correoR = $_POST["correoR"];
        

//Sentencia para introducir los datos a la base de datos
            //JALAR ID Y USAR PARA QUERY EN HOLA.PHP

            if($type=="agregar"){



        $sql = "INSERT INTO entrenador (cedula,sueldo,nombre,apellido, telefono, correo)
        VALUES ('$cedulaR', '$sueldoR','$nombreR','$apellidoR','$teleR','$correoR')";
        
            if($mysqli->query($sql) === TRUE){
//Notificar de la carga de los datos y regreso a la pagina de registro una vez confirmado
                echo "<script language='javascript'>
                alert('Registro completado!')</script>";
                header("refresh:0.2;url=admin-trainer.php");
            }else{
                echo "errorcito en: " . $mysqli->error;
            } 
            $mysqli->close();

        }else{
$id = $_POST['id'];

            $sql = "UPDATE entrenador SET cedula='$cedulaR', sueldo= '$sueldoR', nombre='$nombreR',apellido='$apellidoR', telefono='$teleR', 
            correo='$correoR' WHERE idEntrenador = '$id'";

  if($mysqli->query($sql) === TRUE){
    //Notificar de la carga de los datos y regreso a la pagina de registro una vez confirmado
                echo "<script language='javascript'>
                alert('Registro completado!')</script>";
                header("refresh:0.2;url=admin-trainer.php");
            }else{
                echo "errorcito en: " . $mysqli->error;
            } 
            $mysqli->close();

        }

            