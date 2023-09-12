<?php     
    include("models/conexion.php");
    $conn = conexion();

    $id=$_GET['id']; //id almacenado
    
    $sql = "SELECT * FROM crud WHERE id='$id'";
    $result = mysqli_query($conn,$sql);

    //$a = mysqli_fetch_array($result);
    //print_r($id);
    //print_r($result);
    //print_r($a);
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/style.css" rel="stylesheet">
        <title>Update</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">    
    </head>
    <body>
        <div class="container mt-5">
            <div class="container-md-row">

                <form action="controller/updateconex.php" method="POST" class="col-6 p-5">
    
                    <?php
                        while ($a = mysqli_fetch_array($result)) {
                    ?>
                        
                        <h3 class="text-center p-3">Modificar Datos</h3>
                        
                        <div class="mb-3">
                            <input type="hidden" name="id" value="<?php echo $a['id'] ?>">
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="nombre" placeholder="Nombre" value="<?php echo $a['nombre'] ?>">
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Apellido</label>
                                <input type="text" class="form-control" name="apellido" placeholder="Apellido" value="<?php echo $a['apellido'] ?>">
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Celular</label>
                                <input type="number" class="form-control" name="celular" placeholder="Celular" value="<?php echo $a['celular'] ?>">
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Genero</label>
                            <select class="form-select form-control" name="genero">
                                <option value="<?php echo $a['genero'] ?>"><?php echo $a['genero'] ?></option>
                            </select>
                        </div>
                    
                    <?php
                        }
                    ?>
                    <button type="submit" class="btn btn-primary btn-block" value="modifica" name="modifica">Modificar</button>
                
                </form>
            </div>
        </div>   
    </body>
</html>