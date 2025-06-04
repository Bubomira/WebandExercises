<x-layout >
   <x-slot:heading>
      Jobs page
   </x-slot:heading>
  <ul>
      <h2 class="font-bold text-lg">{{ $job['title'] }}</h2>
      <p>This job pays {{ $job['salary'] }} per year.</p>

   </ul>
  
</x-layout>