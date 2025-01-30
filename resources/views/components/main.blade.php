<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>QR-WEB</title>
    <!-- Add inter font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Add Swiper CSS -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

<!-- Add Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Flickity CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.3.0/flickity.min.css" />
<!-- Flickity JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.3.0/flickity.pkgd.min.js"></script>

  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[url('https://img.freepik.com/free-photo/3d-geometric-abstract-background_1048-10381.jpg')] bg-cover bg-center bg-no-repeat min-h-screen">

    @include('Components.header')

    @yield('comtent')

    @include('Components.footer')

  
</body>
</html>
