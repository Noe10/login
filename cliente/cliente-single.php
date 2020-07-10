<?php

include('../conexion.php');

if(isset($_POST['id'])) {
   $id =  $_POST['id'];
 
  $query = "SELECT * from cliente WHERE n_cuenta = $id";

  $result = mysqli_query($connection, $query);
  if(!$result) {
    die('Query Failed'. mysqli_error($connection));
  }

  $json = array();
  while($row = mysqli_fetch_array($result)) {
    $json[] = array(
      'nombre' => $row['nombre'],
      'apellido' => $row['apellido'],
      'dni' => $row['dni'],
      'n_cuenta' => $row['n_cuenta']
    );
  }
  $jsonstring = json_encode($json[0]);
  echo $jsonstring;
}

?>
