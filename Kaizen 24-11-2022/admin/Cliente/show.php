<?php



if(!isset($_SERVER['HTTP_REFERER'])){
    die( header( 'location: ../../index.html' ) );
  
  }





include('connect.php');

$query = "SELECT idCliente, cedula, correo FROM clientes";

$result = mysqli_query($mysqli, $query);

$filas = mysqli_num_rows($result);
//$row = mysqli_fetch_array($result);
?>

<table width="300" border="1" cellspacing="1" cellpadding="1"> 
    <h1>CONTACTS</h1>
    <?php
if($filas > 0){
    while($row = mysqli_fetch_array($result))  {
        ?>

        <tr>
            <td>ID</td>
        <td> <?php echo $row["idCliente"]; ?> </td>
        <td><a 
        href="update.php?id=<?php echo $row['idCliente']?>">Update</a> </td>
        <td><a 
        href="delete.php?id=<?php echo $row['idCliente']?>">Delete</a> </td>
    </tr>

    <tr>
        <td>Cedula</td>
        <td> <?php echo $row["cedula"]; ?> </td>
        <td>/////</td>
    </tr>

    <tr>
        <td>Correo</td>
        <td> <?php echo $row["correo"]; ?> </td>
        <td>/////</td>
    </tr>
        
        <tr></tr>
    <?php
    }
    ?>
     </table>

     <?php
}
?>


