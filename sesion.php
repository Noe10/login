<?php
// Iniciamos la sesion
session_start();
//// Verifica si la variable de sesión SESS_MEMBER_ID está presente o no

if($_SESSION['login'] != true){
    header("location: ./login.php");
    die();
}

?>