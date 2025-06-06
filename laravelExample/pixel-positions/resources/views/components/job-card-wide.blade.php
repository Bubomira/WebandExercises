@props(['job'])

<x-panel class="flex gap-x-6">

    <div>
        <x-employer-logo/>
    </div>
    
    <div class="flex-1 flex flex-col">
        <a href="#" class="self-start text-gray-400 text-sm transition-colors duration-300">{{$job->employer->name}}</a> 
        <h3 class="text-bold text-xl mt-3 group-hover:text-blue-600">{{ $job->title }}</h3>
        <p class="text-sm text-gray-400 mt-auto">${{$job->schedule}}- From {{$job->salary}}</p>
    </div>
    
    <div class="space-x-1">
        @foreach ($job->tags as $tag)
            <x-tag :$tag/>
        @endforeach
    </div>

</x-panel>