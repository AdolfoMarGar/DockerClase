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
    $db->endDb();

    break;
    
  case 'addPersona':
    $db = new Persona("mariadb","root","root","videoclub"); 

    $nombre = $_REQUEST["nombre"] ?? "";
    $apellido = $_REQUEST["apellido"] ?? "";
    $fotografia = $_REQUEST["fotografia"] ?? "";

    if($nombre!=""&&$apellido!=""&&$fotografia!=""){
      $result = $db->insertActor($nombre, $apellido, $fotografia);
    }else{
      $result =0;
    }

    if ($result == 1) {
      $datos["resDB"]=1;
      View::render("persona", "add.php",$datos);
    }else{
      $datos["idPersona"]="";
      $datos["nombre"]="";
      $datos["apellido"]="";
      $datos["fotografia"]="";
      $datos["resDB"]=0;
      View::render("persona", "add.php",$datos);
    }
    $db->endDb();
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



