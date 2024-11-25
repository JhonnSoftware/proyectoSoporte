<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Contacto</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="container">
        <h1>¿Necesitas ayuda? Envianos un Ticket</h1>
        <p>Ponganse en contacto con nosotros para solucionar su problema lo mas rapido posible</p>

        <div class="contact-container">
            <div class="offices">
                <h2>Pongase en contacto</h2>
                <div class="office">
                    <h3>Junin</h3>
                    <p>Huancayo, Junin</p>
                    <p>Tel: +51 90 671 80 92</p>
                    <button class="whatsapp-btn"><i class="fab fa-whatsapp"></i> WhatsApp</button>
                </div>
                <div class="office">
                    <h3>Junin</h3>
                    <p>Huancayo, Junin</p>
                    <p>Tel: +51 94 742 35 34</p>
                    <button class="whatsapp-btn"><i class="fab fa-whatsapp"></i> WhatsApp</button>
                </div>
                <div class="office">
                    <h3>Junin</h3>
                    <p>Huancayo, Junin</p>
                    <p>Tel: +51 94 742 35 34</p>
                    <button class="whatsapp-btn"><i class="fab fa-whatsapp"></i> WhatsApp</button>
                </div>
            </div>
            
            <form class="contact-form" method="POST" action="{{ route('generarTicket.store') }}">
                @csrf
                <h3>* Campos obligatorios</h3>
                <input type="text" name="nombre" placeholder="Ingrese su nombre completo*" required>
                <input type="tel" name="telefono" placeholder="Telefono *" required>
                <input type="tel" name="correo" placeholder="Correo *" required>
                <textarea name="asunto" placeholder="Asunto"></textarea>
                <label for="archivo" class="file-label">Adjuntar archivo (opcional):</label>
                <input type="file" name="archivo" id="archivo" class="file-input" accept="image/*,.pdf,.doc,.docx">
                <button type="submit">Generar Ticket</button>
            </form>
        </div>
    </div>

    <style>
        /* styles.css */
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom, #f0f4fc, #d6e2f3);
            color: #333;
        }

        .container {
            text-align: center;
            padding: 20px;
        }

        h1 {
            font-size: 2em;
            color: #003366;
        }

        .contact-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            padding: 20px;
            width: 80%; /* Cambia el ancho aquí para hacerlo más grande */
            max-width: none; /* Elimina el límite de ancho máximo */
            margin: 0 auto;
        }

        .offices {
            max-width: 200px;
            text-align: left;
        }

        .office h3 {
            color: #003366;
            font-weight: bold;
        }

        .contact-form {
            width: 100%; /* Para expandir el formulario */
            max-width: 500px; /* Cambia el ancho máximo del formulario si deseas */
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .contact-form h3 {
            text-align: left;
            font-size: 0.9em;
            color: #666;
            margin-bottom: 10px;
        }

        .contact-form input, .contact-form textarea {
            width: 95%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .contact-form select{
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .contact-form textarea {
            resize: vertical;
            height: 80px;
        }

        .checkboxes label {
            display: block;
            font-size: 0.9em;
            margin: 5px 0;
        }

        button {
            background-color: #0066cc;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 1em;
            cursor: pointer;
            border-radius: 4px;
            transition: background 0.3s;
        }

        button:hover {
            background-color: #004999;
        }

        .whatsapp-btn {
            display: flex;
            align-items: center;
            background-color: #25D366; /* Color verde de WhatsApp */
            color: white;
            border: none;
            padding: 8px 15px;
            font-size: 1em;
            cursor: pointer;
            border-radius: 4px;
            transition: background 0.3s;
        }

        .whatsapp-btn i {
            margin-right: 8px;
        }

        .whatsapp-btn:hover {
            background-color: #1EBE5A;
        }

        /* Estilo para el label del archivo */
        .file-label {
            display: block;
            font-size: 0.9em;
            margin: 10px 0;
            color: #666;
            text-align: left;
        }

        /* Estilo para el input de archivo */
        .file-input {
            display: block;
            width: 95%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-family: Arial, sans-serif;
            font-size: 1em;
            background-color: #f9f9f9;
            cursor: pointer;
        }

        /* Cambio de estilo cuando el cursor está sobre el input de archivo */
        .file-input:hover {
            background-color: #f0f4fc;
            border-color: #0066cc;
        }
        
    </style>
</body>
</html>
