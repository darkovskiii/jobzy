<x-layout>
    <x-page-heading>New job</x-page-heading>
    <x-forms.form method="POST" action="/jobs">
        <x-forms.input label="Title" name="title" placeholder="CEO"></x-forms.input>
        <x-forms.input label="Salary" name="salary" placeholder="$90,000"></x-forms.input>
        <x-forms.input label="Location" name="location" placeholder="Skopje"></x-forms.input>

        <x-forms.select label="schedule" name="schedule">
            <option>Part Time</option>
            <option>Full Time</option>
        </x-forms.select>

        <x-forms.input label="URL" name="url" placeholder="https://google.com"></x-forms.input>
        <x-forms.checkbox label="Feature" name="featured"></x-forms.checkbox>

        <x-forms.divider></x-forms.divider>

        <x-forms.input label="Tags" name="tags" placeholder="laracast,random"></x-forms.input>

        <x-forms.button>Publish</x-forms.button>
    </x-forms.form>
</x-layout>
