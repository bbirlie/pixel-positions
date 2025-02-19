<x-app-layout>
  <x-page-heading>Register</x-page-heading>

  <x-forms.form method="POST" action="/register">
    <x-forms.input label="Name" name="name"></x-forms.input>
    <x-forms.input label="Email" name="email" type="email"></x-forms.input>
    <x-forms.input label="Password" name="password" type="password"></x-forms.input>
    <x-forms.input label="Password Confirmation" name="password_confirmation" type="password"></x-forms.input>
    
    <x-forms.divider></x-forms.divider>

    <x-forms.input label="Employer Name" name="employer"></x-forms.input>

    <x-forms.button class="">Create Account</x-forms.button>
  </x-forms.form>
</x-app-layout>