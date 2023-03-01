<?php
include "Funciones/Conn.php";
session_start();
if (isset($_GET['logout'])) {


    session_unset();

    session_destroy();
}

if (isset($_SESSION['NivelMinutario'])) {
    switch ($_SESSION['NivelMinutario']) {
        case '0':
            header('location: Nivel1');
            break;

        case '1':
            header('location: Nivel1');
            break;

         case '2':
            header('location: Nivel1');
            break;   
    }
} { ?>

    <!DOCTYPE html>
    <html>

    <head>
        <title></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>

    <body>

        <?php if ($_SESSION['NivelMinutario'] == '1') {
            header("Location: Nivel1.php"); ?>

            }

        <?php } else if  ($_SESSION['NivelMinutario'] == '2'){
            header("Location: Nivel1.php"); ?>

        <?php } else {
            header("Location: Nivel1.php"); ?>
    </body>

    </html>

<?php }
    } ?>