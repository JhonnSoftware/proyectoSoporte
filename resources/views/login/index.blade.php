<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión en el Portal de Soporte</title>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>
<body>
    <div class="login-container">
        <h2>Iniciar sesión en el portal de soporte</h2>
        <p>¿Es su primera vez como usuario/a? <a href="{{ route('login.registrarUsuario') }}">Regístrese con nosotros</a></p>
        
        <form action="" method="POST">
            @csrf  <!-- Asegúrate de que esta línea esté aquí -->
            <label for="email">Su dirección de correo electrónico <span>*</span></label>
            <input type="email" id="email" name="email" placeholder="Su dirección de correo electrónico" required>
            
            <label for="password">Contraseña <span>*</span></label>
            <input type="password" id="password" name="password" placeholder="Contraseña" required>
            
            <div class="remember-me">
                <input type="checkbox" id="remember" name="remember">
                <label for="remember">Recordarme en este ordenador</label>
            </div>
            
            <button type="submit" class="login-button">Iniciar sesión</button>
            
            <p class="alternative-login">...o iniciar sesión usando</p>
            
            <!--
            <a href="" class="google-login">
                <img src="https://upload.wikimedia.org/wikipedia/commons/4/4e/Google_%22G%22_Logo.svg" alt="Google logo">
                Continuar con Google
            </a>
            -->
        </form>
    </div>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #f3f4f6;
        }

        .login-container {
            background-color: #ffffff;
            padding: 20px 30px;
            width: 400px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h2 {
            color: #2c3e50;
            margin-bottom: 10px;
        }

        p {
            color: #6c757d;
            font-size: 14px;
            margin-bottom: 20px;
        }

        p a {
            color: #007bff;
            text-decoration: none;
        }

        p a:hover {
            text-decoration: underline;
        }

        form label {
            display: block;
            color: #333333;
            font-weight: bold;
            margin-top: 10px;
            text-align: left;
        }

        form label span {
            color: #e74c3c;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ced4da;
            border-radius: 4px;
            font-size: 14px;
        }

        .remember-me {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            text-align: left;
        }

        .remember-me input {
            margin-right: 8px;
        }

        .login-button {
            width: 100%;
            padding: 10px;
            background-color: #003366;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        .login-button:hover {
            background-color: #002244;
        }

        .alternative-login {
            color: #6c757d;
            margin: 15px 0;
        }

        .google-login {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            padding: 10px;
            background-color: #4285f4;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        .google-login img {
            width: 20px;
            height: 20px;
            margin-right: 8px;
        }

        .google-login:hover {
            background-color: #357ae8;
        }
    </style>
</body>
</html>
