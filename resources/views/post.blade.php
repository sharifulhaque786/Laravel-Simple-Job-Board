<x-layout>
    <x-slot name="title">
        {{ $post->title }}
    </x-slot>
    <article>
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->content }}</p>
    </article>
    <a href="/posts">Go back</a>
</x-layout>
