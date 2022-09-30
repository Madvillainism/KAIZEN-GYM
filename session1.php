<?php

    if(isset($_POST['email']) AND isset ($_POST['name']) //CERRAR EXPRESION
    and isset ($_POST['role'])){
        $dato = $_POST['email'];
        $dato2 = $_POST['name'];
        $dato3 = $_POST['role'];
    }
        
session_start();

    $_SESSION['name'] = $dato2;

    $_SESSION['email'] = $dato; //CAPTURA DATOS DESDE FORMULARIO Y ENVIA A SESIONES

    $_SESSION['role'] = $dato3;

    //header('url=session2.php');
?> 