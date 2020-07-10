<?php
include('../conexion.php');
if(isset($_POST['id'])) {
   $id =  $_POST['id'];
  $query = "SELECT * from retiros WHERE cod_ret = $id";

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
  $jsonstring = json_encode($json[0]);
  echo $jsonstring;
}
?>
