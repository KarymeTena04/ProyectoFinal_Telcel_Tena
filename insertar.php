<?php
include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$Ventas_Dia=$_POST['Ventas_Dia'];
$Nombre_Del_Empleado=$_POST['Nombre_Del_Empleado'];
$Nombre_Del_Cliente=$_POST['Nombre_Del_Cliente'];
$Ganancias_Dia=$_POST['Ganancias_Dia'];
$Celulares=$_POST['Celulares'];
$Paquetes_Saldo=$_POST['Paquetes_Saldo'];


$sql="INSERT INTO ventas VALUES('$id','$Ventas_Dia','$Nombre_Del_Empleado','$Nombre_Del_Cliente','$Ganancias_Dia','$Celulares','$Paquetes_Saldo')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: ventas.php");
}
?>