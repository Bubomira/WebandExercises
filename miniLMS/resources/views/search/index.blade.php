<x-layout>
    <h2 class="text-sky-800 font-bold text-4xl mb-5">Search</h2>
    <x-form.form action="/search" method="POST"> 

        <x-form.input name="q" placeholder="query...."  required></x-form.input>

        <x-form.button>
            Submit
        </x-form.button>

    </x-form.form>
</x-layout>