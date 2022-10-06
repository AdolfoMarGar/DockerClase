<?php
include_once("./views/viewUtil.php");
include_once("./models/persona.php");

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
    View::render("persona", "add.php");


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



