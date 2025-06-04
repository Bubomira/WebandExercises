<x-layout >
   <x-slot:heading>
      Jobs page
   </x-slot:heading>
  <ul>
       @foreach ($jobs as $job)

        <li>
         <a class="text-blue-500 hover:underline" href="/jobs/{{ $job['id'] }}">
              <strong>{{ $job['title'] }}</strong> pays {{ $job['salary'] }} a year.
         </a>
         </li> 

       @endforeach

   </ul>
  
</x-layout>