@props(['name'])

<x-form.field>
    <x-form.label name="{{ $name }}" />

    <textarea
        id="{{ $name }}"
        name="{{ $name }}"
        class="border border-gray-400 p-2 w-full"
        required
    >{{ old($name) }}</textarea>

    <x-form.error name="{{ $name }}" />
</x-form.field>
