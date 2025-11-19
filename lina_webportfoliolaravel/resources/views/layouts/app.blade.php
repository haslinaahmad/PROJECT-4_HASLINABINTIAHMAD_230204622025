<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Haslina Ahmad</title>

    @vite('resources/css/app.css')

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            scroll-behavior: smooth;
        }
    </style>
</head>

<body class="text-gray-800 bg-gray-50 overflow-x-hidden">

    @include('partials.header')

    <main id="page-content" class="pt-24">
        @yield('content')
    </main>

    @include('partials.footer')

</body>
</html>
