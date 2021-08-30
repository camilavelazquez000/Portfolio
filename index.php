<?php

$pg="inicio";

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body id="inicio">
    <?php include_once("header.php"); ?>
    <main class="conteiner">
        <div class="row text-center mx-0 px-0">
            <div class="col-12 mt-5">
                <a href="proyectos.php"><img src="imagenes/cohete.svg" alt="cohete" class="cohete mx-0"></a>
            </div>
        </div>
        <div class="row text-center mx-0 px-0">
            <div class="col-12 px-5">
                <p class="p-1">
                    Bienvenid@ a mi sitio web sobre docencia en sistemas.
                </p>
            </div>
        </div>
        <div class="row text-center mx-0 px-0">
            <div class="col-12 mt-5 px-5">
                <a href="proyectos.php"  class="inicio-btn-final  mx-0 px-3">Conocé mis proyectos</a>
            </div>
        </div>
    </main>
    <?php include_once("footer.php"); ?>
    <div class="whatsapp">
        <a href="https://api.whatsapp.com/send?phone=541150412652" target="_blank"><i class="fab fa-whatsapp"></i></a>
    </div>

    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>