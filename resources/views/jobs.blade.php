<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot>
    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                    <strong> {{ $job['title'] }} </strong> : {{ $job['salary'] }} per year.
                </a> | <a href="/contact/{{ $job['id'] }}">Contact</a>
            </li>
        @endforeach
    </ul>
</x-layout>
