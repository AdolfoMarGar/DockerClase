<?php
    include'./sqlUtil.php';
    class Persona extends SqlUtil{
        function getAllPersona(){
            if ($result = $this->db->query("SELECT * FROM persona")) {
                while ($fila = $result->fetch_object()) {
                    $lista[]=$fila;
                }
                
            }
            return $lista;
        }

        function insertActor($nombre, $apellido, $fotografia){
            $this->db->query("INSERT INTO `persona` (`id`, `nombre`, `apellidos`, `fotografia`) VALUES (NULL, '$nombre', '$apellido', '$fotografia');");
        }
    }
        