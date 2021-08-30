<?php

$pg="proyectos";

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body id="proyectos">
    <?php include_once("header.php"); ?>
    <main>
        <div class="conteiner px-sm-5 mx-sm-3">
            <div class="row mb-4 mt-5">
                <div class="col-12">
                    <h1>Proyectos</h1>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-12">
                    <p>Los siguientes son algunos de los trabajos que he realizado:</p>
                </div>
            </div>
            <div class="row bloque">
                <div class="col-12 col-md-4">
                    <div class="row border bg-white mb-1 me-1">
                        <img src="imagenes/abmclientes.png" alt="ABM clientes" class="img-fluid">
                        <div class="col-12 gradiente py-2 pt-3 mx-0">
                            <h2>ABM CLIENTES</h2>
                        </div>
                        <div class="col-12 pt-2">
                            <p>Alta, baja y modificación de un registro de clientes. Realizado en HTML, CSS, PHP,
                                Bootstrap y Json.</p>
                        </div>
                        <div class="col-6 my-5">
                            <a href="" class="btn-rojo px-3 py-2">Ver online</a>
                        </div>
                        <div class="col-6 my-5">
                            <a href="htpp://github.com " class="div-enlace">Código fuente</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="row border bg-white mb-1 me-1">
                        <img src="imagenes/abmventas.png" alt="ABM clientes" class="img-fluid">
                        <div class="col-12 gradiente py-2 pt-3 mx-0">
                            <h2>SISTEMA DE GESTIÓN DE VENTAS</h2>
                        </div>
                        <div class="col-12 pt-2">
                            <p>Sistema de gestión de clientes, productos y ventas. Realizado en HTML, CSS, PHP, MVC,
                                Bootstrap, Js, Ajax, jQuery y MySQL de base de datos.</p>
                        </div>
                        <div class="col-6 my-5">
                            <a href="" class="btn-rojo px-3 py-2">Ver online</a>
                        </div>
                        <div class="col-6 my-5">
                            <a href="htpp://github.com" class="div-enlace">Código fuente</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="row border bg-white mb-1 me-1">
                        <img src="imagenes/proyecto-integrador.png" alt="ABM clientes" class="img-fluid">
                        <div class="col-12 gradiente py-2 pt-3 mx-0">
                            <h2>PROYECTO INTEGRADOR</h2>
                        </div>
                        <div class="col-12 pt-2">
                            <p>Proyecto Full Stack desarrollado en PHP, Laravel, Javascript, jQuery, AJAX, HTML, CSS,
                                Mercadopago con panel administrador, gestor de usuarios, módulo de permisos y
                                funcionalidades a fines.</p>
                        </div>
                        <div class="col-6 my-5">
                            <a href="" class="btn-rojo px-3 py-2" target="_blank">Ver online</a>
                        </div>
                        <div class="col-6 my-5">
                            <a href="htpp://github.com" class="div-enlace">Código fuente</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include_once("footer.php"); ?>
    <div class="whatsapp">
        <a href="https://api.whatsapp.com/send?phone=541150412652" target="_blank"><i class="fab fa-whatsapp"></i></a>
    </div>

    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>