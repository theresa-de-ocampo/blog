@props(['comment'])

<x-panel class="bg-gray-50 border border-gray-200">
    <article class="flex space-x-4">
        <div class="flex-shrink-0">
            <img src="https://i.pravatar.cc/100?u={{ $comment->author->id }}" alt="" class="rounded-xl">
        </div>

        <div>
            <header mb-4>
                <h3 class="font-bold">{{ $comment->author->username }}</h3>
                <p class="text-xs">Posted
                    <time>{{ $comment->created_at->format('F j, Y \\a\\t g:i a') }}</time>
                </p>
            </header>
            <p>
                {{ $comment->body }}
            </p>
        </div>
    </article>
</x-panel>
