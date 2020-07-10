<?php
include('../conexion.php');
if(isset($_POST['cliente'])) {
  $cliente = $_POST['cliente'];
  $query = "SELECT  n_cuenta, monto, fecha from pago_servicios d inner join cliente c on c.n_cuenta = d.cliente where c.nombre = '$cliente'"; 
  $result = mysqli_query($connection, $query);

  if (!$result) {
    die('Query Failed.');
  }
  $pago_servicios = $query->fetch_row();
  
  $montoPago =  $pago_servicios[0] ;

  

 
  $jsonstring = json_encode($json);
  echo $jsonstring;
}
?>