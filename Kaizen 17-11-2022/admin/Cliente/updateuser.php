<?php

include('connect.php');

$cedula = val($_POST['cedula']); //RECOLECCION DE DATOS DEL FORM
$correo = val($_POST['correo']);
$id = val($_POST['idCliente']);

function val($data){ //LIMPIEZA DE DATOS RECOLECTADOS
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;  
}

//ACTUALIZACION DE LOS DATOS
$query = "UPDATE clientes SET cedula = '$cedula', correo = '$correo' where idCliente = '$id'";

$result = mysqli_query($mysqli, $query);

if($result === TRUE){ //VERIFICACION Y REDIRECCION
    echo "ACT SUCCESSFUL";
    header('refresh:0.2;url=show.php');
} else{
    echo "marikito";
}

?>