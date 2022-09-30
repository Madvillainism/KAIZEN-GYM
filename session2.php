<?php
    
    include('session1.php');
    //session_start();
     //INICIA SESION Y RECIBE DATOS

?>

<html>
    <head>
        <script>
            if(window.close()){
                <?php
                session_destroy();
                ?>
            }
            </script>
        <body>
            <h3><?php
                echo "lo mas lindo de mcbo es: " ;
                echo "<br>";

            echo "Su nombre es: " . $_SESSION['name'] . ' '; //comunicacion de variables entre sesiones

            echo "su correo es: " . $_SESSION['email'] . ' ';

            echo "su rol es: " . $_SESSION['role'] . ' ';

            //Unset will destroy a particular session variable whereas session_destroy() will destroy all the session data for that user.

            //HACER SESSION DESTROY Y O UNSET
            

            ?></h3>
        </body>
    </head>

</html>