<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('wwwroot/lib/bootstrap-5.0.2-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('wwwroot/css/sidebar.css') }}">
    @yield('css')

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .navbar {
            background: linear-gradient(90deg, #0062E6, #33AEFF);
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1050;
        }


        .main-sidebar {
            background: linear-gradient(180deg, #1E3A8A, #0C4A6E);
            color: #fff;
            height: 100vh;
            position: fixed;
            top: 80px; 
            left: 0;
            width: 250px;
            z-index: 1040;
            padding-top: 20px;
            transition: width 0.3s ease;
        }

        .main-sidebar .nav-sidebar .nav-link {
            display: flex;
            align-items: center;
            padding: 15px;
            color: #d1d1d1;
            text-decoration: none;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .main-sidebar .nav-sidebar .nav-link:hover {
            background-color: #1E40AF;
            color: #fff;
        }

  
        .main-wrapper {
            margin-left: 250px;
            margin-top: 80px;
            padding: 20px;
        }

        .container {
            min-height: calc(100vh - 80px);
        }

        main {
            flex-grow: 1;
        }


        @media (max-width: 992px) {
            .main-sidebar {
                width: 200px; 
            }

            .main-wrapper {
                margin-left: 200px; 
            }
        }

        @media (max-width: 768px) {
    
            .main-sidebar {
                width: 0;
                height: 0;
                overflow: hidden;
            }

            .main-wrapper {
                margin-left: 0; 
            }

   
            .main-sidebar.active {
                width: 250px;
                height: 100vh;
            }


            .navbar .navbar-toggler {
                display: block;
            }
        }

        .navbar-toggler {
            display: none;
        }


        .navbar-toggler-icon {
            background-color: #fff;
        }

    </style>
</head>
<body>

    @include('layouts.header')

    <div class="main-wrapper">
        @if (session()->has('username'))
            @include('layouts.sidebar')
        @endif

        <div class="container">
            <main>
                @yield('content')
            </main>
        </div>
    </div>

    @yield('js')
    <script src="{{ asset('wwwroot/lib/fullcalendar-6.1.17/dist/index.global.min.js') }}"></script>
    <script src="{{ asset('wwwroot/lib/bootstrap-5.0.2-dist/js/bootstrap.min.js') }}"></script>
    <script>
        document.querySelector('.navbar-toggler').addEventListener('click', function () {
            document.querySelector('.main-sidebar').classList.toggle('active');
        });
    </script>
</body>
</html>
