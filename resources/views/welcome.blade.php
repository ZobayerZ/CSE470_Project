<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */
            body {
                font-family: Figtree, sans-serif;
                margin: 0;
                background-color: rgb(243 244 246);
            }
            .flex-center {
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
                flex-direction: column;
                gap: 20px;
            }
            .btn {
                padding: 12px 24px;
                font-size: 18px;
                font-weight: bold;
                text-align: center;
                text-decoration: none;
                background-color: #3b82f6;
                color: white;
                border-radius: 8px;
                transition: background-color 0.3s ease;
            }
            .btn:hover {
                background-color: #2563eb;
            }
            .img-placeholder {
                width: 300px;
                height: 200px;
                background-color: #ddd;
                border-radius: 8px;
                margin: 20px;
            }
            .container {
                text-align: center;
            }
            .image-container {
                display: flex;
                justify-content: center;
                gap: 20px;
                margin-top: 40px;
            }
            .image-container img {
                width: 300px;
                height: 200px;
                object-fit: cover;
                border-radius: 8px;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="flex-center bg-dots-darker bg-center dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                    @auth
                        <a href="{{ url('/home') }}" class="btn">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="btn">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn ml-4">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="container">
                <h1 class="text-xl font-semibold text-gray-900">Welcome to Our Website</h1>
                <p class="text-gray-600">Explore our features and services</p>

                <!-- Image Placeholders -->
                <div class="image-container">
                    <div class="img-placeholder">
                        <img src="{{ asset('public/assets/dist/img/alopecia cactus18373_rectangle.jpg') }}">
                    </div> 
                    <div class="img-placeholder">
                        <img src="{{ asset('public/assets/dist/img/Go!5270_rectangle.jpg') }}">
                    </div> 
                    <div class="img-placeholder">
                        <img src="{{ asset('public/assets/dist/img/642-6429887_a-los-angeles-based-ecommerce-web-development-firm.png') }}">
                    </div> 
                </div>
            </div>
        </div>
    </body>
</html>
