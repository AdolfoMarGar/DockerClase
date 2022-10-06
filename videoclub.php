<!DOCTYPE html>
<html>
<head>
  <title>Ejercicios</title>
  <h1>Videoclub</h1>
</head>
<body>
  <?php
    include 'SqlUtil.php';
    $db = new SqlUtil();
  ?>

  <table border='1'>
  <tr>
      <th>Nombre:</th>
      <th>Apellido:</th>
      <th>Fotografia:</th>
      
    </tr>
  <?php
    $cursor = $db->getCursorActores();
    while ($fila = $cursor->fetch_object()) {
      echo "<tr>";
      echo "<th>" . $fila->nombre . "</th>";
      echo "<th>" . $fila->apellidos . "</th>";
      echo "<th><img src ='$fila->fotografia' alt='Error carga imagen' width='150' height='150'></th>";
      echo "</tr>";
  }
    ?>
    
  </table>
  </br>
  <button name="formActor" role="link" onclick="window.location='/v_formActor.php'">Añadir actor.</button>

  </br></br>

  <table border="1">
    <?php
    ?>
    <tr>
      <th>Titulo:</th>
      <th>Genero:</th>
      <th>Pais:</th>
      <th>Año:</th>
      <th>Cartel:</th>
    </tr>
    <?php
    $cursor = $db->getCursorPeliculas();
    while ($fila = $cursor->fetch_object()) {
      echo "<tr>";
      echo "<th>" . $fila->titulo . "</th>";
      echo "<th>" . $fila->genero . "</th>";
      echo "<th>" . $fila->pais . "</th>";
      echo "<th>" . $fila->anio . "</th>";
      echo "<th><img src ='$fila->cartel' alt='Error carga imagen' width='150' height='150'></th>";
      echo "</tr>";
    }
    ?>
    
  </table>


  </br> 
  <button name="formPelicula" role="link" onclick="window.location='/v_formPelicula.php'">Añadir Pelicula.</button>
  </br> 
  </br> 


  <table border="1">
    <tr>
      <th>Pelicula:</th>
      <th>Actor:</th>
    </tr>
    <?php
    $cursor = $db->getCursorRelacion();
    while ($fila = $cursor->fetch_object()) {
      echo "<tr>";
      echo "<th>" . $fila->nPelicula . "</th>";
      echo "<th>" . $fila->nPersona . "</th>";
      echo "</tr>";
    }
    ?>

  </table>
  </br> 
  <button name="formRelacion" role="link" onclick="window.location='/v_formRelacion.php'">Añadir Relacion</button>

    <?php 
      $db->endDb();
    ?>
</body>
</html>
