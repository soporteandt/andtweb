<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANDT Digital Solutions</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="icon" href="favicon.png" type="image/png">
    <script src="https://cdn.tailwindcss.com"></script>


</head>
<body>
    <header>

        <!-- Preloader -->
        <div id="preloader">
            <img src="images/logo.png" alt="ANDT Digital Solutions">
        </div>


        <div class="container">
            <img src="images/logo.png" alt="ANDT Digital Solutions" class="logo-image">
            <h1 class="logo">ANDT Digital Solutions</h1>

            <nav>
                <ul>
                    <li><a href="#home">Inicio</a></li>
                    <li><a href="#services">Servicios</a></li>
                    <li><a href="#about">Nosotros</a></li>
                    <li><a href="#contact">Contacto</a></li>
                </ul>
            </nav>
        </div>

    </header>


    <!-- Hero Section -->
    <section id="home" class="bg-[#002659] text-white text-center py-16">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-extrabold mb-4">Innovación y Tecnología</h2>
            <p class="text-lg mb-6 leading-relaxed">
                En ANDT Digital Solutions transformamos desafíos en oportunidades a través de tecnología innovadora y personalizada.
                Diseñamos soluciones digitales que potencian negocios, optimizan procesos y conectan a las empresas con el futuro.
            </p>
            <a href="#services" class="bg-white text-[#002659] py-3 px-6 rounded-xl shadow-md hover:bg-gray-300 transition">
                Descubre más
            </a>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-16">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12">Nuestros Servicios</h2>
            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-4">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold mb-4">Desarrollo Web</h3>
                    <p class="text-gray-600">
                        Creamos sitios web modernos, responsivos y enfocados en brindar una experiencia de usuario excepcional.
                    </p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold mb-4">Consultoría TI</h3>
                    <p class="text-gray-600">
                        Te asesoramos en la integración de tecnologías que optimicen tus procesos y comunicación empresarial.
                    </p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold mb-4">Automatización</h3>
                    <p class="text-gray-600">
                        Implementamos soluciones que eliminan tareas repetitivas, ahorran tiempo y reducen costos operativos.
                    </p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold mb-4">Análisis de Datos</h3>
                    <p class="text-gray-600">
                        Transformamos datos en decisiones estratégicas con herramientas avanzadas como Power BI.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="bg-gray-100 py-16">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold">Nosotros</h2>
                <p class="text-lg text-gray-600 mt-4">
                    Transformamos procesos complejos en soluciones simples y eficaces orientadas al éxito.
                </p>
            </div>
            <div class="grid gap-8 lg:grid-cols-3">
                <div class="bg-white p-8 rounded-lg shadow-md">
                    <h3 class="text-2xl font-semibold mb-4">Nuestra Misión</h3>
                    <p class="text-gray-600">
                        Proveer soluciones tecnológicas integrales que optimicen procesos empresariales y productividad.
                    </p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-md">
                    <h3 class="text-2xl font-semibold mb-4">Nuestra Visión</h3>
                    <p class="text-gray-600">
                        Ser referentes en innovación tecnológica, transformando la gestión empresarial.
                    </p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-md">
                    <h3 class="text-2xl font-semibold mb-4">Nuestros Valores</h3>
                    <ul class="space-y-2 text-gray-600">
                        <li>✨ Innovación</li>
                        <li>🤝 Compromiso</li>
                        <li>📢 Transparencia</li>
                        <li>👥 Trabajo en equipo</li>
                        <li>🎯 Orientación al cliente</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-16">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-8">Contáctanos</h2>
            <form id="contact-form" class="space-y-4 max-w-lg mx-auto" method="POST" action="{{ route('store') }}">
                @csrf
                <input type="text" id="name" name="name" placeholder="Nombre" required class="w-full p-3 border rounded-lg focus:outline-none focus:ring">
                <input type="text" id="lastname" name="lastname" placeholder="Apellidos" required class="w-full p-3 border rounded-lg focus:outline-none focus:ring">
                <input type="email" id="email" name="email" placeholder="Correo Electrónico" required class="w-full p-3 border rounded-lg focus:outline-none focus:ring">
                <input type="tel" id="phone" name="phone" placeholder="Teléfono" required class="w-full p-3 border rounded-lg focus:outline-none focus:ring">
                <textarea id="message" name="message" placeholder="Mensaje" required class="w-full p-3 border rounded-lg focus:outline-none focus:ring"></textarea>


                <button type="submit" class="w-full bg-[#002659] text-white py-3 rounded-lg hover:bg-blue-700 transition">
                    Enviar
                </button>
            </form>

            <!-- Confirmación del envío -->
            <div id="confirmation-message" class="mt-4 text-green-600 font-bold hidden">
                ¡Tu mensaje fue enviado con éxito! Gracias por contactarnos.
            </div>
        </div>
    </section>




    <footer>

        <div class="footer-content">
            <div class="social-links">
                <a href="https://www.linkedin.com/company/andt-digital-solutions/" target="_blank">
                    <img src="http://imgfz.com/i/XQcGEqf.png" alt="LinkedIn">
                </a>
                <a href="https://wa.me/51926182630" target="_blank">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp">
                </a>
                <a href="https://www.facebook.com/people/ANDT-Digital-Solutions/61571628431975/" target="_blank">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" alt="Facebook">
                </a>
            </div>
            <p class="company-info">Ubicación: Surquillo, Lima | ANDT Digital Solutions</p>
        </div>

        <div class="company-info1">
            <p>&copy; 2025 ANDT Digital Solutions. Todos los derechos reservados.</p>
        </div>


    </footer>


    <script src="js/script.js"></script>
    <script src="//code.tidio.co/p14n9qepuqbn9cv65lwko7hf9pnkmhij.js" async></script>

    <script>
        $('#contact-form').on('submit', function(e) {
            e.preventDefault();

            $.ajax({
                type: 'POST'
                , url: $(this).attr('action')
                , data: $(this).serialize()
                , success: function(data) {
                    alert(data.message)
                    // ToastManager.createCustomToast({
                    //     title: data.title,
                    //     message: data.message,
                    //     type: 'bg-success'
                    // });

                    // setTimeout(() => {
                    //     window.location.href = data.redirect;
                    // }, 3000);


                }
                , error: function(data) {
                    // if (data.status === 422) {
                    //     // Si hay errores de validación, muestra los mensajes de error en un alert danger
                    //     var errors = data.responseJSON.errors;
                    //     var errorHtml = '<ul>';
                    //     $.each(errors, function(key, value) {
                    //         errorHtml += '<li>' + value + '</li>';
                    //     });
                    //     errorHtml += '</ul>';

                    //     // Actualiza el contenido del elemento alert y muestra
                    //     $('#validation-errors').html(
                    //         '<i class="fas fa-exclamation-circle"></i> Errores en el formulario:' +
                    //         errorHtml).show();
                    // }
                }
            });
        });

    </script>
</body>
</html>
