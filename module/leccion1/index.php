<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- library bootstrap v.5.0.2 -->
    <script src="../../plugins/libs/jquery-3.3.1.js"></script>
    <link rel="stylesheet" type="text/css" href="../../plugins/libs/bootstrap/css/bootstrap.css">

    <script src="../../plugins/libs/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../../plugins/libs/bootstrap/js/custom-modal-handler.js"></script>
    <script src="../../plugins/js/touch-dnd.js"></script>
    
    <link rel="stylesheet" href="../../plugins/libs/animate/animate.min.css">
    
    <!-- library cascading style sheets -->
    <link rel="stylesheet" type="text/css" href="../../plugins/css/sofactia.css">
    <link rel="stylesheet" type="text/css" href="../../plugins/css/bg_img.css">
    <link rel="stylesheet" type="text/css" href="../../plugins/css/style.css">

    <link rel="stylesheet" type="text/css" href="../../plugins/libs/component/preloader/preloaders.css">
    <link rel="stylesheet" type="text/css" href="../../plugins/libs/component/transcripcion/transcripcion.css">

    <!--Tiporgraia Montserrat-->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">

    <!--Libreria iconos-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Estilos del widget -->
    <link rel="stylesheet" href="../../plugins/libs/assetsWidget/css/widget.css">
</head>

<body class="sf-scroll-y-hidden body-style" id="darkStyleImgSeccion">
    <input type="text" id="nombre_capsula" value="" hidden>
    <input type="text" id="cedula" value="" hidden>
    
    <!-- Header con el logo -->
    <header class="header">
        <div class="contentHeader bg-header-r">
            <div>
                <img src="../../assets/img/logo/logo-color.svg" alt="Orientación en prevención de riesgos"
                    class="logo logoTop">
                <div class="miga_pan">
                    <p id="breadcrumb"></p>
                </div>
                <div class="txPg">
                    <span id="textProg">1</span> / <span id="nSlider"></span>
                </div>
                <div class="txPg d-lg-none" id="dropdownGripBtn">
                    <i class="fa-solid fa-grip"></i>
                </div>
            </div>

            <div class="d-md-none text-center">
                <p class="mb-0" id="breadcrumb_movil"></p>
            </div>

            <div class="contCircleBar contCircleBar-nav-bar">
            </div>

            <div class="progBar progBar2">
                <div style="width: 10% !important;"></div>
            </div>
        </div>
    </header>
    <div class="dropdown-slider d-md-none" id="dropdownSliderMenu">
    </div>
    <!-- content fluid -->
    <main class="container-fluid sf-container">
        <!-- content slider -->
        <div class="contentModule" id="slider-container"></div>
        <!-- end content fluid -->
    </main>
    <!-- navegación  -->
    <div class="btn-navigation-container">
        <button id="pagIndex" class="btn-navigation btn-navigation--prev" onclick="prevSlide()">
            <i class="fas fa-angle-left"></i> <span>Anterior</span>
        </button>
        <button id="next" class="btn-navigation btn-navigation--next" onclick="nextSlide()">
            <span>Siguiente</span> <i class="fas fa-angle-right"></i>
        </button>
    </div>
    <button id="btnParallaxMobile" class="btn-parallax-mobile ocultar d-block d-md-none">
        <i class="fas fa-arrow-down"></i>
    </button>
    <!-- Agrega esto justo antes del cierre del body (antes de los scripts) -->
    <div id="transcripcion-global"></div>
    <footer>
        <!-- library javascript -->
        <!-- Configuración global del curso -->
        <script src="../../plugins/libs/component/transcripcion/transcripcion.js"></script>
        <script src="../../plugins/js/config/curso-config.js"></script>
        <script src="../../plugins/js/main.js"></script>
        <script src="../../plugins/js/modal-bg.js"></script>

        <script src="../../plugins/js/getProgressActivity.js"></script>
        <script src="../../plugins/js/trackingmanager_activities.js"></script>
        <script src="../../plugins/js/trackingmanagern3.js"></script>
        <script src="../../plugins/js/touch-dnd.js"></script>
        <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
        <!-- Plugin Lumi Activities -->
        <script src="../../plugins/js/lumi-activities.js"></script>
        <!-- Script del Widget -->
        <script src="../../plugins/libs/assetsWidget/js/widget.js"></script>
        
        <script>
            $(document).ready(function() {
                // Obtener parámetros de la URL
                const urlParams = new URLSearchParams(window.location.search);
                const cedula = urlParams.get('cedula');
                const nombre_capsula = urlParams.get('nombre_capsula');
                
                // Llenar los campos ocultos
                if (cedula) $('#cedula').val(cedula);
                if (nombre_capsula) $('#nombre_capsula').val(nombre_capsula);
                
                // Función para finalizar la lección y ir a evaluación
                window.finalizarLeccion = function() {
                    let cedula = $('#cedula').val();
                    let nombre_capsula = $('#nombre_capsula').val();
                    
                    if (cedula && nombre_capsula) {
                        let params = new URLSearchParams({
                            cedula: cedula,
                            nombre_capsula: nombre_capsula
                        }).toString();
                        window.location.href = 'evaluacion_leccion.php?' + params;
                    } else {
                        window.location.href = 'evaluacion_leccion.php';
                    }
                };
                
                // Función para volver al inicio
                window.volverInicio = function() {
                    window.location.href = '../../index.php';
                };
            });
        </script>

    </footer>
</body>

</html>