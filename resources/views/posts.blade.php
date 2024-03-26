<x-layout>
    <x-slot:heading>
        Posts Page
    </x-slot>
    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="/post/{{ $post['id'] }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                    {{ $post['title'] }}</a>
            </li>
        @endforeach
    </ul>
</x-layout>
