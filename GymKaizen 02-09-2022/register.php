<?php

include('connect.php');

    if(empty($_POST["correoR"]==false)){
        $cedulaR = $_POST["cedulaR"];
        $nombreR=$_POST["nombreR"];
        $apellidoR=$_POST["apellidoR"];
        $teleR=$_POST["tele1R"] . "-". $_POST["tele2R"];
        $direccionR=$_POST["direccionR"];
        $correoR = $_POST["correoR"];
        $discaR=$_POST=["discaR"];
        $entreR=$_POST=["entreR"];
        $membreR=$_POST=["membreR"];





        
        $sql = "INSERT INTO clientes (cedula,nombre,apellido, telefono, direccion, correo,discapacidad, entrenador, membresia)
        VALUES ('$cedulaR','$nombreR','$apellidoR','$teleR','$direccionR', '$correoR','$discaR','$entreR','$membreR')";
        
            if($mysqli->query($sql) === TRUE){
                
                echo "<script language='javascript'>alert('Registro completado')</script>";

                header("refresh:5;url=registro.php");
   
            }else{
                echo "errorcito en: " . $mysqli->error;
            } 
            $mysqli->close();

    } //validacion


?>