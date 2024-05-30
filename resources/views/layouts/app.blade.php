<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title of the document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* Atur margin atas untuk konten di bawah menu navigasi yang fixed */
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
            color:#070952
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
