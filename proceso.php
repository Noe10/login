<?php
   require 'conexion.php';   
   include('sesion.php');
	session_start();
   if($_SERVER["REQUEST_METHOD"] == "POST") 
    {
      // Usamos el nombre de usuario enviado de nuestroformulario
      $myusername  = $_POST['n1'];
	  $mypassword  = $_POST['n2'];
	  
      $sql = "SELECT * FROM usuarios WHERE usuario = '$myusername' and password = '$mypassword'";
	  $result = mysqli_query($connection, $sql);
	  $row = mysqli_fetch_array($result);
      $total = mysqli_num_rows(mysqli_query($connection, $sql));
	if(	$total > 0)
		{
			$_SESSION['n1']=$row['usuario'];
			$_SESSION['login']=true;

			echo "<script>alert('BIENVENIDO AL SISTEMA DE BANCO ')</script>";
			echo "<script>window.location='menu.php'</script>"; 
		}
			else 
			{
				echo "<script>alert('INCORRECTO USUARIO O PASSWORD')</script>";
			}
	}

?>


