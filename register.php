



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
  <a href="index.php"> <img src="https://www.iloveimg.com/img/iloveimg.svg" alt="error de imagen" > </a>
     
    </div>
  </div>
</nav>





<section class="form-register"> <form action="principal.php" method="post">
<h4>Formulario Registro</h4>
<input class="controls" type="text"  name="nombre" id="nombre" placeholder="nombre" required>
<input class="controls" type="text"  name="apellido" id="apellido" placeholder="apellido" required>
<input class="controls" type="text"  name="edad" id="edad" placeholder="edad" required>
<input class="controls" type="text"  name="cedula" id="cedula" placeholder="cedula" required>
<p> Estoy de acuerdo con <a href="#">terminos y condiciones</a></p>
<input class="botons" type="submit" value="registrar">
<p><a href="login.php">ya tengo cuenta?</a></p>
</form>


</section>







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>