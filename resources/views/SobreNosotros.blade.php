<x-app-layout>
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Soporte PC</title>
        <link rel="stylesheet" href="styles.css">
    </head>

    <body>
        <section class="about-section">
            <div class="about-container">
                <div class="about-text">
                    <h1>COMPUTECH</h1>
                    <hr class="blue-line">
                    <p>
                        Es una marca de la empresa dedicada a la asesoría integral en
                        Tecnología de Información.
                    </p>
                    <hr class="blue-line">
                    <p>
                        Desde la reparación de sus PCs e impresoras hasta la implementación de redes, configuración de
                        servidores,
                        ofrecemos una amplia gama de servicios y con la garantía que solo empresas formales y
                        profesionales le
                        pueden brindar.
                    </p>
                </div>
                <div class="about-image">
                    <img src="soporte-pc-logo.png" alt="Soporte PC">
                </div>
            </div>
        </section>

        <section class="services-section">
            <div class="service-card">
                <div class="icon-circle" style="background-color: #007bff;">
                    <i class="bi bi-wrench"></i>
                </div>
                <h3>Planes a la medida</h3>
                <p>
                    Sabemos que todas las empresas no son iguales, por ello diseñamos planes según los requerimientos
                    de cada una. Contamos con profesionales para cubrir los distintos roles existentes en el área
                    de Infraestructura y Soporte Técnico.
                </p>
            </div>
            <div class="service-card">
                <div class="icon-circle" style="background-color: #6f42c1;">
                    <i class="bi bi-handshake"></i>
                </div>
                <h3>Confianza y seguridad</h3>
                <p>
                    Somos una empresa formal que cumple con todas las normativas establecidas y con buenas prácticas
                    para
                    mantener un equipo de especialistas comprometidos con nuestros valores. No se arriesgue con
                    alternativas informales.
                </p>
            </div>
            <div class="service-card">
                <div class="icon-circle" style="background-color: #6c757d;">
                    <i class="bi bi-clipboard-data"></i>
                </div>
                <h3>Soluciones integrales</h3>
                <p>
                    Nuestra experiencia en distintas tecnologías y rubros de negocios nos permite brindarle un
                    portafolio
                    de soluciones integrales para que centralice sus requerimientos con un verdadero aliado estratégico.
                </p>
            </div>
            <div class="service-card">
                <div class="icon-circle" style="background-color: #ff4500;">
                    <i class="bi bi-heart"></i>
                </div>
                <h3>Compromiso</h3>
                <p>
                    Desde el primer día que iniciamos operaciones nos convertimos en un aliado de su empresa. Hacemos
                    nuestros sus objetivos con la finalidad de apoyarlo en el cumplimiento de los mismos desde nuestro
                    rol
                    en el soporte técnico de su plataforma de cómputo.
                </p>
            </div>
        </section>

        <footer class="footer">
            <div class="footer-section">
                <h3>Soporte PC</h3>
                <p>
                    Somos especialistas en soporte técnico integral. En Soporte PC nos
                    preocupamos en brindarle un servicio eficiente con la misma calidad y
                    seguridad que nos gustaría tener.
                </p>
            </div>
            <div class="footer-section">
                <h3>Nuestros Servicios</h3>
                <ul>
                    <li><a href="#">Soporte técnico para empresas</a></li>
                    <li><a href="#">Mantenimiento de equipos</a></li>
                    <li><a href="#">Reparación de equipos</a></li>
                    <li><a href="#">Cableado estructurado</a></li>
                    <li><a href="#">Soporte a domicilio</a></li>
                    <li><a href="#">Venta de equipos</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Contáctenos</h3>
                <p>¿Tiene problemas técnicos con sus equipos de cómputo?</p>
                <p>
                    📍 Calle Mercaderes 368, Oficina 401, Santiago de Surco, Lima, Perú<br>
                    📞 +51 1 480 1025<br>
                    📧 <a href="mailto:informes@soportepc.pe">informes@soportepc.pe</a>
                </p>
            </div>
        </footer>
    </body>

    </html>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }

        .about-section {
            padding: 40px;

        }

        .about-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
        }

        .about-text {
            width: 50%;
            padding-right: 20px;
        }

        .about-text h1 {
            font-size: 2rem;
            color: #333;
            margin-bottom: 10px;
        }

        .blue-line {
            border: 0;
            height: 2px;
            background-color: #007bff;
            /* Azul */
            width: 50px;
            margin: 10px 0;
        }

        .about-text p {
            font-size: 1rem;
            line-height: 1.6;
            color: #666;
        }

        .about-image {
            width: 40%;
            text-align: center;
        }

        .about-image img {
            max-width: 100%;
            height: auto;
        }

        .services-section {
            display: flex;
            justify-content: space-around;
            align-items: flex-start;
            flex-wrap: wrap;
            padding: 40px 20px;
            background-color: #fff;
        }

        .service-card {
            width: 22%;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 8px;
            text-align: center;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin: 10px;
        }

        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .icon-circle {
            width: 80px;
            height: 80px;
            margin: 0 auto 20px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 2rem;
        }

        .service-card h3 {
            font-size: 1.2rem;
            margin-bottom: 10px;
            color: #333;
        }

        .service-card p {
            font-size: 0.9rem;
            line-height: 1.6;
            color: #666;
        }

        .footer {
            display: flex;
            justify-content: space-between;
            padding: 20px 50px;
            background-color: #1e1e1e;
        }

        .footer-section {
            flex: 1;
            margin: 20px 20px;
        }

        .footer-section h3 {
            font-size: 1.2rem;
            margin-bottom: 10px;
            color: #f5f5f5;
        }

        .footer-section p {
            font-size: 0.9rem;
            line-height: 1.8;
            color: #b0b0b0;
        }

        .footer-section ul {
            list-style: none;
            padding-left: 20px;
        }

        .footer-section ul li {
            position: relative;
            ;
        }

        .footer-section ul li a {
            color: #d4d4d4;
            text-decoration: none;
            font-size: 0.9rem;
            padding-left: 20px;
        }

        .footer-section ul li a::before {
            content: "•";
            /* El punto antes del enlace */
            color: #FFF;
            /* Color del punto */
            font-size: 1.5rem;
            /* Tamaño del punto */
            position: absolute;
            /* Posiciona el punto de forma absoluta */
            left: 0;
            /* Coloca el punto a la izquierda */
            top: 50%;
            /* Centra el punto verticalmente */
            transform: translateY(-50%);
            /* Ajusta para centrar perfectamente */
        }

        .footer-section ul li a:hover {
            color: #fff;
            text-decoration: underline;
        }

        .footer-section a {
            color: #d4d4d4;
            text-decoration: none;
        }

        .footer-section a:hover {
            text-decoration: underline;
        }
    </style>
</x-app-layout>
