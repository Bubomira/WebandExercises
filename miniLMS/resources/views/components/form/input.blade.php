
<section class="flex flex-col space-y-2">
    <label class="text-sky-700">{{$slot}}</label>
    <input {{ $attributes->merge(['class'=>'border border-sky-700 rounded-sm py-1 px-3 bg-white/30']) }}>
    @error($attributes->get('name'))
       <p class="text-red-600 text-sm">{{ $message }}</p>
    @enderror
</section>