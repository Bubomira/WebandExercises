<x-layout>
    <h2 class="text-sky-800 font-bold text-4xl mb-5">Create Course</h2>
    <x-form.form action="/courses" method="POST"> 

        <x-form.input name="title"  required>Title</x-form.input>
        <x-form.input name="description" field="textarea"  required>Description</x-form.input>

        <x-form.button>
            Submit
        </x-form.button>

    </x-form.form>
</x-layout>