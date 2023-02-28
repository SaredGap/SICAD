<?php
include "Navbar.php";
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="Styles/Estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<style type="text/css">
    body {
        background-image: url(Imagenes/.jpeg)
    }
</style>

<body>
    <br />
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh">
        <form class="border shadow p-5 rounded" action=".php" method="post" style="width: 1000px; background: #01425E;">
            <h1 class="text-center p-3 text-white ">Crear Usuarios</h1>
            <?php if (isset($_GET['error'])) { ?>
                <div class="alert alert-danger" roles="alert">
                    <?= $_GET['error'] ?>
                </div>
            <?php } ?>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Tipo de Usuario" aria-label="Username" hidden
                    value="CONFIANZA" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Corr" aria-label="Username" hidden value="1"
                    aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Activo" aria-label="Username" hidden value="1"
                    aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Nivel Monitoreo" aria-label="Nombre" hidden
                    aria-describedby="basic-addon1" value="2">
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Nombre" id="ApellidoP">
                <input type="text" class="form-control" placeholder="No.Control" id="ApellidoM">
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Apellido Paterno" id="ApellidoP">
                <input type="text" class="form-control" placeholder="Apellido Materno" id="ApellidoM">
            </div>
            <div class="input-group mb-3">
                <select class="form-select form-select-mb">
                    <option selected>Puesto Funcional</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <select class="form-select form-select-mb">
                    <option selected>Nivel Correspondencia</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="input-group mb-3">
                <select class="form-select form-select-mb">
                    <option selected>Departamento </option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <select class="form-select form-select-mb">
                    <option selected>Area </option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="input-group mb-3">
                <select class="form-select form-select-mb">
                    <option selected>Opciones V4</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <select class="form-select form-select-mb">
                    <option selected>Opciones</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="UserSicop" aria-label="Nombre"
                    aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Contraseña" aria-label="Nombre"
                    aria-describedby="basic-addon1">
            </div>
            <br />
            <center>
                <button type="submit" class="btn btn-danger">Crear</button>
            </center>
        </form>
    </div>

</body>

</html>

<script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</script>