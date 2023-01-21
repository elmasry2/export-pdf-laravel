<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Export To PDF </title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" />

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
    <div class="container">
        <h1 class="text-center pt-2"> Export To PDF </h1>
        <div class="block">
        <a class="btn btn-warning" href="{{url('/invoice')}}"> Export To PDF Using HTML & CSS </a>
        <a class="btn btn-success" href="{{url('/invoice-pdf')}}" > Export To PDF Using domPDF </a>

        </div>
    </div>

    </body>
</html>
