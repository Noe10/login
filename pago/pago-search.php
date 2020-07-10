<?php
include('../conexion.php');
$search = $_POST['search'];
if(!empty($search)) {
  $query = "SELECT * FROM pago_servicios WHERE cliente LIKE '$search%'";
  $result = mysqli_query($connection, $query);
  if(!$result) {
    die('Query Error' . mysqli_error($connection));
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
}
?>
