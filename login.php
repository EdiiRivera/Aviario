<?php
include_once 'partials/session.php';
if((isset($_SESSION['usuarioR']))){
    header("Location: index2.php");
}
?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/master.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="plugins\sweetalert2.min.css">
    <meta name="viewport" content="width= device-width, initial-scale=1">

    <title>Pixki</title>
    <link rel="shortcut icon" href="img/logo.png">
  </head>
  <body class="text-center">

<main class="form-signin">
  <form id="lform" style="padding: 10px;">
    <img class="mb-4" src="img/logo.png" alt="" width="117px" height="140px">
    <h1 class="h3 mb-3 fw-normal" style="color: white;">Bienvenido</h1>

    <div class="form-floating">
      <input type="text" class="form-control" id="lus" placeholder="name@example.com">
      <label for="floatingInput">Usuario ó Correo electrónico</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="lpas" placeholder="Password">
      <label for="floatingPassword">Contraseña</label>
    </div>

    <div class="checkbox mb-3">
      <a href="#" style="text-decoration: none;">
        <p  class="txt">¿Olvidaste tu contraseña?</p>
      </a>
      <label style="color: white;">
        <input type="checkbox" value="remember-me" > Recuerdame
      </label>
    </div>
    <button class="btn btn-lg btn-primary" type="submit" name = "submit" style="background-color:#0ec323; border-color:#2ef44a; width:46%;">
     <!-- <a href="perfil/index.html" style="text-decoration: none; color:#fff;">Ingresa</a> -->
      <a style="text-decoration: none; color:#fff;">Ingresa</a>

    </button>
    <a href="registro/index.html" class="txt">
      <p>¿No tienes una cuenta?</p>
    </a>
    <p style="color: white;">&copy; 2021–2022</p>
  </form>
</main>

<script src="jquery/jquery-3.3.1.min.js"></script>
<script src="boostrap/js/bootstrap.min.js"></script>
<script src="popper/popper.min.js"></script>
<script src="plugins/sweetalert2.all.min.js"></script>
<script src="js/login.js"></script>
<script src="js/alertas.js"></script>
  </body>

</html>
