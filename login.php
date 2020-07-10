<?php
   session_start();



?>


<html>   
   <head>
      <title>Login Page</title>
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
        label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }      
         .box {
            border:#666666 solid 1px;
         }
      </style>	  
	   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
       <script src="ajax_01.js" type="text/javascript"></script>
    </head>   
   <body bgcolor = "#FFFFFF">
    <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;">
			<b>Login</b></div>		
            <div style = "margin:30px">	
			
                  <form name="form">
                  <label>Primer Valor:   </label><input type="text" id="n1" /> <br><br>
                  <label>Segundo Valor:  </label><input type="text" id="n2" /> <br><br>  
                  <input type="button" name="enviar" value="Enviar" href="javascript:;" 
                         onclick="Sumar($('#n1').val(), $('#n2').val());">
				   <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="usuarios.php">REGISTRATE</a></label><br />				  
               </form>  
    <br>
    <div id="resultado"></div>			   
            </div>				
         </div>

<br>
<br>
		 <iframe width="560" height="315" src="https://www.youtube.com/embed/019HhfHxUjU" 
                 frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; 
                 picture-in-picture" allowfullscreen></iframe>
 	 
	</div>
   </body>






