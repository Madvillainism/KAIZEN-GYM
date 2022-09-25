<?php

include("connect.php");

echo "<script language='javascript'> 
    alert('Bienvenido al Kaizen Gym, Paz a tu cuerpo')</script>";

    if(isset($_POST["usuario"])){
        $dato =$_POST["usuario"];
        $query = "SELECT*FROM clientes where user = '$dato' "; //query para la tabla

        $result=mysqli_query($mysqli,$query);
        
        //busca datos de filas y columnas de la tabla
        $filas = mysqli_num_rows($result);
        $row = mysqli_fetch_array($result);
        mysqli_close($mysqli); //Cierre de conexion con bdd

        //checkeo del dato en form con los datos en tabla
        //echo $filas; Para probar las coincidencias

        if($filas < 1){
            //mysqli_close($mysqli); Cierre de conexion
            echo "<script language='javascript'> 
    alert('Bienvenido al Kaizen Gym, Hubo un error. Introduzca de nuevo los datos por favor')</script>";
        } else{
            //var_dump($row);
            echo "Coincidencia encontrada"; //Mensaje para indicar exito
            
        }
    }
?>