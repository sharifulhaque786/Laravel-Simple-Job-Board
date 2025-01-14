<x-layout>
    <x-slot name="title">Posts</x-slot>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-4">
            @foreach ($posts as $post)
                <div class="bg-white dark:bg-gray-800 shadow overflow-hidden sm:rounded-lg">
                    <div class="px-4 py-5 sm:px-6">
                        <h3 class="text-lg font-semibold text-black dark:text-white">{{ $post['title'] }}</h3>
                        <p class="mt-1 max-w prose text-gray-500 dark:text-gray-200">{{ $post['content'] }}</p>
                        <a href="/post/{{ $post['id'] }}" class="text-blue-500 hover:text-blue-700">View Post</a>
                        <p class="mt-1 text-gray-500 dark:text-gray-200">{{ $post['date'] }}</p>

                    </div>
                </div>
            @endforeach
        </div>
    </div>

</x-layout>
