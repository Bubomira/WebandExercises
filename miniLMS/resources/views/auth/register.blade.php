<x-layout>
    <h2 class="text-sky-800 font-bold text-4xl mb-5">Register</h2>
    <x-form.form action="/register" method="POST"> 

        <x-form.input name="name" required>Full name</x-form.input>
        <x-form.input name="email" type="email" required>Email</x-form.input>
        <x-form.input name="password" type="password" required>Password</x-form.input>
        <x-form.input name="password_confirmation" type="password" required>Confirm Password</x-form.input>

        <x-form.button>
            Submit
        </x-form.button>

    </x-form.form>
</x-layout>
