<x-layout>
    <section class="px-6 py-8">
        <x-panel class="max-w-lg mx-auto">
            <form method="POST" action="/admin/posts">
                @csrf
                <div class="mb-6">
                    <label
                        for="title"
                        class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Title
                    </label>

                    <input
                        id="title"
                        type="text"
                        name="title"
                        class="border border-gray-400 p-2 w-full"
                        value="{{ old('title') }}"
                        required
                    >

                    @error('title')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label
                        for="slug"
                        class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Slug
                    </label>

                    <input
                        id="slug"
                        type="text"
                        name="slug"
                        class="border border-gray-400 p-2 w-full"
                        value="{{ old('slug') }}"
                        required
                    >

                    @error('slug')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label
                        for="excerpt"
                        class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Excerpt
                    </label>

                    <textarea
                        id="excerpt"
                        name="excerpt"
                        class="border border-gray-400 p-2 w-full"
                        required
                    >{{ old('excerpt') }}</textarea>

                    @error('excerpt')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label
                        for="body"
                        class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Body
                    </label>

                    <textarea
                        id="body"
                        name="body"
                        class="border border-gray-400 p-2 w-full"
                        required
                    >{{ old('body') }}</textarea>

                    @error('body')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label
                        for="category_id"
                        class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Category
                    </label>

                    <select id="category_id" name="category_id">
                        @foreach (\App\Models\Category::all() as $category)
                            <option
                                value="{{ $category->id }}"
                                {{ old('category_id') == $category->id ? 'selected' : '' }}
                                >
                                {{ ucwords($category->name) }}
                            </option>
                        @endforeach
                    </select>

                    @error('category')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <x-submit-button>Publish</x-submit-button>
            </form>
        </x-panel>
    </section>
</x-layout>
