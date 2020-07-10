<?php
include('../conexion.php');
if(isset($_POST['cliente'])) {
  $cliente = $_POST['cliente'];
  $retiros = "SELECT sum(monto ) from retiros d inner join cliente c on c.n_cuenta = d.cliente where c.nombre = '$cliente'"; 
  $result = mysqli_query($connection, $retiros);
  $pagos = "SELECT sum(monto ) from depositos d inner join cliente c on c.n_cuenta = d.cliente where c.nombre = '$cliente'"; 
  $result1 = mysqli_query($connection, $pagos);

  if (!$result) {
    die('Query Failed.');
  }

   
  $dataRetiros = $result->fetch_row();
  $dataPagos = $result1->fetch_row();
  
  $monto =  $dataPagos[0] - $dataRetiros[0] ;


  echo $monto;
  

}
?>