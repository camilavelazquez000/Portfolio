<?php

$pg="contacto";

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body id="contacto">
    <?php include_once("header.php"); ?>
    <main class="conteiner">
        <div class="row mb-4 mt-5 mx-sm-5 px-1">
            <div class="col-12">
                <h1>Contacto</h1>
            </div>
        </div>
        <div class="row mx-sm-5 px-2">
            <div class="col-12 col-sm-6">
                <p>Te invito a que te contactes enviandome mensaje o bien por whatsapp</p>
                <p class="pt-3">¡Escanea el código QR y escribeme!</p>
                <img src="../contacto2-wspp.jpeg" alt="código QR" width="140" class="mb-5">
            </div>
            <div class="col-12 col-sm-6">
                <form action="" method="POST">
                    <div>
                        <input type="text" name="txtNombre" id="txtNombre" class="form-control mb-3 border"
                            placeholder="Nombre">
                    </div>
                    <div>
                        <input type="email" name="txtCorreo" id="txtCorreo" placeholder="Correo"
                            class="form-control mb-3">
                    </div>
                    <div>
                        <input type="tel" name="txtTelefono" id="txtTelefono" placeholder="Telefono/Whatsapp"
                            class="form-control mb-3">
                    </div>
                    <div>
                        <textarea name="txtMensaje" id="txtMensaje" placeholder="Escribe aquí tu mensaje"
                            class="form-control mb-3" cols="30" rows="5"></textarea>
                    </div>
                    <div>
                        <button type="submit" id="btnEnviar" name="btnEnviar" class="btn mt-4">ENVIAR</button>
                    </div>
                </form>

            </div>
        </div>
    </main>
    <?php include_once("footer.php"); ?>
    <div class="whatsapp">
        <a href="https://api.whatsapp.com/send?phone=541150412652" target="_blank"><i class="fab fa-whatsapp"></i></a>
    </div>

    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>