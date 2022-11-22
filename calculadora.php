<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css\text.css">
</head>
<body>
    
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
  <a href="index.php"> <img src="https://www.iloveimg.com/img/iloveimg.svg" alt="error de imagen" > </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
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
            <li><a class="dropdown-item" href="calculadora.php">Calculadora</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">puestos disponibles</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">...</a>
        </li>
      </ul>
     
    </div>
  </div>
</nav>


<form>
<h1>Calculadora</h1>
<input type="number"  name="n1">
<select name="op">
    <option value="+">+</option>
    <option value="-">-</option>
    <option value="*">*</option>
    <option value="/">/</option>
</select>
<input type="number" name="n2">
<input type="submit">

</form>

<?php




$n1 = 0;
$n2 = 0;
$op = '+';
$resultado = 0;




if ($op=="+"){
  $n1 = $_GET['n1'];
  $resultado = $n1 + $n2;
} else if ($op =="-"){
  $n1 = $_GET ['n2'];
    $resultado = $n1 - $n2;
}else if ($op =="*"){
  
    $resultado = $n1*$n2;
}else{

    $resultado = $n1/$n2;
}

echo "el reesultado es :" . $resultado


?>

     
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


</body>
</html>