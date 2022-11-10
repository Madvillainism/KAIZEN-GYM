<?php

include('connect.php');

$dato = $_GET['id']; //JALAR ID DEL URL

$query = "SELECT * FROM clientes where idCliente = '$dato' "; //SELECCIONAR INFO

$result = mysqli_query($mysqli, $query);

$filas = mysqli_num_rows($result); 

if($filas > 0){
    while($row = mysqli_fetch_array($result)){
        $cedula = $row['cedula'];
        $correo = $row['correo']; //ASIGNAR CAMPOS A SER ACTUALIZADOS
    }
} else{
    echo "FALLASTE BCRRO";
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>ACTUALIZACION DE DATOS</title>
</head>
<body>
    <h1>ACTUALIZACION DE DATOS</h1>

    <form action="updateuser.php" method="POST">

    <table width="300" cellspacing="1" cellpadding="1"> 
        <tr>
            <td>Cedula</td>
        <td><input type="text" name="cedula" value="<?php echo $cedula;?>"> </td>
</tr>

<tr>
            <td>Correo</td>
        <td><input type="text" name="correo" value="<?php echo $correo;?>"> </td>
</tr>

    <tr>
        <td></td>
        <td><input type="submit" name="submit" value="submit"></td>
</table>

<input type="hidden" name="idCliente" value="<?php echo $dato?>">

</form>

</body>

</html>

