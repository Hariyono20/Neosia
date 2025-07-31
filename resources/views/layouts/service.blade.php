<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') - Neosia</title>
     <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    @vite('resources/css/app.css')
</head>
<body>
    @include('components.navbar')
    @include('components.layanan.hero')
    @include('components.layanan.konsultasi')
    @include('components.layanan.pelatihan')
    @include('components.layanan.about-ansys')
    @include('pages.contact') 
    @include('components.footer')
</body>

</html>
