<x-app-layout>
    
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
            <meta name="description" content="" />
            <meta name="author" content="" />
            <title>Shop Homepage - Start Bootstrap Template</title>
            <!-- Favicon-->
            <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
            <!-- Bootstrap icons-->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
            <!-- Core theme CSS (includes Bootstrap)-->
            <link href="css/styles.css" rel="stylesheet" />
        </head>
        <body>
            <!-- Navigation-->
            <!--
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container px-4 px-lg-5">
                    <a class="navbar-brand" href="#!">COMPUTECH</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                            <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Servicios</a></li>
                            <li class="nav-item"><a class="nav-link" href="#!">Sobre Nosotros</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#!">All Products</a></li>
                                    <li><hr class="dropdown-divider" /></li>
                                    <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                                    <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                                </ul>
                            </li>
                        </ul>
                        <form class="d-flex">
                            <button class="btn btn-outline-dark" type="submit">
                                <i class="bi-cart-fill me-1"></i>
                                Cart
                                <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                            </button>
                        </form>
                    </div>
                </div>
            </nav> -->
            <!-- Header-->
            <header class="bg-dark py-5">
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
                            <img src="{{ asset('imagenes/imagen01.png') }}" width="800" height="500">
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
                                <img src="{{ asset('imagenes/soporte03.png')}}" class="card-img-top" alt="Soporte técnico presencial y/o remoto">
                                <div class="card-img-overlay d-flex align-items-center justify-content-center">
                                    <h5 class="card-title text-white bg-dark p-2 rounded">Soporte técnico a domicilio</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img src="{{ asset('imagenes/mantenimiento02.jpg') }}" class="card-img-top" alt="Mantenimiento de equipos">
                                <div class="card-img-overlay d-flex align-items-center justify-content-center">
                                    <h5 class="card-title text-white bg-dark p-2 rounded">Mantenimiento de Equipos</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img src="{{ asset('imagenes/redes02.jpg') }}" class="card-img-top" alt="Soporte y mantenimiento de redes">
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
            <footer class="py-5 bg-dark">
                <div class="container text-center text-white">
                    <!-- Título del Footer -->
                    <h5 class="mt-4 mb-4 font-weight-bold">Números de Contacto de Soporte Técnico</h5>
            
                    <!-- Sección de Números de Contacto -->
                    <ul class="list-inline">
                        <li class="list-inline-item mx-3">
                            <span class="contact-icon">📞</span> <span class="contact-number">906718092</span>
                        </li>
                        <li class="list-inline-item mx-3">
                            <span class="contact-icon">📞</span> <span class="contact-number">947423534</span>
                        </li>
                        <li class="list-inline-item mx-3">
                            <span class="contact-icon">📞</span> <span class="contact-number">912276033</span>
                        </li>
                        <li class="list-inline-item mx-3">
                            <span class="contact-icon">📞</span> <span class="contact-number">900690382</span>
                        </li>
                    </ul>
                </div>
            </footer>
            
            <!-- Bootstrap core JS-->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
            <!-- Core theme JS-->
            <script src="js/scripts.js"></script>
        </body>
    </html>

</x-app-layout>
