<?php
   include('proceso.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
   <link rel="stylesheet" href="style/estilo2.css">
    <title>menu</title>
</head>
<body>
    <div class="container" style="text-align:center;">
        <div class="row">
            <div class="col col-lg-2">
            <a class="btn btn-danger btn-lg" href="salir.php">Exit</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <img src="imagenes/logo2.jpg" alt="" srcset="">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h1 style="text-transform: uppercase;margin-bottom: 5%;">
                    BIENVENIDO <?php echo $_SESSION['n1']?>
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                    <nav>
                        <ul>
                            <li><a href="#">Mantenimiento</a>
                                <ul>
                                        <li><a href="cliente.php">Cliente</a></li>
                                        <li><a href="deposito.php">Deposito</a></li>
                                        <li><a href="retiro.php">Retiro</a></li>
                                        <li><a href="pago.php">Pago</a></li>
                                </ul>
                             </li>
                            <li><a href="http://www.google.com">Servicios php</a>
                                
                            </li>
                            <li><a href="consultas.php">Consultas</a>
                               
                            </li>
                           
                        </ul>
                    </nav>
                </div>
            </div>
        </div>


    
   
 



        
    </div>
    
</body>
</html>