<?php
    include_once('./models/sqlUtil.php');
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
            return $this->db->affected_rows;
            //devuelve 0 si falla y 1 si todo ok
        }

        public function getMaxId(){
            $result = $this->db->query("SELECT MAX(id) AS ultimoIdPersona FROM persona");
            $idPersona = $result->fetch_object()->ultimoIdPersona;
            return $idPersona;
        }

    }