<?php
    // Obtener parámetros si vienen por GET
    $cedula = isset($_GET['cedula']) ? $_GET['cedula'] : '';
    $nombre_capsula = isset($_GET['nombre_capsula']) ? $_GET['nombre_capsula'] : '';
?>
<!DOCTYPE html>
<html lang="es">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- library bootstrap v.5.0.2 -->
    <link rel="stylesheet" type="text/css" href="../../plugins/libs/bootstrap/css/bootstrap.css">

    <!-- library cascading style sheets -->
    <link rel="stylesheet" type="text/css" href="../../plugins/css/sofactia.css">

    <!--Montserrat-->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">

    <!--Libreria iconos-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Estilos del widget -->
    <link rel="stylesheet" href="../../plugins/libs/assetsWidget/css/widget.css">

</head>

<body class="sf-scroll-y-hidden sf-bg-dark">
    <!-- Datos de la cápsula -->
    <input type="text" id="nombre_capsula" value="<?php echo $nombre_capsula; ?>" hidden>
    <input type="text" id="cedula" value="<?php echo $cedula; ?>" hidden>
    <!-- Header con el logo -->

    <!-- content fluid -->
    <div class="container-fluid pb-5 pb-md-0 px-0 px-md-5 py-0 text-center">
        <div class="row d-flex justify-content-center align-items-center sf-min-h-vh100 mx-5">
            <div class="col-lg-5 col-md-12 mt-5 my-md-0">
                <div class="ml-4">
                    <img src="../leccion1/gif/avatar_mujer_cuaderno.gif" alt="avatar"
                        class="mx-auto sf-img-40 sf-img-md-80 sf-img-sm-30">
                </div>
            </div>
            <div class="col-lg-7 col-md-12 mt-4 my-md-0">
                <div class="sf-mr-xl-p10 mr-md-5 mr-4 sf-lh-xs">
                    <h1 class="sf-txt-1xl-700 sf-text-white">¡Felicitaciones!
                    </h1>
                    <div class="sf-bg-white border sf-bc-dark2 p-4 sf-br-r4 sf-m-r6">
                        <p><strong>Has completado exitosamente la actividad</strong></p>
                        <p>¡lo has hecho increible… !
                            <br><br>
                            Ahora sigue buscando más códigos QR para continuar aprendiendo sobre la prevención del acoso
                            laboral y violencia en el
                            trabajo según la LEY KARIN
                            <br><br>
                        </p>



                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="btn-navigation-container glass-back">
        <button id="pagIndex" class="btn-navigation btn-navigation--prev" onclick="btnPrev()">
            <i class="fas fa-angle-left"></i> <span>Anterior</span>
        </button>
    </div>

    <!--library javascript-->
    <script src="../../plugins/libs/jquery-3.3.1.js"></script>
    <!-- Script del Widget -->
    <script src="../../plugins/libs/assetsWidget/js/widget.js"></script>
    <!-- Gestor de Actividades -->
    <script src="../../plugins/js/actividad-manager.js"></script>
    <!-- LMS SCORM Integration -->
    <script src="lms.js"></script>

    <script>
        function btnPrev() {
            window.location.href = "./index.php";
        };
    </script>

</body>

</html>