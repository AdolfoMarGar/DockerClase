<!DOCTYPE html>
<html>
<head>
  <title>Ejercicios</title>
  <h1>Videoclub</h1>
</head>
<body>

  <?php
  //El index suele ser el controlador. Por ende no debe hacer echo o escribir nada en la web.
  //Lo unico que debe hacer es llamar a los modelos para operar-obtener datos y a las views para la impresion de la pagina web en html

  /*
  empezar siempre desde el controlador y a partir de alli ir realizando lo que necesita dicho controlador para que funcione correctamente
  

  ejemplo controlador

  public function mostrar vista(){
    $persona = newPersiona();
    $data ["DataPersona"] = $persona->getAllPersona();
    View :: render("viewPersona", data);
  }
  */


    include_once( './models/pelicula.php');
    include_once( './models/persona.php');
    $tPelicula = new Pelicula();
    $tPersona = new Persona();
  ?>

  <table border='1'>in
  <tr>
      <th>Nombre:</th>
      <th>Apellido:</th>
      <th>Fotografia:</th>
      
    </tr>
  <?php
    $filasPersona = $tPersona->getAllPersona();
    foreach ($listaPersona as $fila)  { 
      echo "<tr>";
      echo "<td>" . $fila->nombre . "</td>";
      echo "<td>" . $fila->apellidos . "</td>";
      echo "<td><img src ='$fila' alt='Error carga imagen' width='150' height='150'></td>";
      echo "</tr>";    }
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
      echo "<td>" . $fila->titulo . "</td>";
      echo "<td>" . $fila->genero . "</td>";
      echo "<td>" . $fila->pais . "</td>";
      echo "<td>" . $fila->anio . "</td>";
      echo "<td><img src ='$fila->cartel' alt='Error carga imagen' width='150' height='150'></td>";
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
      echo "<td>" . $fila->nPelicula . "</td>";
      echo "<td>" . $fila->nPersona . "</td>";
      echo "</tr>";
    }
    ?>

  </table>
  </br> 
  <button name="formRelacion" role="link" onclick="window.location='/v_formRelacion.php'">Añadir Relacion</button>

    <?php 
      $tPelicula->endDb();
      $tPersona->endDb();
    ?>
</body>
</html>
