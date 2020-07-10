<?php 
$db_host="localhost";
$db_usuario="root";
$db_password="root";
$db_db="banco_senati";

$connection = new mysqli($db_host, $db_usuario, $db_password);
mysqli_select_db($connection, $db_db);
if ($connection->connect_errno) {
    printf("Conexión fallida: %s\n", $mysqli->connect_error);
    exit();
}
?>
