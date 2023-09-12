<?php
    function conexion(){

        $host = "localhost";
        $user = "root";
        $pass = "";

        $name_db = "crud_aprendiz";
        
        $conn = mysqli_connect($host, $user,$pass);

        mysqli_select_db($conn,$name_db);
        
        if (!$conn) {
            die ('Conexion fallida: '.mysqli_connect_error());
        }

        return $conn;
    }
?>