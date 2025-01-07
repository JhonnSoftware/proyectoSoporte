<x-app-layout>
   
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulario</title>
        <link rel="stylesheet" href="styles.css">
    </head>
  
    <body>
        <div class="form-container">
            <h2>Dinos cómo podemos ayudarte</h2>
            <p>Déjanos tus datos y uno de nuestros especialistas en TI te ayudará a resolver tus necesidades
                rápidamente.
            </p>
            <form method="POST" action="{{ route('Contactanos.store') }}">
                @csrf
                <div class="form-group">
                    <div class="input-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" id="nombre" name="nombre" placeholder="Nombre" required>
                    </div>
                    <div class="input-group">
                        <label for="apellido">Apellido</label>
                        <input type="text" id="apellido" name="apellido" placeholder="Apellido" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <label for="dni">Nro Documento</label>
                        <input type="text" id="dni" name="dni" placeholder="Ingrese su DNI" required>
                    </div>
                    <div class="input-group">
                        <label for="edad">Edad</label>
                        <input type="text" id="edad" name="edad" placeholder="Ingrese su edad" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <label for="correo">Correo electrónico</label>
                        <input type="email" id="correo" name="correo" placeholder="Correo electrónico" required>
                    </div>
                    <div class="input-group">
                        <label for="telefono">Teléfono</label>
                        <input type="tel" id="telefono" name="telefono" placeholder="Teléfono de contacto"
                            required>
                    </div>
                </div>
                <div class="input-group">
                    <label for="empresa">Empresa</label>
                    <input type="text" id="empresa" name="empresa" placeholder="Empresa" required>
                </div>
                <div class="input-group checkbox-group">
                    <input type="checkbox" id="terminos" name="terminos" required>
                    <label for="terminos">Acepto que mis datos, completados en este formulario, sean procesados por
                        CompuTech con el fin de proporcionarme asistencia a través de correo electrónico o por llamada
                        telefónica.</label>
                </div>
                <button type="submit" class="submit-btn">Solicitar Información</button>
            </form>
        </div>

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

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            height: 100vh;
        }

        .form-container {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 500px;
            width: 100%;
            text-align: center;
            margin: 15px auto;
        }

        .form-container h2 {
            margin-bottom: 10px;
            color: #2c3e50;
        }

        .form-container p {
            font-size: 14px;
            color: #7f8c8d;
            margin-bottom: 20px;
        }

        .form-group {
            display: flex;
            gap: 10px;
            margin-bottom: 15px;
        }

        .input-group {
            flex: 1;
            text-align: left;
        }

        label {
            font-size: 14px;
            color: #2c3e50;
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"] {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #dcdcdc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .checkbox-group {
            display: flex;
            align-items: flex-start;
            margin-top: 15px;
        }

        .checkbox-group input {
            margin-right: 10px;
            margin-top: 4px;
        }

        .submit-btn {
            background-color: #2ecc71;
            color: #ffffff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        .submit-btn:hover {
            background-color: #27ae60;
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

    </html>
</x-app-layout>
