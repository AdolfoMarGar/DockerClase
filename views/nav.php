<?php 
    class View {
        public static function render($nombreVista){
            include("./views/$nombreVista.php");
        }
    }