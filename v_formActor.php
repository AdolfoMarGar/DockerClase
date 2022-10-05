<!DOCTYPE html>
<html>
  <head>
    <title>Ejercicios</title>
    <h1>Formulario para añadir actor.</h1>
  </head>
  <body>
  <script type="text/javascript">
    function comprobarDatos(){
      var lleno = true;

      if(document.getElementById("nombre").value==null||document.getElementById("nombre").value==""){
        alert("Introduce un nombre");
        lleno = false;
      }

      if(document.getElementById("apellido").value==null||document.getElementById("apellido").value==""){
        alert("Introduce un apellido");
        lleno = false;
      }

      if(document.getElementById("img").value==null||document.getElementById("img").value==""){
        alert("Introduce una fotografia");
        lleno = false;
      }

      return lleno;
    }
    
    function ejecutar(){
      var pasa = comprobarDatos();
      alert(pasa);
      if(pasa ===true){
        document.getElementById("formulario").submit();
      }
    }
    
  </script>

<!--
  Cuidao aqui con el ecntype y tiene que ser post 100%
  Buscar sino file upload post php method php
  -->
  <?php
    include 'SqlUtil.php';

    if(!isset($_REQUEST["nombre"])){
      echo(
        '<form action="/v_formActor.php" method="post"  id="formulario"><!--enctype="multipart/form-data"-->
          <ul>
            <li>
              <label for="nombre">Nombre:</label>
              <input type="text" id="nombre" name="nombre">
            </li>
            <li>
              <label for="apellido">Apellido:</label>
              <input type="text" id="apellido" name="apellido">
            </li>
            <li>
              <label for="img" >Imagen:</label>
              <input type="text" id="img" name="img">
              <!--<input type="file" id="img" name="peli_img">-->
            </li>
          </ul>
        </form>'
      );
      
    }else{
      $db = new SqlUtil();
      $db->insertActor($_REQUEST["nombre"],$_REQUEST["apellido"],$_REQUEST["img"]);
      echo("
       <script type='text/javascript'>
       window.location.replace('/videoclub.php');
       </script>
      ");
      
    }
  ?>
  


  <button name="Enviar" onclick="ejecutar()">Enviar</button>

  <button name="Inicio" role="link" onclick="window.location='/videoclub.php'">Inicio</button>

  </body>
</html>