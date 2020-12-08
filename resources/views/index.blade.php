<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Modal example</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

        <link rel="stylesheet" href="css/app.css">

    </head>

    <body>
        <ul>
            <li>

                <a href="#join-modal">Join</a>
            </li>
            <li>

                <a href="#cancel-modal">Cancel</a>
            </li>
        </ul>

        @component('modal', ['name' => 'join-modal'])
            <h1>Pick a plan</h1>

            <p>
                Lorem ipsum dolor sit amet, consecutur adipsicing elit, sed do eiusmod
                tempor incididunt ut labore
            </p>

        @endcomponent

        @component('modal', ['name' => 'cancel-modal'])
            <h1>Leave so soon</h1>

            <p>
                Lorem ipsum dolor sit amet, consecutur adipsicing elit, sed do eiusmod
                tempor incididunt ut labore
            </p>

            <p>
                <a href="#join-modal">Sign up</a>
            </p>

        @endcomponent


    </body>


</html>
