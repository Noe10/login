<?php

  include('../conexion.php');

  $query = "SELECT n_cuenta from cliente";
  $result = mysqli_query($connection, $query);
  if(!$result) {
    die('Query Failed'. mysqli_error($connection));
  }

  $json = array();
  while($row = mysqli_fetch_array($result)) {
    $json[] = array(
      'n_cuenta' => $row['n_cuenta'],
    

    );
  }
  $jsonstring = json_encode($json);
  echo $jsonstring;
?>
