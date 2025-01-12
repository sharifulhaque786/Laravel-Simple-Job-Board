<x-layout>
    <x-slot name="title">Job Listings Page</x-slot>
    <h1 class="text-xl font-semibold text-black dark:text-white mb-10">Welcome to job listings page</h1>

    @foreach ($jobs as $job)
        <div class="bg-white dark:bg-gray-800 shadow overflow-hidden sm:rounded-lg mb-4">
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-lg font-semibold text-black dark:text-white">{{ $job['title'] }}</h3>
                <p class="mt-1 max-w prose text-gray-500 dark:text-gray-200">{{ $job['description'] }}</p>
                <a href="/jobs/{{ $job['id'] }}" class="text-blue-500 hover:text-blue-700">View Job</a>
            </div>
        </div>
    @endforeach
</x-layout>
