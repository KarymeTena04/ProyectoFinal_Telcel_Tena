<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM articulos";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA ARTICULOS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese sus datos Articulo</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="id" placeholder="id">
                                    <input type="text" class="form-control mb-3" name="Nombre_Articulo" placeholder="Nombre_Articulo">
                                    <input type="text" class="form-control mb-3" name="Nombre_Cliente" placeholder="Nombre_Cliente">
                                    <input type="text" class="form-control mb-3" name="Precio" placeholder="Precio">
                                    <input type="text" class="form-control mb-3" name="Nombre_Empleado" placeholder="Nombre_Empleado">
                                    <input type="text" class="form-control mb-3" name="Existencia" placeholder="Existencia">
                                    <input type="text" class="form-control mb-3" name="Tipo_Articulo" placeholder="Tipo_Articulo">
                                    
                                    <input type="submit" class="btn btn-primary">
                                    <a href = "../index.php">Inicio</a>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre_Articulo</th>
                                        <th>Nombre_Cliente</th>
                                        <th>Precio</th>
                                        <th>Nombre_Empleado</th>
                                        <th>Existencia</th>
                                        <th>Tipo_Articulo</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id']?></th>
                                                <th><?php  echo $row['Nombre_Articulo']?></th>
                                                <th><?php  echo $row['Nombre_Cliente']?></th>
                                                <th><?php  echo $row['Precio']?></th>    
                                                <th><?php  echo $row['Nombre_Empleado']?></th>  
                                                <th><?php  echo $row['Existencia']?></th>
                                                <th><?php  echo $row['Tipo_Articulo']?></th>  
                                                <th><a href="actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                           } 
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>