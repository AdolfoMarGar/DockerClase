<?php
    class SqlUtil {
        public $db = null;

        public function __construct($host, $user, $password, $nameDB) {
            $this->db = new mysqli("$host", "$user", "$password", "$nameDB");
        }

        function endDb(){
            $this->db->close();
        }

    }