<x-layout >
   <x-slot:heading>
      Login
   </x-slot:heading>

  <form method="POST" action="/login">   
   @csrf

  <div class="space-y-12">
    <div class="border-b border-gray-900/10 pb-12">

        <x-form-field>
          <x-form-label for="email">Email</x-form-label>
          <div class="mt-2">
            <x-form-input name="email" id="email" :value="old('email')" type="email" placeholder="joedoe@gmail.com" required/>
            <x-form-error name="email"/>       
          </div>
        </x-form-field>

        <x-form-field>
          <x-form-label for="password">Password</x-form-label>
          <div class="mt-2">
            <x-form-input name="password" id="password" type="password" required/>
            <x-form-error name="password"/>       
          </div>
        </x-form-field>

      </div>

    </div>
    
  <div class="mt-6 flex items-center justify-end gap-x-6">
    <a href="/" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
    <x-form-button>Login</x-form-button>
  </div>
</form>

</x-layout>