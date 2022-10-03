<!DOCTYPE html>
<html>
  <head>
    <title>Ejercicios</title>
    <h1>Ejercicio Simon Dice</h1>
  </head>
  <body>
  Cuidao aqui con el ecntype y tiene que ser post 100%
  Buscar sino file upload post php method php
  <?php
    if(isset($_REQUEST["titulo"])){
    echo(
      '<form action="/v_formPelicula.php" method="get"  id="formulario"><!--enctype="multipart/form-data"-->
        <ul>
          <li>
            <label for="titulo">Titulo:</label>
            <input type="text" id="titulo" name="titulo">
          </li>
          <li>
            <label for="genero">Genero:</label>
            <input type="text" id="genero" name="genero">
          </li>
          <li>
            <label for="pais">Pais:</label>
            <input type="text" id="pais" name="pais">
          </li>
          <li>
            <label for="anio">Año:</label>
            <input type="text" id="anio" name="anio">
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
      echo("ey");

    }
  ?>
  

  <script type="text/javascript">
    function comprobarDatos(){
      var lleno = true;

      if(document.getElementById("titulo").value==null||document.getElementById("titulo").value==""){
        alert("Introduce un titulo");
        lleno = false;
      }

      if(document.getElementById("genero").value==null||document.getElementById("genero").value==""){
        alert("Introduce un genero");
        lleno = false;
      }

      if(document.getElementById("pais").value==null||document.getElementById("pais").value==""){
        alert("Introduce un pais");
        lleno = false;
      }

      if(document.getElementById("anio").value==null||document.getElementById("anio").value==""){
        alert("Introduce un anio");
        lleno = false;
      }

      if(document.getElementById("img").value==null||document.getElementById("img").value==""){
        alert("Introduce una imagen");
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
  <button name="Enviar" onclick="ejecutar()">Enviar</button>

  <button name="Inicio" role="link" onclick="window.location='/videoclub.php'">Inicio</button>

  </body>
</html>