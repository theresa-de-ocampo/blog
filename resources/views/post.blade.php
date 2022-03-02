<?php
/**
 * @var App\Models\Post $post Parameter from View
 */
?>

<x-layout>
    <article>
        <h1>{{ $post->title }}</h1>

        <p>
            <a href="#">{{ $post->category->name }}</a>
        </p>

        <p>
            {{ $post->body }}
        </p>
    </article>
    <a href="/">Go Back</a>
</x-layout>
