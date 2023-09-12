<?php
    include("../models/conexion.php");
    $conn = conexion();

    if (isset($_POST['id'])) {

        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $celular = $_POST['celular'];
        $genero = $_POST['genero'];

        $sql = "UPDATE crud SET nombre='$nombre', apellido='$apellido', celular=$celular, genero='$genero' WHERE id = '$id'";
        $result = mysqli_query($conn,$sql);

        if (!$result) {
            die("Hubo un error en la consulta").$sql.mysqli_error($conn);
        }
    }    
    mysqli_close($conn);
?>