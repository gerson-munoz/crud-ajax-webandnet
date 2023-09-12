<?php

    include("../models/conexion.php");
    $conn = conexion();

    $search = $_POST["search"];

    if(!empty($search)) {
        $sql = "SELECT * FROM crud WHERE apellido LIKE '%$search%'";
        $result = mysqli_query($conn, $sql);

        if(!$result) {
            die("Hubo un error en la consulta". mysqli_error($conn));
        }

        $json = array();

        while($row = mysqli_fetch_array($result)){
            $json[] = array(
                "id"=>$row["id"],
                "nombre"=>$row["nombre"],
                "apellido"=>$row["apellido"],
                "celular"=>$row["celular"],
                "genero"=>$row["genero"],
            );
        }
        $jsonstring = json_encode($json);
        echo $jsonstring;
    }

    mysqli_close($conn);
?>