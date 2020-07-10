<?php
  include('../conexion.php');
  $query = "SELECT * from pago_servicios";
  $result = mysqli_query($connection, $query);
  if(!$result) {
    die('Query Failed'. mysqli_error($connection));
  }
  $json = array();
  while($row = mysqli_fetch_array($result)) {
    $json[] = array(
      'concepto' => $row['concepto'],
      'fecha' => $row['fecha'],
      'monto' => $row['monto'],
      'cliente' => $row['cliente'],
      'cod_pag' => $row['cod_pag']
    );
  }
  $jsonstring = json_encode($json);
  echo $jsonstring;
?>
