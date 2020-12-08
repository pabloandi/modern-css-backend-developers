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

   <body class="container mx-auto">

       <div class="md:min-h-screen bg-gray-700 md:flex md:flex-col">
            <header class="bg-red-700 p-3">
                <h1>My site</h1>
            </header>

            <div class="md:flex md:flex-1">
                <aside class="bg-green-700 p-3">
                    Sidebar.
                </aside>
                <main class="bg-blue-700 md:flex-1 p-3">
                    <div class="flex flex-wrap">
                        <div class="w-1/2 p-3 md:w-1/4">
                            <div class="bg-gray-400 p-3 md:mb-2">
                                <p>Product Feature.</p>
                            </div>
                        </div>
                        <div class="w-1/2 p-3 md:w-1/4">
                            <div class="bg-gray-400 p-3 md:mb-2">
                                <p>Product Feature.</p>
                            </div>
                        </div>
                        <div class="w-1/2 p-3 md:w-1/4">
                            <div class="bg-gray-400 p-3 md:mb-2">
                                <p>Product Feature.</p>
                            </div>
                        </div>
                        <div class="w-1/2 p-3 md:w-1/4">
                            <div class="bg-gray-400 p-3 md:mb-2">
                                <p>Product Feature.</p>
                            </div>
                        </div>
                        <div class="w-1/2 p-3 md:w-1/4">
                            <div class="bg-gray-400 p-3 md:mb-2">
                                <p>Product Feature.</p>
                            </div>
                        </div>
                        <div class="w-1/2 p-3 md:w-1/4">
                            <div class="bg-gray-400 p-3 md:mb-2">
                                <p>Product Feature.</p>
                            </div>
                        </div>
                        <div class="w-1/2 p-3 md:w-1/4">
                            <div class="bg-gray-400 p-3 md:mb-2">
                                <p>Product Feature.</p>
                            </div>
                        </div>
                        <div class="w-1/2 p-3 md:w-1/4">
                            <div class="bg-gray-400 p-3 md:mb-2">
                                <p>Product Feature.</p>
                            </div>
                        </div>
                    </div>
                </main>
            </div        <footer class="bg>

     black text-white p-3">
                Copyright 2018
            </footer>
       </div>

   </body>


</html>
