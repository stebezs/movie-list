<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Movie List</title>

        <link rel="stylesheet" href="css/main.css">

    </head>

    <body class="font-sans bg-gray-600 text-white">
        <nav class="border-b border-gray-100">
            <div class="container mx-auto flex items-center justify-between px-2 py-2">
                <ul class="flex items-center">
                    <li class="ml-16">
                        <a href="#" class="hover:text-gray-400">
                            Filmes
                        </a>
                    </li>
                    <li class="ml-16">
                        <a href="#" class="hover:text-gray-400">
                            Séries
                        </a>
                    </li>
                    <li class="ml-16">
                        <a href="#" class="hover:text-gray-400">
                            Atores
                        </a>
                    </li>
                </ul>
                <div class="flex items-center">
                <div class="relative">
                    <input type="text" class="bg-gray-200 rounded-full w-64 px-4 py-2" placeholder="Busca">
                </div>
            </div>
            </div>
        </nav>
        
        <div>
            @yield('content')
        </div>

    </body>
    
</html>