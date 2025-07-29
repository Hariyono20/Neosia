<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') - Neosia</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    @vite('resources/css/app.css')
</head>
<body class="bg-transparent text-white">
    @include('components.navbar')

    @yield('content')
    @include('components.mitra')
    @include('pages.feature')
    @include('components.brand')
    @include('pages.produk')
    @include('components.gallery')




    <div class="container mx-auto py-8 px-4">
        @yield('main')
    </div>
</body>

</html>
