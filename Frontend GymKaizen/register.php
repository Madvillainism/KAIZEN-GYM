<html>
    <head>

    <style>

        .error{
            color: red;
        }

        h1{
            color: orangered;
            text-shadow: 2px 2px;
            font-style: italic;
        }
        </style> <!--PASAR A HTML NORMAL-->
        </head>
        <body>

        <?php
$usuario = $pass =  "";

if($_SERVER["REQUEST_METHOD"] == "POST"){ //REVISA EL METODO USADO

if (empty($_POST["usuario"]) or empty($_POST["pass"])){ //ERROR DE CAMPOS SIN LLENAR
    echo "<span class=\"error\">Error: MISSING INPUT</span>";
}
else{

    $usuario = val($_POST["usuario"]); //ASIGNACION DE VALORES INTRODUCIDOS
    $pass = val($_POST["pass"]);
}

}

function val($data){ //PROCESAMIENTO DE LOS DATOS INTRODUCIDOS 
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>


<br>
            <h1> LOGIN </h1>

            <form name="loggin" method="post" action="">

           <table width="400" cellpadding="1" cellspacing="1">
               <tr>
                <td>USER</td>
                <td><input type="text" value="" name="usuario" size="8">
                    </td>
                </tr>

                <tr>
                <td>PASSWORD</td>
                <td><input type="text" value="" name="pass" size="20">
                    </td>
                </tr>

                <tr>
                    <td><input type="submit" value="SEND" name="submit">
</tr>
            </form>
            <?php
    include("validar.php")
    ?>
        </body>
    
    <!--AQUI VA INCLUDE PHP VALIDAR-->
</html>