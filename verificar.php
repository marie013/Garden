<?php session_start();
if($_SESSION[access]==true) {
    echo "OK, tienes acceso permitido";
    }
    else {
    echo "Error, no tienes permiso."; session_destroy();
    }
    ?>
    