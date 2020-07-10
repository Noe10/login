<?php
  include('../conexion.php');
  $query = "SELECT * from depositos";
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
      'cod_dep' => $row['cod_dep']
    );
  }
  $jsonstring = json_encode($json);
  echo $jsonstring;
?>
