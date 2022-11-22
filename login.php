<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\text.css">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
     <a href="index.php"> <img src="https://www.iloveimg.com/img/iloveimg.svg" alt="error de imagen" > </a>

    </div>
  </div>
</nav>



<form   action = "principal.php" method="post" >
    	<h1>Login</h1>
    	<input  type="text" name="name" placeholder="usuario" required >
    	<input type="password" name="pass" placeholder="password" required >
    	<input type="submit" name="register" >
      <p><a href="register.php">Crear cuenta</a></p>
    </form>


    <?php
    
    $msg = '';

    if (isset($_POST['usuario'])&& !empty($_POST['password']))
  {

if ($_POST['usuario'] == 'misa' &&
    $_POST['password'] == '4300' ) {
      $_SESSION['valid'] = true;
     $_SESSION['timeout'] = time();
     $_SESSION['username'] = 'misa';

     echo  'yo estoy dentro '.$_POST['usuario'];
    }else {
      $msg = 'Wrong username or password'.$_POST['misa'];
   }

  }


    
    
    
    
    
    ?>
    
    
    
    
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


</body>
</html>