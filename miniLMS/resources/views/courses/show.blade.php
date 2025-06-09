<x-layout>
  <section class="w-[80%] space-y-6">
    <div >
       <h3 class="flex-1 text-sky-700 font-bold text-4xl text-center mb-5 capitalize">{{ $course->title }}</h3>
       <p class="text-sky-700 text-lg">
        <span class="font-bold">
            Description: 
        </span>
        {{ $course->description }}
       </p>
    </div>

    <div class="mt-10 flex flex-col gap-7">
         @foreach( $course->lectures()->orderBy('order')->get() as $lecture)
           <x-lecture-card :lecture="$lecture"/>
         @endforeach
    </div>
    
    @can('delete',$course) 
    <div class="flex space-x-3 justify-center">
      <form action="/courses/{{ $course->id }}" method="POST">
        @csrf
        @method('DELETE')
        <input class="bg-red-900 rounded-md py-3 px-6 text-white" type="submit" value="Delete">
      </form>  
      <a href="/courses/{{ $course->id }}/add/lecture" class="px-5 py-3 bg-sky-700 text-white/90 rounded-lg self-center">Add Lecture</a>
    </div>
    @endcan 

  </section>
</x-layout>