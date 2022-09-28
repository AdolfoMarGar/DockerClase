<!DOCTYPE html>
<html>
  <head>
    <title>Ejercicios</title>
    <h1>EJercicio Potencia de dos numeros.</h1>
  </head>
  <body>

	<?php
        if (!isset($_REQUEST["num1"])&&!isset($_REQUEST["num2"])) {
            echo
                ("
                    <form action='potencia.php' method='GET'>
                    <h2>Introduce un numero</h2>
                    <input type='text' name='num1'>
                    <br>
                    <input type='submit'>
                    <h2>Introduce otro numero</h2>
                        <input type='text' name='num2'>
                        <br>
                        <input type='submit'>
                    </form>
                ");
        }else{
            $num1 = $_REQUEST["num1"];
            $num2 = $_REQUEST["num2"];
            $res=$num1;

            for ($i=1; $i < $num2 ; $i++) { 
                $res = $res*$num1;
            }
            if($num2==1){
                echo($num1);
            }else{
                if($num2==0){
                    echo("1");

                }else{
                    echo($res);
                    
                }
            }
            
        }
		
	?>

  </body>
</html>
