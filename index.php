<?php
include_once("./views/viewUtil.php");
include_once("./models/persona.php");


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
  if (isset($_REQUEST["do"])){
    $do = $_REQUEST["do"];
  }else {
    $do = "navigator";
  }

  switch ($do) {
    case 'navigator':
      View::render("plantilla", "nav.php");
      break;
    
    case "viewPersona":
      $db = new Persona("mariadb","root","root","videoclub"); 
      $datos["listaPersona"] = $db->getAllPersona();
      View::render("persona", "view.php",$datos);

      break;
    case 'addPersona':

      break;
    case "deletePersona":

      break;
    case 'editPersona':

      break;

    case 'viewPelicula':

      break;

    case 'addPelicula':

      break;
    case 'deletePelicula':

      break;

    case 'editPelicula':

      break;
    
    default:
      View::render("plantilla", "nav.php");
      break;
  }



