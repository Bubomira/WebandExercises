<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pixel Positions</title>
    @vite(['resources/js/app.js','resources/css/app.css'])
</head>
<body class="bg-black text-white pb-20">
    <div class="px-10">
        <nav class="flex justify-between border-b border-white/10 items-center py-4">
           <div >
            <a href="/">
                <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="logo">
            </a>
           </div>

           <div class="space-x-6 font-bold">
              <a href="/">Jobs</a>
              <a href="/jobs/create">Careers</a>
              <a href="#">Salaries</a>
              <a href="#">Companies</a>
           </div>

           @auth
           <div class="space-x-6 font-bold flex">
              <a href="/jobs/create">Post a Job</a>
               <form method="POST" action="/logout">
                @csrf
                @method('DELETE')
                   <button>Logout</button>
               </form>
           </div>
           @endauth

           @guest
            <div class="space-x-6 font-bold">
              <a href="/register">Sign up</a>
              <a href="/login">Login</a>
           </div>
           @endguest
        </nav>

        <main class="mt-10 max-w-[986px] mx-auto">
            {{ $slot }}
        </main>
    </div>
</body>
</html>