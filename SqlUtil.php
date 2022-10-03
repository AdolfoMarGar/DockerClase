<?php
    class SqlUtil {
        private $db = null;

        public function __construct() {
            $this->db = new mysqli("mariadb", "root", "root", "videoclub");
        }

        function getCursorPeliculas(){
            if ($result = $this->db->query("SELECT * FROM pelicula")) {
                return $result;
            }
        }

        function getCursorActores(){
            if ($result = $this->db->query("SELECT * FROM persona")) {
                return $result;
            }
        }

        function getCursorRelacion(){
            if ($result = $this->db->query("SELECT * FROM actuan")) {
                return $result;
            }
        }

        function endDb(){
            $this->db->close();
        }



    }

   
?>