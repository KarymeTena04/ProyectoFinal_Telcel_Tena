<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM ventas";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA VENTAS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese sus datos Ventas</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="id" placeholder="id">
                                    <input type="text" class="form-control mb-3" name="Ventas_Dia" placeholder="Ventas_Dia">
                                    <input type="text" class="form-control mb-3" name="Nombre_Del_Empleado" placeholder="Nombre_Del_Empleado">
                                    <input type="text" class="form-control mb-3" name="Nombre_Del_Cliente" placeholder="Nombre_Del_Cliente">
                                    <input type="text" class="form-control mb-3" name="Ganancias_Dia" placeholder="Ganancias_Dia">
                                    <input type="text" class="form-control mb-3" name="Celulares" placeholder="Celulares">
                                    <input type="text" class="form-control mb-3" name="Paquetes_Saldo" placeholder="Paquetes_Saldo">
                                    
                                    <input type="submit" class="btn btn-primary">
                                    <a href = "../index.php">Inicio</a>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>ID</th>
                                        <th>Ventas_Dia</th>
                                        <th>Nombre_Del_Empleado</th>
                                        <th>Nombre_Del_Cliente</th>
                                        <th>Ganancias_Dia</th>
                                        <th>Celulares</th>
                                        <th>Paquetes_Saldo</th>
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
                                                <th><?php  echo $row['Ventas_Dia']?></th>
                                                <th><?php  echo $row['Nombre_Del_Empleado']?></th>
                                                <th><?php  echo $row['Nombre_Del_Cliente']?></th>    
                                                <th><?php  echo $row['Ganancias_Dia']?></th>  
                                                <th><?php  echo $row['Celulares']?></th>
                                                <th><?php  echo $row['Paquetes_Saldo']?></th>  
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