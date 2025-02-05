
// Esperar a que el DOM esté completamente cargado
document.addEventListener("DOMContentLoaded", () => {
    // Simular un retraso para mostrar el preloader (opcional)
    setTimeout(() => {
        // Ocultar el preloader
        const preloader = document.getElementById("preloader");
            preloader.classList.add("hidden");

         // Mostrar el contenido principal
         document.body.classList.add("loaded");
    }, 1000); // 1 segundos de espera (puedes ajustar el tiempo)
});




document.getElementById('contact-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Evitar que el formulario se envíe y recargue la página
    
    // Mostrar el mensaje de éxito
    document.getElementById('confirmation-message').classList.remove('hidden');
    
    // Opcional: limpiar los campos del formulario
    document.getElementById('name').value = '';
    document.getElementById('email').value = '';
    document.getElementById('message').value = '';
});



