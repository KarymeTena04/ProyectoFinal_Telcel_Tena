<?php include('header.php'); ?>

<div class="formulario-cliente">
   

<p><h1>¿No tienes una cuenta? Se parte de la familia Telcel</h1></p>
<h2>¡¡Registrate!!</h2>
<form method="post">
    <p>Nombres:</p>
    <input type="text" id="name" name="name" placeholder="Ingresa tu nombre">
    <p>Apellidos:</p>
    <input type="text" id="lname" name="lname" placeholder="Ingresa tu apellido">
    <p>Correo Electrónico:</p>
    <input type="email" name="email" id="email" placeholder="Ingresa tu correo" <br><br>>
    <input name="btnreg" type="submit" value="Registrarse" id="register">
</form>
</div>
<style>
.formulario-cliente{
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
.formulario-cliente > form{
    margin-top: 20px;
}
.formulario-cliente input{
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

  if (strlen($_POST['name']) >= 1 && strlen($_POST['lname']) >= 1 && strlen($_POST['email']) >= 1){

    $name = trim($_POST['name']);
    $lname = trim($_POST['lname']);
    $email = trim($_POST['email']);
   
    echo "<center>Gracias por registrarte Telcelito, $name $lname, este es tu Correo: $email</center>";

    }
  }

?> <br><br><br><br><br><br><br>
<?php include('footer.php'); ?>

