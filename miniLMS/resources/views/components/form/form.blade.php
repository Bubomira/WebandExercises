

<form {{
    $attributes(['class'=>'flex flex-col w-[30%] py-7 px-6 space-y-10 border border-sky-700 rounded-xl',
    'method'=>'GET'])}}>
    @if ($attributes->get('method','GET')!=='GET')
        @csrf
        @method($attributes->get('method'))
    @endif

    {{ $slot }}

</form>