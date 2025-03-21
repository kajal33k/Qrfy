<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horizontal Navigation with Slides</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .slide {
            transition: transform 0.5s ease-in-out;
        }
    </style>
</head>
<div class="md:px-12 flex flex-col items-center justify-center min-h-screen">

    <!-- Navigation -->
    <nav class="bg-white shadow-md p-2 rounded-lg md:w-3/4 w-full px-4">
        <ul class="flex justify-between space-x-2 bg-white/40 backdrop-blur-lg overflow-x-auto">
            <li><button class="nav-btn px-4 py-2 bg-gray-500 text-white rounded-lg" onclick="goToSlide(0)"><span
                        class="text-3xl">🌐</span>
                    <span class="text-sm">Website</span>
                </button></li>
            <li><button class="nav-btn px-4 py-2 bg-gray-500 text-white rounded-lg" onclick="goToSlide(1)"><span
                        class="text-3xl">📄</span>
                    <span class="text-sm">PDF</span></button></li>
            <li><button class="nav-btn px-4 py-2 bg-gray-500 text-white rounded-lg" onclick="goToSlide(2)"> <span
                        class="text-3xl">🍾</span>
                    <span class="text-sm">Product</span>
                </button></li>
            <li><button class="nav-btn px-4 py-2 bg-gray-500 text-white rounded-lg" onclick="goToSlide(0)"><span
                        class="text-3xl">🌐</span>
                    <span class="text-sm">Website</span>
                </button>
            </li>
            <li><button class="nav-btn px-4 py-2 bg-gray-500 text-white rounded-lg" onclick="goToSlide(1)"><span
                        class="text-3xl">🆙</span>
                    <span class="text-sm">vCard Plus</span>
                </button>
            </li>
            <li><button class="nav-btn px-4 py-2 bg-gray-500 text-white rounded-lg" onclick="goToSlide(2)"> <span
                        class="text-3xl">🖼</span>
                    <span class="text-sm">Images</span>
                </button>
            </li>
            <li><button class="nav-btn px-4 py-2 bg-gray-500 text-white rounded-lg" onclick="goToSlide(0)"><span
                        class="text-3xl">📜</span>
                    <span class="text-sm">Text</span>

                </button>
            </li>
            <li><button class="nav-btn px-4 py-2 bg-gray-500 text-white rounded-lg" onclick="goToSlide(1)"> <span
                        class="text-3xl">▶️</span>
                    <span class="text-sm">Video</span>

                </button>
            </li>
            <li><button class="nav-btn px-4 py-2 bg-gray-500 text-white rounded-lg" onclick="goToSlide(2)"> <span
                        class="text-3xl">📑</span>
                    <span class="text-sm">List of links</span>

                </button>
            </li>


        </ul>
    </nav>

    <!-- Slider Container -->
    {{-- slide1 --}}
    <div class="overflow-hidden md:w-3/4 w-full mt-4 bg-white rounded-lg shadow-lg">
        <div id="slider" class="flex w-full">
            <div class="slide w-full flex-shrink-0  h-auto flex items-center justify-center text-white text-2xl">
                <div class="max-w-6xl mx-auto py-6 px-6 flex flex-col md:flex-row items-center justify-between">
                    <!-- Left Section -->
                    <div class="md:w-1/2 text-center md:text-left">
                        <h2 class="text-3xl font-bold text-gray-900">Website</h2>
                        <p class="text-gray-600 mt-4 font-light">Connect your URL to a QR code so everyone can access your website
                            quickly and easily. Turn every visit into an opportunity for growth!</p>
                        <button
                            class="mt-6 font-light bg-gray-600 text-white py-2 px-4 rounded-lg hover:bg-gray-700"><a href="{{route('qrtype')}}">Generate
                                QR Code for Website</a></button>
                    </div>

                    <!-- Mobile Mockup -->
                    <div class="relative md:w-1/3 my-10 md:my-0">
                        <div class="w-64 h-auto mx-auto bg-white rounded-3xl shadow-xl border p-4">
                            <div class="h-8 bg-gray-200 rounded-md mb-4"></div>
                            <h3 class="text-lg font-light text-center">QR Code Generator</h3>
                            <div class="h-32 bg-gray-300 rounded-md mt-4"></div>
                            <div class="h-4 bg-gray-200 rounded-md mt-4 w-3/4 mx-auto"></div>
                            <div class="h-4 bg-gray-200 rounded-md mt-2 w-2/3 mx-auto"></div>
                            <div class="h-10 bg-gray-300 rounded-md mt-6 w-4/5 mx-auto"></div>
                            <div class="flex justify-around mt-6">
                                <div class="h-8 w-8 bg-gray-300 rounded-full"></div>
                                <div class="h-8 w-8 bg-gray-300 rounded-full"></div>
                                <div class="h-8 w-8 bg-gray-300 rounded-full"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Section -->
                    <div class="md:w-1/3 space-y-6">
                        <div class="flex items-start">
                            <span class="text-green-600 text-xl mr-3">✔</span>
                            <p class="text-gray-600 font-light">Provides quick access to your website or online store with a simple
                                scan, optimizing the user experience.</p>
                        </div>
                        <div class="flex items-start">
                            <span class="text-green-600 text-xl mr-3">✔</span>
                            <p class="text-gray-600 font-light">Update the link as many times as needed without modifying the
                                printed QR code, ensuring relevance.</p>
                        </div>
                    </div>
                </div>

            </div>
            {{-- slide2 --}}
            <div class="slide w-full flex-shrink-0  h-auto flex items-center justify-center text-white text-2xl">
                <div class="max-w-6xl mx-auto py-16 px-6 flex flex-col md:flex-row items-center justify-between">
                    <!-- Left Section -->
                    <div class="md:w-1/2 text-center md:text-left">
                        <h2 class="text-3xl font-bold text-gray-900">PDF</h2>
                        <p class="text-gray-600 mt-4 font-light">From menus to user guides to creative portfolios, give your
                            clients access to PDF documents quickly and efficiently.</p>
                        <button
                            class="mt-6 font-light bg-gray-600 text-white py-3 px-6 rounded-lg hover:bg-gray-700">Generate
                            QR Code for PDF</button>
                    </div>

                    <!-- Mobile Mockup -->
                    <div class="relative md:w-1/3 my-10 md:my-0">
                        <div class="w-64 h-auto lg:h-[500px] mx-auto bg-black rounded-3xl shadow-xl border p-2">
                            <h3 class="text-lg  text-center text-white font-light">Meet our burgers</h3>
                            <p class="text-gray-300 text-center text-sm font-light">Our selection of burgers will surprise you.
                                Their flavour will delight you.</p>
                            <div class="bg-white rounded-xl p-4 mt-4">
                                <div class="h-32 bg-gray-300 rounded-md"></div>
                                <button
                                    class="mt-4 bg-orange-500 text-white font-medium py-2 px-4 rounded-lg w-full">See
                                    menu</button>
                            </div>
                        </div>
                    </div>

                    <!-- Right Section -->
                    <div class="md:w-1/3 space-y-6">
                        <div class="flex items-start">
                            <span class="text-green-600 text-xl mr-3">✔</span>
                            <p class="text-gray-600 font-light">Customize your QR code to reflect your brand, making access to your
                                documents attractive.</p>
                        </div>
                        <div class="flex items-start">
                            <span class="text-green-600 text-xl mr-3">✔</span>
                            <p class="text-gray-600 font-light">Adjust the content of your documents at any time, ensuring your
                                clients always have access to the most recent version.</p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- slide3 --}}
            <div class="slide w-full flex-shrink-0  h-auto flex items-center justify-center text-white text-2xl">
                <div class="grid md:grid-cols-3 items-center gap-10 bg-white  rounded-lg p-8">
                    <!-- Left Section -->
                    <div>
                        <h2 class="text-3xl  text-gray-900 font-light">Video</h2>
                        <p class="text-gray-600 mt-3 font-light">Make it easy to access tutorials, trailers, or educational
                            content. Increase the visibility of your content by sharing videos easily.</p>
                        <button
                            class="mt-5 font-light px-6 py-3 bg-gray-600 text-white rounded-lg  hover:bg-gray-700 transition">Generate
                            QR Code for Video</button>
                    </div>

                    <!-- Middle Section (Phone Mockup) -->
                    <div class="flex justify-center">
                        <div class="relative w-64 h-[500px] bg-black rounded-3xl p-2">
                            <div class="bg-purple-600 h-full rounded-2xl p-4 flex flex-col justify-between">
                                <div class="text-center text-white font-light">
                                    <p class="text-sm opacity-75 ">Super games</p>
                                    <h3 class="text-lg font-bold">Space Heroes</h3>
                                    <p class="text-xs opacity-75">The new indie game from the creators of Heroes of
                                        the Sea</p>
                                    <button class="mt-3 border border-white px-4 py-1 rounded-lg text-white">Play
                                        now!</button>
                                </div>
                                <div class="bg-white p-2 rounded-lg">
                                    <img src="https://via.placeholder.com/150" alt="Video"
                                        class="w-full rounded-lg">
                                </div>
                                <p class="text-white text-center text-sm">Live the experience</p>
                            </div>
                        </div>
                    </div>

                    <!-- Right Section -->
                    <div>
                        <div class="flex items-start space-x-3">
                            <span class="text-blue-600 text-xl">✔</span>
                            <p class="text-gray-700 font-light">Personalize your video landing page with descriptions and links
                                that guide viewers, improving their viewing experience and understanding.</p>
                        </div>
                        <div class="flex items-start space-x-3 mt-4">
                            <span class="text-blue-600 text-xl">✔</span>
                            <p class="text-gray-700 font-light">Take advantage of the flexibility of QR to easily update your
                                videos, ensuring you always share fresh and relevant content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation Buttons -->
    <div class="mt-2 flex space-x-4 mb-4 ">
        <button class="px-4 py-2 bg-gray-700 text-white rounded-lg" onclick="prevSlide()"><i
                class='bx bxs-chevrons-left' style='color:#ffffff'></i></button>
        <button class="px-4 py-2 bg-gray-700 text-white rounded-lg" onclick="nextSlide()"><i
                class='bx bxs-chevrons-right'></i></button>
    </div>

    <script>
        let currentIndex = 0;
        const slides = document.querySelectorAll('.slide');
        const slider = document.getElementById('slider');

        function updateSlide() {
            const offset = -currentIndex * 100;
            slider.style.transform = `translateX(${offset}%)`;
        }

        function goToSlide(index) {
            currentIndex = index;
            updateSlide();
        }

        function nextSlide() {
            currentIndex = (currentIndex + 1) % slides.length;
            updateSlide();
        }

        function prevSlide() {
            currentIndex = (currentIndex - 1 + slides.length) % slides.length;
            updateSlide();
        }
    </script>

</div>

</html>
