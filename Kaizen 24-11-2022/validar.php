<?php
session_start();
include("connect.php");

echo "<script language='javascript'> 
    alert('Bienvenido al Kaizen Gym, Paz a tu cuerpo')</script>";

    if(isset($_POST["submit"])){

$rol=$_POST["ROL"];


if($rol=="user"){
    
    $dato =$_POST["correo"];
    $dato2 =$_POST["cedula"];
    $query = "SELECT*FROM clientes where correo = '$dato' AND cedula = '$dato2' "; //query para la tabla

    $result= mysqli_query($mysqli,$query);

    
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
header("refresh:0.2;url=login-user.html");
    } else{
        //var_dump($row);
        $id = $row["idCliente"]; //asignacion del id
        $name= $row["nombre"];
        $cedula = $row["cedula"];
         
        $_SESSION["id"] = $id;
        $_SESSION["nombre"] = $name;
        $_SESSION["cedula"] = $cedula;
        echo "<script language='javascript'>alert('Coincidencia encontrada')</script>"; //Mensaje para indicar exito
        echo "<script>window.location.href='admin/Cliente/cliente-from-login.php'</script>";
        //VACIAR CAJAS DE DATOS
    }


} else{

    $dato =$_POST["user"];
    $dato2 =$_POST["password"];
    $query = "SELECT*FROM admins where usuario = '$dato' AND pass = '$dato2' "; //query para la tabla

    $result= mysqli_query($mysqli,$query);

    
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
header("refresh:0.2;url=login-admin.html");

    } else{
        //var_dump($row);
        $id = $row["idAdmin"]; //asignacion del id
        $name= $row["usuario"];
        $pass = $row["pass"];
         
        $_SESSION["id"] = $id;
        $_SESSION["usuario"] = $name;
        $_SESSION["pass"] = $pass;



        echo "<script language='javascript'>alert('Coincidencia encontrada')</script>"; //Mensaje para indicar exito
        echo "<script>window.location.href='admin/Cliente/admin-cliente.php'</script>";
        //VACIAR CAJAS DE DATOS
        
    }


}



    }
?>