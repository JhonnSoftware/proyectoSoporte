<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div>
        <h2>Iniciar sesión en el portal de soporte</h2>
        <p>¿Es su primera vez como usuario/a? <a href="{{ route('register') }}">Regístrese con nosotros</a></p>

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />
                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                    <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                </label>
            </div>
            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
    
                <x-primary-button class="ms-3">
                    {{ __('Iniciar Sesion') }}
                </x-primary-button>
            </div>
        </form>

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
        </style>
    </div>

</x-guest-layout>