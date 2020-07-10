<?php

  include('../conexion.php');
  $idQuery = "SELECT count(cod_dep) FROM depositos";
  $idresult = mysqli_query($connection, $idQuery);
 
  if (!$idresult) {
    die('Query Failed.');
  }
  
  $data = $idresult->fetch_row();
  
  $id =  $data[0] + 1 ;


  echo $id;
  
if(isset($_POST['fecha']) && $id) {
   echo $_POST['fecha'] . ', ' . $_POST['monto'];
   echo $id;
  
  $fecha = $_POST['fecha'];
  $monto = $_POST['monto'];
  $cliente = $_POST['cliente'];

  $query = "INSERT into depositos(cod_dep, fecha , monto ,cliente) VALUES ($id,'$fecha', '$monto','$cliente')";
  $result = mysqli_query($connection, $query);

  if (!$result) {
    die('Query Failed.');
  }

  echo "compania Added Successfully";  

}

?>
