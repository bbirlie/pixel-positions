<x-app-layout>
  <x-page-heading>New Job</x-page-heading>

  <x-forms.form method="POST" action="/jobs">
    <x-forms.input label="Title" name="title" placeholder="CEO"></x-forms.input>
    <x-forms.input label="Salary" name="salary" placeholder="90000"></x-forms.input>
    <x-forms.input label="Location" name="location" placeholder="Vancouver"></x-forms.input>

    <x-forms.select label="Schedule" name="schedule">
      <option>Part Time</option>
      <option>Full Time</option>
    </x-forms.select>

    <x-forms.checkbox label="Feature" name="featured"></x-forms.checkbox>

    <x-forms.input label="Tags (comma seperated)" name="tags" placeholder="dev, manager"></x-forms.input>

    <x-forms.button>Publish</x-forms.button>
  </x-forms.form>

</x-app-layout>