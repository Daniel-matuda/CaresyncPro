<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title }}</title>

        {{-- Link do Bootstrap (css) --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

        <style>
            .hero-section {
                background: url('{{ asset('assets/img/medical-banner-with-stethoscope.jpg') }}') no-repeat center center;
                background-size: cover;
                color: white;
                height: 600px;
                display: flex;
                align-items: center;
                justify-content: center;
                text-align: center;
            }
            .card-img-top {
                height: 200px;
                object-fit: cover;
            }
            .marketing-section {
                padding: 50px 0;
            }
        </style>

    </head>
    <body>
        <div class="container">

            @include('partials.header')

            @yield('content')
        </div>


        {{-- Link do bootstrap (Javascript) --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>
