



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css\formu.css">
    <title>Formulario registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://localhost/practica1/index.php?#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Options
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="register.php">Registros</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
     
    </div>
  </div>
</nav>





<section class="form-register"> <form action="register.php" method="post">
<h4>Formulario Registro</h4>
<input class="controls" type="text"  name="nombre" id="nombre" placeholder="nombre">
<input class="controls" type="text"  name="apellido" id="apellido" placeholder="apellido">
<input class="controls" type="text"  name="edad" id="edad" placeholder="edad">
<input class="controls" type="text"  name="cedula" id="cedula" placeholder="cedula">
<p> Estoy de acuerdo con <a href="#">terminos y condiciones</a></p>
<input class="botons" type="submit" value="registrar">
<p><a href="#">ya tengo cuenta?</a></p>
</form>


<?php 


if(isset($_POST['btn1']))
{

 include("conexion.php");


 
 $nombre = $_POST['nombre'];
 $apellido = $_POST['apellido'];
 $edad = $_POST['edad'];
 $cedula = $_POST['cedula'];
 

 
$conexion->query("INSERT INTO $tabla_db1 (nombre,apellido,edad,cedula) values ('$nombre','$apellido','$edad','$cedula')");
 include("cerar_conexion.php");
echo "se insertaron correctamente";

}

echo "$nombre,$apellido,$edad,$cedula";

?>



</section>







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>