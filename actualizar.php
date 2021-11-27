<?php
include("conexion.php");
$con = conectar();

$id = $_GET['id'];

$sql = "SELECT * FROM ventas WHERE id='$id'";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <title>Actualizar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body>
    <div class="container mt-5">
        <form action="update.php" method="POST">

            <input type="text" class="form-control mb-3" name="id" placeholder="id" value="<?php echo $row['id']  ?>">
            <input type="text" class="form-control mb-3" name="Ventas_Dia" placeholder="Ventas_Dia" value="<?php echo $row['Ventas_Dia']  ?>">
            <input type="text" class="form-control mb-3" name="Nombre_Del_Empleado" placeholder="Nombre_Del_Empleado" value="<?php echo $row['Nombre_Del_Empleado']  ?>">
            <input type="text" class="form-control mb-3" name="Nombre_Del_Cliente" placeholder="Nombre_Del_Cliente" value="<?php echo $row['Nombre_Del_Cliente']  ?>">
            <input type="text" class="form-control mb-3" name="Ganancias_Dia" placeholder="Ganancias_Dia" value="<?php echo $row['Ganancias_Dia']  ?>">
            <input type="text" class="form-control mb-3" name="Celulares" placeholder="Celulares" value="<?php echo $row['Celulares']  ?>">
            <input type="text" class="form-control mb-3" name="Paquetes_Saldo" placeholder="Paquetes_Saldo" value="<?php echo $row['Paquetes_Saldo']  ?>">

            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
        </form>

    </div>
</body>

</html>