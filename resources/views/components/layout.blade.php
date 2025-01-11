<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <nav>
        <ul style="display: flex; justify-content: center; gap: 1rem; padding: 1rem;">
            <li><a href="/">Home</a></li>
            <li><a href="/about">About Us</a></li>
            <li><a href="/contact">Contact Us</a></li>
        </ul>
    </nav>
    <div class="min-h-screen flex items-center justify-center">
        <div
            class="max-w-2xl w-full p-6 bg-white rounded-lg shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] dark:bg-zinc-900 dark:text-white/50">
            {{ $slot }}
        </div>
    </div>
</body>

</html>
