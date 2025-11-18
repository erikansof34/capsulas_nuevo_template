/**
 * Gestor de Actividades para Cápsulas LEY KARIN
 * Maneja el progreso, puntuaciones y estado de completado
 */

class ActividadManager {
    constructor() {
        this.usuario = {
            nombre: localStorage.getItem('usuario_nombre'),
            cedula: localStorage.getItem('usuario_cedula')
        };
        this.puntuacion = 0;
        this.totalPreguntas = 0;
        this.preguntasCorrectas = 0;
    }

    // Verificar si el usuario ya completó la actividad
    yaCompletado() {
        if (!this.usuario.cedula) return false;
        return localStorage.getItem('capsula_ley_karin_' + this.usuario.cedula) === 'completado';
    }

    // Marcar actividad como completada
    marcarCompletado() {
        if (this.usuario.cedula) {
            localStorage.setItem('capsula_ley_karin_' + this.usuario.cedula, 'completado');
            localStorage.setItem('capsula_ley_karin_fecha_' + this.usuario.cedula, new Date().toISOString());
            localStorage.setItem('capsula_ley_karin_puntuacion_' + this.usuario.cedula, this.puntuacion);
        }
    }

    // Guardar progreso de actividad
    guardarProgreso(preguntasCorrectas, totalPreguntas) {
        this.preguntasCorrectas = preguntasCorrectas;
        this.totalPreguntas = totalPreguntas;
        this.puntuacion = Math.round((preguntasCorrectas / totalPreguntas) * 100);
        
        if (this.usuario.cedula) {
            localStorage.setItem('capsula_ley_karin_progreso_' + this.usuario.cedula, JSON.stringify({
                preguntasCorrectas: this.preguntasCorrectas,
                totalPreguntas: this.totalPreguntas,
                puntuacion: this.puntuacion,
                fecha: new Date().toISOString()
            }));
        }
    }

    // Obtener progreso guardado
    obtenerProgreso() {
        if (!this.usuario.cedula) return null;
        
        const progreso = localStorage.getItem('capsula_ley_karin_progreso_' + this.usuario.cedula);
        return progreso ? JSON.parse(progreso) : null;
    }

    // Reiniciar progreso
    reiniciarProgreso() {
        if (this.usuario.cedula) {
            localStorage.removeItem('capsula_ley_karin_' + this.usuario.cedula);
            localStorage.removeItem('capsula_ley_karin_fecha_' + this.usuario.cedula);
            localStorage.removeItem('capsula_ley_karin_puntuacion_' + this.usuario.cedula);
            localStorage.removeItem('capsula_ley_karin_progreso_' + this.usuario.cedula);
        }
        this.puntuacion = 0;
        this.preguntasCorrectas = 0;
        this.totalPreguntas = 0;
    }

    // Validar datos de usuario
    validarUsuario() {
        return this.usuario.nombre && this.usuario.cedula;
    }

    // Redirigir según estado
    redirigirSegunEstado() {
        if (!this.validarUsuario()) {
            window.location.href = '../../index.html';
            return;
        }

        if (this.yaCompletado()) {
            window.location.href = '../../realizado.html';
            return;
        }
    }

    // Finalizar actividad y redirigir
    finalizarActividad() {
        this.marcarCompletado();
        
        // Simular envío a servidor (aquí puedes agregar AJAX después)
        console.log('Actividad finalizada:', {
            usuario: this.usuario,
            puntuacion: this.puntuacion,
            preguntasCorrectas: this.preguntasCorrectas,
            totalPreguntas: this.totalPreguntas
        });

        // Redirigir a evaluación
        window.location.href = 'evaluacion_leccion.html';
    }

    // Obtener datos para mostrar en UI
    obtenerDatosUI() {
        return {
            nombre: this.usuario.nombre,
            cedula: this.usuario.cedula,
            puntuacion: this.puntuacion,
            preguntasCorrectas: this.preguntasCorrectas,
            totalPreguntas: this.totalPreguntas,
            porcentaje: this.totalPreguntas > 0 ? Math.round((this.preguntasCorrectas / this.totalPreguntas) * 100) : 0
        };
    }
}

// Hacer disponible globalmente
window.ActividadManager = ActividadManager;

// Instancia global para uso inmediato
window.actividadManager = new ActividadManager();