// Variables globales para la actividad
let respuestasCorrectas = 0;
let totalRespuestas = 3;
let actividadCompletada = false;

// Función para manejar la selección de imágenes
function actSelectImg(element, tipo) {
    // Si ya está seleccionado, no hacer nada
    if (element.classList.contains('selected') || element.classList.contains('incorrect')) {
        return;
    }

    // Marcar como seleccionado
    element.classList.add('selected');
    
    // Mostrar el icono correspondiente
    const iconImg = element.querySelector('.resAct');
    
    if (tipo === 'checkAct') {
        iconImg.src = './momento1_2/img/checkAct.png';
        iconImg.style.display = 'block';
        respuestasCorrectas++;
        element.style.borderColor = '#28a745';
    } else {
        iconImg.src = './momento1_2/img/xmarkAct.png';
        iconImg.style.display = 'block';
        element.classList.remove('selected');
        element.classList.add('incorrect');
        element.style.borderColor = '#dc3545';
    }

    // Actualizar contador
    document.getElementById('respuestas_correctas').textContent = respuestasCorrectas;
    
    // Calcular porcentaje
    const porcentaje = Math.round((respuestasCorrectas / totalRespuestas) * 100);
    document.getElementById('resultado').textContent = porcentaje;
    
    // Mostrar resultado si se completó
    if (respuestasCorrectas === totalRespuestas) {
        document.getElementById('p_resultado').style.display = 'block';
        document.querySelector('.btn-finalizar').disabled = false;
        actividadCompletada = true;
        
        // Habilitar el botón next si existe
        if (window.habilitarNext) {
            window.habilitarNext();
        }
    }
}

// Función para reiniciar la actividad
function reiniciarActividad() {
    respuestasCorrectas = 0;
    actividadCompletada = false;
    
    // Resetear todos los elementos
    const items = document.querySelectorAll('.itemAct');
    items.forEach(item => {
        item.classList.remove('selected', 'incorrect');
        item.style.borderColor = 'transparent';
        const iconImg = item.querySelector('.resAct');
        iconImg.style.display = 'none';
        iconImg.src = '';
    });
    
    // Resetear contadores
    document.getElementById('respuestas_correctas').textContent = '0';
    document.getElementById('resultado').textContent = '0';
    document.getElementById('p_resultado').style.display = 'none';
    document.querySelector('.btn-finalizar').disabled = true;
    
    // Deshabilitar el botón next si existe
    if (window.deshabilitarNext) {
        window.deshabilitarNext();
    }
}

// Función para guardar resultado
function guardarResultado() {
    if (!actividadCompletada) {
        alert('Debes completar la actividad primero');
        return;
    }

    let cedula = document.getElementById('cedula').value;
    let nombre_capsula = document.getElementById('nombre_capsula').value;
    let numero_preguntas = totalRespuestas;
    let preguntas_correctas = respuestasCorrectas;

    $.ajax({
        type: "POST",
        url: "../../../../functions_helpers.php?capsula_qr=energia_hidraulica&update_capsula=1",
        dataType: "json",
        data: {
            nombre_capsula: nombre_capsula,
            cedula: cedula,
            numero_preguntas: numero_preguntas,
            preguntas_correctas: preguntas_correctas,
        },
        success: function(res) {
            if (res.message == '1') {
                // Marcar como guardado
                localStorage.setItem('actividad_guardada', 'true');
                
                // Ir directo a evaluación
                let params = new URLSearchParams({
                    cedula: cedula,
                    nombre_capsula: nombre_capsula
                }).toString();
                
                window.location.href = './evaluacion_leccion.php?' + params;
            } else {
                alert('Error al guardar el resultado');
            }
        },
        error: function() {
            alert('Error de conexión');
        }
    });
}

export function init() {
    // Hacer las funciones globales para que funcionen con onclick
    window.actSelectImg = actSelectImg;
    window.reiniciarActividad = reiniciarActividad;
    
    // Agregar event listener al botón finalizar
    const btnFinalizar = document.querySelector('.btn-finalizar');
    if (btnFinalizar) {
        btnFinalizar.addEventListener('click', guardarResultado);
    }
    
    // Verificar si ya se guardó la actividad
    if (localStorage.getItem('actividad_guardada') === 'true') {
        if (window.habilitarNavegacionEvaluacion) {
            window.habilitarNavegacionEvaluacion();
        }
    }
}