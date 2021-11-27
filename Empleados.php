<?php include('header.php'); ?>
<div class="formulario-empleado">
   

<p><h1>¿No estas disfrutando de los beneficios de ser un Telcelito?</h1></p>
<h2>¡¡Registrate Empleado!!</h2>
<form method="post">
    <p>Nombres:</p>
    <input type="text" id="name" name="name" placeholder="Ingresa tu nombre">
    <p>Apellidos:</p>
    <input type="text" id="lname" name="lname" placeholder="Ingresa tu apellido">
    <p>IDN de empleado:</p>
    <input type="idn" name="idn" id="idn" placeholder="Ingresa tu IDN" <br><br>>
    <input name="btnreg" type="submit" value="Registrarse" id="register">
</form>
</div>
<style>
.formulario-empleado{
    width: 80%;
    margin:auto;
    text-align:center;
    margin-top: 100px;
    display: flex;
    justify-content:center;
    align-items: center;
    flex-direction:column;
    text-align: left;
}
.formulario-empleado > form{
    margin-top: 20px;
}
.formulario-empleado input{
    padding: 10px 10px;
    text-align: center;
}
#register{
    margin-top: 10px;
    background-color: var(--header-color);
    border: none;
}
</style>

<?php 

if (isset($_POST['btnreg'])){

  if (strlen($_POST['name']) >= 1 && strlen($_POST['lname']) >= 1 && strlen($_POST['idn']) >= 1){

    $name = trim($_POST['name']);
    $lname = trim($_POST['lname']);
    $idn = trim($_POST['idn']);
   
    echo "<center>Gracias por registrarte Telcelito, $name $lname, este es tu IDN de Empleado: $idn</center>";

    }
  }

?> <br><br><br><br><br><br><br>
<?php include('footer.php'); ?>

