<?php 
    include("../models/conexion.php");
    $conn = conexion();

    if (isset($_POST["nombre"])) {
        
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $celular = $_POST["celular"];
        $genero = $_POST["genero"];

        $sql = "INSERT INTO crud (nombre, apellido, celular, genero) VALUES ('$nombre','$apellido',$celular,'$genero')";            
        $result = mysqli_query($conn,$sql);

        if(!$result) {
            die("Hubo un error en la consulta". mysqli_error($conn));
        }    
    }

    mysqli_close($conn);
?>