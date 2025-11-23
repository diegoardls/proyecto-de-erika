/**
@param {string} sectionId 
 */

function showContent(sectionId) {
    // 1. Ocultar todas las secciones
    const allSections = document.querySelectorAll('.content-section');
    allSections.forEach(section => {
        section.classList.remove('active');
        section.style.display = 'none'; 
    });

    // 2. Mostrar la sección seleccionada
    const targetSection = document.getElementById(sectionId + '-content');
    if (targetSection) {
        targetSection.classList.add('active');
        
        // Si es la página de inicio, usa 'flex' para el layout de 3 columnas
        if (sectionId === 'inicio') {
            targetSection.style.display = 'flex'; 
        } else {
            // Para las otras páginas, usa 'block'
            targetSection.style.display = 'block';
        }
    }

    // 3. Manejar el estado activo del botón
    const allButtons = document.querySelectorAll('.nav-button');
    allButtons.forEach(button => {
        button.classList.remove('active');
    });

    // Añadir la clase 'active' al botón clicado
    const clickedButton = document.querySelector(`.nav-button[data-target="${sectionId}"]`);
    if (clickedButton) {
        clickedButton.classList.add('active');
    }
}

/**
 * Función para alternar la visibilidad del cuerpo de mensajes.
 * Se llama desde el encabezado de "Mensajes Recibidos" en el HTML.
 */
function toggleMessages() {
    const messagesBody = document.getElementById('messages-body-content');
    if (messagesBody) {
        // Esta línea alterna la clase CSS que hace el despliegue
        messagesBody.classList.toggle('messages-expanded');
    }
}

document.addEventListener('DOMContentLoaded', function() {
    // 1. Seleccionar todos los títulos de las opciones
    const titulos = document.querySelectorAll('.titulo-opcion');
    
    // 2. Iterar sobre cada título para adjuntar un evento de clic
    titulos.forEach(titulo => {
        titulo.addEventListener('click', function() {
            // Obtener el elemento 'li' padre de este título
            const elementoPadre = this.parentElement;
            // Obtener el contenido desplegable de este elemento
            const contenido = elementoPadre.querySelector('.contenido');

            // --- Lógica para cerrar otros elementos ---
            // 3. Iterar sobre todos los contenidos para cerrarlos
            document.querySelectorAll('.contenido').forEach(otroContenido => {
                // Si el contenido actual no es el contenido en el que hicimos clic:
                if (otroContenido !== contenido) {
                    otroContenido.classList.remove('activo'); // Cierra el contenido
                    otroContenido.previousElementSibling.classList.remove('activo'); // Quita estilo 'activo' al título
                }
            });
            
            // --- Lógica para abrir/cerrar el elemento actual ---
            // 4. Alternar la clase 'activo' en el contenido
            contenido.classList.toggle('activo');
            // 5. Alternar la clase 'activo' en el título
            this.classList.toggle('activo');
        });
    });
});

// Funcionalidad JavaScript (scripts.js) con marcado de sección activa

const headers = document.querySelectorAll('.seccion-header');

headers.forEach(header => {
    header.addEventListener('click', () => {
        const contentId = header.id.replace('-header', '-content');
        const content = document.getElementById(contentId);

        // 1. Ocultar todos los contenidos y desactivar todos los encabezados
        // Esto asegura que solo uno esté abierto/activo a la vez (comportamiento de acordeón)
        document.querySelectorAll('.seccion-contenido').forEach(c => {
            if (c !== content) {
                c.classList.remove('show');
            }
        });

        document.querySelectorAll('.seccion-header').forEach(h => {
            if (h !== header) {
                h.classList.remove('active-header');
            }
        });


        // 2. Alternar la visibilidad del contenido clickeado
        const isCurrentlyOpen = content.classList.toggle('show');

        // 3. Marcar el encabezado como activo SOLO si el contenido está abierto
        if (isCurrentlyOpen) {
            header.classList.add('active-header');
        } else {
            // Si el contenido se está cerrando, también quitamos la marca de activo
            header.classList.remove('active-header');
        }
    });
});

// ... (código anterior)

// Funcionalidad JavaScript (scripts.js)

// El activador es la foto de perfil (ID: profile-toggler)
const toggler = document.getElementById('profile-toggler'); 
// El elemento a mostrar/ocultar es la sección de acciones (ID: profile-actions-menu)
const actionsMenu = document.getElementById('profile-actions-menu'); 

if (toggler && actionsMenu) {
    // Añadir el evento de click a la foto de perfil
    toggler.addEventListener('click', () => {
        // 🚨 CAMBIO CLAVE: Alternar la clase 'open' para la animación 🚨
        actionsMenu.classList.toggle('open'); 
    });
} else {
    console.error("No se encontraron los elementos necesarios para el despliegue. Verifica las IDs en tu HTML.");
}

// =======================
// LOGOUT (Cerrar Sesión)
// =======================
document.addEventListener("DOMContentLoaded", () => {

    const logoutButton = document.getElementById("logout-button");

    if (logoutButton) {
        logoutButton.addEventListener("click", (e) => {
            e.preventDefault(); 

            console.log("Cerrando sesión...");

            // Redirige al login
            window.location.href = "/gestion_escolar/public/index.php";
        });
    } else {
        console.error("❌ No se encontró #logout-button");
    }
});


