<x-layout>
    <x-slot name="title">{{ $job['title'] }}</x-slot>
    <h1 class="text-xl font-semibold text-black dark:text-white mb-10">{{ $job['title'] }}</h1>
    <p class="max-w prose text-gray-500 dark:text-gray-200">{{ $job['description'] }}</p>
    <a href="/jobs" class="text-blue-500 hover:text-blue-700">Back to Job Listings</a>
</x-layout>
