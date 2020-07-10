<?php

include('../conexion.php');

if(isset($_POST['id'])) {
  $name = $_POST['name']; 
  $apellido = $_POST['apellido'];
  $dni = $_POST['dni'];
  $id = $_POST['id'];
  echo $id;
  $query = "UPDATE cliente SET nombre = '$name', apellido = '$apellido', dni = '$dni' WHERE n_cuenta = '$id'";
  $result = mysqli_query($connection, $query);

  if (!$result) {
    die('Query Failed.');
  }
  echo "cliente Update Successfully";  

}

?>
