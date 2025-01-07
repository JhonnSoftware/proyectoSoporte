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
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Lista de Productos</h1>
                    <p class="lead fw-normal text-white-50 mb-0">With this shop hompeage template</p>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    @foreach ($productos as $producto)
                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- Product image-->
                                <img class="card-img-top" src="{{ asset('storage/' . $producto->fotografia) }}"
                                    alt="Foto de producto" />
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder">{{ $producto->nombre }}</h5>
                                        <p class="text-muted" style="font-size: 0.9rem; height: 60px; overflow: hidden;">
                                            {{ $producto->descripcion }}
                                        </p>
                                        <!-- Product price-->
                                        <h5 class="text-primary">S/ {{ number_format($producto->precioUnitario, 2) }}</h5>
                                        
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <form action="{{ route('carrito.agregar') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="producto_id" value="{{ $producto->id }}">
                                        <button type="submit" class="btn btn-outline-primary mt-auto">
                                            Añadir al carrito
                                        </button>
                                    </form>
                                </div>
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center">
                                        <a href="{{ route('DetalleProducto', ['id' => $producto->id]) }}" class="btn btn-outline-dark mt-auto">
                                            Ver detalles
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
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

        <style>
            .card-img-top {
                width: 100%;
                /* Ocupa todo el ancho disponible del contenedor */
                height: 200px;
                /* Altura fija para todas las imágenes */
                object-fit: cover;
                /* Asegura que la imagen se recorte proporcionalmente si es más grande */
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
    </body>

    </html>

</x-app-layout>
