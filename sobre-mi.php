<?php

$pg="sobre mi";

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre mi</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body id="sobre-mi">
    <?php include_once("header.php"); ?>
    <main>
        <div class="conteiner mx-sm-5">
            <div class="row col-12">
                <div class="col-12 col-sm-7 py-5 my-sm-3">
                    <h1>Sobre mí</h1>
                    <p>Estudiante de ciencias Geológicas avanzada y programación.</p>
                    <div class="nav-link pt-5 ps-sm-0">
                        <a href="#" class="btn-rojo p-2">Descarga mi CV <i class="fas fa-download"></i></a>
                    </div>
                </div>
                <div class="col-12 col-sm-5 py-3 ps-sm-5 my-sm-3 text-center">
                    <img src="imagenes/fotomia.jpg" alt="foto mia" class="foto-mia">
                </div>
            </div>
        </div>
        <section id="tecnologia" class="gradiente col-12 mx-0 px-sm-5">
            <div class="conteiner">
                <div class="row">
                    <div class="col-12 pb-2">
                        <h2 class="my-sm-5 text-white">Stack tecnológico</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-6 text-center">
                        <div class="px-md-4 py-5 mx-0 mb-4 fichas">
                            <h3>Javascript</h3>
                            <img src="https://img.stackshare.io/service/1209/javascript.jpeg" width="80">
                        </div>
                    </div>
                    <div class="col-md-3 col-6 text-center">
                        <div class="px-md-4 py-5 mx-0 mb-4 fichas">
                            <h3>PHP</h3>
                            <img class="" src="https://img.stackshare.io/service/991/hwUcGZ41_400x400.jpg" width="80">
                        </div>
                    </div>
                    <div class="col-md-3 col-6 text-center">
                        <div class="px-md-4 py-5 mx-0 mb-4 fichas">
                            <h3>HTML5</h3>
                            <img src="https://img.stackshare.io/service/2538/kEpgHiC9.png" width="80">
                        </div>
                    </div>
                    <div class="col-md-3 col-6 text-center">
                        <div class="px-md-4 py-5 mx-0 mb-4 fichas">
                            <h3>React.js</h3>
                            <img src="https://img.stackshare.io/service/1020/OYIaJ1KK.png" width="80">
                        </div>
                    </div>
                </div>
                <div class="row pb-4">
                    <div class="col-md-3 col-6 text-center mx-0">
                        <div class="px-md-4 py-5 mx-0 mb-4 fichas">
                            <h3>Laravel</h3>
                            <img src="https://depcsuite.com/wp-content/uploads/2019/08/220px-Laravel.svg_.png"
                                width="130">
                        </div>
                    </div>
                    <div class="col-md-3 col-6 text-center mx-0">
                        <div class="px-md-4 py-5 mx-0 mb-4 fichas">
                            <h3>Bootstrap</h3>
                            <img src="https://img.stackshare.io/service/1101/C9QJ7V3X.png" width="90">
                        </div>
                    </div>
                    <div class="col-md-3 col-6 text-center mx-0">
                        <div class="px-md-4 py-5 mx-0 mb-4 fichas">
                            <h3>CSS</h3>
                            <img src="https://img.stackshare.io/service/6727/css.png" width="90">
                        </div>
                    </div>
                    <div class="col-md-3 col-6 text-center mx-0">
                        <div class="px-md-4 py-5 mx-0 mb-4 fichas">
                            <h3>Git</h3>
                            <img src="https://img.stackshare.io/service/1046/git.png" width="90">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--<section id="experiencia">
            <div class="conteiner">
                <div class="row">
                    <div class="row">
                        <h2>Experiencia laboral</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="row">
                        <div>
                            <img src="#" alt="">
                        </div>
                        <div>
                            <h4>PUESTO</h4>
                            <h5>EMPRESA</h5>
                            <h6>AÑO</h6>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus laudantium corporis
                                doloremque distinctio repellat aperiam saepe provident sapiente consequuntur? Nisi
                                ipsa laborum delectus recusandae in! Repellendus dolore est maxime accusantium!</p>
                        </div>

                    </div>
                    <div>
                        <img src="#" alt="">
                    </div>
                    <div>
                        <h4>PUESTO</h4>
                        <h5>EMPRESA</h5>
                        <h6>AÑO</h6>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus laudantium corporis
                            doloremque distinctio repellat aperiam saepe provident sapiente consequuntur? Nisi ipsa
                            laborum delectus recusandae in! Repellendus dolore est maxime accusantium!</p>
                    </div>
                </div>
            </div>
        </section>-->
        <section id="formación" class="col-12 mx-0 px-sm-5">
            <div class="conteiner mx-4 mx-sm-0">
                <div class="row instituciones">
                    <div class="col-12 mb-4 mt-5 ms-md-3 ms-sm-2">
                        <h2 class="titulo-formacion"> <i class="fas fa-graduation-cap"></i> Formación académica</h2>
                    </div>
                </div>
                <div class="row px-md-5 mb-4 pb-2 shadow contenido-formacion">
                    <div class="col-12 my-3">
                        <div class="row instituciones">
                            <div class="col-sm-2 mt-3">
                                <img src="imagenes/UBA.jpg" alt="UBA" width="90">
                            </div>
                            <div class="col-sm-10">
                                <h4>Lic. en ciencias Geológicas</h4>
                                <h5>UBA- Exactas y ciencias naturales</h5>
                                <h6>2017 - Actualidad</h6>
                                <h6>Materias aprobadas 70%</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="cursos" class="col-12 mx-0 px-sm-5">
            <div class="conteiner mb-5 mx-4 mx-sm-0">
                <div class="row instituciones">
                    <div class="col-12 mb-4 mt-5 ms-3">
                        <h2 class="titulo-formacion"> <i class="fas fa-graduation-cap"></i> Cursos de desarrollo
                            personal</h2>
                    </div>
                </div>
                <div class="row mb-4 pb-sm-2 shadow contenido-formacion">
                    <div class="col-12 col-sm-6 my-3">
                        <div class="row instituciones">
                            <div class="col-sm-3 ps-0 ps-sm-3">
                                <img src="../logodepc.jpg" width="80">
                            </div>
                            <div class="col-sm-9">
                                <h4>Desarrollador Full Stack</h4>
                                <h5>Depc Suite</h5>
                                <h6>2021 - Actualidad</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 my-3">
                        <div class="row instituciones">
                            <div class="col-sm-3 ps-0 ps-sm-3">
                                <img src="imagenes/google.jpg" width="80">
                            </div>
                            <div class="col-sm-9">
                                <h4>Marketin digital</h4>
                                <h5>Google activate</h5>
                                <h6>2021</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="idioma" class="col-12 mx-0 px-sm-5">
            <div class="conteiner my-5 mx-4 mx-sm-0">
                <div class="row py-5 mx-0">
                    <div class="col-12 col-md-6 mb-4 ps-sm-0 mb-sm-4">
                        <div class="row bg-white shadow mx-1 fondo-idioma">
                            <div class="col-6 col-sm-4 ps-0">
                                <i class="fas fa-comment-alt"></i>
                            </div>
                            <div class="col-6 col-sm-8 pt-5">
                                <div class="idioma-contenido">
                                    <h2>IDIOMAS</h2>
                                    <ul>
                                        <li>ESPAÑOL - Nativo</li>
                                        <li>INGLÉS - Intermediate</li>
                                    </ul>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="row bg-white shadow me-sm-1 fondo-idioma">
                            <div class="col-6 col-sm-4 ps-0">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="col-6 col-sm-8">
                                <div class="pt-5 idioma-contenido">
                                    <h2> HOBBIES</h2>
                                    <ul>
                                        <li>Entrenar </li>
                                    </ul>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
    </main>
    <?php include_once("footer.php"); ?>
    <div class="whatsapp">
        <a href="https://api.whatsapp.com/send?phone=541150412652" target="_blank"><i class="fab fa-whatsapp"></i></a>
    </div>

    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>