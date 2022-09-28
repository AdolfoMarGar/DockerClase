<!DOCTYPE html>
<html>
  <head>
    <title>Ejercicios</title>
    <h1>EJercicio videoclub simple</h1>
  </head>
  <body>

	<?php
    //localhost:8000 para phpmyadmin
       $db = new mysqli("mariadb", "root", "root", "videoclub");
       if($db->connect_error){
        die("Error en la conexion : ".$db->connect_error);
        }
       $db->query("INSERT INTO persona (id, nombre, apellidos, fotografia) VALUES (2,'Leonardo','DiCaprio', 'https://media.vogue.es/photos/5fc4b046f19b6599598e2edd/master/w_960%2Cc_limit/GettyImages-542367236.jpg')");
       
	?>

  </body>
</html>
