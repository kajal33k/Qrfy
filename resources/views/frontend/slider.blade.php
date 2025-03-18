<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Slider</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .slide {
            flex: 0 0 100%;
        }

        .tab-active {
            background-color: #3b82f6 !important;
            color: white !important;
        }
    </style>
</head>

<body class="bg-gray-100 font-sans">

    <div class="max-w-4xl mx-auto px-4 py-6 rounded-lg bg-white/40 backdrop-blur-lg">
        <!-- Tabs -->
        <div class="grid grid-cols-3 md:flex md:justify-center gap-4 mb-6 flex-wrap" role="tablist">
            <button id="prevBtn" class="text-gray-600 bg-gray-200 py-2 px-4 rounded-full transition duration-300"
                aria-label="Previous slide">◀</button>

            <div class="flex space-x-6 bg-white p-4 shadow-md rounded-lg">
                <div  id="website" data-tab="tab-website"  class="tab-btn nav-item flex flex-col items-center cursor-pointer text-gray-500 hover:text-blue-500"
                    data-item="Website">
                    <span class="text-3xl">🌐</span>
                    <span class="text-sm">Website</span>
                </div>
                <div  id="pdf" data-tab="tab-pdf" class="tab-btn nav-item flex flex-col items-center cursor-pointer text-gray-500 hover:text-blue-500"
                    data-item="PDF">
                    <span class="text-3xl">📄</span>
                    <span class="text-sm">PDF</span>
                </div>
                <div class="nav-item flex flex-col items-center cursor-pointer text-gray-500 hover:text-blue-500"
                    data-item="Product">
                    <span class="text-3xl">🍾</span>
                    <span class="text-sm">Product</span>
                </div>
                <div class="nav-item flex flex-col items-center cursor-pointer text-gray-500 hover:text-blue-500"
                    data-item="vCard Plus">
                    <span class="text-3xl">🆙</span>
                    <span class="text-sm">vCard Plus</span>
                </div>
                <div class="nav-item flex flex-col items-center cursor-pointer text-gray-500 hover:text-blue-500"
                    data-item="Images">
                    <span class="text-3xl">🖼</span>
                    <span class="text-sm">Images</span>
                </div>
                <div class="nav-item flex flex-col items-center cursor-pointer text-gray-500 hover:text-blue-500"
                    data-item="Text">
                    <span class="text-3xl">📜</span>
                    <span class="text-sm">Text</span>
                </div>
                <div class="nav-item flex flex-col items-center cursor-pointer text-blue-500" data-item="Video">
                    <span class="text-3xl">▶️</span>
                    <span class="text-sm">Video</span>
                </div>
                <div class="nav-item flex flex-col items-center cursor-pointer text-gray-500 hover:text-blue-500"
                    data-item="List of links">
                    <span class="text-3xl">📑</span>
                    <span class="text-sm">List of links</span>
                </div>
                <div class="nav-item flex flex-col items-center cursor-pointer text-gray-500 hover:text-blue-500"
                    data-item="Business">
                    <span class="text-3xl">🏬</span>
                    <span class="text-sm">Business</span>
                </div>
            </div>


            <button id="nextBtn" class="text-gray-600 bg-gray-200 py-2 px-4 rounded-full transition duration-300"
                aria-label="Next slide">▶</button>
        </div>

        <!-- Slider -->
        <div class="relative overflow-hidden">
            <div id="slider" class="flex transition-transform duration-500 ease-in-out">
                <!-- Slide 1 -->
                <div id="tab-website" class="tab-content min-w-full flex flex-col md:flex-row items-center bg-gray-100 p-6 rounded-lg space-y-6">
                    <div class="max-w-6xl mx-auto py-16 px-6 flex flex-col md:flex-row items-center justify-between">
                        <!-- Left Section -->
                        <div class="md:w-1/2 text-center md:text-left">
                            <h2 class="text-3xl font-bold text-gray-900">Website</h2>
                            <p class="text-gray-600 mt-4">Connect your URL to a QR code so everyone can access your website quickly and easily. Turn every visit into an opportunity for growth!</p>
                            <button class="mt-6 bg-blue-600 text-white font-medium py-3 px-6 rounded-lg hover:bg-blue-700">Generate QR Code for Website</button>
                        </div>
                        
                        <!-- Mobile Mockup -->
                        <div class="relative md:w-1/3 my-10 md:my-0">
                            <div class="w-64 h-auto mx-auto bg-white rounded-3xl shadow-xl border p-4">
                                <div class="h-8 bg-gray-200 rounded-md mb-4"></div>
                                <h3 class="text-lg font-semibold text-center">QR Code Generator</h3>
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
                                <p class="text-gray-600">Provides quick access to your website or online store with a simple scan, optimizing the user experience.</p>
                            </div>
                            <div class="flex items-start">
                                <span class="text-green-600 text-xl mr-3">✔</span>
                                <p class="text-gray-600">Update the link as many times as needed without modifying the printed QR code, ensuring relevance.</p>
                            </div>
                        </div>
                    </div>
                  
                </div>

                <!-- Slide 2 -->
                <div class="min-w-full flex flex-col md:flex-row items-center bg-gray-100 p-6 rounded-lg space-y-6">
                    <div class="max-w-6xl mx-auto py-16 px-6 flex flex-col md:flex-row items-center justify-between">
                        <!-- Left Section -->
                        <div class="md:w-1/2 text-center md:text-left">
                            <h2 class="text-3xl font-bold text-gray-900">PDF</h2>
                            <p class="text-gray-600 mt-4">From menus to user guides to creative portfolios, give your clients access to PDF documents quickly and efficiently.</p>
                            <button class="mt-6 bg-blue-600 text-white font-medium py-3 px-6 rounded-lg hover:bg-blue-700">Generate QR Code for PDF</button>
                        </div>
                        
                        <!-- Mobile Mockup -->
                        <div class="relative md:w-1/3 my-10 md:my-0">
                            <div class="w-64 h-auto mx-auto bg-black rounded-3xl shadow-xl border p-4">
                                <h3 class="text-lg font-semibold text-center text-white">Meet our burgers</h3>
                                <p class="text-gray-300 text-center text-sm">Our selection of burgers will surprise you. Their flavour will delight you.</p>
                                <div class="bg-white rounded-xl p-4 mt-4">
                                    <div class="h-32 bg-gray-300 rounded-md"></div>
                                    <button class="mt-4 bg-orange-500 text-white font-medium py-2 px-4 rounded-lg w-full">See menu</button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Right Section -->
                        <div class="md:w-1/3 space-y-6">
                            <div class="flex items-start">
                                <span class="text-green-600 text-xl mr-3">✔</span>
                                <p class="text-gray-600">Customize your QR code to reflect your brand, making access to your documents attractive.</p>
                            </div>
                            <div class="flex items-start">
                                <span class="text-green-600 text-xl mr-3">✔</span>
                                <p class="text-gray-600">Adjust the content of your documents at any time, ensuring your clients always have access to the most recent version.</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- slide 4 --}}
                <div class="min-w-full flex flex-col md:flex-row items-center bg-gray-100 p-6 rounded-lg space-y-6">
                    <div class="grid md:grid-cols-3 items-center gap-10 bg-white shadow-lg rounded-lg p-8">
                        <!-- Left Section -->
                        <div>
                            <h2 class="text-3xl font-bold text-gray-900">Video</h2>
                            <p class="text-gray-600 mt-3">Make it easy to access tutorials, trailers, or educational
                                content. Increase the visibility of your content by sharing videos easily.</p>
                            <button
                                class="mt-5 px-6 py-3 bg-blue-600 text-white rounded-lg font-semibold hover:bg-blue-700 transition">Generate
                                QR Code for Video</button>
                        </div>

                        <!-- Middle Section (Phone Mockup) -->
                        <div class="flex justify-center">
                            <div class="relative w-60 h-[500px] bg-black rounded-3xl p-4">
                                <div class="bg-purple-600 h-full rounded-2xl p-6 flex flex-col justify-between">
                                    <div class="text-center text-white">
                                        <p class="text-sm opacity-75">Super games</p>
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
                                <p class="text-gray-700">Personalize your video landing page with descriptions and links
                                    that guide viewers, improving their viewing experience and understanding.</p>
                            </div>
                            <div class="flex items-start space-x-3 mt-4">
                                <span class="text-blue-600 text-xl">✔</span>
                                <p class="text-gray-700">Take advantage of the flexibility of QR to easily update your
                                    videos, ensuring you always share fresh and relevant content.</p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="relative w-60 h-96 border-8 border-black rounded-3xl overflow-hidden bg-white shadow-lg">
                        <img src="https://via.placeholder.com/240x160" alt="Event Image"
                            class="w-full h-48 object-cover mb-4">
                        <h2 class="text-lg font-semibold text-center">Event Invitation</h2>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="min-w-full flex flex-col md:flex-row items-center bg-gray-100 p-6 rounded-lg space-y-6">
                   
                        <div class="max-w-6xl mx-auto py-12 px-6">
                            <!-- Section -->
                            <div class="grid md:grid-cols-2 gap-8 items-center bg-white p-8 rounded-lg shadow-md">
                                <div>
                                    <h2 class="text-3xl font-bold text-gray-900">Website</h2>
                                    <p class="text-gray-600 mt-3">Connect your URL to a QR code so everyone can access your website quickly and easily.</p>
                                    <button class="mt-5 bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700">Generate QR Code for Website</button>
                                </div>
                                <div>
                                    <img src="image.png" alt="QR Code Generator" class="w-full max-w-sm mx-auto">
                                </div>
                            </div>
                            
                            <!-- Repeat sections for PDF and Product -->
                            <div class="grid md:grid-cols-2 gap-8 items-center bg-white p-8 rounded-lg shadow-md mt-10">
                                <div>
                                    <h2 class="text-3xl font-bold text-gray-900">PDF</h2>
                                    <p class="text-gray-600 mt-3">Give your clients access to PDF documents quickly and efficiently.</p>
                                    <button class="mt-5 bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700">Generate QR Code for PDF</button>
                                </div>
                                <div>
                                    <img src="image.png" alt="QR Code PDF" class="w-full max-w-sm mx-auto">
                                </div>
                            </div>
                            
                            <div class="grid md:grid-cols-2 gap-8 items-center bg-white p-8 rounded-lg shadow-md mt-10">
                                <div>
                                    <h2 class="text-3xl font-bold text-gray-900">Product</h2>
                                    <p class="text-gray-600 mt-3">Display key information about your products in a single QR code.</p>
                                    <button class="mt-5 bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700">Generate QR Code for Product</button>
                                </div>
                                <div>
                                    <img src="image.png" alt="QR Code Product" class="w-full max-w-sm mx-auto">
                                </div>
                            </div>
                        </div>
                   
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const slider = document.getElementById("slider");
            const tabsContainer = document.getElementById("tabsContainer");
            const tabs = document.querySelectorAll(".tab-btn");
            const prevBtn = document.getElementById("prevBtn");
            const nextBtn = document.getElementById("nextBtn");
    
            if (!slider || !tabs.length) return; // Prevent script from running on an empty slider
    
            let slideIndex = 1;
            let autoSlide;
            const totalSlides = slider.children.length;
    
            if (totalSlides > 1) {
                // Clone first and last slides for infinite loop effect
                const firstClone = slider.children[0].cloneNode(true);
                const lastClone = slider.children[totalSlides - 1].cloneNode(true);
                slider.appendChild(firstClone);
                slider.insertBefore(lastClone, slider.firstChild);
    
                // Adjust slider position after cloning
                slider.style.transform = `translateX(-100%)`;
            }
    
            function updateSlidePosition() {
                slider.style.transition = "transform 0.5s ease-in-out";
                slider.style.transform = `translateX(-${slideIndex * 100}%)`;
    
                // Update tabs
                tabs.forEach(tab => {
                    tab.classList.remove("tab-active");
                    tab.setAttribute("aria-selected", "false");
                    tab.classList.add("bg-gray-200", "text-gray-700");
                });
    
                let currentTabIndex = (slideIndex - 1 + totalSlides) % totalSlides;
                tabs[currentTabIndex].classList.add("tab-active");
                tabs[currentTabIndex].setAttribute("aria-selected", "true");
                tabs[currentTabIndex].classList.remove("bg-gray-200", "text-gray-700");
            }
    
            function nextSlide() {
                slideIndex++;
                updateSlidePosition();
            }
    
            function goToSlide(index) {
                slideIndex = index + 1;
                updateSlidePosition();
            }
    
            tabs.forEach((tab, index) => {
                tab.addEventListener("click", () => goToSlide(index));
            });
    
            nextBtn?.addEventListener("click", nextSlide);
            prevBtn?.addEventListener("click", () => {
                slideIndex--;
                updateSlidePosition();
            });
    
            slider.addEventListener("transitionend", () => {
                if (slideIndex === totalSlides + 1) {
                    slider.style.transition = "none";
                    slideIndex = 1;
                    slider.style.transform = `translateX(-100%)`;
                }
            });
    
            function startAutoSlide() {
                autoSlide = setInterval(nextSlide, 4000);
            }
    
            function stopAutoSlide() {
                clearInterval(autoSlide);
            }
    
            startAutoSlide();
        });
    </script>
    
</body>

</html>
