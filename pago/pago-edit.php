<?php
include('../conexion.php');
if(isset($_POST['id'])) {
  $concepto = $_POST['concepto']; 
  $fecha = $_POST['fecha']; 
  $monto = $_POST['monto'];
  $cliente = $_POST['cliente'];
  $id = $_POST['id'];
  echo $id;
  $query = "UPDATE pago_servicios SET concepto = '$concepto',fecha = '$fecha', monto = '$monto' ,  cliente = '$cliente' WHERE cod_pag = '$id'";
  $result = mysqli_query($connection, $query);
  if (!$result) {
    die('Query Failed.');
  }
  echo "pago Update Successfully";  
}
?>
