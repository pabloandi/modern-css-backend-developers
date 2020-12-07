<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

        {{-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> --}}

        <link rel="stylesheet" href="css/app.css">
    </head>

    <body class="p-6">

        <div class="container mx-auto">
            <div class="flex" >
                @include('plan')
                @include('plan')
                @include('plan')
                @include('plan')
            </div>


        </div>

    </body>


</html>
