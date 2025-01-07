@extends('components.main')
@section('comtent')
    {{-- hero section --}}
    <div class="max-w-4xl mx-auto bg-[#E9E9EC] rounded-lg shadow-lg p-4 mt-4">
        <div class="bg-white shadow-md rounded-lg border border-gray-200 px-2 py-2">
            <!-- Tabs Container -->
            <div class="flex flex-wrap items-center space-x-4 overflow-x-scroll">
                <!-- Tabs -->
                <button
                    class="flex items-center px-4 py-2 rounded-md bg-blue-50 border border-blue-500 text-blue-600 font-medium">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M14 4H6a2 2 0 00-2 2v12a2 2 0 002 2h8m4-18v6m0 0L10 14m6-4H10"></path>
                    </svg>
                    URL
                </button>
                <button class="flex items-center px-4 py-2 rounded-md hover:bg-gray-100 text-gray-600 font-medium">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                    Text
                </button>
                <button class="flex items-center px-4 py-2 rounded-md hover:bg-gray-100 text-gray-600 font-medium">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 2h6a2 2 0 012 2v16a2 2 0 01-2 2H9a2 2 0 01-2-2V4a2 2 0 012-2z"></path>
                    </svg>
                    PDF
                </button>
                <button class="flex items-center px-4 py-2 rounded-md hover:bg-gray-100 text-gray-600 font-medium">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 4h16v16H4z"></path>
                    </svg>
                    Images
                </button>
                <button class="flex items-center px-4 py-2 rounded-md hover:bg-gray-100 text-gray-600 font-medium">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 4.354a8.001 8.001 0 017.657 4.67m-15.314 0A8.003 8.003 0 0112 4.354m0 0a8.001 8.001 0 00-7.657 4.67m15.314 0A8.003 8.003 0 0112 4.354">
                        </path>
                    </svg>
                    vCard Plus
                </button>
                <button class="flex items-center px-4 py-2 rounded-md hover:bg-gray-100 text-gray-600 font-medium">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15 10l4.553-3.342A1 1 0 0121 7.5v9a1 1 0 01-1.447.866L15 14m0 0l-4.553 3.342A1 1 0 019 16.5v-9a1 1 0 011.447-.866L15 10z">
                        </path>
                    </svg>
                    Video
                </button>
            </div>
        </div>

        <!-- Content -->
        <div class="grid md:grid-cols-2 gap-8 bg-white mt-4 px-4 py-6">
            <!-- Left Column -->
            <div class="space-y-8">
                <!-- Step 1 -->
                <div>
                    <div class="flex items-center gap-3 mb-4">
                        <span
                            class="w-6 h-6 rounded-full bg-[#626463] text-white flex items-center justify-center text-sm">1</span>
                        <h2 class="text-xl font-semibold text-gray-800">Complete the content</h2>
                    </div>
                    <label class="block">
                        <span class="text-gray-700">Website URL</span>
                        <input type="url" placeholder="E.g. https://www.myweb.com/"
                            class="mt-1 block w-56 md:w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 p-2 border">
                    </label>
                </div>

                <!-- Step 2 -->
                <div>
                    <div class="flex items-center gap-3 mb-4">
                        <span
                            class="w-6 h-6 rounded-full bg-[#626463] text-white flex items-center justify-center text-sm">2</span>
                        <h2 class="text-xl font-semibold text-gray-800">Design your QR</h2>
                    </div>
                    <div class="flex md:space-x-4 mb-6">
                        <button
                            class="px-4 py-2 text-sm font-medium text-blue-600 border-b-2 border-blue-600">Frame</button>
                        <button class="px-4 py-2 text-sm font-medium text-gray-500">Shape</button>
                        <button class="px-4 py-2 text-sm font-medium text-gray-500">Logo</button>
                        <button class="px-4 py-2 text-sm font-medium text-gray-500">Level</button>
                    </div>
                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
                        <div class="border rounded-lg p-4 cursor-pointer bg-blue-50 border-blue-500">
                            <img src="/api/placeholder/48/48" alt="Basic QR" class="w-12 h-12 mx-auto" />
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column -->
            <div>
                <div class="h-full w-56 md:w-full bg-[#E9E9EC] border rounded-lg md:p-6 p-2 text-center">
                    <div class="flex items-center gap-3 mb-4">
                        <span
                            class="w-6 h-6 rounded-full bg-[#626463] text-white flex items-center justify-center text-sm">3</span>
                        <h2 class="text-xl font-semibold text-gray-800">Download your QR</h2>
                    </div>
                    <img src="{{ asset('asset/img/qr.jpg') }}" alt="QR Code Preview" class="mx-auto mb-6 h-28 w-28">
                    <button
                        class="border border-blue-600 text-[#626463] px-6 py-2 rounded-lg flex items-center gap-2 mx-auto">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                        </svg>
                        Download QR
                    </button>
                </div>
            </div>
        </div>
    </div>
    {{--  create account --}}
    <div class="flex flex-col lg:flex-row items-center justify-between p-8 bg-[#F0F0FF] rounded-lg space-y-6 lg:space-y-0 lg:space-x-8 max-w-4xl mx-auto">
        <!-- Logo Section -->
        <div class="flex-shrink-0">
            <!-- Example logo (you can replace it with the actual image) -->
            <p class="text-2xl font-bold text-gray-800">Google</p>
        </div>
    
        <!-- Trusted Text -->
        <div class="text-xl font-semibold text-gray-700 text-center lg:text-left">
            Trusted by more than <span class="text-blue-500">12,607 people</span>
        </div>
    
        <!-- Button Section -->
        <div>
            <button class="px-8 py-3 text-white bg-blue-600 rounded-lg hover:bg-blue-700 transition-colors">
                Create your free account
            </button>
        </div>
    
        <!-- No Credit Card Text -->
        <div class="text-sm text-gray-500 text-center lg:text-left">
            No credit card required on Signup
        </div>
    </div>
    

    {{-- text --}}
    <div class="flex flex-col items-center p-8 rounded-lg shadow-lg bg-white max-w-4xl mx-auto space-y-6">
        <!-- Title -->
        <h1 class="text-4xl font-extrabold text-gray-800 text-center">
            QR Code Generator: Create Your Free QR Code
        </h1>
    
        <!-- Subtitle -->
        <p class="text-lg text-gray-600 text-center max-w-prose mx-auto">
            Customize it with your <span class="text-blue-600 font-medium">color</span>,
            <span class="text-blue-600 font-medium">shape</span>, and
            <span class="text-blue-600 font-medium">logo</span> in 3 simple steps.
        </p>
    </div>
    

    <div class="min-h-screen bg-gray-50 p-8">
        <div class="max-w-4xl mx-auto">
            <!-- Header -->
            <h1 class="text-4xl font-bold text-center mb-12">How to create a QR code?</h1>
    
            <!-- Steps -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Step 1 -->
                <div class="p-6 bg-white rounded-lg shadow-sm">
                    <div class="flex items-center mb-4">
                        <div class="w-8 h-8 rounded-full bg-purple-950 text-white flex items-center justify-center font-bold">
                            1
                        </div>
                    </div>
                    <h2 class="text-xl font-semibold mb-3">Choose the content of your QR code</h2>
                    <p class="text-gray-600 mb-4">
                        Select from a wide variety of options: PDF, menu, video, business cards, web, apps, etc.
                    </p>
                </div>
    
                <!-- Step 2 -->
                <div class="p-6 bg-white rounded-lg shadow-sm">
                    <div class="flex items-center mb-4">
                        <div class="w-8 h-8 rounded-full bg-purple-950 text-white flex items-center justify-center font-bold">
                            2
                        </div>
                    </div>
                    <h2 class="text-xl font-semibold mb-3">Customize and design it to measure</h2>
                    <p class="text-gray-600 mb-4">
                        Fill in all the information and use our design tool to make your QR unique.
                    </p>
                </div>
    
                <!-- Step 3 -->
                <div class="p-6 bg-white rounded-lg shadow-sm">
                    <div class="flex items-center mb-4">
                        <div class="w-8 h-8 rounded-full bg-purple-950 text-white flex items-center justify-center font-bold">
                            3
                        </div>
                    </div>
                    <h2 class="text-xl font-semibold mb-3">Download your QR code</h2>
                    <p class="text-gray-600 mb-4">
                        Get your QR code in different formats (pdf, png, svg), print it or show it in a digital format and voilà!
                    </p>
                </div>
            </div>
    
            <!-- Create QR Button -->
            <div class="mt-8 flex justify-center">
                <button class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-2 rounded-full text-lg">
                    Create QR code
                </button>
            </div>
        </div>
    </div>
    

    {{-- ::::::::::::::SLIDER::::::::::::::::: --}}
    <div class="max-w-7xl mx-auto md:px-36 md:py-6">
        <!-- Tailwind CSS Slider -->
        <div class="relative">
            <div class="overflow-hidden">
                <div class="flex transition-transform duration-500 ease-in-out space-x-8" id="slider-items">
                    <!-- Slide 1 -->
                    <div id="landing" class="flex-shrink-0 flex flex-col items-center space-y-2 bg-white shadow-md p-4 rounded-lg">
                        <div class="w-14 h-14 flex items-center justify-center bg-gray-100 rounded-full">
                            <img src="https://via.placeholder.com/40" alt="Landing page icon" />
                        </div>
                        <span class="text-sm font-medium text-gray-700">Landing page</span>
                    </div>
                    <!-- Slide 2 -->
                    <div id="event" class="flex-shrink-0 flex flex-col items-center space-y-2 bg-white shadow-md p-4 rounded-lg">
                        <div class="w-14 h-14 flex items-center justify-center bg-gray-100 rounded-full">
                            <img src="https://via.placeholder.com/40" alt="Event icon" />
                        </div>
                        <span class="text-sm font-medium text-blue-600">Event</span>
                    </div>
                    <!-- Slide 1 -->
                    <div id="slide3" class="flex-shrink-0 flex flex-col items-center space-y-2 bg-white shadow-md p-4 rounded-lg">
                        <div class="w-14 h-14 flex items-center justify-center bg-gray-100 rounded-full">
                            <img src="https://via.placeholder.com/40" alt="Landing page icon" />
                        </div>
                        <span class="text-sm font-medium text-gray-700">Landing page</span>
                    </div>
                    <!-- Slide 2 -->
                    <div id="slide4" class="flex-shrink-0 flex flex-col items-center space-y-2 bg-white shadow-md p-4 rounded-lg">
                        <div class="w-14 h-14 flex items-center justify-center bg-gray-100 rounded-full">
                            <img src="https://via.placeholder.com/40" alt="Event icon" />
                        </div>
                        <span class="text-sm font-medium text-blue-600">Event</span>
                    </div>
                    <!-- Slide 1 -->
                    <div id="slide4" class="flex-shrink-0 flex flex-col items-center space-y-2 bg-white shadow-md p-4 rounded-lg">
                        <div class="w-14 h-14 flex items-center justify-center bg-gray-100 rounded-full">
                            <img src="https://via.placeholder.com/40" alt="Landing page icon" />
                        </div>
                        <span class="text-sm font-medium text-gray-700">Landing page</span>
                    </div>
                    <!-- Slide 2 -->
                    <div id="slide5" class="flex-shrink-0 flex flex-col items-center space-y-2 bg-white shadow-md p-4 rounded-lg">
                        <div class="w-14 h-14 flex items-center justify-center bg-gray-100 rounded-full">
                            <img src="https://via.placeholder.com/40" alt="Event icon" />
                        </div>
                        <span class="text-sm font-medium text-blue-600">Event</span>
                    </div>
                    <!-- Slide 1 -->
                    <div  id="slide6" class="flex-shrink-0 flex flex-col items-center space-y-2 bg-white shadow-md p-4 rounded-lg">
                        <div class="w-14 h-14 flex items-center justify-center bg-gray-100 rounded-full">
                            <img src="https://via.placeholder.com/40" alt="Landing page icon" />
                        </div>
                        <span class="text-sm font-medium text-gray-700">Landing page</span>
                    </div>
                    <!-- Slide 2 -->
                    <div class="flex-shrink-0 flex flex-col items-center space-y-2 bg-white shadow-md p-4 rounded-lg">
                        <div class="w-14 h-14 flex items-center justify-center bg-gray-100 rounded-full">
                            <img src="https://via.placeholder.com/40" alt="Event icon" />
                        </div>
                        <span class="text-sm font-medium text-blue-600">Event</span>
                    </div>
                    <!-- Slide 1 -->
                    <div class="flex-shrink-0 flex flex-col items-center space-y-2 bg-white shadow-md p-4 rounded-lg">
                        <div class="w-14 h-14 flex items-center justify-center bg-gray-100 rounded-full">
                            <img src="https://via.placeholder.com/40" alt="Landing page icon" />
                        </div>
                        <span class="text-sm font-medium text-gray-700">Landing page</span>
                    </div>
                    <!-- Slide 2 -->
                    <div class="flex-shrink-0 flex flex-col items-center space-y-2 bg-white shadow-md p-4 rounded-lg">
                        <div class="w-14 h-14 flex items-center justify-center bg-gray-100 rounded-full">
                            <img src="https://via.placeholder.com/40" alt="Event icon" />
                        </div>
                        <span class="text-sm font-medium text-blue-600">Event</span>
                    </div>
                    <!-- Slide 1 -->
                    <div class="flex-shrink-0 flex flex-col items-center space-y-2 bg-white shadow-md p-4 rounded-lg">
                        <div class="w-14 h-14 flex items-center justify-center bg-gray-100 rounded-full">
                            <img src="https://via.placeholder.com/40" alt="Landing page icon" />
                        </div>
                        <span class="text-sm font-medium text-gray-700">Landing page</span>
                    </div>
                    <!-- Slide 2 -->
                    <div class="flex-shrink-0 flex flex-col items-center space-y-2 bg-white shadow-md p-4 rounded-lg">
                        <div class="w-14 h-14 flex items-center justify-center bg-gray-100 rounded-full">
                            <img src="https://via.placeholder.com/40" alt="Event icon" />
                        </div>
                        <span class="text-sm font-medium text-blue-600">Event</span>
                    </div>

                    <!-- Slide 3 -->
                    <div class="flex-shrink-0 flex flex-col items-center space-y-2 bg-white shadow-md p-4 rounded-lg">
                        <div class="w-14 h-14 flex items-center justify-center bg-gray-100 rounded-full">
                            <img src="https://via.placeholder.com/40" alt="vCard icon" />
                        </div>
                        <span class="text-sm font-medium text-gray-700">vCard</span>
                    </div>
                    <!-- Slide 4 -->
                    <div class="flex-shrink-0 flex flex-col items-center space-y-2 bg-white shadow-md p-4 rounded-lg">
                        <div class="w-14 h-14 flex items-center justify-center bg-gray-100 rounded-full">
                            <img src="https://via.placeholder.com/40" alt="Feedback icon" />
                        </div>
                        <span class="text-sm font-medium text-gray-700">Feedback</span>
                    </div>
                </div>
            </div>

            <!-- Next/Prev buttons -->
            <button id="prev"
                class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full shadow-lg">
                &#10094;
            </button>
            <button id="next"
                class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full shadow-lg">
                &#10095;
            </button>
        </div>
    </div>

    <script>
        const slider = document.getElementById('slider-items');
        const prevButton = document.getElementById('prev');
        const nextButton = document.getElementById('next');
        const slides = document.querySelectorAll('.flex-shrink-0');
        let currentIndex = 0;

        const updateSliderPosition = () => {
            const slideWidth = slides[0].offsetWidth + 20; // Slide width + margin
            slider.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
        };

        prevButton.addEventListener('click', () => {
            if (currentIndex > 0) {
                currentIndex--;
            } else {
                currentIndex = slides.length - 1; // Loop to last slide
            }
            updateSliderPosition();
        });

        nextButton.addEventListener('click', () => {
            if (currentIndex < slides.length - 1) {
                currentIndex++;
            } else {
                currentIndex = 0; // Loop to first slide
            }
            updateSliderPosition();
        });
    </script>


    <div class="max-w-6xl mx-auto md:px-36 md:py-8">
        <div class="swiper">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                    <!-- Left Content -->
                    <div class="space-y-6">
                        <h1 class="text-4xl font-bold text-gray-900 m-2">Event</h1>
                        <p class="text-gray-600 leading-relaxed m-2">
                            Wow your guests with a dynamic invitation. Include images that will leave them excited, and
                            don't forget to add the date, time, and location so that no one misses your party.
                        </p>
                        <button class="bg-blue-600 m-2  text-white px-8 py-3 rounded-lg hover:bg-blue-700 transition-colors">
                            Generate QR Code for Event
                        </button>
                    </div>
                    <!-- Phone Mockup -->
                    <div class="relative">
                        <div
                            class="w-[280px] h-[560px] mx-auto border-8 border-black rounded-[3rem] relative overflow-hidden bg-white shadow-lg">
                            <div class="absolute inset-0 p-6 flex flex-col items-center">
                                <!-- Image -->
                                <img src="https://via.placeholder.com/240x160" alt="Event Image"
                                    class="rounded-lg mb-4 w-full h-48 object-cover" />
                                <!-- Event Details -->
                                <h2 class="text-lg font-semibold mb-2 text-center">Andy & Carol</h2>
                                <p class="text-sm text-gray-600 text-center mb-6">
                                    Queremos invitarlos a nuestra boda y disfrutar juntos de un día muy especial.
                                </p>
                                <button
                                    class="bg-yellow-500 text-black px-6 py-2 rounded-lg font-semibold mb-6 hover:bg-yellow-600">
                                    Confirm assistance
                                </button>
                                <!-- Schedule Info -->
                                <div class="w-full border-t border-gray-300 pt-4">
                                    <div class="flex items-center justify-between text-sm mb-3">
                                        <span class="flex items-center space-x-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M8 7V3m8 4V3M3 9h18M5 19h14M10 15l2 2 4-4" />
                                            </svg>
                                            <span>When</span>
                                        </span>
                                        <span>Saturday, October 19, 2025</span>
                                    </div>
                                    <div class="flex items-center justify-between text-sm">
                                        <span class="flex items-center space-x-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M12 8v4l3 3m6-1a9 9 0 11-10.9-13.9" />
                                            </svg>
                                            <span>Schedule</span>
                                        </span>
                                        <span>All day</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- slide2 --}}
                <div href="#event" class="swiper-slide grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                    <!-- Left Content -->
                    <div class="space-y-6">
                        <h1 class="text-4xl font-bold text-gray-900">mail</h1>
                        <p class="text-gray-600 leading-relaxed">
                            Wow your guests with a dynamic invitation. Include images that will leave them excited, and
                            don't forget to add the date, time, and location so that no one misses your party.
                        </p>
                        <button class="bg-blue-600 text-white px-8 py-3 rounded-lg hover:bg-blue-700 transition-colors">
                            Generate QR Code for Event
                        </button>
                    </div>
                    <!-- Phone Mockup -->
                    <div class="relative">
                        <div
                            class="w-[280px] h-[560px] mx-auto border-8 border-black rounded-[3rem] relative overflow-hidden bg-white shadow-lg">
                            <div class="absolute inset-0 p-6 flex flex-col items-center">
                                <!-- Image -->
                                <img src="https://via.placeholder.com/240x160" alt="Event Image"
                                    class="rounded-lg mb-4 w-full h-48 object-cover" />
                                <!-- Event Details -->
                                <h2 class="text-lg font-semibold mb-2 text-center">Andy & Carol</h2>
                                <p class="text-sm text-gray-600 text-center mb-6">
                                    Queremos invitarlos a nuestra boda y disfrutar juntos de un día muy especial.
                                </p>
                                <button
                                    class="bg-yellow-500 text-black px-6 py-2 rounded-lg font-semibold mb-6 hover:bg-yellow-600">
                                    Confirm assistance
                                </button>
                                <!-- Schedule Info -->
                                <div class="w-full border-t border-gray-300 pt-4">
                                    <div class="flex items-center justify-between text-sm mb-3">
                                        <span class="flex items-center space-x-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M8 7V3m8 4V3M3 9h18M5 19h14M10 15l2 2 4-4" />
                                            </svg>
                                            <span>When</span>
                                        </span>
                                        <span>Saturday, October 19, 2025</span>
                                    </div>
                                    <div class="flex items-center justify-between text-sm">
                                        <span class="flex items-center space-x-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M12 8v4l3 3m6-1a9 9 0 11-10.9-13.9" />
                                            </svg>
                                            <span>Schedule</span>
                                        </span>
                                        <span>All day</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- slide3 --}}
                <div href="#slide3" class="swiper-slide grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                    <!-- Left Content -->
                    <div class="space-y-6">
                        <h1 class="text-4xl font-bold text-gray-900">Event</h1>
                        <p class="text-gray-600 leading-relaxed">
                            Wow your guests with a dynamic invitation. Include images that will leave them excited, and
                            don't forget to add the date, time, and location so that no one misses your party.
                        </p>
                        <button class="bg-blue-600 text-white px-8 py-3 rounded-lg hover:bg-blue-700 transition-colors">
                            Generate QR Code for Event
                        </button>
                    </div>
                    <!-- Phone Mockup -->
                    <div class="relative">
                        <div
                            class="w-[280px] h-[560px] mx-auto border-8 border-black rounded-[3rem] relative overflow-hidden bg-white shadow-lg">
                            <div class="absolute inset-0 p-6 flex flex-col items-center">
                                <!-- Image -->
                                <img src="https://via.placeholder.com/240x160" alt="Event Image"
                                    class="rounded-lg mb-4 w-full h-48 object-cover" />
                                <!-- Event Details -->
                                <h2 class="text-lg font-semibold mb-2 text-center">Andy & Carol</h2>
                                <p class="text-sm text-gray-600 text-center mb-6">
                                    Queremos invitarlos a nuestra boda y disfrutar juntos de un día muy especial.
                                </p>
                                <button
                                    class="bg-yellow-500 text-black px-6 py-2 rounded-lg font-semibold mb-6 hover:bg-yellow-600">
                                    Confirm assistance
                                </button>
                                <!-- Schedule Info -->
                                <div class="w-full border-t border-gray-300 pt-4">
                                    <div class="flex items-center justify-between text-sm mb-3">
                                        <span class="flex items-center space-x-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M8 7V3m8 4V3M3 9h18M5 19h14M10 15l2 2 4-4" />
                                            </svg>
                                            <span>When</span>
                                        </span>
                                        <span>Saturday, October 19, 2025</span>
                                    </div>
                                    <div class="flex items-center justify-between text-sm">
                                        <span class="flex items-center space-x-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M12 8v4l3 3m6-1a9 9 0 11-10.9-13.9" />
                                            </svg>
                                            <span>Schedule</span>
                                        </span>
                                        <span>All day</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- slide4 --}}
                <div href="#slide3" class="swiper-slide grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                    <!-- Left Content -->
                    <div class="space-y-6">
                        <h1 class="text-4xl font-bold text-gray-900">Event</h1>
                        <p class="text-gray-600 leading-relaxed">
                            Wow your guests with a dynamic invitation. Include images that will leave them excited, and
                            don't forget to add the date, time, and location so that no one misses your party.
                        </p>
                        <button class="bg-blue-600 text-white px-8 py-3 rounded-lg hover:bg-blue-700 transition-colors">
                            Generate QR Code for Event
                        </button>
                    </div>
                    <!-- Phone Mockup -->
                    <div class="relative">
                        <div
                            class="w-[280px] h-[560px] mx-auto border-8 border-black rounded-[3rem] relative overflow-hidden bg-white shadow-lg">
                            <div class="absolute inset-0 p-6 flex flex-col items-center">
                                <!-- Image -->
                                <img src="https://via.placeholder.com/240x160" alt="Event Image"
                                    class="rounded-lg mb-4 w-full h-48 object-cover" />
                                <!-- Event Details -->
                                <h2 class="text-lg font-semibold mb-2 text-center">Andy & Carol</h2>
                                <p class="text-sm text-gray-600 text-center mb-6">
                                    Queremos invitarlos a nuestra boda y disfrutar juntos de un día muy especial.
                                </p>
                                <button
                                    class="bg-yellow-500 text-black px-6 py-2 rounded-lg font-semibold mb-6 hover:bg-yellow-600">
                                    Confirm assistance
                                </button>
                                <!-- Schedule Info -->
                                <div class="w-full border-t border-gray-300 pt-4">
                                    <div class="flex items-center justify-between text-sm mb-3">
                                        <span class="flex items-center space-x-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M8 7V3m8 4V3M3 9h18M5 19h14M10 15l2 2 4-4" />
                                            </svg>
                                            <span>When</span>
                                        </span>
                                        <span>Saturday, October 19, 2025</span>
                                    </div>
                                    <div class="flex items-center justify-between text-sm">
                                        <span class="flex items-center space-x-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M12 8v4l3 3m6-1a9 9 0 11-10.9-13.9" />
                                            </svg>
                                            <span>Schedule</span>
                                        </span>
                                        <span>All day</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- slide5 --}}
                <div href="#slide3" class="swiper-slide grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                    <!-- Left Content -->
                    <div class="space-y-6">
                        <h1 class="text-4xl font-bold text-gray-900">Event</h1>
                        <p class="text-gray-600 leading-relaxed">
                            Wow your guests with a dynamic invitation. Include images that will leave them excited, and
                            don't forget to add the date, time, and location so that no one misses your party.
                        </p>
                        <button class="bg-blue-600 text-white px-8 py-3 rounded-lg hover:bg-blue-700 transition-colors">
                            Generate QR Code for Event
                        </button>
                    </div>
                    <!-- Phone Mockup -->
                    <div class="relative">
                        <div
                            class="w-[280px] h-[560px] mx-auto border-8 border-black rounded-[3rem] relative overflow-hidden bg-white shadow-lg">
                            <div class="absolute inset-0 p-6 flex flex-col items-center">
                                <!-- Image -->
                                <img src="https://via.placeholder.com/240x160" alt="Event Image"
                                    class="rounded-lg mb-4 w-full h-48 object-cover" />
                                <!-- Event Details -->
                                <h2 class="text-lg font-semibold mb-2 text-center">Andy & Carol</h2>
                                <p class="text-sm text-gray-600 text-center mb-6">
                                    Queremos invitarlos a nuestra boda y disfrutar juntos de un día muy especial.
                                </p>
                                <button
                                    class="bg-yellow-500 text-black px-6 py-2 rounded-lg font-semibold mb-6 hover:bg-yellow-600">
                                    Confirm assistance
                                </button>
                                <!-- Schedule Info -->
                                <div class="w-full border-t border-gray-300 pt-4">
                                    <div class="flex items-center justify-between text-sm mb-3">
                                        <span class="flex items-center space-x-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M8 7V3m8 4V3M3 9h18M5 19h14M10 15l2 2 4-4" />
                                            </svg>
                                            <span>When</span>
                                        </span>
                                        <span>Saturday, October 19, 2025</span>
                                    </div>
                                    <div class="flex items-center justify-between text-sm">
                                        <span class="flex items-center space-x-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M12 8v4l3 3m6-1a9 9 0 11-10.9-13.9" />
                                            </svg>
                                            <span>Schedule</span>
                                        </span>
                                        <span>All day</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add more slides by copying the structure above -->
            </div>
            <!-- Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Navigation Buttons -->
            {{-- <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div> --}}
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const swiper = new Swiper('.swiper', {
                loop: true, // Infinite loop
                slidesPerView: 1, // Show one slide at a time
                spaceBetween: 20, // Space between slides
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
            });
        });
    </script>



    <!-- grid Section -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <h1 class="text-4xl md:text-5xl font-bold text-center text-gray-900 mb-16">
          Your all-in-one marketing platform
        </h1>
        <div class="max-w-7xl mx-auto p-6">
          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            
            <!-- Feature 1: Editing and management of QRs -->
            <div class="p-6 space-y-2 hover:shadow-lg transition-shadow bg-white rounded-lg">
              <div class="flex items-center space-x-3">
                <div class="bg-purple-100 p-2 rounded-lg">
                  <!-- QrCode Icon -->
                  <svg class="w-5 h-5 text-purple-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M12 8V4m0 12v-4m4 0H8m8 0l-4 4m4-4l-4-4" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                  </svg>
                </div>
                <h3 class="font-semibold text-lg">Editing and management of QRs</h3>
              </div>
              <p class="text-gray-600">Customize and organize your QRs.</p>
            </div>
      
            <!-- Feature 2: Dynamic QR Codes -->
            <div class="p-6 space-y-2 hover:shadow-lg transition-shadow bg-white rounded-lg">
              <div class="flex items-center space-x-3">
                <div class="bg-purple-100 p-2 rounded-lg">
                  <!-- Code Icon -->
                  <svg class="w-5 h-5 text-purple-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M9 6H7a2 2 0 00-2 2v12a2 2 0 002 2h14a2 2 0 002-2V10a2 2 0 00-2-2h-6M9 6V4a2 2 0 012-2h6a2 2 0 012 2v2M9 6H7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                  </svg>
                </div>
                <h3 class="font-semibold text-lg">Dynamic QR Codes</h3>
              </div>
              <p class="text-gray-600">QR codes that can be updated in real time</p>
            </div>
      
            <!-- Feature 3: Unlimited Contributing Users -->
            <div class="p-6 space-y-2 hover:shadow-lg transition-shadow bg-white rounded-lg">
              <div class="flex items-center space-x-3">
                <div class="bg-purple-100 p-2 rounded-lg">
                  <!-- Users Icon -->
                  <svg class="w-5 h-5 text-purple-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M8 7a4 4 0 118 0 4 4 0 01-8 0zM4 14a4 4 0 018 0h4a4 4 0 014 4v2H4v-2a4 4 0 010-4z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                  </svg>
                </div>
                <h3 class="font-semibold text-lg">Unlimited Contributing Users</h3>
              </div>
              <p class="text-gray-600">Manage your QR codes as a team</p>
            </div>
      
            <!-- Feature 4: Variety of download formats -->
            <div class="p-6 space-y-2 hover:shadow-lg transition-shadow bg-white rounded-lg">
              <div class="flex items-center space-x-3">
                <div class="bg-purple-100 p-2 rounded-lg">
                  <!-- Download Icon -->
                  <svg class="w-5 h-5 text-purple-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M4 4v16h16V4H4zm16 12H4V6h16v10z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                  </svg>
                </div>
                <h3 class="font-semibold text-lg">Variety of download formats</h3>
              </div>
              <p class="text-gray-600">Expand the possibilities of use of your QRs</p>
            </div>
      
            <!-- Feature 5: Templates -->
            <div class="p-6 space-y-2 hover:shadow-lg transition-shadow bg-white rounded-lg">
              <div class="flex items-center space-x-3">
                <div class="bg-purple-100 p-2 rounded-lg">
                  <!-- Template Icon -->
                  <svg class="w-5 h-5 text-purple-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M19 4H5v16h14V4zM7 4v16h10V4H7z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                  </svg>
                </div>
                <h3 class="font-semibold text-lg">Templates</h3>
              </div>
              <p class="text-gray-600">Save and reuse your own designs</p>
            </div>
      
            <!-- Feature 6: Static QR -->
            <div class="p-6 space-y-2 hover:shadow-lg transition-shadow bg-white rounded-lg">
              <div class="flex items-center space-x-3">
                <div class="bg-purple-100 p-2 rounded-lg">
                  <!-- QrCode Icon -->
                  <svg class="w-5 h-5 text-purple-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M12 8V4m0 12v-4m4 0H8m8 0l-4 4m4-4l-4-4" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                  </svg>
                </div>
                <h3 class="font-semibold text-lg">Static QR</h3>
              </div>
              <p class="text-gray-600">Permanent QR codes</p>
            </div>
      
            <!-- Feature 7: Custom Domain -->
            <div class="p-6 space-y-2 hover:shadow-lg transition-shadow bg-white rounded-lg">
              <div class="flex items-center space-x-3">
                <div class="bg-purple-100 p-2 rounded-lg">
                  <!-- Globe Icon -->
                  <svg class="w-5 h-5 text-purple-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M15 10c0 2.1-.5 4-1.5 5.5L18 18V6l-4.5 2.5c1-.5 1.5-2 1.5-3.5z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                  </svg>
                </div>
                <h3 class="font-semibold text-lg">Custom Domain</h3>
              </div>
              <p class="text-gray-600">Strengthen your brand with your own domain</p>
            </div>
      
            <!-- Feature 8: Password access protection -->
            <div class="p-6 space-y-2 hover:shadow-lg transition-shadow bg-white rounded-lg">
              <div class="flex items-center space-x-3">
                <div class="bg-purple-100 p-2 rounded-lg">
                  <!-- Lock Icon -->
                  <svg class="w-5 h-5 text-purple-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M12 6V4a2 2 0 012-2h6a2 2 0 012 2v2m-8 0V4m-4 0h8m-8 0H4a2 2 0 00-2 2v12a2 2 0 002 2h16a2 2 0 002-2V6a2 2 0 00-2-2h-4m0 12V8m0 4h-4m4 0V6h4m0 4v2" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                  </svg>
                </div>
                <h3 class="font-semibold text-lg">Password access protection</h3>
              </div>
              <p class="text-gray-600">Secure your QR codes with password protection</p>
            </div>
      
            <!-- Feature 9: Complete analytics -->
            <div class="p-6 space-y-2 hover:shadow-lg transition-shadow bg-white rounded-lg">
              <div class="flex items-center space-x-3">
                <div class="bg-purple-100 p-2 rounded-lg">
                  <!-- BarChart3 Icon -->
                  <svg class="w-5 h-5 text-purple-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M12 6v6m6-6v12m-6-6h6M6 6h6M6 6v12m0-12v12" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                  </svg>
                </div>
                <h3 class="font-semibold text-lg">Complete analytics</h3>
              </div>
              <p class="text-gray-600">Understand performance with detailed data</p>
            </div>
      
            <!-- Feature 10: Event tracking -->
            <div class="p-6 space-y-2 hover:shadow-lg transition-shadow bg-white rounded-lg">
              <div class="flex items-center space-x-3">
                <div class="bg-purple-100 p-2 rounded-lg">
                  <!-- Activity Icon -->
                  <svg class="w-5 h-5 text-purple-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M19 13l-4-4m0 0l-4 4m4-4v8" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                  </svg>
                </div>
                <h3 class="font-semibold text-lg">Event tracking</h3>
              </div>
              <p class="text-gray-600">Monitor QR code usage and engagement</p>
            </div>
      
          </div>
        </div>
    </main>
      


{{-- slider --}}
    <div>
        <div class=" p-4 md:p-8 flex items-center md:space-x-6 mx-4 md:mx-32">

            <div>
                <h2 class="text-sm font-semibold text-blue-700">QR Codes on</h2>
                <p class="text-lg text-gray-700 mt-2 font-medium">
                    Discover how to use QR codes to boost your marketing strategy. They are a great tool for engaging
                    customers, sharing promotions, and enhancing user experience with easy-to-scan links and content.
                </p>
            </div>
        </div>


        {{-- slider --}}

        <div class="w-full relative ">
            <div class="swiper-slider2 multiple-slide-carousel swiper-container relative mx-4 md:mx-32 overflow-hidden">
                <div class="swiper-wrapper mb-16">
                    <div class="swiper-slide">

                        <div class="flex flex-col items-center p-6 bg-gray-100 rounded-lg">
                            <img src="{{ asset('asset/img/slide2') }}" alt="Image Description"
                                class="w-32 h-32 object-cover rounded-lg mr-6">
                            <p class="text-lg text-gray-700 px-8">
                                This is a description of the image. You can add any content you'd like here to explain the
                                image or provide additional information.
                            </p>
                        </div>


                    </div>
                    <div class="swiper-slide">
                        <div class="flex flex-col items-center p-6 bg-gray-100 rounded-lg">
                            <img src="{{ asset('asset/img/slide2') }}" alt="Image Description"
                                class="w-32 h-32 object-cover rounded-lg mr-6">
                            <p class="text-lg text-gray-700 px-8">
                                This is a description of the image. You can add any content you'd like here to explain the
                                image or provide additional information.
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex flex-col items-center p-6 bg-gray-100 rounded-lg">
                            <img src="{{ asset('asset/img/slide2') }}" alt="Image Description"
                                class="w-32 h-32 object-cover rounded-lg mr-6">
                            <p class="text-lg text-gray-700 px-8">
                                This is a description of the image. You can add any content you'd like here to explain the
                                image or provide additional information.
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex flex-col items-center p-6 bg-gray-100 rounded-lg">
                            <img src="{{ asset('asset/img/slide2') }}" alt="Image Description"
                                class="w-32 h-32 object-cover rounded-lg mr-6">
                            <p class="text-lg text-gray-700 px-8">
                                This is a description of the image. You can add any content you'd like here to explain the
                                image or provide additional information.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="relative flex justify-between items-center">
                    <!-- Left side (Arrow Buttons) -->
                    <div class="absolute flex justify-start items-center left-0 bottom-12">
                        <button id="slider-button-left2"
                            class="swiper-button-prev group !p-2 flex justify-center items-center !w-12 !h-12 transition-all duration-500 rounded-full !-translate-x-18"
                            data-carousel-prev>
                            <!-- Left Arrow Icon or SVG can be added here -->
                        </button>
                        <button id="slider-button-right2"
                            class="swiper-button-next group !p-2 flex justify-center items-center !w-12 !h-12 transition-all duration-500 rounded-full !translate-x-24"
                            data-carousel-next>
                            <!-- Right Arrow Icon or SVG can be added here -->
                        </button>
                    </div>

                    <!-- Right side (See More Button) -->
                    <div class="absolute flex justify-end right-0 bottom-12 mt-4">
                        <button class="px-4 py-2 bg-blue-500 text-white rounded-full hover:bg-blue-600 transition-all">See
                            more</button>
                    </div>
                </div>



            </div>
        </div>

        <style>
            .swiper-slider2 .swiper-wrapper {
                width: 100%;
                height: max-content !important;
                padding-bottom: 64px !important;
                -webkit-transition-timing-function: linear !important;
                transition-timing-function: linear !important;
                position: relative;
            }
        </style>

        <script>
            var swiper = new Swiper(".swiper-slider2", {
                loop: true,
             
                navigation: {
                    nextEl: ".swiper-slider2 .swiper-button-next",
                    prevEl: ".swiper-slider2 .swiper-button-prev",
                },
                breakpoints: {
                    1920: {
                        slidesPerView: 4,
                        spaceBetween: 30
                    },
                    1024: {
                        slidesPerView: 3,
                        spaceBetween: 30
                    },
                    764: {
                        slidesPerView: 1,
                        spaceBetween: 0
                    }
                }
            });
        </script>


    </div>


    <div class="max-w-6xl mx-auto px-4 py-8">
        <!-- Header -->
        <h1 class="text-4xl text-center font-normal mb-2">
            Explore our extensive collection of QR codes
        </h1>
        <p class="text-center text-gray-600 mb-8">
            QR codes can contain a wide range of content and at QRfy we offer them all.
        </p>
    
        <!-- Hero Section -->
        <div class="relative rounded-2xl overflow-hidden mb-12 bg-[#1a1523]">
            <div class="absolute inset-0 bg-gradient-to-r from-[#1a1523] to-transparent z-10"></div>
            <div class="relative z-20 p-8 md:p-12">
                <h2 class="text-white text-3xl md:text-4xl max-w-md font-light leading-tight mb-6">
                    Create a unique invitation for an unforgettable event.
                </h2>
                <button
                    class="px-6 py-2 rounded-full border border-white text-white hover:bg-white hover:text-[#1a1523] transition-colors">
                    See more
                </button>
            </div>
            <img src="{{ asset('asset/img/bg-image.jpeg') }}" alt="Wedding invitation with QR code"
                class="absolute top-0 right-0 w-full h-full object-cover opacity-50" />
        </div>
    
        <!-- Features Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 bg-white">
            <!-- Wedding QR -->
            <div class="p-6 rounded-xl hover:shadow-lg transition-shadow">
                <div class="flex items-center gap-3 mb-2">
                    <span class="text-blue-600 text-2xl">🥂</span>
                    <h3 class="text-blue-600 font-medium">QR code for weddings</h3>
                </div>
                <div class="h-1 w-full bg-blue-600 rounded mb-4"></div>
            </div>
    
            <!-- NGO QR -->
            <div class="p-6 rounded-xl hover:shadow-lg transition-shadow">
                <div class="flex items-center gap-3 mb-2">
                    <span class="text-gray-600 text-2xl">🐼</span>
                    <h3 class="text-gray-600 font-medium">QR code for NGOs</h3>
                </div>
                <div class="h-1 w-full bg-gray-400 rounded mb-4"></div>
            </div>
    
            <!-- Photographer QR -->
            <div class="p-6 rounded-xl hover:shadow-lg transition-shadow">
                <div class="flex items-center gap-3 mb-2">
                    <span class="text-gray-600 text-2xl">🎬</span>
                    <h3 class="text-gray-600 font-medium">QR code for Photographers</h3>
                </div>
                <div class="h-1 w-full bg-gray-400 rounded mb-4"></div>
            </div>
        </div>
    </div>
    


    <div class="max-w-7xl mx-auto px-4 py-8 lg:px-36">
        <!-- Introduction Section -->
        <h2 class="text-3xl font-semibold text-center mb-4">
            Everything you need to know to get started
        </h2>
        <p class="text-center text-gray-600 mb-8">
            In this section, you will find the basic concepts and the necessary steps to start enjoying the benefits of
            using QR.
        </p>

        <!-- Grid Layout for Image and Accordion -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Image Section -->
            <div class="h-1/4">
                <img src="{{ asset('asset/img/imagfold') }}" alt="QR Image"
                    class="w-full h-auto object-cover rounded-lg shadow-md">
            </div>

            <!-- Accordion Section -->
            <div>
                <div class="space-y-4">
                    <!-- Accordion Item 1 -->
                    <div class="border border-gray-300 rounded-lg">
                        <button class="w-full text-left px-6 py-4 bg-gray-100 text-gray-800 font-medium focus:outline-none"
                            onclick="toggleAccordion(event)" aria-expanded="false" aria-controls="content-1">
                            <span>Step 1: Understand QR Codes</span>
                            <span class="float-right text-gray-600" id="icon-1">+</span>
                        </button>
                        <div id="content-1" class="px-6 pb-4 hidden">
                            <p class="text-gray-600">
                                QR codes can store a variety of information like URLs, text, or contact information. Learn
                                how they work.
                            </p>
                        </div>
                    </div>

                    <!-- Accordion Item 2 -->
                    <div class="border border-gray-300 rounded-lg">
                        <button class="w-full text-left px-6 py-4 bg-gray-100 text-gray-800 font-medium focus:outline-none"
                            onclick="toggleAccordion(event)" aria-expanded="false" aria-controls="content-2">
                            <span>Step 2: Choose Your QR Code Type</span>
                            <span class="float-right text-gray-600" id="icon-2">+</span>
                        </button>
                        <div id="content-2" class="px-6 pb-4 hidden">
                            <p class="text-gray-600">
                                QR codes can be used for different purposes, such as events, promotions, or personal use.
                                Select the right type for your needs.
                            </p>
                        </div>
                    </div>

                    <!-- Accordion Item 3 -->
                    <div class="border border-gray-300 rounded-lg">
                        <button class="w-full text-left px-6 py-4 bg-gray-100 text-gray-800 font-medium focus:outline-none"
                            onclick="toggleAccordion(event)" aria-expanded="false" aria-controls="content-3">
                            <span>Step 3: Generate Your QR Code</span>
                            <span class="float-right text-gray-600" id="icon-3">+</span>
                        </button>
                        <div id="content-3" class="px-6 pb-4 hidden">
                            <p class="text-gray-600">
                                Use a QR code generator to create your custom code. Customize it with colors, logos, and
                                more to make it unique.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function toggleAccordion(event) {
            const button = event.target.closest('button');
            const content = button.nextElementSibling;
            const icon = button.querySelector('span.float-right');
            const expanded = button.getAttribute('aria-expanded') === 'true';

            // Toggle the visibility of the content
            content.classList.toggle('hidden');
            // Update the aria-expanded attribute for accessibility
            button.setAttribute('aria-expanded', !expanded);

            // Change the icon based on the visibility
            icon.textContent = expanded ? '+' : '-';
        }
    </script>


    {{-- REVIEW --}}

    <section class="bg-white px-4 py-12 md:py-24">
        <div class="max-w-4xl mx-auto">
            <h2 class="font-black text-black text-center text-3xl leading-none uppercase max-w-2xl mx-auto mb-12">
                What Listeners Are Saying
            </h2>
    
            <div class="flex flex-col space-y-8 md:space-y-0 md:flex-row md:space-x-8">
                <!-- Testimonial Item 1 -->
                <div class="bg-gray-200 rounded-lg p-8 text-center flex flex-col items-center space-y-4 md:w-1/3">
                    <p class="font-bold uppercase">John Doe</p>
                    <p class="text-xl font-light italic text-gray-700">
                        This podcast is amazing! The storytelling and production quality are top-notch. I can't wait for the
                        next episode!
                    </p>
                    <div class="flex items-center justify-center space-x-2 mt-4">
                        <!-- Star Ratings -->
                        <svg class="text-yellow-500 w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor" stroke="currentColor">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg class="text-yellow-500 w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor" stroke="currentColor">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg class="text-yellow-500 w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor" stroke="currentColor">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                    </div>
                </div>
    
                <!-- Testimonial Item 2 -->
                <div class="bg-gray-200 rounded-lg p-8 text-center flex flex-col items-center space-y-4 md:w-1/3">
                    <p class="font-bold uppercase">Jane Smith</p>
                    <p class="text-xl font-light italic text-gray-700">
                        This podcast kept me on the edge of my seat. It's a must-listen for true crime enthusiasts!
                    </p>
                    <div class="flex items-center justify-center space-x-2 mt-4">
                        <!-- Star Ratings -->
                        <svg class="text-yellow-500 w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor" stroke="currentColor">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg class="text-yellow-500 w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor" stroke="currentColor">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg class="text-yellow-500 w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor" stroke="currentColor">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 000-1.175l2.8-2.034c-.784.57-.197-1.539-1.118l-2.8-2.034"></path>
                        </svg>
                    </div>
                </div>
    
                <!-- Repeat the above structure for additional testimonials -->
            </div>
        </div>
    </section>
    


    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl font-bold text-center mb-12 text-[#1f1f1f]">Do not leave with doubt</h1>
    
        <!-- Navigation Tabs -->
        <div class="flex justify-center gap-6 sm:gap-8 mb-12 border-b">
            <button class="text-blue-500 border-b-2 border-blue-500 pb-4 px-6 text-sm sm:text-base">Basic information</button>
            <button class="text-gray-500 pb-4 px-6 text-sm sm:text-base">Design & creation</button>
            <button class="text-gray-500 pb-4 px-6 text-sm sm:text-base">Scan & print</button>
        </div>
    
        <!-- FAQ Items -->
        <div class="space-y-4">
            <!-- FAQ Item 1 -->
            <div class="border-b border-gray-200 pb-4">
                <button class="w-full text-left flex justify-between items-center py-3 sm:py-4" onclick="toggleAccordion(1)">
                    <span class="text-lg sm:text-xl font-medium text-[#1f1f1f]">What is a QR code generator?</span>
                    <svg class="w-6 h-6 text-gray-500 transform transition-transform duration-300" id="icon-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div id="faq-1" class="hidden pl-8 pt-2 text-gray-700">
                    <p>A QR code generator is a tool that creates a QR code that can store data like a URL, contact info, or other information for scanning by devices like smartphones.</p>
                </div>
            </div>
    
            <!-- FAQ Item 2 -->
            <div class="border-b border-gray-200 pb-4">
                <button class="w-full text-left flex justify-between items-center py-3 sm:py-4" onclick="toggleAccordion(2)">
                    <span class="text-lg sm:text-xl font-medium text-[#1f1f1f]">Are QR codes free?</span>
                    <svg class="w-6 h-6 text-gray-500 transform transition-transform duration-300" id="icon-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div id="faq-2" class="hidden pl-8 pt-2 text-gray-700">
                    <p>Yes, QR codes are free to generate. Many online tools offer free QR code creation services.</p>
                </div>
            </div>
    
            <!-- FAQ Item 3 -->
            <div class="border-b border-gray-200 pb-4">
                <button class="w-full text-left flex justify-between items-center py-3 sm:py-4" onclick="toggleAccordion(3)">
                    <span class="text-lg sm:text-xl font-medium text-[#1f1f1f]">So can I create an account to generate free QR codes?</span>
                    <svg class="w-6 h-6 text-gray-500 transform transition-transform duration-300" id="icon-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div id="faq-3" class="hidden pl-8 pt-2 text-gray-700">
                    <p>You may or may not need an account depending on the tool you use. Many QR code generators offer free services without requiring an account.</p>
                </div>
            </div>
    
            <!-- FAQ Item 4 -->
            <div class="border-b border-gray-200 pb-4">
                <button class="w-full text-left flex justify-between items-center py-3 sm:py-4" onclick="toggleAccordion(4)">
                    <span class="text-lg sm:text-xl font-medium text-[#1f1f1f]">Why on other web pages making QR codes is free?</span>
                    <svg class="w-6 h-6 text-gray-500 transform transition-transform duration-300" id="icon-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div id="faq-4" class="hidden pl-8 pt-2 text-gray-700">
                    <p>Other websites may offer free QR code generation as a marketing tool to attract users, or they may have limitations in their free plans.</p>
                </div>
            </div>
        </div>
    
        <script>
            function toggleAccordion(faqId) {
                const content = document.getElementById(`faq-${faqId}`);
                const icon = document.getElementById(`icon-${faqId}`);
    
                // Toggle visibility of the FAQ answer
                content.classList.toggle('hidden');
    
                // Rotate the icon to indicate open/close state
                icon.classList.toggle('rotate-180');
            }
        </script>
    </div>
    

    {{-- section with image --}}
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 lg:px-32 px-4">
        <div class="flex justify-center">
            <svg width="242" height="234" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="207" height="209" rx="10" fill="#fff" />
                <g clip-path="url(#a)">
                    <path
                        d="M92.19 85.001h.243V99.46h7.275v-7.607h7.281v-6.852h10.826v-.025h4.061V55.377h-7.275v7.674h-7.612v7.275h7.612v7.4h-7.612v-7.4h-7.28v7.4h-7.483v-22.23h7.276V25.898h-7.276v7.4h-7.28v14.798h7.28v7.281h-7.28v29.599h7.244V85Z"
                        fill="#1D59F9" />
                </g>
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M41 25H25v15h16V25ZM26.102 180.256h51.425v-51.425H26.102v51.425Zm7.146-44.279h37.137v37.138H33.248v-37.138Zm7.41 7.409h22.318v22.318H40.658v-22.318ZM182.317 25H160v22.318h22.317V25ZM26.102 84.65h14.556v7.384H26.102V84.65ZM98.556 78H84v6.976h-6.33v.026h-7.42v7.389h7.42v7.069H62.975v22.142h7.275v-.005h14.908v-7.385H70.25v-7.363h14.908v7.358h7.276V99.46h-7.488V85.384h13.61V78ZM159 58h8v-7h14.928v14.831h-7.275v-7.22H167V65h-8v-7Zm14 8h-8v7h8v-7Zm-43 99.705v7.384h13.628v7.389h22.37v-7.389h-15.141v-14.784h-7.272v-7.534h7.276v7.529h7.282v7.399h7.275V158.3h-7.275l-.001-7.534h-7.281v-7.39h7.281v7.385h7.275v7.534h7.276v14.711h7.276V136.24h-7.271v7.72h-7.275v-7.72h-7.281v-14.7h-7.229v-7.4h-7.276v7.477h-7.229v21.77h-7.291v7.384h6.604v7.534h7.861v7.4H130ZM77.275 70H70v7.4h7.275V70ZM26.102 99.428h7.275v22.168h-7.275V99.428Zm124.754 36.564h-7.177v-7.099h7.182v7.099h-.005ZM121.928 77.83h-7.275v-7.219H107V63h14.928v14.83Zm-66.275-8h7.275V55h-.653v-6.827h7.276V26h-7.276v7.038H55V55h-7v7.611h7.653v7.22Zm-7.72 44.377h7.276v7.395h-7.275v-7.395ZM106.276 72H99v7.394h7.275V72ZM93 93h7.275v7.395H93V93Zm-37.79 14.174V85.001h-7.276v7.038h-7.276v22.168h7.276v-7.033h7.276Zm124.996 10.377h-22.173v-7.275H151v-6.802h-7V88.753l7.275-.005v-7.385h7.276V74h14.381v7.384h-7.276v7.364h-7.281v7.389h-7.1V103h21.892v7.276h7.039v7.275Zm-118-33H40.033v-7.275H33v-6.802h-7V55.753l7.275-.005v-7.384h7.276V41h14.38v7.384h-7.275v7.364h-7.28v7.389h-7.1V70h21.891v7.276h7.039v7.275Z"
                    fill="url(#b)" />
                <path d="M165.654 88.753v7.384h7.276v-7.369h7.275v-7.384h-7.275v7.369h-7.276Z" fill="#D0D0D0" />
                <g filter="url(#c)">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M121.822 33.173v-7.275H106.992v14.928h7.61v7.276h7.611v-7.276h-7.609v-7.653h7.218ZM70 33h7.276v14.701H70V33Zm80.604 27.175v7.355h7.176V75h-6.553v6.39h-14.69v7.177h-7.281V74h6.899v-6.47H129V52.715l14.285-.01v-7.25h-7.386V38h14.593v14.715H158v7.46h-7.396Zm-.031 7.355V74h-7.206v-6.47h7.206ZM63 55.4v7.384h13.628v7.389h22.37v-7.39h-15.14V48h-7.276v7.4H63Zm73.139 45.984v7.064H121.2v14.918h-7.275v7.399h-7.193v14.552H92v-14.552h7.457v-7.26H92v-7.384h7.457v-7.673h7.275v7.823h7.193v-7.823h-7.193v-7.384h22.126v-5.113h-14.766v-7.384h15.166V94h6.881v7.384ZM92 179.893h29v-29H92v29Zm5.5-23H115v17H97.5v-17Zm13.5 4h-9v9h9v-9Zm2-23h7.276v7.399H113v-7.399Zm-6.008-89.791h7.612v7.275h-7.612v-7.275ZM122 40.752V33.37h7.276V26h7.275v7.384h-7.275v7.369H122Z"
                        fill="#1D59F9" />
                </g>
                <path
                    d="m161.849 69.38-.585.895 12.043 7.881.585-.894-12.043-7.881ZM229.5 221.592s.481 3.327.54 3.829c.058.503 5.337-.296 5.337-.296l.428-3.962s-5.644-.042-6.305.429Z"
                    fill="#220E27" />
                <path
                    d="M229.986 224.998s-1.671 2.004-3.29 2.882c-1.619.873-4.158 1.222-5.115 2.127-.688.656-2.513 3.465 4.2 3.412 6.712-.059 9.95.396 10.669-.683.719-1.079-1.042-7.961-1.042-7.961s-1.592.572-5.432.228l.01-.005ZM191.701 221.592s.482 3.327.54 3.829c.058.503 5.337-.296 5.337-.296l.428-3.962s-5.644-.042-6.3.429h-.005Z"
                    fill="#220E27" />
                <path
                    d="M192.18 224.998s-1.671 2.005-3.29 2.883c-1.618.873-7.564 1.592-8.521 2.497-.688.655-1.836 3.284 7.612 3.036 6.712-.175 9.949.396 10.669-.683.719-1.079-1.042-7.96-1.042-7.96s-1.497.613-5.433.227h.005Z"
                    fill="url(#d)" />
                <path
                    d="M225.132 136.042s4.956 7.876 4.586 14.996c-.37 7.12 1.798 14.89 2.544 22.328.831 8.289 4.227 27.918 4.354 32.356.121 4.433-.529 18.599-.529 18.599l-6.803.153s-5.713-34.314-7.194-37.815c-1.481-3.502-8.818-28.464-9.061-31.267-.249-2.804 12.103-19.35 12.103-19.35Z"
                    fill="url(#e)" />
                <path
                    d="M199.037 137.11s-3.734 19.514-4.226 23.872c-.492 4.359-.82 21.09-1.069 23.809-.249 2.724-2.301 35.557-2.957 39.683h8.696s6.676-23.93 6.676-35.25 5.157-24.613 8.484-32.082c3.328-7.469 10.95-7.649 12.992-21.508 0 0-25.819-2.925-28.591 1.471l-.005.005Z"
                    fill="url(#f)" />
                <path d="m161.285 70.292-.693-1.064 1.28.17-.587.894Z" fill="#1D5CCC" />
                <path
                    d="M235.658 146.124s-.624 1.026-.703 1.862c-.064.661-.619 1.656-.863 2.201-.243.545-1.02 3.025-1.047 3.671-.011.264.577 1.925.492 2.454-.085.529-.386 1.587.09 1.656.476.069 1.016-.794 1.016-.794s-.048.492.359.677c.783.365 1.201.043 1.201.043s.291.539.651.608c.804.159 1.195-.164 1.195-.164s.354.302.905.291c.708-.016 1.005-.624 1.005-.624s.899.18 1.158-.238c.259-.418.217-.868.323-1.243.106-.381.026-3.804-1.138-6.274-1.163-2.465.297-4.872.297-4.872l-4.951.741.01.005Z"
                    fill="url(#g)" />
                <path
                    d="M234.522 156.857s-.08-3.073.73-3.729c.809-.656.904.534.904.534s-.111-1.174.772-1.322c.884-.148.99 1.174.99 1.174s.063-.762 1.005-.693c.693.053.788 1.275.788 1.275s.862-1.106 1.386-.064c.883 1.762.037 3.74.037 3.74s-.275.466-1.159.238c0 0-.592 1.19-1.915.333 0 0-1.354.746-1.846-.449 0 0-1.491.709-1.687-1.042l-.005.005Z"
                    fill="url(#h)" />
                <path d="m236.154 153.588.053 4.311M237.918 153.519l.138 4.829M239.711 154.101l.259 3.914" stroke="#7D7D7D"
                    stroke-width=".5" stroke-miterlimit="10" stroke-linecap="round" />
                <path
                    d="M240.71 124.315c-.042-.698-1.878-7.786-3.988-14.875-2.767-9.315-4.671-14.26-5.655-14.71-1.751-.794-2.735-.069-4.697 1.391-2.841 2.105-1.508 5.544-1.397 5.819.169.566 5.3 17.672 7.035 23.988.328 1.19.942 8.607 1.439 14.563.386 4.655.609 7.305.709 7.627.249.815 4.57 1.624 7.125 2.032h.043a.265.265 0 0 0 .174-.064.277.277 0 0 0 .09-.206c-.011-.244-.809-24.259-.883-25.565h.005Z"
                    fill="url(#i)" />
                <path
                    d="M160 73.931s.116.683.312.952c0 0 .397.471.656.82.085.111.153.212.19.28.159.286.424.963.995 1.545s2.809 2.433 2.809 2.433l1.915-1.624 1.988-.888s-1.11-4.835-1.586-5.443a2.566 2.566 0 0 0-.143-.164c-.45-.471-.984-.635-1.243-.857-.096-.08-1.122-.82-1.487-.725-.508.132-.804.429-.92.767 0 0-.979.302-1.36.873 0 0-.909.248-1.184 1.1 0 0-.9.355-.937.926l-.005.005Z"
                    fill="url(#j)" />
                <path
                    d="M221.022 75.47c-.075-3.062-2.418-4.76-4.163-5.644 0 0-6.655-2.486-9.723 2.582-3.068 5.067-2.772 15.207.582 16.45.233.085.476.164.725.233 0 0 .275 1.799-.18 2.682-.46.883 8.622.91 8.622.91s.735-4.814 2.132-8.881v-.006c1.179-2.793 2.063-5.998 2.005-8.32v-.006Z"
                    fill="url(#k)" />
                <path
                    d="M218.017 89.033c-1.063-.418-8.955.392-9.553.519-.947.2-1 1.914-1.005 2.105v.249l.243.02c2.005.17 3.634.233 4.962.233 4.221 0 5.337-.65 5.395-.682l.127-.08v-2.295l-.169-.063v-.006Z"
                    fill="#220E27" />
                <path
                    d="M222.856 72.535c-1.058-2.063-3.296-2.407-3.703-2.455-1.666-.968-3.37-1.444-3.422-1.46-5.142-1.798-8.66.608-10.231 3.46-.999 1.814-1.163 3.729-.375 4.358 1.132.905.804 2.904.608 3.724a.653.653 0 0 0 .138.577.645.645 0 0 0 .55.233l.439-.027a.657.657 0 0 0 .508-.285l.513-.752a.64.64 0 0 0 .111-.322 7.5 7.5 0 0 1 .19-1.26c.085-.354.746-1.152 1.259-1.174.259-.02.466.223.614.688.317 1.005-.006 2.18-.418 2.946a.666.666 0 0 0 .185.83c.233.18.492.387.762.61 1.497 1.2 3.549 2.85 5.369 3.136.449.069.841.1 1.19.1 1.867 0 2.401-.846 2.412-.862.227-.29.45-.64.666-1.058 2.979-4.893 3.867-8.595 2.635-11.002v-.005Z"
                    fill="url(#l)" />
                <path
                    d="m229.479 111.979 3.036-6.4a.269.269 0 0 0 0-.222c-.566-1.265-.794-4.798-.958-7.374-.185-2.835-.227-3.137-.481-3.253-3.671-1.656-12.711-3.655-13.097-3.74-.021 0-.042-.005-.069-.005l-10.198.418s-.037 0-.053.005c-.074.021-7.485 1.867-12.685 2.555-3.121.164-11.812-3.163-12.409-3.391-.365-.27-4.227-3.094-5.168-4.115-.963-1.048-2.576-3.047-4.132-4.983-3.893-4.835-4.289-5.226-4.638-5.115-.228.074-5.29 2.666-5.544 3.644a.414.414 0 0 0 .053.339c.65 1.343 6.099 7.85 8.426 10.6 1.243 1.47 5.581 5.697 6.639 6.634 2.523 2.237 9.325 5.765 14.292 8.341 2.518 1.307 4.528 2.349 5.189 2.809.106 1.291 1.027 12.584.805 14.779-.037.381-.286 2.55-.63 5.544-1.439 12.584-2.973 26.062-2.893 26.665.026.217.116.873 9.907 1.375 2.502.127 5.454.222 8.226.222 2.502 0 4.861-.074 6.612-.269 6.897-.762 11.372-1.889 11.415-1.899a.261.261 0 0 0 .195-.297c-.031-.216-3.2-21.571-3.036-24.12.354-5.475 1.132-17.853 1.185-18.747h.011Z"
                    fill="url(#m)" />
                <defs>
                    <linearGradient id="d" x1="189.874" y1="232.716" x2="180.618" y2="224.781"
                        gradientUnits="userSpaceOnUse">
                        <stop offset=".131" stop-color="#220E27" />
                        <stop offset="1" stop-color="#1D59F9" />
                    </linearGradient>
                    <linearGradient id="e" x1="226.375" y1="167.388" x2="213.151" y2="168.182"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="#5A5B70" />
                        <stop offset="1" stop-color="#2F447E" />
                    </linearGradient>
                    <linearGradient id="f" x1="205.744" y1="163.95" x2="192.785" y2="161.041"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="#5A5B70" />
                        <stop offset="1" stop-color="#1D59F9" />
                    </linearGradient>
                    <linearGradient id="g" x1="238.277" y1="149.139" x2="226.904" y2="145.966"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="#fff" />
                        <stop offset="1" stop-color="#1D59F9" />
                    </linearGradient>
                    <linearGradient id="h" x1="238.013" y1="156.281" x2="232.194" y2="161.306"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="#fff" />
                        <stop offset="1" stop-color="#1D59F9" />
                    </linearGradient>
                    <linearGradient id="i" x1="235.103" y1="117.93" x2="226.438" y2="119.701"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="#220E27" />
                        <stop offset="1" stop-color="#1D59F9" />
                    </linearGradient>
                    <linearGradient id="j" x1="163.692" y1="74.026" x2="153.907" y2="75.878"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="#fff" />
                        <stop offset="1" stop-color="#1D59F9" />
                    </linearGradient>
                    <linearGradient id="k" x1="210.771" y1="80.903" x2="197.547" y2="79.845"
                        gradientUnits="userSpaceOnUse">
                        <stop offset=".046" stop-color="#fff" />
                        <stop offset="1" stop-color="#1D59F9" />
                    </linearGradient>
                    <linearGradient id="l" x1="214.01" y1="68" x2="203.099" y2="70.323"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="#5A5B70" />
                        <stop offset="1" stop-color="#1D59F9" />
                    </linearGradient>
                    <linearGradient id="m" x1="215.53" y1="116.872" x2="185.339" y2="110.213"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="#220E27" />
                        <stop offset=".96" stop-color="#1D59F9" />
                    </linearGradient>
                    <radialGradient id="b" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
                        gradientTransform="matrix(0 -100 101.183 0 104 162)">
                        <stop stop-color="#6791FF" />
                        <stop offset="1" stop-color="#D8D8D8" />
                    </radialGradient>
                    <clipPath id="a">
                        <path fill="#fff" transform="translate(85 26)" d="M0 0h37v29H0z" />
                    </clipPath>
                    <filter id="c" x="57" y="23.898" width="107" height="165.995"
                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                        <feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                            result="hardAlpha" />
                        <feOffset dy="4" />
                        <feGaussianBlur stdDeviation="3" />
                        <feComposite in2="hardAlpha" operator="out" />
                        <feColorMatrix values="0 0 0 0 0.113725 0 0 0 0 0.34902 0 0 0 0 0.976471 0 0 0 0.15 0" />
                        <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_136_4657" />
                        <feBlend in="SourceGraphic" in2="effect1_dropShadow_136_4657" result="shape" />
                    </filter>
                </defs>
            </svg>
        </div>
        <div>
            <div class="text-center mb-8">
                <h2 class="text-2xl font-semibold text-[#1f1f1f] mb-4">Want to know more?</h2>
                <p class="text-lg text-gray-600">Check our FAQs to find an answer to any questions you may have about our
                    QR codes.</p>
            </div>
        </div>
    </div>

    {{-- desktop view --}}
    <div class="max-w-full mx-auto px-4 py-16 sm:px-6 lg:px-8 bg-gradient-to-r from-[#230F28] via-[#1D56F3] to-[#230F28]">
        <!-- Header Section -->
        <div class="flex flex-col sm:flex-row justify-between items-center mb-16 px-4 sm:px-8 lg:px-16">
            <div class="max-w-2xl mb-8 sm:mb-0">
                <h1 class="text-4xl sm:text-5xl font-bold text-white mb-4 leading-tight">
                    Try our QR code generator for 7 days free.
                </h1>
            </div>
            <button class="px-6 py-3 text-white rounded-full border-2 border-white/20 hover:bg-white/10 transition-all">
                Register now
            </button>
        </div>
    
        <!-- Dashboard Preview -->
        <div class="mt-8 mx-4 sm:mx-8 lg:mx-16">
            <img class="w-full h-auto object-cover rounded-lg" src="{{ asset('asset/img/web-img') }}" alt="Dashboard preview">
        </div>
    </div>
    



    <div class="max-w-full mx-auto bg-gradient-to-r from-[#230F28] via-[#201C50] to-[#230F28]">
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-6 lg:mx-8 py-8 lg:px-36 px-2">
            <!-- Web page -->
            <div class="group hover:bg-white/10 transition-all p-6 rounded-xl cursor-pointer">
                <div
                    class="w-12 h-12 border border-white/20 rounded-lg flex items-center justify-center mb-4 group-hover:border-white/40">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9">
                        </path>
                    </svg>
                </div>
                <h3 class="text-white font-medium mb-2">Web page</h3>
                <p class="text-white/60 text-sm">Open a url</p>
            </div>

            <!-- Text -->
            <div class="group hover:bg-white/10 transition-all p-6 rounded-xl cursor-pointer">
                <div
                    class="w-12 h-12 border border-white/20 rounded-lg flex items-center justify-center mb-4 group-hover:border-white/40">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                        </path>
                    </svg>
                </div>
                <h3 class="text-white font-medium mb-2">Text</h3>
                <p class="text-white/60 text-sm">Displays plain text</p>
            </div>

            <!-- WiFi -->
            <div class="group hover:bg-white/10 transition-all p-6 rounded-xl cursor-pointer">
                <div
                    class="w-12 h-12 border border-white/20 rounded-lg flex items-center justify-center mb-4 group-hover:border-white/40">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0">
                        </path>
                    </svg>
                </div>
                <h3 class="text-white font-medium mb-2">Wifi</h3>
                <p class="text-white/60 text-sm">Connect to a WiFi network</p>
            </div>

            <!-- vCard -->
            <div class="group hover:bg-white/10 transition-all p-6 rounded-xl cursor-pointer">
                <div
                    class="w-12 h-12 border border-white/20 rounded-lg flex items-center justify-center mb-4 group-hover:border-white/40">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                        </path>
                    </svg>
                </div>
                <h3 class="text-white font-medium mb-2">VCard</h3>
                <p class="text-white/60 text-sm">Share your contact information</p>
            </div>

            <!-- Email -->
            <div class="group hover:bg-white/10 transition-all p-6 rounded-xl cursor-pointer">
                <div
                    class="w-12 h-12 border border-white/20 rounded-lg flex items-center justify-center mb-4 group-hover:border-white/40">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                        </path>
                    </svg>
                </div>
                <h3 class="text-white font-medium mb-2">Email</h3>
                <p class="text-white/60 text-sm">Send an email with a predefined text</p>
            </div>
            <!-- WiFi -->
            <div class="group hover:bg-white/10 transition-all p-6 rounded-xl cursor-pointer">
                <div
                    class="w-12 h-12 border border-white/20 rounded-lg flex items-center justify-center mb-4 group-hover:border-white/40">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0">
                        </path>
                    </svg>
                </div>
                <h3 class="text-white font-medium mb-2">Wifi</h3>
                <p class="text-white/60 text-sm">Connect to a WiFi network</p>
            </div>

            <!-- vCard -->
            <div class="group hover:bg-white/10 transition-all p-6 rounded-xl cursor-pointer">
                <div
                    class="w-12 h-12 border border-white/20 rounded-lg flex items-center justify-center mb-4 group-hover:border-white/40">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                        </path>
                    </svg>
                </div>
                <h3 class="text-white font-medium mb-2">VCard</h3>
                <p class="text-white/60 text-sm">Share your contact information</p>
            </div>

            <!-- Email -->
            <div class="group hover:bg-white/10 transition-all p-6 rounded-xl cursor-pointer">
                <div
                    class="w-12 h-12 border border-white/20 rounded-lg flex items-center justify-center mb-4 group-hover:border-white/40">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                        </path>
                    </svg>
                </div>
                <h3 class="text-white font-medium mb-2">Email</h3>
                <p class="text-white/60 text-sm">Send an email with a predefined text</p>
            </div>
            <!-- WiFi -->
            <div class="group hover:bg-white/10 transition-all p-6 rounded-xl cursor-pointer">
                <div
                    class="w-12 h-12 border border-white/20 rounded-lg flex items-center justify-center mb-4 group-hover:border-white/40">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0">
                        </path>
                    </svg>
                </div>
                <h3 class="text-white font-medium mb-2">Wifi</h3>
                <p class="text-white/60 text-sm">Connect to a WiFi network</p>
            </div>

            <!-- vCard -->
            <div class="group hover:bg-white/10 transition-all p-6 rounded-xl cursor-pointer">
                <div
                    class="w-12 h-12 border border-white/20 rounded-lg flex items-center justify-center mb-4 group-hover:border-white/40">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                        </path>
                    </svg>
                </div>
                <h3 class="text-white font-medium mb-2">VCard</h3>
                <p class="text-white/60 text-sm">Share your contact information</p>
            </div>

            <!-- Email -->
            <div class="group hover:bg-white/10 transition-all p-6 rounded-xl cursor-pointer">
                <div
                    class="w-12 h-12 border border-white/20 rounded-lg flex items-center justify-center mb-4 group-hover:border-white/40">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                        </path>
                    </svg>
                </div>
                <h3 class="text-white font-medium mb-2">Email</h3>
                <p class="text-white/60 text-sm">Send an email with a predefined text</p>
            </div>
            <!-- WiFi -->
            <div class="group hover:bg-white/10 transition-all p-6 rounded-xl cursor-pointer">
                <div
                    class="w-12 h-12 border border-white/20 rounded-lg flex items-center justify-center mb-4 group-hover:border-white/40">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0">
                        </path>
                    </svg>
                </div>
                <h3 class="text-white font-medium mb-2">Wifi</h3>
                <p class="text-white/60 text-sm">Connect to a WiFi network</p>
            </div>

            <!-- vCard -->
            <div class="group hover:bg-white/10 transition-all p-6 rounded-xl cursor-pointer">
                <div
                    class="w-12 h-12 border border-white/20 rounded-lg flex items-center justify-center mb-4 group-hover:border-white/40">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                        </path>
                    </svg>
                </div>
                <h3 class="text-white font-medium mb-2">VCard</h3>
                <p class="text-white/60 text-sm">Share your contact information</p>
            </div>

            <!-- Email -->
            <div class="group hover:bg-white/10 transition-all p-6 rounded-xl cursor-pointer">
                <div
                    class="w-12 h-12 border border-white/20 rounded-lg flex items-center justify-center mb-4 group-hover:border-white/40">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                        </path>
                    </svg>
                </div>
                <h3 class="text-white font-medium mb-2">Email</h3>
                <p class="text-white/60 text-sm">Send an email with a predefined text</p>
            </div>
            <!-- WiFi -->
            <div class="group hover:bg-white/10 transition-all p-6 rounded-xl cursor-pointer">
                <div
                    class="w-12 h-12 border border-white/20 rounded-lg flex items-center justify-center mb-4 group-hover:border-white/40">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0">
                        </path>
                    </svg>
                </div>
                <h3 class="text-white font-medium mb-2">Wifi</h3>
                <p class="text-white/60 text-sm">Connect to a WiFi network</p>
            </div>

            <!-- vCard -->
            <div class="group hover:bg-white/10 transition-all p-6 rounded-xl cursor-pointer">
                <div
                    class="w-12 h-12 border border-white/20 rounded-lg flex items-center justify-center mb-4 group-hover:border-white/40">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                        </path>
                    </svg>
                </div>
                <h3 class="text-white font-medium mb-2">VCard</h3>
                <p class="text-white/60 text-sm">Share your contact information</p>
            </div>

            <!-- Email -->
            <div class="group hover:bg-white/10 transition-all p-6 rounded-xl cursor-pointer">
                <div
                    class="w-12 h-12 border border-white/20 rounded-lg flex items-center justify-center mb-4 group-hover:border-white/40">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                        </path>
                    </svg>
                </div>
                <h3 class="text-white font-medium mb-2">Email</h3>
                <p class="text-white/60 text-sm">Send an email with a predefined text</p>
            </div>


            <!-- Additional items following the same pattern -->
            <!-- Continue with the remaining items using the same structure -->

        </div>
    </div>



    <!-- Header with Logo and Rating -->
    <div class="flex justify-between items-center border-b border-white/10 pb-8 bg-[#230F28] px-6 md:px-36">
        <div class="flex items-center gap-1">
            <div class="bg-blue-600 p-1.5 rounded">
                <div class="w-6 h-6 bg-white rounded"></div>
            </div>
            <div class="text-white">
                <h2 class="text-2xl font-bold mb-1">QRFY</h2>
                <p class="text-sm text-white/60">Create your own QR codes and boost your business or idea</p>
            </div>
        </div>
        <div class="flex items-center gap-2 bg-white/5 rounded-full px-4 py-2">
            <img src="/api/placeholder/24/24" alt="Google" class="w-6 h-6 rounded-full" />
            <span class="text-white">Google</span>
            <div class="flex items-center gap-1">
                <span class="text-white">★</span>
                <span class="text-white">4,7</span>
            </div>
        </div>
    </div>
    
    
    
    
@endsection
