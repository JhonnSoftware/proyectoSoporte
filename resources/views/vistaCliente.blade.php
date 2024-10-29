<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Módulo de Clientes - Soporte Técnico</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <style>
        /* Estilos generales */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

/* Contenedor principal */
.container {
    max-width: 900px;
    margin: 50px auto;
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.container h1 {
    text-align: center;
    margin-bottom: 30px;
    color: #333;
}

/* Sección de Lista de Clientes */
.client-list {
    margin-bottom: 30px;
}

.client-list h2 {
    margin-bottom: 15px;
    color: #3498db;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

table, th, td {
    border: 1px solid #bdc3c7;
}

th, td {
    padding: 10px;
    text-align: center;
}

th {
    background-color: #3498db;
    color: white;
}

button {
    background-color: #2980b9;
    color: white;
    border: none;
    padding: 5px 10px;
    cursor: pointer;
    border-radius: 3px;
    margin-right: 5px;
}

button:hover {
    background-color: #3498db;
}

/* Sección de Formulario */
.new-client-form {
    background-color: #ecf0f1;
    padding: 20px;
    border-radius: 5px;
}

.new-client-form h2 {
    color: #333;
    margin-bottom: 15px;
}

.form-group {
    margin-bottom: 15px;
}

.form-group label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
    color: #555;
}

.form-group input,
.form-group textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 16px;
}

.form-group input:focus,
.form-group textarea:focus {
    outline: none;
    border-color: #3498db;
}

.btn {
    width: 100%;
    padding: 10px;
    font-size: 18px;
    color: white;
    background-color: #3498db;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.btn:hover {
    background-color: #2980b9;
}

    </style>
    <div class="container">
        <h1>Módulo de Clientes</h1>

        <!-- Tabla de Clientes Existentes -->
        <section class="client-list">
            <h2>Lista de Clientes</h2>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Teléfono</th>
                    <th>Acciones</th>
                </tr>
                <!-- Ejemplo de cliente en la lista -->
                <tr>
                    <td>1</td>
                    <td>Juan Pérez</td>
                    <td>juan.perez@example.com</td>
                    <td>+51 987654321</td>
                    <td><button>Ver</button> <button>Editar</button> <button>Eliminar</button></td>
                </tr>
                <!-- Aquí agregar más filas para cada cliente -->
            </table>
        </section>

        <!-- Formulario para Agregar Cliente Nuevo -->
        <section class="new-client-form">
            <h2>Registrar Nuevo Cliente</h2>
            <form action="/clientes" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nombre">Nombre del Cliente</label>
                    <input type="text" id="nombre" name="nombre" required placeholder="Ingrese el nombre completo">
                </div>

                <div class="form-group">
                    <label for="email">Correo Electrónico</label>
                    <input type="email" id="email" name="email" required placeholder="Ingrese el correo electrónico">
                </div>

                <div class="form-group">
                    <label for="telefono">Teléfono</label>
                    <input type="tel" id="telefono" name="telefono" required placeholder="Ingrese el número de teléfono">
                </div>

                <div class="form-group">
                    <label for="descripcion">Descripción del Problema</label>
                    <textarea id="descripcion" name="descripcion" rows="4" placeholder="Describa el problema o solicitud" required></textarea>
                </div>

                <button type="submit" class="btn">Registrar Cliente</button>
            </form>
        </section>
    </div>
</body>
</html>
