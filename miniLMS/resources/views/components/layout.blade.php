<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mini LMS</title>

        @vite(['resources/css/app.css'])
        @vite(['resources/js/app.js'])
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    </head>
    <body class="bg-blue-100">
        <div>
            <nav class="text-white font-bold flex bg-sky-800 justify-between px-6 py-4">
                <div class="space-x-6">
                    <a href="/courses">Courses</a>
                    <a href="/search">Search</a>
                </div>
                <div class="flex space-x-7">
                     @guest
                         <a href="/login">Login</a>
                         <a href="/register">Register</a>
                     @endguest
                     @auth
                        <a href="/courses/create">Create course</a>
                        <form action="/logout" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Logout">              
                        </form>
                     @endauth
                </div> 
            </nav>
        </div>
         <main class="mt-10 flex flex-col w-[90%] m-auto items-center min-h-[100vh]">
            {{ $slot }}
        </main>

    </body>
</html>
