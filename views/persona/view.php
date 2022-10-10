<?php
echo "
  <h1>Vistas actores.</h1>
  <form action='/' method='post'>
    <table border='1'>
      <tr>
        <td>Nombre:</td>
        <td>Apellido:</td>
        <td>Fotografia:</td>
        <td>Acciones:</td>

      </tr>
";

    
foreach ($datos["listaPersona"] as $fila)  { 
  echo "
  <tr>
    <td>$fila->nombre</td>
    <td>$fila->apellidos</td>
    <td><img src ='$fila->fotografia' alt='Error carga imagen' widtd='150' height='150'></td>
    <td><button type='submit' name='do' value='editPersona'>Editar</button>
    <button type='submit' name='do' value='deletePersona'>Borrar</button></td>
  </tr>";    
}
echo'
  </table></br>
  <button type="submit" name="do" value="addPersona">Añadir actor</button>
  <button type="submit" name="do" value="navigator">Inicio</button>
  </form>';