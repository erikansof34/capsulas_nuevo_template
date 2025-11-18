<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad Completada - LEY KARIN</title>
    <link rel="stylesheet" type="text/css" href="./plugins/css/sofactia.css">
    <link rel="stylesheet" type="text/css" href="./plugins/css/inicio.css">
    <!-- Librerías CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
    <!-- Librería JavaScript -->
    <script src="plugins/libs/jquery-3.3.1.js" defer></script>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            position: relative;
            width: 100%;
            height: 100vh;
            background-color: #005ABB;
            font-family: 'Montserrat', Arial, sans-serif;
        }

        .logo-container {
            position: absolute;
            top: 20px;
            left: 20px;
            z-index: 10;
        }

        .logo-container img {
            max-width: 200px;
        }

        .contInd {
            position: absolute;
            width: 90%;
            z-index: 2;
            top: 15%;
            left: 10%;
        }

        .columns {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .column {
            width: 45%;
        }

        .titulo {
            font-size: 2.5rem;
            color: #badde1;
            text-align: center;
            margin-bottom: 1rem;
        }

        .parrafo {
            color: #fff;
            font-size: 1.2rem;
            text-align: center;
            margin-bottom: 1rem;
            line-height: 1.5;
        }

        .imagen-avatar {
            width: 80%;
            margin: 0 auto;
            display: block;
        }

        .fullscreen-cover {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            overflow: hidden;
        }

        #overlayVideo {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        @media (max-width: 1024px) {
            .columns {
                flex-direction: column;
                align-items: center;
            }

            .column {
                width: 100%;
                margin-bottom: 2rem;
            }

            .contInd {
                left: 5%;
                right: 5%;
                width: 90%;
                top: 10%;
            }
        }

        @media (max-width: 768px) {
            .titulo {
                font-size: 2rem;
            }

            .parrafo {
                font-size: 1rem;
            }

            .imagen-avatar {
                width: 60%;
            }
        }
    </style>
</head>

<body>
    <!-- Video de fondo -->
    <div class="fullscreen-cover">
        <video autoplay muted loop id="overlayVideo">
            <source src="./assets/video/background_index.mp4" type="video/mp4">
        </video>
    </div>

    <!-- Logo en la esquina superior izquierda -->
    <div class="logo-container">
        <img src="./assets/img/logo/logo-white.svg" alt="Orientación en prevención de riesgos" class="logo">
    </div>

    <!-- Contenido principal -->
    <div class="contInd">
        <div class="columns">
            <div class="column">
                <img src="assets/img/avatars/avatar_femenina_con_megafono.webp" alt="Avatar" class="imagen-avatar">
            </div>
            <div class="column">
                <h1 class="titulo">Gracias por tu interés</h1>
                <p class="parrafo"><strong>Esta actividad ya la has completado</strong></p>
                <p class="parrafo">Continúa buscando más códigos QR para seguir aprendiendo sobre la prevención del acoso laboral y violencia en el trabajo según la LEY KARIN</p>
            </div>
        </div>
    </div>
</body>

</html>