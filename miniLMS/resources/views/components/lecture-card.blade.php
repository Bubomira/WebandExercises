<div class="flex">
    <p class="bg-sky-800 text-white px-6 py-5">{{ $lecture->order }}</p>
    <article class="flex items-center py-3 px-4 border-2 border-sky-800 w-full">
       <h4 class="flex-1 text-sky-700 font-bold text-xl capitalize">{{ $lecture->title }}</h4>
       <a href="{{route('lectures.show', $lecture)}}" class="px-5 py-1 bg-sky-700 text-white/90 rounded-lg">Watch</a>
    </article>
</div>