<?php
include('../conexion.php');
if(isset($_POST['id'])) {
  $fecha = $_POST['fecha']; 
  $monto = $_POST['monto'];
  $cliente = $_POST['cliente'];
  $id = $_POST['id'];
  echo $id;
  $query = "UPDATE depositos SET fecha = '$fecha', monto = '$monto' ,  cliente = '$cliente' WHERE cod_dep = '$id'";
  $result = mysqli_query($connection, $query);
  if (!$result) {
    die('Query Failed.');
  }
  echo "categorias Update Successfully";  
}
?>
