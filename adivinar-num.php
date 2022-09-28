<!DOCTYPE html>
<html>
  <head>
    <title>Ejercicios</title>
    <h1>EJercicio numero escondido</h1>
  </head>
  <body>

	<?php
    session_start();
        if (!isset($_REQUEST["num"])) {
            form(-1,0);
            $rand = rand(1, 100);
            $_SESSION["rand"] = $rand;

        }else{
            $num = $_REQUEST["num"];
            $rand = $_SESSION["rand"];

            if($rand==$num){
                form($num,3);
            }else{
                if($num>$rand){
                    form($num,2);
                }else{
                    form($num,1);
                }
            }
            
            
        }
		function form ($num, $estado){
            if($estado==0){
                echo
                ("
                    <form action='adivinar-num.php' method='GET'>
                    <h2>Introduce un numero entre 1 y 100 para adivinar el numero escondido</h2>
                    <input type='text' name='num'>
                    <br>
                    <input type='submit'>
                    
                ");
            }else{
                if($estado==2){
                    echo
                    ("
                        <form action='adivinar-num.php' method='GET'>
                        <h2>El numero escondido es mas pequeño que el que has introducido ($num).</h2>
                        <h2>Vuelve a introducir otro numero.</h2>
                        <input type='text' name='num'>
                        <br>
                        <input type='submit'>
                        
                    ");

                }
                if($estado==1){
                    echo
                    ("
                        <form action='adivinar-num.php' method='GET'>
                        <h2>El numero escondido es mas grande que el que has introducido ($num).</h2>
                        <h2>Vuelve a introducir otro numero.</h2>
                        <input type='text' name='num'>
                        <br>
                        <input type='submit'>
                        
                    ");

                }
                if($estado==3){
                    echo
                    ("
                        <form action='adivinar-num.php' method='GET'>
                        <h2>¡Has acertado, enhorabuena! El numero era: $num.</h2>
                        
                    ");

                }
            }
        }
	?>

  </body>
</html>
