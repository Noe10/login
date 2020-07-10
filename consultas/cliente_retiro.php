<?php
include('../conexion.php');
if(isset($_POST['cliente'])) {
  $cliente = $_POST['cliente'];
  $query = "SELECT  n_cuenta, monto, fecha from retiros d inner join cliente c on c.n_cuenta = d.cliente where c.nombre = '$cliente'"; 
  $result = mysqli_query($connection, $query);

  if (!$result) {
    die('Query Failed.');
  }

  $json = array();
  while($row = mysqli_fetch_array($result)) {
    $json[] = array(
      'n_cuenta' => $row['n_cuenta'],
      'monto' => $row['monto'],
      'fecha' => $row['fecha'],
    

    );
  }
  $jsonstring = json_encode($json);
  echo $jsonstring;
}
?>