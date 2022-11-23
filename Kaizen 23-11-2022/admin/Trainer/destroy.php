<?php   
session_start();
 
if(!isset($_SESSION['luis']))
{
       header("Location: ../../index.html");
       die();
}
?>