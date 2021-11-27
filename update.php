<?php

include("conexion.php");
$con=conectar();

$idx=$_POST['id'];
$Ventas_Dia=$_POST['Ventas_Dia'];
$Nombre_Del_Empleado=$_POST['Nombre_Del_Empleado'];
$Nombre_Del_Cliente=$_POST['Nombre_Del_Cliente'];
$Ganancias_Dia=$_POST['Ganancias_Dia'];
$Celulares=$_POST['Celulares'];
$Paquetes_Saldo=$_POST['Paquetes_Saldo'];

$sql = "UPDATE ventas SET Ventas_Dia='$Ventas_Dia', Nombre_Del_Empleado='$Nombre_Del_Empleado', Nombre_Del_Cliente='$Nombre_Del_Cliente', Ganancias_Dia='$Ganancias_Dia', Celulares='$Celulares', Paquetes_Saldo='$Paquetes_Saldo' WHERE id = '$idx'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ventas.php");
  
    }
    
?>