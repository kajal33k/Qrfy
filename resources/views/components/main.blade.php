<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>QR-WEB</title>
  
  <!-- Add Inter font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  
  <!-- Add Swiper CSS -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  
  <!-- Add Swiper JS -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  
  <!-- Flickity CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.3.0/flickity.min.css" />
  
  <!-- Flickity JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.3.0/flickity.pkgd.min.js"></script>
  
  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
{{-- icon --}}
  <script src="https://unpkg.com/boxicons@2.1.3/dist/boxicons.js"></script>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body class="relative bg-cover bg-center bg-fixed " style="background-image: url('{{ asset('asset/img/bg.jpg!w700wp') }}');">

    @include('components.header')

    @yield('content')

    @include('components.footer')

</body>
</html>
