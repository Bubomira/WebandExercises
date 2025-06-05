<x-layout >
   <x-slot:heading>
      Jobs page
   </x-slot:heading>

  <div class="space-y-4">

       @foreach ($jobs as $job)
         <a class=" block px-4 py-6 border border-gray-200 rounded-lg" href="/jobs/{{ $job['id'] }}">
            <div class="font-bold text-blue-500">{{ $job->employer->name }}</div>
             <div>
                <strong>{{ $job['title'] }}</strong> pays {{ $job['salary'] }} a year.
             </div>
         </a>
       @endforeach

       <!-- This is out of the box paginator, styled with tailwind -->
       <div>{{ $jobs->links() }}</div>

   </div>
  
</x-layout>