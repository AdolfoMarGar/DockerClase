<?php
    //metodo que realiza la conexión con la bd
    function conDb(){
        $db = new mysqli("mariadb", "root", "root", "videoclub");
        if($db->connect_error){
          die("Error en la conexion : ".$db->connect_error);
        }
        return $db;
    }

    //metodo que termina la conexión con la bd
    function endDb($db){
        $db->close();
    }


?>