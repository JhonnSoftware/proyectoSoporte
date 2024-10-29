<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('https://via.placeholder.com/1500x800'); /* Reemplaza por tu imagen de fondo */
            background-size: cover;
            background-position: center;
            color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            font-family: Arial, sans-serif;
        }

        .contact-container {
            background-color: rgba(0, 0, 0, 0.6); /* Fondo semi-transparente */
            padding: 40px;
            border-radius: 10px;
            max-width: 900px;
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
        }

        .contact-info {
            flex: 1;
            min-width: 200px;
        }

        .contact-info h3 {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .contact-info p, .contact-info a {
            color: #ffffff;
            margin: 0;
            margin-bottom: 10px;
            text-decoration: none;
            font-size: 0.9rem;
        }

        .social-icons a {
            color: #ffffff;
            margin-right: 10px;
            font-size: 1.2rem;
        }

        .form-container {
            flex: 2;
            min-width: 300px;
        }

        .form-control {
            background-color: transparent;
            color: white;
            border: 1px solid #ffffff;
            border-radius: 5px;
            margin-bottom: 15px;
        }

        .form-control::placeholder {
            color: #ffffff;
        }

        .form-check-label {
            color: #ffffff;
            font-size: 0.9rem;
        }

        .btn-submit {
            background-color: #17a2b8;
            border: none;
            border-radius: 5px;
            width: 100%;
            padding: 10px;
            font-weight: bold;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-submit:hover {
            background-color: #138496;
        }
    </style>
</head>
<body>
    <div class="contact-container">
        <!-- Información de contacto -->
        <div class="contact-info">
            <h3>Contáctenos</h3>
            <p><i class="bi bi-geo-alt-fill"></i> Lima - Perú</p>
            <p><i class="bi bi-telephone-fill"></i> (+511) 492-9801</p>
            <p><i class="bi bi-envelope-fill"></i> ventas@computech.com</p>
            <div class="social-icons">
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-whatsapp"></i></a>
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>

        <!-- Formulario de contacto -->
        <div class="form-container">
            <form>
                <div class="d-flex gap-2">
                    <input type="text" class="form-control" placeholder="Nombre" required>
                    <input type="email" class="form-control" placeholder="Email" required>
                    <input type="text" class="form-control" placeholder="Teléfono" required>
                </div>
                <textarea class="form-control" placeholder="Mensaje" rows="4" required></textarea>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="termsCheck" required>
                    <label class="form-check-label" for="termsCheck">He leído y acepto las <a href="#" style="color: #17a2b8;">Políticas de privacidad</a></label>
                </div>
                <button type="submit" class="btn-submit mt-3">Enviar Mensaje</button>
            </form>
        </div>
    </div>

    <!-- Bootstrap Icons -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>
</body>
</html>
