<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Eftel Informatica') }}</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <style type="text/tailwindcss">
        @theme {
            --color-clifford: #da373d;
        }
    </style>
</head>

<body>
    @section('header')
        <header class="bg-slate-800 text-white p-4">
            <h1 class="text-xl font-bold">{{ config('app.name', 'Laravel') }}</h1>
        </header>
    @show

    @yield('content')

    @section('footer')
        <footer class="bg-slate-800 text-white p-4">
            <h1 class="text-xl font-bold">{{ config('app.name', 'Laravel') }}</h1>
        </footer>
    @show
</body>

<script>
    if ('serviceWorker' in navigator) {
        window.addEventListener('load', () => {
            navigator.serviceWorker.register('/serviceworker.js')
                .then(reg => console.log('Service Worker registered:', reg))
                .catch(err => console.error('Service Worker registration failed:', err));
        });
    }
</script>

</html>
