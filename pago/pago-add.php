<?php

  include('../conexion.php');
  $idQuery = "SELECT count(cod_pag) FROM pago_servicios";
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
  $concepto = $_POST['concepto'];
  $fecha = $_POST['fecha'];
  $monto = $_POST['monto'];
  $cliente = $_POST['cliente'];

  $query = "INSERT into pago_servicios(cod_pag, concepto,fecha , monto ,cliente) VALUES ($id,'$concepto','$fecha', '$monto','$cliente')";
  $result = mysqli_query($connection, $query);

  if (!$result) {
    die('Query Failed.');
  }

  echo "compania Added Successfully";  

}

?>
