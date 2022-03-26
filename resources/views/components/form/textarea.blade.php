@props(['name'])

<x-form.field>
    <x-form.label name="{{ $name }}" />

    <textarea
        id="{{ $name }}"
        name="{{ $name }}"
        class="border border-gray-300 p-2 w-full rounded"
        required
    >{{ old($name) }}</textarea>

    <x-form.error name="{{ $name }}" />
</x-form.field>
