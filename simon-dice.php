<!DOCTYPE html>
<html>
  <head>
    <title>Ejercicios</title>
    <h1>Ejercicio Simon Dice</h1>
  </head>
  <body>
	<?php
        session_start();
        if (!isset($_REQUEST["num"])) {
            $sec = rand(0, 9);
            $ron = 0;
            $_SESSION["sec"] = $sec;
            $_SESSION["ron"] = $ron;
            form(-1,-1, 0);

        }else{
            $num = $_REQUEST["num"];
            $sec = $_SESSION["sec"];
            $ron = $_SESSION["ron"];
            
            if($sec==$num){
                $rand = rand(1,9);
                if($ron==1){
                    $rand =$rand*10;
                    $sec = $sec + $rand;

                }else{
                    if($ron==2){
                        $rand =$rand*100;
                        $sec = $sec + $rand;
                    }else{
                        $rand =$rand*1000;
                        $sec = $sec + $rand;
                    }
                }

                $_SESSION["sec"] = $sec;
                form($num, $sec, $ron);

            }else{
                form($num, $sec, -1);
            }
        }
        
		function form ($num,$sec, $estado){
            $_SESSION["ron"] = $estado+1;                
            if($estado==0){
                echo
                ("
                    <form action='simon-dice.php' method='GET'>
                    <h2>Introduce el primer numero de la secuencia</h2>
                    <input type='text' name='num'>
                    <br>
                    <input type='submit'>
                ");
            }
            if($estado==1){
                echo
                ("
                    <form action='simon-dice.php' method='GET'>
                    <h2>Introduce la secuencia.</h2>
                    <input type='text' name='num'>
                    <br>
                    <input type='submit'>
                    
                ");
            }

            if($estado==2){
                echo
                ("
                    <form action='simon-dice.php' method='GET'>
                    <h2>Introduce la secuencia.</h2>
                    <input type='text' name='num'>
                    <br>
                    <input type='submit'>
                    
                ");

            }

            if($estado==3){
                echo
                ("
                    <form action='simon-dice.php' method='GET'>
                    <h2>Introduce la secuencia.</h2>
                    <input type='text' name='num'>
                    <br>
                    <input type='submit'>
                    
                ");

            }

            if($estado==4){
                echo
                ("
                    <form action='simon-dice.php' method='GET'>
                    <h2>Has ganado.</h2>    
                ");

            }

            if($estado==-1){
                echo
                ("
                    <form action='simon-dice.php' method='GET'>
                    <h2>Has fallado.</h2>
                ");

            }
        }  
	?>

    <script type= "text/javascript">
        var a = <?php echo $_SESSION["sec"]; ?>;
        var b = <?php echo $_SESSION["ron"]; ?>;

        if(b!=0){
            document.write("<p>Ronda: "+b+"</p>");
        }
        if(b<=4){
            document.write("<p id='sec'>Secuencia: "+a+"</p>");
            setTimeout(temporizador, 1500);
        }

        function temporizador() {
            document.getElementById('sec').style.display = 'none';
        }
    </script>
  </body>
</html>