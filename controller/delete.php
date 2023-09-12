<?php
    include("../models/conexion.php");
    $conn = conexion();

    if (isset($_POST['id'])) {
        
        $sql = "DELETE FROM crud WHERE id='$_POST[id]'";
        $result = mysqli_query($conn,$sql);

        if(!$result) {
            die("Hubo un error en la consulta". mysqli_error($conn));
        }
    }
    
    mysqli_close($conn);
?>