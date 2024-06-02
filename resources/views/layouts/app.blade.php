<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ny Ayu Web</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <style>
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Playfair Display', serif;
        }

        body, p, a, span {
            font-family: 'Montserrat', sans-serif;
        }

        .body {
            padding-top: 75px;
        }

        .custom-btn{
            font-size: 25px; 
            font-weight: bold; 
            padding: 10px 20px; 
            margin-right: 50px;
            pointer-events: none;
            background-color:#DF6589;
            border-color:#DF6589;
            color:#70951
        }

        .inc-btn{
            font-size: 50px; 
            font-weight: bold; 
            margin-right: 15px;
            background-color:#070952;
            border-color:#070952;
            color:#DF6589
        }

    </style>
</head>
<body>
    @include('partials.header')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')
</body>
</html>
