<div class="max-w-4xl mx-auto p-6 md:mt-20 rounded-lg shadow-lg bg-white/40 backdrop-blur-lg">
    <!-- Tabs Container -->
    <div class="border-b border-gray-200 mb-6">
        <div class="flex space-x-4 overflow-x-auto">
            <button id="website" data-tab="tab-website"
                class="tab-btn active px-4 py-2 text-lg font-medium rounded-md bg-gray-200 text-gray-700 transition duration-300 ease-in-out transform hover:scale-105 focus:outline-none">
                <i class='bx bx-globe'></i> website
            </button>
            <button id="url" data-tab="tab-url"
                class="tab-btn active px-4 py-2 text-lg font-medium rounded-md bg-gray-200 text-gray-700 transition duration-300 ease-in-out transform hover:scale-105 focus:outline-none">
                <i class='bx bx-link'></i>URL
            </button>
            <button id="text" data-tab="tab-text"
                class="tab-btn px-4 py-2 text-lg font-medium rounded-md text-gray-700 hover:bg-gray-200 transition duration-300 ease-in-out transform hover:scale-105 focus:outline-none">
                <i class='bx bx-text' style='color:#242222'></i>Text
            </button>
            <button id="pdf" data-tab="tab-pdf"
                class="tab-btn px-4 py-2 text-lg font-medium rounded-md text-gray-700 hover:bg-gray-200 transition duration-300 ease-in-out transform hover:scale-105 focus:outline-none">
                <i class='bx bxs-file-pdf' style='color:#2e2a2a'></i>PDF
            </button>
            <button id="img" data-tab="tab-img"
                class="tab-btn px-4 py-2 text-lg font-medium rounded-md text-gray-700 hover:bg-gray-200 transition duration-300 ease-in-out transform hover:scale-105 focus:outline-none">
                <i class='bx bx-image-alt' style='color:#261f1f'></i> IMAGE
            </button>
            <button id="video" data-tab="tab-video"
                class="tab-btn px-4 py-2 text-lg font-medium rounded-md text-gray-700 hover:bg-gray-200 transition duration-300 ease-in-out transform hover:scale-105 focus:outline-none">
                <i class='bx bxs-videos' style='color:#241d1d'></i> Video
            </button>
            <button id="vcard" data-tab="tab-vcard"
                class="tab-btn px-4 py-2 text-lg font-medium rounded-md text-gray-700 hover:bg-gray-200 transition duration-300 ease-in-out transform hover:scale-105 focus:outline-none">
                <i class='bx bxs-credit-card' style='color:#373030'></i>Vcard plus
            </button>


            <!-- Dropdown Button -->
            <button id="dropdownButton"
                class="bg-white text-gray-800 p-2 px-4 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2">
                <i class='bx bx-chevron-down-circle' style='color:#0f0101'></i>
            </button>

            <!-- Dropdown Menu -->
            <div id="dropdownMenu" class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg hidden z-45">
                <ul class="py-2">
                    <li>
                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">vCard</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">WhatsApp</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Social Media</a>
                    </li>
                </ul>
            </div>


            <script>
                document.addEventListener('DOMContentLoaded', () => {
                    const dropdownButton = document.getElementById('dropdownButton');
                    const dropdownMenu = document.getElementById('dropdownMenu');

                    dropdownButton.addEventListener('click', (event) => {
                        event.stopPropagation(); // Prevent immediate closing when clicking the button
                        dropdownMenu.classList.toggle('hidden');
                    });

                    // Close the dropdown if clicked outside
                    document.addEventListener('click', (event) => {
                        if (!dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
                            dropdownMenu.classList.add('hidden');
                        }
                    });
                });
            </script>

        </div>
    </div>

    <!-- website Content -->
    <section id="tab-website" class="tab-content mt-6">
        <div class="grid md:grid-cols-2 gap-8">
            <!-- Left Section -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Complete the website</h2>
                <textarea
                    class="w-full h-32 p-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none resize-none"
                    placeholder="Enter some text..."></textarea>

                <div class="mt-6">
                    <h2 class="text-lg font-semibold text-gray-700">2. Design Your QR</h2>

                    <!-- Tab Buttons -->
                    <div class="flex flex-wrap gap-4 mb-4" role="tablist">
                        <button id="frame-tab"
                            class="tab-button px-4 py-2 rounded-lg shadow-md transition bg-blue-500 text-white"
                            role="tab" aria-controls="frame-content" aria-selected="true"
                            data-target="frame-content">
                            Frame
                        </button>
                        <button id="shape-tab"
                            class="tab-button px-4 py-2 bg-gray-200 rounded-lg shadow-md hover:bg-gray-300 transition"
                            role="tab" aria-controls="shape-content" aria-selected="false"
                            data-target="shape-content">
                            Shape
                        </button>
                        <button id="logo-tab"
                            class="tab-button px-4 py-2 bg-gray-200 rounded-lg shadow-md hover:bg-gray-300 transition"
                            role="tab" aria-controls="logo-content" aria-selected="false"
                            data-target="logo-content">
                            Logo
                        </button>
                        <button id="level-tab"
                            class="tab-button px-4 py-2 bg-gray-200 rounded-lg shadow-md hover:bg-gray-300 transition"
                            role="tab" aria-controls="level-content" aria-selected="false"
                            data-target="level-content">
                            Level
                        </button>
                    </div>

                    <!-- Tab Contents -->
                    <div class="tab-contents">
                        <!-- Frame Content -->
                        <div id="frame-content" role="tabpanel" aria-labelledby="frame-tab" class="tab-pane active">
                            <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
                                <div class="flex flex-col items-center">
                                    <div class="w-16 h-16 border rounded-lg bg-gray-100">--</div>
                                    <span class="mt-2 text-sm text-gray-600">No Frame</span>
                                </div>
                                <div class="flex flex-col items-center">
                                    <div class="w-16 h-16 border rounded-lg bg-gray-100">📧</div>
                                    <span class="mt-2 text-sm text-gray-600">Envelope</span>
                                </div>
                                <div class="flex flex-col items-center">
                                    <div class="w-16 h-16 border rounded-lg bg-gray-100">📄</div>
                                    <span class="mt-2 text-sm text-gray-600">Paper</span>
                                </div>
                                <div class="flex flex-col items-center">
                                    <div class="w-16 h-16 border rounded-lg bg-gray-100">☕</div>
                                    <span class="mt-2 text-sm text-gray-600">Coffee</span>
                                </div>
                            </div>
                        </div>

                        <!-- Shape Content -->
                        <div id="shape-content" role="tabpanel" aria-labelledby="shape-tab" class="tab-pane hidden">
                            <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
                                <div class="flex flex-col items-center">
                                    <div class="w-16 h-16 border rounded-lg bg-gray-100">◻️</div>
                                    <span class="mt-2 text-sm text-gray-600">Square</span>
                                </div>
                                <div class="flex flex-col items-center">
                                    <div class="w-16 h-16 border rounded-full bg-gray-100">🔘</div>
                                    <span class="mt-2 text-sm text-gray-600">Circle</span>
                                </div>
                                <div class="flex flex-col items-center">
                                    <div class="w-16 h-16 border rounded-lg bg-gray-100 transform rotate-45">♦️</div>
                                    <span class="mt-2 text-sm text-gray-600">Diamond</span>
                                </div>
                                <div class="flex flex-col items-center">
                                    <div class="w-16 h-16 border rounded-lg bg-gray-100">⭐</div>
                                    <span class="mt-2 text-sm text-gray-600">Star</span>
                                </div>
                            </div>
                        </div>

                        <!-- Logo Content -->
                        <div id="logo-content" role="tabpanel" aria-labelledby="logo-tab" class="tab-pane hidden">
                            <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
                                <div class="flex flex-col items-center">
                                    <div
                                        class="w-16 h-16 border rounded-lg bg-gray-100 flex items-center justify-center">
                                        <span class="text-2xl">🏢</span>
                                    </div>
                                    <span class="mt-2 text-sm text-gray-600">Company</span>
                                </div>
                                <div class="flex flex-col items-center">
                                    <div
                                        class="w-16 h-16 border rounded-lg bg-gray-100 flex items-center justify-center">
                                        <span class="text-2xl">🖼️</span>
                                    </div>
                                    <span class="mt-2 text-sm text-gray-600">Custom</span>
                                </div>
                            </div>
                        </div>

                        <!-- Level Content -->
                        <div id="level-content" role="tabpanel" aria-labelledby="level-tab" class="tab-pane hidden">
                            <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
                                <div class="flex flex-col items-center">
                                    <div
                                        class="w-16 h-16 border rounded-lg bg-gray-100 flex items-center justify-center">
                                        L</div>
                                    <span class="mt-2 text-sm text-gray-600">Low</span>
                                </div>
                                <div class="flex flex-col items-center">
                                    <div
                                        class="w-16 h-16 border rounded-lg bg-gray-100 flex items-center justify-center">
                                        M</div>
                                    <span class="mt-2 text-sm text-gray-600">Medium</span>
                                </div>
                                <div class="flex flex-col items-center">
                                    <div
                                        class="w-16 h-16 border rounded-lg bg-gray-100 flex items-center justify-center">
                                        Q</div>
                                    <span class="mt-2 text-sm text-gray-600">Quartile</span>
                                </div>
                                <div class="flex flex-col items-center">
                                    <div
                                        class="w-16 h-16 border rounded-lg bg-gray-100 flex items-center justify-center">
                                        H</div>
                                    <span class="mt-2 text-sm text-gray-600">High</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const tabButtons = document.querySelectorAll('.tab-button');
                        const tabPanes = document.querySelectorAll('.tab-pane');
                
                        function activateTab(target) {
                            // Ensure the parent section stays visible
                            document.getElementById('tab-website').classList.remove('hidden');
                
                            // Remove active state from all buttons
                            tabButtons.forEach(btn => {
                                btn.classList.remove('bg-blue-500', 'text-white');
                                btn.classList.add('bg-gray-200', 'hover:bg-gray-300');
                                btn.setAttribute('aria-selected', 'false');
                            });
                
                            // Hide all tab contents first
                            tabPanes.forEach(pane => {
                                pane.classList.add('hidden');
                            });
                
                            // Activate the selected button
                            const activeButton = document.querySelector(`[data-target="${target}"]`);
                            if (activeButton) {
                                activeButton.classList.remove('bg-gray-200', 'hover:bg-gray-300');
                                activeButton.classList.add('bg-blue-500', 'text-white');
                                activeButton.setAttribute('aria-selected', 'true');
                            }
                
                            // Show the targeted tab content
                            const activeTab = document.getElementById(target);
                            if (activeTab) {
                                activeTab.classList.remove('hidden');
                            }
                        }
                
                        // Default active tab on load
                        activateTab('frame-content');
                
                        // Add click event to all tab buttons
                        tabButtons.forEach(button => {
                            button.addEventListener('click', function(e) {
                                e.preventDefault();
                                const target = this.dataset.target;
                                activateTab(target);
                            });
                        });
                    });
                </script>
                
                
            </div>

            <!-- Right Section -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-semibold text-gray-800 mb-6">Download QR</h2>
                <div class="flex flex-col items-center gap-6">
                    <div
                        class="w-32 h-32 bg-gray-100 border border-gray-300 rounded-md flex items-center justify-center">
                        <img src="{{ asset('asset/img/qr.jpg') }}" alt="QR Code" class="w-24 h-24 object-contain" />
                    </div>
                    <button
                        class="flex items-center gap-2 px-6 py-2 text-sm font-medium text-blue-600 border border-blue-600 rounded-lg hover:bg-blue-50 focus:outline-none focus:ring-2 focus:ring-blue-500 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                        </svg>
                        Download QR
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- URL Content -->
    <section id="tab-url" class="tab-content mt-6">
        <div class="grid md:grid-cols-2 gap-8">
            <!-- Left Section -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Complete the Content</h2>
                <textarea
                    class="w-full h-32 p-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none resize-none"
                    placeholder="Enter some text..."></textarea>

                    <div class="mt-6">
                        <h2 class="text-lg font-semibold text-gray-700">2. Design Your QR</h2>
    
                        <!-- Tab Buttons -->
                        <div class="flex flex-wrap gap-4 mb-4" role="tablist">
                            <button id="frame-tab"
                                class="tab-button px-4 py-2 rounded-lg shadow-md transition bg-blue-500 text-white"
                                role="tab" aria-controls="frame-content" aria-selected="true"
                                data-target="frame-content">
                                Frame
                            </button>
                            <button id="shape-tab"
                                class="tab-button px-4 py-2 bg-gray-200 rounded-lg shadow-md hover:bg-gray-300 transition"
                                role="tab" aria-controls="shape-content" aria-selected="false"
                                data-target="shape-content">
                                Shape
                            </button>
                            <button id="logo-tab"
                                class="tab-button px-4 py-2 bg-gray-200 rounded-lg shadow-md hover:bg-gray-300 transition"
                                role="tab" aria-controls="logo-content" aria-selected="false"
                                data-target="logo-content">
                                Logo
                            </button>
                            <button id="level-tab"
                                class="tab-button px-4 py-2 bg-gray-200 rounded-lg shadow-md hover:bg-gray-300 transition"
                                role="tab" aria-controls="level-content" aria-selected="false"
                                data-target="level-content">
                                Level
                            </button>
                        </div>
    
                        <!-- Tab Contents -->
                        <div class="tab-contents">
                            <!-- Frame Content -->
                            <div id="frame-content" role="tabpanel" aria-labelledby="frame-tab" class="tab-pane active">
                                <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
                                    <div class="flex flex-col items-center">
                                        <div class="w-16 h-16 border rounded-lg bg-gray-100">--</div>
                                        <span class="mt-2 text-sm text-gray-600">No Frame</span>
                                    </div>
                                    <div class="flex flex-col items-center">
                                        <div class="w-16 h-16 border rounded-lg bg-gray-100">📧</div>
                                        <span class="mt-2 text-sm text-gray-600">Envelope</span>
                                    </div>
                                    <div class="flex flex-col items-center">
                                        <div class="w-16 h-16 border rounded-lg bg-gray-100">📄</div>
                                        <span class="mt-2 text-sm text-gray-600">Paper</span>
                                    </div>
                                    <div class="flex flex-col items-center">
                                        <div class="w-16 h-16 border rounded-lg bg-gray-100">☕</div>
                                        <span class="mt-2 text-sm text-gray-600">Coffee</span>
                                    </div>
                                </div>
                            </div>
    
                            <!-- Shape Content -->
                            <div id="shape-content" role="tabpanel" aria-labelledby="shape-tab" class="tab-pane hidden">
                                <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
                                    <div class="flex flex-col items-center">
                                        <div class="w-16 h-16 border rounded-lg bg-gray-100">◻️</div>
                                        <span class="mt-2 text-sm text-gray-600">Square</span>
                                    </div>
                                    <div class="flex flex-col items-center">
                                        <div class="w-16 h-16 border rounded-full bg-gray-100">🔘</div>
                                        <span class="mt-2 text-sm text-gray-600">Circle</span>
                                    </div>
                                    <div class="flex flex-col items-center">
                                        <div class="w-16 h-16 border rounded-lg bg-gray-100 transform rotate-45">♦️</div>
                                        <span class="mt-2 text-sm text-gray-600">Diamond</span>
                                    </div>
                                    <div class="flex flex-col items-center">
                                        <div class="w-16 h-16 border rounded-lg bg-gray-100">⭐</div>
                                        <span class="mt-2 text-sm text-gray-600">Star</span>
                                    </div>
                                </div>
                            </div>
    
                            <!-- Logo Content -->
                            <div id="logo-content" role="tabpanel" aria-labelledby="logo-tab" class="tab-pane hidden">
                                <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
                                    <div class="flex flex-col items-center">
                                        <div
                                            class="w-16 h-16 border rounded-lg bg-gray-100 flex items-center justify-center">
                                            <span class="text-2xl">🏢</span>
                                        </div>
                                        <span class="mt-2 text-sm text-gray-600">Company</span>
                                    </div>
                                    <div class="flex flex-col items-center">
                                        <div
                                            class="w-16 h-16 border rounded-lg bg-gray-100 flex items-center justify-center">
                                            <span class="text-2xl">🖼️</span>
                                        </div>
                                        <span class="mt-2 text-sm text-gray-600">Custom</span>
                                    </div>
                                </div>
                            </div>
    
                            <!-- Level Content -->
                            <div id="level-content" role="tabpanel" aria-labelledby="level-tab" class="tab-pane hidden">
                                <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
                                    <div class="flex flex-col items-center">
                                        <div
                                            class="w-16 h-16 border rounded-lg bg-gray-100 flex items-center justify-center">
                                            L</div>
                                        <span class="mt-2 text-sm text-gray-600">Low</span>
                                    </div>
                                    <div class="flex flex-col items-center">
                                        <div
                                            class="w-16 h-16 border rounded-lg bg-gray-100 flex items-center justify-center">
                                            M</div>
                                        <span class="mt-2 text-sm text-gray-600">Medium</span>
                                    </div>
                                    <div class="flex flex-col items-center">
                                        <div
                                            class="w-16 h-16 border rounded-lg bg-gray-100 flex items-center justify-center">
                                            Q</div>
                                        <span class="mt-2 text-sm text-gray-600">Quartile</span>
                                    </div>
                                    <div class="flex flex-col items-center">
                                        <div
                                            class="w-16 h-16 border rounded-lg bg-gray-100 flex items-center justify-center">
                                            H</div>
                                        <span class="mt-2 text-sm text-gray-600">High</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            const tabButtons = document.querySelectorAll('.tab-button');
                            const tabPanes = document.querySelectorAll('.tab-pane');
                    
                            function activateTab(target) {
                                // Ensure the parent section stays visible
                                document.getElementById('tab-website').classList.remove('hidden');
                    
                                // Remove active state from all buttons
                                tabButtons.forEach(btn => {
                                    btn.classList.remove('bg-blue-500', 'text-white');
                                    btn.classList.add('bg-gray-200', 'hover:bg-gray-300');
                                    btn.setAttribute('aria-selected', 'false');
                                });
                    
                                // Hide all tab contents first
                                tabPanes.forEach(pane => {
                                    pane.classList.add('hidden');
                                });
                    
                                // Activate the selected button
                                const activeButton = document.querySelector(`[data-target="${target}"]`);
                                if (activeButton) {
                                    activeButton.classList.remove('bg-gray-200', 'hover:bg-gray-300');
                                    activeButton.classList.add('bg-blue-500', 'text-white');
                                    activeButton.setAttribute('aria-selected', 'true');
                                }
                    
                                // Show the targeted tab content
                                const activeTab = document.getElementById(target);
                                if (activeTab) {
                                    activeTab.classList.remove('hidden');
                                }
                            }
                    
                            // Default active tab on load
                            activateTab('frame-content');
                    
                            // Add click event to all tab buttons
                            tabButtons.forEach(button => {
                                button.addEventListener('click', function(e) {
                                    e.preventDefault();
                                    const target = this.dataset.target;
                                    activateTab(target);
                                });
                            });
                        });
                    </script>
                    
            </div>

            <!-- Right Section -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-semibold text-gray-800 mb-6">Download QR</h2>
                <div class="flex flex-col items-center gap-6">
                    <div
                        class="w-32 h-32 bg-gray-100 border border-gray-300 rounded-md flex items-center justify-center">
                        <img src="{{ asset('asset/img/qr.jpg') }}" alt="QR Code" class="w-24 h-24 object-contain" />
                    </div>
                    <button
                        class="flex items-center gap-2 px-6 py-2 text-sm font-medium text-blue-600 border border-blue-600 rounded-lg hover:bg-blue-50 focus:outline-none focus:ring-2 focus:ring-blue-500 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                        </svg>
                        Download QR
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Text Content -->
    <section id="tab-text" class="tab-content hidden mt-6">
        <div class="grid md:grid-cols-2 gap-8">
            <!-- Left Section -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Complete the Text</h2>
                <textarea
                    class="w-full h-32 p-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none resize-none"
                    placeholder="Enter some text..."></textarea>

                    <div class="mt-6">
                        <h2 class="text-lg font-semibold text-gray-700">2. Design Your QR</h2>
    
                        <!-- Tab Buttons -->
                        <div class="flex flex-wrap gap-4 mb-4" role="tablist">
                            <button id="frame-tab"
                                class="tab-button px-4 py-2 rounded-lg shadow-md transition bg-blue-500 text-white"
                                role="tab" aria-controls="frame-content" aria-selected="true"
                                data-target="frame-content">
                                Frame
                            </button>
                            <button id="shape-tab"
                                class="tab-button px-4 py-2 bg-gray-200 rounded-lg shadow-md hover:bg-gray-300 transition"
                                role="tab" aria-controls="shape-content" aria-selected="false"
                                data-target="shape-content">
                                Shape
                            </button>
                            <button id="logo-tab"
                                class="tab-button px-4 py-2 bg-gray-200 rounded-lg shadow-md hover:bg-gray-300 transition"
                                role="tab" aria-controls="logo-content" aria-selected="false"
                                data-target="logo-content">
                                Logo
                            </button>
                            <button id="level-tab"
                                class="tab-button px-4 py-2 bg-gray-200 rounded-lg shadow-md hover:bg-gray-300 transition"
                                role="tab" aria-controls="level-content" aria-selected="false"
                                data-target="level-content">
                                Level
                            </button>
                        </div>
    
                        <!-- Tab Contents -->
                        <div class="tab-contents">
                            <!-- Frame Content -->
                            <div id="frame-content" role="tabpanel" aria-labelledby="frame-tab" class="tab-pane active">
                                <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
                                    <div class="flex flex-col items-center">
                                        <div class="w-16 h-16 border rounded-lg bg-gray-100">--</div>
                                        <span class="mt-2 text-sm text-gray-600">No Frame</span>
                                    </div>
                                    <div class="flex flex-col items-center">
                                        <div class="w-16 h-16 border rounded-lg bg-gray-100">📧</div>
                                        <span class="mt-2 text-sm text-gray-600">Envelope</span>
                                    </div>
                                    <div class="flex flex-col items-center">
                                        <div class="w-16 h-16 border rounded-lg bg-gray-100">📄</div>
                                        <span class="mt-2 text-sm text-gray-600">Paper</span>
                                    </div>
                                    <div class="flex flex-col items-center">
                                        <div class="w-16 h-16 border rounded-lg bg-gray-100">☕</div>
                                        <span class="mt-2 text-sm text-gray-600">Coffee</span>
                                    </div>
                                </div>
                            </div>
    
                            <!-- Shape Content -->
                            <div id="shape-content" role="tabpanel" aria-labelledby="shape-tab" class="tab-pane hidden">
                                <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
                                    <div class="flex flex-col items-center">
                                        <div class="w-16 h-16 border rounded-lg bg-gray-100">◻️</div>
                                        <span class="mt-2 text-sm text-gray-600">Square</span>
                                    </div>
                                    <div class="flex flex-col items-center">
                                        <div class="w-16 h-16 border rounded-full bg-gray-100">🔘</div>
                                        <span class="mt-2 text-sm text-gray-600">Circle</span>
                                    </div>
                                    <div class="flex flex-col items-center">
                                        <div class="w-16 h-16 border rounded-lg bg-gray-100 transform rotate-45">♦️</div>
                                        <span class="mt-2 text-sm text-gray-600">Diamond</span>
                                    </div>
                                    <div class="flex flex-col items-center">
                                        <div class="w-16 h-16 border rounded-lg bg-gray-100">⭐</div>
                                        <span class="mt-2 text-sm text-gray-600">Star</span>
                                    </div>
                                </div>
                            </div>
    
                            <!-- Logo Content -->
                            <div id="logo-content" role="tabpanel" aria-labelledby="logo-tab" class="tab-pane hidden">
                                <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
                                    <div class="flex flex-col items-center">
                                        <div
                                            class="w-16 h-16 border rounded-lg bg-gray-100 flex items-center justify-center">
                                            <span class="text-2xl">🏢</span>
                                        </div>
                                        <span class="mt-2 text-sm text-gray-600">Company</span>
                                    </div>
                                    <div class="flex flex-col items-center">
                                        <div
                                            class="w-16 h-16 border rounded-lg bg-gray-100 flex items-center justify-center">
                                            <span class="text-2xl">🖼️</span>
                                        </div>
                                        <span class="mt-2 text-sm text-gray-600">Custom</span>
                                    </div>
                                </div>
                            </div>
    
                            <!-- Level Content -->
                            <div id="level-content" role="tabpanel" aria-labelledby="level-tab" class="tab-pane hidden">
                                <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
                                    <div class="flex flex-col items-center">
                                        <div
                                            class="w-16 h-16 border rounded-lg bg-gray-100 flex items-center justify-center">
                                            L</div>
                                        <span class="mt-2 text-sm text-gray-600">Low</span>
                                    </div>
                                    <div class="flex flex-col items-center">
                                        <div
                                            class="w-16 h-16 border rounded-lg bg-gray-100 flex items-center justify-center">
                                            M</div>
                                        <span class="mt-2 text-sm text-gray-600">Medium</span>
                                    </div>
                                    <div class="flex flex-col items-center">
                                        <div
                                            class="w-16 h-16 border rounded-lg bg-gray-100 flex items-center justify-center">
                                            Q</div>
                                        <span class="mt-2 text-sm text-gray-600">Quartile</span>
                                    </div>
                                    <div class="flex flex-col items-center">
                                        <div
                                            class="w-16 h-16 border rounded-lg bg-gray-100 flex items-center justify-center">
                                            H</div>
                                        <span class="mt-2 text-sm text-gray-600">High</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            const tabButtons = document.querySelectorAll('.tab-button');
                            const tabPanes = document.querySelectorAll('.tab-pane');
                    
                            function activateTab(target) {
                                // Ensure the parent section stays visible
                                document.getElementById('tab-website').classList.remove('hidden');
                    
                                // Remove active state from all buttons
                                tabButtons.forEach(btn => {
                                    btn.classList.remove('bg-blue-500', 'text-white');
                                    btn.classList.add('bg-gray-200', 'hover:bg-gray-300');
                                    btn.setAttribute('aria-selected', 'false');
                                });
                    
                                // Hide all tab contents first
                                tabPanes.forEach(pane => {
                                    pane.classList.add('hidden');
                                });
                    
                                // Activate the selected button
                                const activeButton = document.querySelector(`[data-target="${target}"]`);
                                if (activeButton) {
                                    activeButton.classList.remove('bg-gray-200', 'hover:bg-gray-300');
                                    activeButton.classList.add('bg-blue-500', 'text-white');
                                    activeButton.setAttribute('aria-selected', 'true');
                                }
                    
                                // Show the targeted tab content
                                const activeTab = document.getElementById(target);
                                if (activeTab) {
                                    activeTab.classList.remove('hidden');
                                }
                            }
                    
                            // Default active tab on load
                            activateTab('frame-content');
                    
                            // Add click event to all tab buttons
                            tabButtons.forEach(button => {
                                button.addEventListener('click', function(e) {
                                    e.preventDefault();
                                    const target = this.dataset.target;
                                    activateTab(target);
                                });
                            });
                        });
                    </script>
                    
            </div>

            <!-- Right Section -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-semibold text-gray-800 mb-6">Download QR</h2>
                <div class="flex flex-col items-center gap-6">
                    <div
                        class="w-32 h-32 bg-gray-100 border border-gray-300 rounded-md flex items-center justify-center">
                        <img src="{{ asset('asset/img/qr.jpg') }}" alt="QR Code" class="w-24 h-24 object-contain" />
                    </div>
                    <button
                        class="flex items-center gap-2 px-6 py-2 text-sm font-medium text-blue-600 border border-blue-600 rounded-lg hover:bg-blue-50 focus:outline-none focus:ring-2 focus:ring-blue-500 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                        </svg>
                        Download QR
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- PDF Content -->
    <section id="tab-pdf" class="tab-content hidden mt-6">
        <!-- Same content structure as URL and Text sections -->
        <div class="container mx-auto px-4">
            <div
                class="bg-white p-6 rounded-lg shadow-lg flex flex-col md:flex-row items-center justify-between gap-6">
                <!-- Left Side - Text Content -->
                <div class="flex-1 text-center md:text-left">
                    <h2 class="text-2xl font-bold text-gray-800">QR PDF</h2>
                    <p class="text-gray-600 mt-2">
                        From menus to user guides to creative portfolios, give your clients access to PDF documents
                        quickly and efficiently.
                    </p>
                    <button
                        class="mt-4 px-6 py-2 bg-blue-600 text-white font-medium rounded-lg shadow-md hover:bg-blue-700 transition">
                        Register now
                    </button>
                </div>

                <!-- Right Side - QR Download Box -->
                <div class="bg-gray-50 p-4 rounded-lg shadow-md w-full max-w-xs text-center">
                    <h3 class="text-gray-700 font-semibold text-sm">3. Download your QR</h3>
                    <div class="mt-3 flex justify-center">
                        <div class="w-24 h-24 bg-gray-200 rounded-lg flex items-center justify-center">
                            <span class="text-gray-500 text-xl">⬛</span> <!-- Placeholder for QR -->
                        </div>
                    </div>
                    <button
                        class="mt-4 w-full px-4 py-2 bg-gray-300 text-gray-700 font-medium rounded-lg shadow-md hover:bg-gray-400 transition flex items-center justify-center">
                        Download QR <span class="ml-2">⬇️</span>
                    </button>
                </div>
            </div>
    </section>

    <!-- Image Content -->
    <section id="tab-img" class="tab-content hidden mt-6">
        <!-- Same content structure as URL and Text sections -->
        <div class="bg-white p-6 rounded-lg shadow-lg flex flex-col md:flex-row items-center justify-between gap-6">
            <!-- Left Side - Text Content -->
            <div class="flex-1 text-center md:text-left">
                <h2 class="text-2xl font-bold text-gray-800">QR Images</h2>
                <p class="text-gray-600 mt-2">
                    From menus to user guides to creative portfolios, give your clients access to PDF documents
                    quickly and efficiently.
                </p>
                <button
                    class="mt-4 px-6 py-2 bg-blue-600 text-white font-medium rounded-lg shadow-md hover:bg-blue-700 transition">
                    Register now
                </button>
            </div>

            <!-- Right Side - QR Download Box -->
            <div class="bg-gray-50 p-4 rounded-lg shadow-md w-full max-w-xs text-center">
                <h3 class="text-gray-700 font-semibold text-sm">3. Download your QR</h3>
                <div class="mt-3 flex justify-center">
                    <div class="w-24 h-24 bg-gray-200 rounded-lg flex items-center justify-center">
                        <span class="text-gray-500 text-xl">⬛</span> <!-- Placeholder for QR -->
                    </div>
                </div>
                <button
                    class="mt-4 w-full px-4 py-2 bg-gray-300 text-gray-700 font-medium rounded-lg shadow-md hover:bg-gray-400 transition flex items-center justify-center">
                    Download QR <span class="ml-2">⬇️</span>
                </button>
            </div>
        </div>
    </section>
    <!-- Image Content -->
    <section id="tab-video" class="tab-content hidden mt-6">
        <!-- Same content structure as URL and Text sections -->
        <div class="bg-white p-6 rounded-lg shadow-lg flex flex-col md:flex-row items-center justify-between gap-6">
            <!-- Left Side - Text Content -->
            <div class="flex-1 text-center md:text-left">
                <h2 class="text-2xl font-bold text-gray-800">QR video</h2>
                <p class="text-gray-600 mt-2">
                    From menus to user guides to creative portfolios, give your clients access to PDF documents
                    quickly and efficiently.
                </p>
                <button
                    class="mt-4 px-6 py-2 bg-blue-600 text-white font-medium rounded-lg shadow-md hover:bg-blue-700 transition">
                    Register now
                </button>
            </div>

            <!-- Right Side - QR Download Box -->
            <div class="bg-gray-50 p-4 rounded-lg shadow-md w-full max-w-xs text-center">
                <h3 class="text-gray-700 font-semibold text-sm">3. Download your QR</h3>
                <div class="mt-3 flex justify-center">
                    <div class="w-24 h-24 bg-gray-200 rounded-lg flex items-center justify-center">
                        <span class="text-gray-500 text-xl">⬛</span> <!-- Placeholder for QR -->
                    </div>
                </div>
                <button
                    class="mt-4 w-full px-4 py-2 bg-gray-300 text-gray-700 font-medium rounded-lg shadow-md hover:bg-gray-400 transition flex items-center justify-center">
                    Download QR <span class="ml-2">⬇️</span>
                </button>
            </div>
        </div>
    </section>
    <!-- video Content -->
    <section id="tab-video" class="tab-content hidden mt-6">
        <!-- Same content structure as URL and Text sections -->
        <div class="grid md:grid-cols-2 gap-8">
            <!-- Left Section -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Complete the Video</h2>
                <textarea
                    class="w-full h-32 p-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none resize-none"
                    placeholder="Enter some text..."></textarea>

                <div class="mt-6">
                    <h2 class="text-lg font-semibold text-gray-700">2. Design Your QR</h2>
                    <div class="flex flex-wrap gap-4 mb-4">
                        <button
                            class="px-4 py-2 bg-gray-200 rounded-lg shadow-md hover:bg-gray-300 transition">Frame</button>
                        <button
                            class="px-4 py-2 bg-gray-200 rounded-lg shadow-md hover:bg-gray-300 transition">Shape</button>
                        <button
                            class="px-4 py-2 bg-gray-200 rounded-lg shadow-md hover:bg-gray-300 transition">Logo</button>
                        <button
                            class="px-4 py-2 bg-gray-200 rounded-lg shadow-md hover:bg-gray-300 transition">Level</button>
                    </div>

                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
                        <div class="flex flex-col items-center">
                            <div class="w-16 h-16 border rounded-lg bg-gray-100">--</div>
                            <span class="mt-2 text-sm text-gray-600">No Frame</span>
                        </div>
                        <div class="flex flex-col items-center">
                            <div class="w-16 h-16 border rounded-lg bg-gray-100">📧</div>
                            <span class="mt-2 text-sm text-gray-600">Envelope</span>
                        </div>
                        <div class="flex flex-col items-center">
                            <div class="w-16 h-16 border rounded-lg bg-gray-100">📄</div>
                            <span class="mt-2 text-sm text-gray-600">Paper</span>
                        </div>
                        <div class="flex flex-col items-center">
                            <div class="w-16 h-16 border rounded-lg bg-gray-100">☕</div>
                            <span class="mt-2 text-sm text-gray-600">Coffee</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Section -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-semibold text-gray-800 mb-6">Download QR</h2>
                <div class="flex flex-col items-center gap-6">
                    <div
                        class="w-32 h-32 bg-gray-100 border border-gray-300 rounded-md flex items-center justify-center">
                        <img src="{{ asset('asset/img/qr.jpg') }}" alt="QR Code" class="w-24 h-24 object-contain" />
                    </div>
                    <button
                        class="flex items-center gap-2 px-6 py-2 text-sm font-medium text-blue-600 border border-blue-600 rounded-lg hover:bg-blue-50 focus:outline-none focus:ring-2 focus:ring-blue-500 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                        </svg>
                        Download QR
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!-- Vcard plus Content -->
    <section id="tab-vcard" class="tab-content hidden mt-6">
        <!-- Same content structure as URL and Text sections -->
        <div class="bg-white p-6 rounded-lg shadow-lg flex flex-col md:flex-row items-center justify-between gap-6">
            <!-- Left Side - Text Content -->
            <div class="flex-1 text-center md:text-left">
                <h2 class="text-2xl font-bold text-gray-800">QR Vcard Plus</h2>
                <p class="text-gray-600 mt-2">
                    From menus to user guides to creative portfolios, give your clients access to PDF documents
                    quickly and efficiently.
                </p>
                <button
                    class="mt-4 px-6 py-2 bg-blue-600 text-white font-medium rounded-lg shadow-md hover:bg-blue-700 transition">
                    Register now
                </button>
            </div>

            <!-- Right Side - QR Download Box -->
            <div class="bg-gray-50 p-4 rounded-lg shadow-md w-full max-w-xs text-center">
                <h3 class="text-gray-700 font-semibold text-sm">3. Download your QR</h3>
                <div class="mt-3 flex justify-center">
                    <div class="w-24 h-24 bg-gray-200 rounded-lg flex items-center justify-center">
                        <span class="text-gray-500 text-xl">⬛</span> <!-- Placeholder for QR -->
                    </div>
                </div>
                <button
                    class="mt-4 w-full px-4 py-2 bg-gray-300 text-gray-700 font-medium rounded-lg shadow-md hover:bg-gray-400 transition flex items-center justify-center">
                    Download QR <span class="ml-2">⬇️</span>
                </button>
            </div>
        </div>
    </section>
</div>

<!-- Add the following JavaScript to handle tab switching -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const tabButtons = document.querySelectorAll('.tab-btn');
        const tabContents = document.querySelectorAll('.tab-content');

        tabButtons.forEach(button => {
            button.addEventListener('click', () => {
                // Remove active class from all buttons and hide all content
                tabButtons.forEach(btn => btn.classList.remove('active'));
                tabContents.forEach(content => content.classList.add('hidden'));

                // Add active class to the clicked button and show corresponding content
                button.classList.add('active');
                const tabId = button.getAttribute('data-tab');
                document.getElementById(tabId).classList.remove('hidden');
            });
        });

        // Set the first tab (URL) as active by default
        document.getElementById('website').classList.add('active');
        document.getElementById('tab-website').classList.remove('hidden');
    });
</script>
