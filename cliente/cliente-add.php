<?php

  include('../conexion.php');
  $idQuery = "SELECT max( n_cuenta) FROM cliente";
  $idresult = mysqli_query($connection, $idQuery);
 
  if (!$idresult) {
    die('Query Failed.');
  }
  
  $data = $idresult->fetch_row();
  
  $id =  $data[0] + 1 ;


  echo $id;
  
if(isset($_POST['name']) && $id) {
   echo $_POST['name'] . ', ' . $_POST['apellido'];
   echo $id;
  
  $name = $_POST['name'];
  $apellido = $_POST['apellido'];
  $dni = $_POST['dni'];

  $query = "INSERT into cliente(n_cuenta, nombre, apellido, dni) VALUES ($id,'$name', '$apellido', '$dni')";
  $result = mysqli_query($connection, $query);

  if (!$result) {
    die('Query Failed.');
  }

  echo "categorias Added Successfully";  

}

?>
