<?php
session_start();
//comprueba que el usuario esta autentificado 
if (!isset($_SESSION["autentificado"]) || $_SESSION["autentificado"] != "1") {
    header("location: index.php");
    exit();
}
?>
