<x-app-layout>
    
    <!DOCTYPE html>
    <html lang="en">

        <head>
            <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
            <meta name="description" content="" />
            <meta name="author" content="" />
            <title>Inicio</title>
            <!-- Favicon-->
            <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
            <!-- Bootstrap icons-->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
            <!-- Core theme CSS (includes Bootstrap)-->
            <link href="css/styles.css" rel="stylesheet" />
            <link rel="stylesheet" href="{{asset('/public/css/styles.css')}}">
        </head>

        <body>
            <!-- Header-->
            <header class="custom-header">
                <div class="overlay"></div>
                <div class="container px-4 px-lg-5 my-5">
                    <div class="text-center text-white">
                        <h1 class="display-4 fw-bolder">Servicio de soporte tecnico</h1>
                        <p class="lead fw-normal text-white-50 mb-0">Cualquier problema que tengas lo solucionamos</p>
                    </div>
                </div>
            </header>
            
            <!-- Section-->
            <section class="py-5">
                <div class="container d-flex">
                    <div class="row">
                        <div class="col-md-8">
                            <img src="{{ asset('img/imagen01.png') }}" width="800" height="500">
                            <h3 class="mt-4">¿TIENES PROBLEMAS TÉCNICOS EN TU EMPRESA?</h3>
                            <p>En CompuTech contamos con un equipo técnico especializado que no solo te brindará asistencia a usuarios a domicilio, a nivel de hardware y software, sino también de manera remota, ya sea por demanda o por contrato.</p>
                        </div>
                        <div class="col-md-4">
                            <a href="{{ route('servicios.generarTicket') }}" class="btn btn-primary w-100 mb-3">Generar Ticket</a>

                            <div class="card">
                                <div class="card-header bg-primary text-white text-center">
                                    ¿Qué servicio necesita?
                                </div>
                                <div class="card-body">
                                    <ul class="list-unstyled">
                                        <li><i class="bi bi-check-circle-fill text-primary"></i> Soporte técnico presencial y/o remoto</li>
                                        <li><i class="bi bi-check-circle-fill text-primary"></i> Mantenimiento de equipos</li>
                                        <li><i class="bi bi-check-circle-fill text-primary"></i> Soporte y mantenimiento de redes</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <h2 class="mb-4" style="colo: black;">Dentro de nuestros servicios encontrarás:</h2>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <img src="{{ asset('img/soporte03.png')}}" class="card-img-top" alt="Soporte técnico presencial y/o remoto">
                                <div class="card-img-overlay d-flex align-items-center justify-content-center">
                                    <h5 class="card-title text-white bg-dark p-2 rounded">Soporte técnico a domicilio</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img src="{{ asset('img/mantenimiento02.jpg') }}" class="card-img-top" alt="Mantenimiento de equipos">
                                <div class="card-img-overlay d-flex align-items-center justify-content-center">
                                    <h5 class="card-title text-white bg-dark p-2 rounded">Mantenimiento de Equipos</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img src="{{ asset('img/redes02.jpg') }}" class="card-img-top" alt="Soporte y mantenimiento de redes">
                                <div class="card-img-overlay d-flex align-items-center justify-content-center">
                                    <h5 class="card-title text-white bg-dark p-2 rounded">Soporte técnico y mantenimiento de redes</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="mt-4 text-muted" style="color: #ff6a57; font-style: italic;">
                        En conclusión, el soporte técnico informático es esencial para el buen funcionamiento de una compañía y tiene mucha importancia en el desarrollo empresarial hoy en día; en ese sentido, la externalización del servicio abarca distintos escenarios en que se puedan dar de forma efectiva y económica para una compañía.
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
            
            <!-- Bootstrap core JS-->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
            <!-- Core theme JS-->
            <script src="js/scripts.js"></script>
        </body>

        <style>
            .custom-header {
                background-image: url('{{ asset('img/header01.jpg') }}');
                position: relative;
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                padding: 5rem 0;
            }
            
            .custom-header .overlay {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.6); 
                z-index: 1; 
            }

            .container {
                position: relative;
                z-index: 2;
            }

            .text-container {
                text-align: center;
                color: #ffffff; 
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
                position: relative;;
            }

            .footer-section ul li a {
                color: #d4d4d4;
                text-decoration: none;
                font-size: 0.9rem;
                padding-left: 20px;
            }

            .footer-section ul li a::before {
                content: "•"; /* El punto antes del enlace */
                color: #FFF; /* Color del punto */
                font-size: 1.5rem; /* Tamaño del punto */
                position: absolute; /* Posiciona el punto de forma absoluta */
                left: 0; /* Coloca el punto a la izquierda */
                top: 50%; /* Centra el punto verticalmente */
                transform: translateY(-50%); /* Ajusta para centrar perfectamente */
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
