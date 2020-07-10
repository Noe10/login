<?php
include('../conexion.php');
if(isset($_POST['id'])) {
  $id = $_POST['id'];
  $query = "DELETE FROM retiros WHERE cod_ret = $id"; 
  $result = mysqli_query($connection, $query);

  if (!$result) {
    die('Query Failed.');
  }
  echo "categorias Deleted Successfully";  
}
?>
