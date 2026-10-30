<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Elvina Angelina</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen flex flex-col text-slate-900 dark:text-slate-50 @yield('body_class', 'bg-white dark:bg-neutral-900')">

    @php
        $links = [
            'home' => 'Home',
            'about' => 'About',
            'blog' => 'Blog',
            'contact' => 'Contact',
            'projects' => 'Projects',
        ];
    @endphp

    @include('partials.navbar')

    <main class="flex-1 max-w-7xl mx-auto w-full p-6">
        @yield('content')
    </main>

    @include('partials.footer')

</body>
</html>