@props(['field'=>'input'])
<section class="flex flex-col space-y-2">
    <label class="text-sky-700">{{$slot}}</label>
    @if($field==='input')
    <input {{ $attributes->merge(['class'=>'border border-sky-700 rounded-sm py-1 px-3 bg-white/30']) }}>
    @else
      <textarea {{ $attributes->merge(['class'=>'border border-sky-700 rounded-sm py-1 px-3 bg-white/30']) }}></textarea>
    @endif
    @error($attributes->get('name'))
       <p class="text-red-600 text-sm">{{ $message }}</p>
    @enderror
</section>