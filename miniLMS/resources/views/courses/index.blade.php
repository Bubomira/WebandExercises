<x-layout>
    <h2 class="text-sky-800 font-bold text-4xl mb-5">All courses: </h2>
    <div class="mb-10 w-[70%] space-y-10">
    @foreach($courses as $course)
       <x-course-card :course="$course"/>
    @endforeach
    </div>

    {{ $courses->links() }}
    
</x-layout>