<!DOCTYPE html>
<html>
  <head>
    <title>Ejercicios</title>
    <h1>Ejercicio Simon Dice</h1>
  </head>
  <body>
  Cuidao aqui con el ecntype y tiene que ser post 100%
  Buscar sino file upload post php method php
  <form action="/my-handling-form-page" method="post" enctype="multipart/form-data">
    <ul>
      <li>
        <label for="titulo">Titulo:</label>
        <input type="text" id="titulo" name="peli_titulo">
      </li>
      <li>
        <label for="genero">Genero:</label>
        <input type="text" id="genero" name="peli_genero">
      </li>
      <li>
        <label for="pais">Pais:</label>
        <input type="text" id="pais" name="peli_pais">
      </li>
      <li>
        <label for="anio">Año:</label>
        <input type="text" id="anio" name="peli_anio">
      </li>
      <li>
        <label for="img" >Imagen:</label>
        <input type="img" id="img" name="peli_img">
        <!--<input type="file" id="img" name="peli_img">-->
      </li>
    </ul>
  </form>
  <script type="text/javascript">
    function insertDatos(){

      if(document.getElementById("titulo").value==null||document.getElementById("titulo").value==""){
        alert("Introduce un titulo");
      }else{
        var titulo = document.getElementById("titulo").value;
      }
      alert(titulo);

      if(document.getElementById("genero").value==null||document.getElementById("genero").value==""){
        alert("Introduce un genero");
      }else{
        var genero = document.getElementById("genero").value;
      }

      if(document.getElementById("pais").value==null||document.getElementById("pais").value==""){
        alert("Introduce un pais");
      }else{
        var pais = document.getElementById("pais").value;
      }

      if(document.getElementById("anio").value==null||document.getElementById("anio").value==""){
        alert("Introduce un anio");
      }else{
        var anio = document.getElementById("anio").value;
      }

      if(document.getElementById("img").value==null||document.getElementById("img").value==""){
        alert("Introduce una imagen");
      }else{
        var img = document.getElementById("img").value;
      }
    }
    
  </script>
  
  <button name="Aniadir" onclick="insertDatos()">Añadir</button>

  <button name="Inicio" role="link" onclick="window.location='/videoclub.php'">Inicio</button>

  </body>
</html>