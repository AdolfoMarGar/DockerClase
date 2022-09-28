<!DOCTYPE html>
<html>
  <head>
    <title>Ejercicios</title>
    <h1>EJercicio palindromo</h1>
  </head>
  <body>

	<?php
        if (!isset($_REQUEST["txt"])) {
            echo
                ("
                    <form action='palindromo.php' method='GET'>
                        <h2>Introduce una palabra</h2>
                        <input type='text' name='txt'>
                        <br>
                        <input type='submit'>
                    </form>
                ");
        }else{
            $pal = $_REQUEST["txt"];
            $lap="";
            $aux;

            for ($i=0; $i <strlen($pal)+1; $i++) { 
                $aux=$i*-1;
                $substr = substr($pal,$i,1);
                $lap= $substr.$lap;
            }
            if (strcmp($lap,$pal)==0) {
                echo("La palabra ".$pal." es un palindromo.");
            }else{
                echo("La palabra ".$pal." no es un palindromo.");
            }

        }
		
	?>

  </body>
</html>
