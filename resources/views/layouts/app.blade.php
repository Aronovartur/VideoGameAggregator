<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" conten="width=device-width, initial-scale=1">
    <title>Video Game Library</title>


    <link rel="stylesheet" href="/css/main.css">
    <script src="/js/app.js"></script>
    <link rel="stylesheet" href="/css/app.css">
</head>

<body class="bg-gray-900 text-white">

<header class="border-b border-gray-800">
    <nav class="container mx-auto flex items-center justify-between px-4 py-6">
        <div class="flex items-center">
            <a href="/"><h2>Video Game Reviews</h2></a>

        <ul class="flex ml-16 space-x-8">
            <li><a href="#" class="hover:text-gray-400">Games</a></li>
            <li><a href="#" class="hover:text-gray-400">Reviews</a></li>
            <li><a href="#" class="hover:text-gray-400">Coming Soon</a></li>


        </ul>
        </div>
            <div class="flex items-center">
                <div class="relative">
                    <input type="text" class="bg-gray-800 text-sm rounded-full focus:outline-none focus:shadow-outline px-3 py-1" placeholder="Search...">
                </div>
                <div class="ml-6">
                    <a href="#"><img src="#" alt="avatar" class="rounder-full w-8">
                    </a>
                </div>
            </div>

    </nav>
</header>


<main class="py-8">
@yield('content')
</main>

<footer class="border-t border-gray-800">
    <div class="container mx-auto px-4 py-6">IGDB API</div>
</footer>
</body>
</html>