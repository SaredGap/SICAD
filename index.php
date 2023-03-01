

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="Styles/Estilos.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>


<body class="login_fondo">

  <div class="login-box">
    <div class="avatar">
      <img src="Imagenes/Logo.png" class="logo" alt="Avatar Image">
    </div>
    <h1>IPECOL</h1>
    <br />
    <form id="form2" name="form2" method="post" action="Validacion.php">
      <div class="input-group mb-3">
        <div class="input-group-prepend">
        </div>
        <input type="text" class="form-control" id="txtUser"  name="txtUser" placeholder="Usuario" aria-label="Username" aria-describedby="basic-addon1">
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
        </div>
        <input type="text" class="form-control" id="txtPass" name="txtPass" placeholder="Contraseña" aria-label="Username" aria-describedby="basic-addon1">
      </div>
      <input type="submit" value="Iniciar Sesion" class="botonenviar" name="btnloginx">
      <a href="#">¿Olvidaste la contraseña?</a><br>
    </form>
  </div>
</body>

</html>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>