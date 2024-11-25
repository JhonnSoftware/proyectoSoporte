<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro en el portal de soporte</title>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>
<body>
    <div class="container">
        <h1>Regístrese en el portal de soporte</h1>
        <p>¿Ya es usuario/a? <a href="{{ route('login.index') }}">Iniciar sesión</a></p>
        
        <form method="POST" action="{{ route('login.store') }}">
            @csrf
            <div class="form-group">
                <label for="usuario">Usuario</label>
                <input type="text" name="usuario" id="usuario" value="{{ old('usuario') }}" placeholder="Ingrese su nombre de usuario" required>
                @error('usuario')
                    <div>{{ $message }}</div>
                @enderror
            </div>
        
            <div class="form-group">
                <label for="email">Correo electrónico</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="Ingrese su correo electronico" required>
                @error('email')
                    <div>{{ $message }}</div>
                @enderror
            </div>
        
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" name="password" id="password" placeholder="Ingrese su contraseña"  required>
                @error('password')
                    <div>{{ $message }}</div>
                @enderror
            </div>
        
            <div class="form-group">
                <label for="password_confirmation">Confirmar Contraseña</label>
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirmar contraseña" required>
            </div>
        
            <div>
                <button type="submit">Registrar</button>
            </div>
        </form>

        <p class="agent-login">¿Es usted un/a agente? <a href="#">Iniciar sesión aquí</a></p>
    </div>

    <style>
        /* General Body Styles */
        /* General Body Styles */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7f8fa;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #ffffff;
            padding: 20px 40px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 450px;
            border-radius: 8px;
            text-align: center;
        }

        h1 {
            font-size: 22px;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
        }

        p {
            font-size: 14px;
            color: #666;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .form-group {
            margin-bottom: 15px;
            text-align: left;
        }

        label {
            font-size: 14px;
            color: #333;
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        input[type="checkbox"] {
            margin-right: 10px;
        }

        .agent-login {
            font-size: 14px;
            color: #666;
            margin-top: 15px;
        }

        /* Responsive Design */
        @media (max-width: 480px) {
            .container {
                padding: 15px;
                width: 100%;
            }

            h1 {
                font-size: 20px;
            }
        }

    </style>
</body>
</html>