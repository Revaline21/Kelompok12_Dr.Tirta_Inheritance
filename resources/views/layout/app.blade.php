<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css'])
</head>

<body>
    @include('partial.navbar')

    @include('partial.header')

    <main class="m-auto max-w-7xl px-4 md:px-8">
        @yield('content')
    </main>

    @include('partial.footer')
</body>
</html>