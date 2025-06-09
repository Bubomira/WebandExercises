<x-layout>
     <div class="mb-10 flex flex-col items-center" >
       <h3 class=" text-sky-700 font-bold text-4xl mb-5 capitalize">{{ $lecture->title }}</h3>
       <p class="text-sky-700 text-lg">
        <span class="font-bold">
            Description: 
        </span>
        {{ $lecture->description }}
       </p>
    </div>
    <iframe width="560" height="315" src="{{ $lecture->url }}" type="video/webm">
</x-layout>


