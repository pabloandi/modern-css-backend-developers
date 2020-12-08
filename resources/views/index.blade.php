<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Responsive demo</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

        {{-- <link rel="stylesheet" href="css/app.css"> --}}

    </head>

    <body class="p-6">

        <div class="md:flex md:flex-wrap">

            <div class="flex-1 p-4">
                <div class="box bg-gray-300 p-4">1</div>
            </div>

            <div class="flex-2 p-4">
                <div class="box bg-gray-300 p-4">2</div>
            </div>

            <div class="flex-1 p-4">
                <div class="box bg-gray-300 p-4">3</div>
            </div>

            <div class="flex-1 p-4">
                <div class="box bg-gray-300 p-4">4</div>
            </div>

            <div class="flex-1 p-4">
                <div class="box bg-gray-300 p-4">5</div>
            </div>

            <div class="flex-1 p-4">
                <div class="box bg-gray-300 p-4">6</div>
            </div>

            <div class="flex-1 p-4">
                <div class="box bg-gray-300 p-4">7</div>
            </div>

            <div class="flex-1 p-4">
                <div class="box bg-gray-300 p-4">8</div>
            </div>

        </div>

    </body>


</html>
