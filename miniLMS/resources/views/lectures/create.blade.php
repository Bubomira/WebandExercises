<x-layout>
      <h2 class="text-sky-800 font-bold text-4xl mb-5">Add Lecture</h2>
    <x-form.form action="/lectures" method="POST"> 

        <x-form.input name="title"  required>Title</x-form.input>
        <x-form.input name="description" field="textarea"  required>Description</x-form.input>
        <x-form.input name="order" type="number"  required>Order</x-form.input>
        <x-form.input name="url" required>URL</x-form.input>
        <x-form.input name="course_id" value="{{$course->id }}" type="hidden" required/>

        <x-form.button>
            Submit
        </x-form.button>

    </x-form.form>
</x-layout>
