@extends('components.layout')

<?php
/**
 * @var App\Models\Post $post Parameter from View
 */
?>

@section('content')
    <article>
        <h1>{{ $post->title }}</h1>
        <div>
            {!! $post->body !!}
        </div>
    </article>
    <a href="/">Go Back</a>
@endsection
