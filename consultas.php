<?php
    function conectar(){
        include("config.php");   
    
        $connection = mysqli_connect($HOST, $USER, $PASSWORD, $NAMEBD) or die("No me conecté");

        return $connection;
    }
?>