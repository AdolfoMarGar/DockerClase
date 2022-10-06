<?php
    include_once('./sqlUtil.php');
    class Pelicula extends SqlUtil{
        
        function getAllPelicula(){
            if ($result = $this->db->query("SELECT * FROM pelicula")) {
                while ($fila = $result->fetch_object()) {
                    $lista[]=$fila;
                }
                
            }
            return $lista;
        }

        

        function getAllRelacion(){
            if ($result = $this->db->query("SELECT * FROM actuan")) {
                while ($fila = $result->fetch_object()) {
                    $lista[]=$fila;
                }
                
            }
            return $lista;
        }

        

        function insertPelicula($titulo, $genero, $pais, $anio, $cartel){
            $this->db->query("INSERT INTO `pelicula` (`id`, `titulo`, `genero`, `pais`, `anio`, `cartel`) VALUES (NULL, '$titulo', '$genero', '$pais', '$anio', '$cartel');");
        }

        

        function insertRelacion($nPelicula, $nPersona){
            $this->db->query("INSERT INTO `actuan` (`nPelicula`, `nPersona`) VALUES ('$nPelicula', '$nPersona')");
        }


    }