<?php
    require_once ('conexionDB.php');
    session_start();
    //libera la variable de sesión
    session_unset();
    //la elimina
    session_destroy();
    header("Location:../Vista/formulariologin.php");
?>