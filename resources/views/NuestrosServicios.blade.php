<x-app-layout>
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Servicios</title>
    </head>

    <body>
        <!-- Sección de servicios -->
        <section class="service-section">
            <div class="service-card">
                <img src="{{ asset('img/header01.jpg') }}" alt="Soporte técnico para empresas">
                <h3>Soporte técnico para empresas</h3>
                <p>
                    Diseñamos planes de soporte técnico personalizados en base a las necesidades
                    y presupuesto de cada empresa.
                </p>
                <!-- <a href="#" class="btn">Seguir leyendo...</a> -->
            </div>
            <div class="service-card">
                <img src="{{ asset('img/header01.jpg') }}" alt="Mantenimiento de equipos">
                <h3>Mantenimiento de equipos</h3>
                <p>
                    Realizamos mantenimientos preventivos y correctivos de sus computadoras y equipos
                    de cómputo con personal especializado.
                </p>
            </div>
            <div class="service-card">
                <img src="{{ asset('img/header01.jpg') }}" alt="Reparación de equipos">
                <h3>Reparación de equipos</h3>
                <p>
                    Contamos con un equipo de profesionales que ponemos a su disposición para la ejecución
                    de actividades de soporte tecnico.
                </p>
            </div>

        </section>

        <section class="service-action-two">
            <div class="service-card">
                <img src="{{ asset('img/header01.jpg') }}" alt="">
                <h3>Cableado Estructurado</h3>
                <p>
                    Nuestros especialistas cuentan con la experiencia y capacidad para ejecutar cualquier
                    proyecto de cableado estructurado
                </p>
            </div>

            <div class="service-card">
                <img src="{{ asset('img/header01.jpg') }}" alt="">
                <h3>Soporte a domicilio</h3>
                <p>
                    Confie en nosotros para la solucion de los problemas en los equipos de computo de su hogar
                </p>
            </div>

            <div class="service-card">
                <img src="{{ asset('img/header01.jpg') }}" alt="">
                <h3>Venta de Equipos</h3>
                <p>
                    Somos distribuidores de las principales del mercado en lo que respecta a equipos de
                    computo
                </p>
            </div>
        </section>
        <!-- Footer-->
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
        <!-- Bootstrap JS (si lo necesitas) -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }

        .service-action-two {
            display: flex;
            justify-content: space-around;
            align-content: flex-start;
            padding: 15px 40px 50px 40px;
        }

        .service-section {
            display: flex;
            justify-content: space-around;
            align-items: flex-start;
            padding: 40px;
        }

        .service-card {
            width: 30%;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .service-card img {
            width: 100%;
            height: auto;
        }

        .service-card h3 {
            font-size: 1.5rem;
            margin: 20px 0 10px;
            color: #333;
        }

        .service-card p {
            font-size: 0.95rem;
            color: #666;
            margin: 0 20px 20px;
            line-height: 1.6;
        }

        /*
    .btn {
        display: inline-block;
        margin-bottom: 20px;
        padding: 10px 20px;
        background-color: #007BFF;
        color: #fff;
        text-decoration: none;
        font-size: 0.9rem;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .btn:hover {
        background-color: #0056b3;
    } */
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

    </html>
</x-app-layout>
