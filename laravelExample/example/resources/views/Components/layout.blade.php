<!DOCTYPE html>
<html class="h-full bg-gray-100" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Demo Laravel Project</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com"></script>

    </head>
    <body class="h-full">

<div class="min-h-full">
  <nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          <div class="shrink-0">
            <img class="size-8" src="https://laracasts.com/images/logo/logo-triangle.svg" alt="Your Company">
          </div>
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">

              <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
              <x-nav-link href="/jobs" :active="request()->is('jobs')">Jobs</x-nav-link>
              <x-nav-link href="/contacts" :active="request()->is('contacts')">Contacts</x-nav-link>
              <!-- <x-nav-link :active="request()->is('message')" type="button">Message</x-nav-link> -->
            </div>
          </div>
        </div>
        <div class="hidden md:block">
          <div class="ml-4 flex items-center md:ml-6">
            @guest
               <x-nav-link href="/login" :active="request()->is('login')">Login</x-nav-link>
               <x-nav-link href="/register" :active="request()->is('register')">Register</x-nav-link>
            @endguest
            @auth
               <form method="POST" action="/logout">
                  @csrf
                  <x-form-button>Logout</x-form-button>
               </form>
            @endauth
          </div>
        </div>
      </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="md:hidden" id="mobile-menu">
      <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">

        <a href="/" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white" aria-current="page">Home</a>

        <a href="/jobs" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Jobs</a>

        <a href="/contacts" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Contacts</a>
      </div>
      <div class="border-t border-gray-700 pt-4 pb-3">
        <div class="flex justify-center">
          @guest
            <x-nav-link href="/login" :active="request()->is('login')">Login</x-nav-link>
            <x-nav-link href="/register" :active="request()->is('register')">Register</x-nav-link>
          @endguest
          @auth
            <div class="text-base/5 font-medium text-white">Tom Cook</div>
            <div class="text-sm font-medium text-gray-400">tom@example.com</div>
            <x-nav-link href="/logout" :active="request()->is('logout')">Login</x-nav-link>
          @endauth
        </div>
      </div>
    </div>
  </nav>

  <header class="bg-white shadow-sm">
  @auth
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 sm:flex sm:justify-between">
      <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{ $heading }}</h1>
      <x-button href="/jobs/create">Create Job</x-button>
    </div>
  @endauth
  </header>


  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      {{$slot}}
    </div>
  </main>
</div>

    </body>
</html>
