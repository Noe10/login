<?php
  include('../conexion.php');
  $query = "SELECT * from retiros";
  $result = mysqli_query($connection, $query);
  if(!$result) {
    die('Query Failed'. mysqli_error($connection));
  }
  $json = array();
  while($row = mysqli_fetch_array($result)) {
    $json[] = array(
      'fecha' => $row['fecha'],
      'monto' => $row['monto'],
      'cliente' => $row['cliente'],
      'cod_ret' => $row['cod_ret']
    );
  }
  $jsonstring = json_encode($json);
  echo $jsonstring;
?>
