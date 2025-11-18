<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHILE CURSOS</title>
    <link rel="stylesheet" type="text/css" href="./plugins/css/sofactia.css">
    <link rel="stylesheet" type="text/css" href="./plugins/css/inicio.css">
    <link rel="stylesheet" type="text/css" href="./plugins/libs/component/particules/particules.css">
    <!-- Librerías CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
    <!-- Librería JavaScript -->
    <script src="plugins/libs/jquery-3.3.1.js"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            position: relative;
            width: 100%;
            height: 100vh;
            overflow: hidden;
            background-color: #005ABB;
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

        .contenido-cental {
            left: 5%;
            right: 5%;
        }

        .bgazul {
            background-color: #005ABB;
        }

        .imgpastilla {
            padding-top: 5%;
            padding-bottom: 5%;
            width: 60%;
            margin: 0 auto;
        }

        .labelform {
            color: #fff;
            font-size: 18px;
        }

        .inputform {
            display: block;
            margin-bottom: 1em;
            width: 90%;
            padding: 0.5em;
            font-size: 16px;
        }

        .columns {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }

        .column {
            width: 45%;
        }

        .pc-mostrar {
            display: block;
        }

        .mobile-mostrar {
            display: none;
        }

        .form-label input {
            border-radius: 8px;
            padding: 0.8rem;
        }

        .titulo {
            position: relative;
            font-size: 23px;
            width: auto;
            height: auto;
            z-index: 2;
            font-family: arial;
            color: #badde1;
            text-align: center;
        }

        .parrafo {
            color: #fff;
            font-size: 16px;
            font-family: arial;
            margin-bottom: 0.5em;
            text-align: center;
        }

        .logo-home {
            width: 50%;
            margin: 0 auto;
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

        button {
            color: #ffffff;
            background: #ffbd06;
            padding: 10px 30px;
            border-radius: 30px 0px 30px 30px;
            border: none;
            font-size: 22px;
            box-shadow: rgb(0 160 175 / 30%) 0px 8px 24px;
            max-width: 200px;
            z-index: 3;
            left: 0;
            right: 0;
            margin: 0 auto;
        }

        button:hover {
            cursor: pointer;
            filter: grayscale(50%);
        }

        @media only screen and (max-width: 768px) {
            .pc-mostrar {
                display: none;
            }

            .mobile-mostrar {
                display: block;
            }

            .imgpastilla {
                padding-top: 5%;
                padding-bottom: 5%;
                width: 80%;
                margin: 0 auto;
            }

            button {
                position: absolute;
                color: #ffffff;
                background: #ffbd06;
                padding: 10px 30px;
                border-radius: 30px 0px 30px 30px;
                border: none;
                font-size: 22px;
                box-shadow: rgb(0 160 175 / 30%) 0px 8px 24px;
                max-width: 200px;
                z-index: 3;
                left: 0;
                right: 0;
                margin: 0 auto;
            }
        }

        .icon-circle {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100px;
            height: 100px;
            background-color: white;
            border-radius: 50%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            font-size: 2rem;
            color: #005ABB;
        }

        .displayflex {
            display: flex;
        }

        @media (max-width: 1024px) {
            .contInd {
                left: 0;
                right: 0;
                margin: 0 auto;
                position: absolute;
                width: 90%;
                z-index: 2;
                max-width: 600px;
                top: 5%;
            }

            .columns {
                flex-direction: column;
                align-items: center;
            }

            .column {
                width: 100%;
                margin-bottom: 5%;
            }
        }

        @media (max-width: 734px) {
            .titulo h1 {
                position: relative;
                font-size: 30px;
                width: auto;
                height: auto;
                z-index: 2;
                font-family: arial;
                color: #badde1;
                text-align: center;
            }

            .parrafo {
                color: #fff;
                font-size: 18px;
                font-family: arial;
                text-align: center;
                margin-bottom: 1em;
            }

            .logo-home {
                width: 60%;
                margin: 0 auto;
                text-align: center;
                justify-content: center;
            }
        }
    </style>
</head>

<body id="index">
    <!-- Video de fondo original -->
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
                <img src="assets/img/logo/logo-white.svg" class="logo-home">
                <h1 class="titulo mostrar-web" style="color: #badde1">Cápsula de refuerzo LEY KARIN</h1>
                <img src="assets/img/avatars/avatar_femenina_con_megafono.webp" alt="" class="imgpastilla">

                <h1 class="titulo mostrar-mobile" style="color: #badde1; line-height: 1.3em;">Cápsula de refuerzo<br>LEY
                    KARIN</h1>
                <hr style="width: 80%; margin: 0 auto; margin-top: 2%;" class="mobile-mostrar">
                <br>
                <div class="mobile-mostrar">
                    <p class="parrafo">Hola, continuemos con nuestro aprendizaje sobre la prevención del acoso laboral y
                        violencia en el trabajo</p>
                    <p class="parrafo">Ingresa tus datos para empezar</p>
                </div>
            </div>
            <div class="column">
                <div class="pc-mostrar">
                    <p class="parrafo">Hola, continuemos con nuestro aprendizaje sobre la prevención del acoso laboral y
                        violencia en el trabajo</p>
                    <p class="parrafo">Ingresa tus datos para empezar</p>
                </div>

                <div class="form-label">
                    <label for="nombre" class="labelform">Nombre Completo:</label>
                    <input type="text" id="nombre" name="nombre" required class="inputform">

                    <label for="cedula" class="labelform">Cédula:</label>
                    <input type="number" id="cedula" name="cedula" required class="inputform">

                    <button class="button btn-enviar">Ingresar</button>
                    <br>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="./plugins/libs/component/particules/particule.js" defer></script>
    <script>
        // Esperar a que jQuery esté disponible
        window.addEventListener('load', function() {
        $(document).ready(function () {
            $(".btn-enviar").on("click", function () {
                let nombre = $('#nombre').val();
                let cedula = $('#cedula').val();

                if (nombre == '' || cedula == '') {
                    alert('¡Debe rellenar todos los datos!');
                    return false;
                }

                $.ajax({
                    type: "POST",
                    url: "../../functions_helpers.php?capsula_qr=energia_hidraulica",
                    dataType: "json",
                    data: {
                        nombre: nombre,
                        cedula: cedula
                    },
                    success: function (res) {
                        console.log('Respuesta del servidor:', res);
                        if (res.message === '1') {
                            let params = new URLSearchParams({
                                nombre_capsula: res.nombre_capsula,
                                cedula: res.cedula
                            }).toString();

                            window.location.href = "module/leccion1/index.php?" + params;
                        } else if (res.message == '2') {
                            window.location.href = "realizado.php";
                        } else {
                            console.log('Respuesta inesperada:', res);
                            window.location.reload();
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Error AJAX:', error);
                        console.error('Status:', status);
                        console.error('Response:', xhr.responseText);
                        alert('Error de conexión. Revisa la consola para más detalles.');
                    }
                });
            });
        });
        });
    </script>
</body>

</html>