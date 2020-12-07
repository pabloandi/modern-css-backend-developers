<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

        <link rel="stylesheet" href="css/card.css">
    </head>

    <body class="flex items-center justify-center">

        <div class="card flex rounded">
            {{-- left --}}
            <div class="card-left flex flex-col justify-between rounded p-4 item-center text-center text-white">
                <a href="#" class="card-skill-button no-underline text-xs rounded-full py-1 px-6 text-inherit">PHP</a>

                <img src="https://laracasts.s3.amazonaws.com/series/thumbnails/10-techniques-for-cleaner-code.png?v=8" width="98" height="98">

                <span class="text-xs">Intermediate difficulty</span>
            </div>

            {{-- right --}}
            <div class="card-right flex flex-col text-gray-600 p-6">

                <h3 class="card-title text-black font-light text-3xl mb-3">
                    <a href="#" class="no-underline text-inherit">Testing Jargon</a>
                </h3>

                <p class="card-excerpt flex-1">
                    There's no tow ways about it: terminology in the testing world is incredibly overwhelming.
                    Let's fix that! Bit by bit, we'll break all of these confusing concepts down as best as we can.
                </p>

                <div class="card-meta flex text-sm">

                    <div class="flex items-center mr-4">
                        <img src="https://image.flaticon.com/icons/svg/864/864685.svg"  width="15" height="15" class="mr-2">
                        5 Lessons
                    </div>

                    <div class="flex items-center">
                        <img src="https://image.flaticon.com/icons/svg/2088/2088617.svg"  width="15" height="15" class="mr-2">
                        53:10 min

                    </div>


                </div>
            </div>
        </div>

    </body>

</html>