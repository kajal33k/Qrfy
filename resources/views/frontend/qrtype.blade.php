@extends('components.main')
@section('content')
    <!-- Hero Section -->
    <div class="bg-gradient-to-t to-red-400 from-gray-200 px-4 lg:px-20 py-12 flex flex-col-reverse lg:flex-row items-center gap-8">
        <!-- Text Section -->
        <div class="text-center lg:text-left lg:max-w-lg">
            <p class="text-gray-600 font-medium text-sm lg:text-base">Generate a Website QR Code</p>
            <h1 class="text-3xl lg:text-5xl font-bold mt-2 text-gray-900 leading-tight">
                Share a <span class="text-blue-600">Website</span> with your customers with a simple scan
            </h1>
            <p class="text-gray-600 mt-4 text-sm lg:text-base">And allow them to easily access the landing page of your choice. You can edit your URL as many times as you need, even after printing your QR code.</p>
            <button class="mt-6 bg-blue-600 text-white px-6 py-3 rounded-lg text-sm lg:text-base font-medium shadow-md hover:bg-blue-700 transition-all">
                Create QR code →
            </button>
        </div>

        <!-- Image Section -->
        <div class="relative w-full max-w-xs lg:max-w-md">
            <div class="flex justify-center">
                <div class="relative bg-black rounded-[2rem] w-48 lg:w-56 h-auto shadow-xl border-4 border-gray-800 overflow-hidden">
                    <div class="absolute top-0 w-24 h-2 bg-gray-800 rounded-b-lg"></div>
                    <img src="{{ asset('asset/img/section11') }}" alt="QR Code Preview" class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </div>

    <!-- Categories Section -->
    <div class="py-12 bg-white">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <h1 class="text-2xl lg:text-3xl font-bold text-gray-900">Learn about some of the multiple uses of the Website QR</h1>
            <p class="text-gray-600 mt-2 text-sm lg:text-base px-4">It doesn't matter what your industry is: expand the reach of your business by improving your customers' experience through direct and quick access to your URLs of interest.</p>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-2 lg:gap-4 mt-6 px-4">
                <button class="category-btn border-2 border-gray-300 rounded-lg p-2 lg:p-4 flex flex-col items-center text-gray-700 hover:border-blue-500 text-sm">
                    <span class="text-2xl lg:text-3xl">📦</span>
                    <span class="mt-1 lg:mt-2">Products</span>
                </button>
                <button class="category-btn border-2 border-gray-300 rounded-lg p-2 lg:p-4 flex flex-col items-center text-gray-700 hover:border-blue-500 text-sm">
                    <span class="text-2xl lg:text-3xl">🏪</span>
                    <span class="mt-1 lg:mt-2">Shops</span>
                </button>
                <button class="category-btn border-2 border-gray-300 rounded-lg p-2 lg:p-4 flex flex-col items-center text-gray-700 hover:border-blue-500 text-sm">
                    <span class="text-2xl lg:text-3xl">💻</span>
                    <span class="mt-1 lg:mt-2">Software</span>
                </button>
                <button class="category-btn border-2 border-gray-300 rounded-lg p-2 lg:p-4 flex flex-col items-center text-gray-700 hover:border-blue-500 text-sm">
                    <span class="text-2xl lg:text-3xl">🍽️</span>
                    <span class="mt-1 lg:mt-2">Restaurants</span>
                </button>
                <button class="category-btn border-2 border-gray-300 rounded-lg p-2 lg:p-4 flex flex-col items-center text-gray-700 hover:border-blue-500 text-sm">
                    <span class="text-2xl lg:text-3xl">❤️</span>
                    <span class="mt-1 lg:mt-2">NGOs</span>
                </button>
                <button class="category-btn border-2 border-gray-300 rounded-lg p-2 lg:p-4 flex flex-col items-center text-gray-700 hover:border-blue-500 text-sm">
                    <span class="text-2xl lg:text-3xl">💰</span>
                    <span class="mt-1 lg:mt-2">Finance & Insurance</span>
                </button>
            </div>
        </div>
    </div>

    <!-- Banner Sections -->
    <div class="bg-white">
        <!-- Banner 1 -->
        <div class="flex flex-col lg:flex-row items-center max-w-6xl mx-auto px-4 py-8 lg:py-12">
            <div class="w-full lg:w-1/2 mb-8 lg:mb-0">
                <img src="{{ asset('asset/img/banner-01-Ds5GKfUs.webp') }}" alt="QR Code Creation" class="w-full h-auto object-cover">
            </div>
            <div class="w-full lg:w-1/2 px-4 lg:px-8">
                <span class="text-blue-500 font-semibold text-lg">CREATE</span>
                <h1 class="text-2xl lg:text-3xl font-bold mt-2 mb-4">A fast and effective way to share any link instantly</h1>
                <p class="text-gray-600 text-base lg:text-lg mb-6">Websites, forms, download links, online files, social networks... any URL can be converted into a QR code.</p>
                <button class="bg-blue-500 text-white px-6 py-3 rounded-lg text-sm lg:text-base font-medium hover:bg-blue-600">
                    Generate QR Code
                </button>
            </div>
        </div>

        <!-- Banner 2 -->
        <div class="flex flex-col lg:flex-row items-center max-w-6xl mx-auto px-4 py-8 lg:py-12">
            <div class="w-full lg:w-1/2 mb-8 lg:mb-0 lg:order-last">
                <img src="{{ asset('asset/img/banner-02-BFtDQRYn.webp') }}" alt="QR Customization" class="w-full h-auto object-cover">
            </div>
            <div class="w-full lg:w-1/2 px-4 lg:px-8">
                <span class="text-blue-500 font-semibold text-lg">PERSONALIZE</span>
                <h1 class="text-2xl lg:text-3xl font-bold mt-2 mb-4">Customize your Website QR to make it easier to share</h1>
                <p class="text-gray-600 text-base lg:text-lg mb-6">You can shorten it and modify the text, so that it has your brand in the link, so that your customers know who it belongs to before accessing it.</p>
                <button class="bg-blue-500 text-white px-6 py-3 rounded-lg text-sm lg:text-base font-medium hover:bg-blue-600">
                    Generate QR Code
                </button>
            </div>
        </div>

        <!-- Banner 3 -->
        <div class="flex flex-col lg:flex-row items-center max-w-6xl mx-auto px-4 py-8 lg:py-12">
            <div class="w-full lg:w-1/2 mb-8 lg:mb-0">
                <img src="{{ asset('asset/img/banner-03-6zN3E2y2.webp') }}" alt="QR Flexibility" class="w-full h-auto object-cover">
            </div>
            <div class="w-full lg:w-1/2 px-4 lg:px-8">
                <span class="text-blue-500 font-semibold text-lg">FLEXIBILITY</span>
                <h1 class="text-2xl lg:text-3xl font-bold mt-2 mb-4">Customize your QR code to be more attractive</h1>
                <p class="text-gray-600 text-base lg:text-lg mb-6">Attract scans by customizing your QR with your own colors and logo. You can also choose the presentation and framework to improve the user experience.</p>
                <button class="bg-blue-500 text-white px-6 py-3 rounded-lg text-sm lg:text-base font-medium hover:bg-blue-600">
                    Generate QR Code
                </button>
            </div>
        </div>

        <!-- Banner 4 -->
        <div class="flex flex-col lg:flex-row items-center max-w-6xl mx-auto px-4 py-8 lg:py-12">
            <div class="w-full lg:w-1/2 mb-8 lg:mb-0 lg:order-last">
                <img src="{{ asset('asset/img/banner-04-CvCFp6q2.webp') }}" alt="QR Analytics" class="w-full h-auto object-cover">
            </div>
            <div class="w-full lg:w-1/2 px-4 lg:px-8">
                <span class="text-blue-500 font-semibold text-lg">TRACKING</span>
                <h1 class="text-2xl lg:text-3xl font-bold mt-2 mb-4">Monitor your QR code performance in real time</h1>
                <p class="text-gray-600 text-base lg:text-lg mb-6">Get detailed analytics on scans, locations, and devices used to access your QR codes.</p>
                <button class="bg-blue-500 text-white px-6 py-3 rounded-lg text-sm lg:text-base font-medium hover:bg-blue-600">
                    Generate QR Code
                </button>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <section class="max-w-full mx-auto py-12 bg-white px-24">
        <h2 class="text-3xl lg:text-4xl font-bold text-center text-gray-900 mb-8">All plans include:</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 px-4">
            <div class="flex items-start space-x-4">
                <img src="{{ asset('asset/img/icon1.jpg') }}" alt="Dynamic QR" class="w-6 h-6 lg:w-8 lg:h-8 mt-1">
                <div>
                    <h3 class="text-base lg:text-lg font-semibold text-gray-900">Unlimited dynamic QR</h3>
                    <p class="text-gray-600 text-sm lg:text-base">Create unlimited QRs and update them whenever you want in real time.</p>
                </div>
            </div>
            <div class="flex items-start space-x-4">
                <img src="{{ asset('asset/img/icon1.jpg') }}" alt="QR Types" class="w-6 h-6 lg:w-8 lg:h-8 mt-1">
                <div>
                    <h3 class="text-base lg:text-lg font-semibold text-gray-900">Variety of QR types</h3>
                    <p class="text-gray-600 text-sm lg:text-base">Choose from multiple QR types, such as URL, PDF, Menu, and more.</p>
                </div>
            </div>
            <div class="flex items-start space-x-4">
                <img src="{{ asset('asset/img/icon1.jpg') }}" alt="Download Formats" class="w-6 h-6 lg:w-8 lg:h-8 mt-1">
                <div>
                    <h3 class="text-base lg:text-lg font-semibold text-gray-900">Multiple download formats</h3>
                    <p class="text-gray-600 text-sm lg:text-base">Download your QR in PNG, SVG, PDF, and other formats.</p>
                </div>
            </div>
            <div class="flex items-start space-x-4">
                <img src="{{ asset('asset/img/icon1.jpg') }}" alt="Team Collaboration" class="w-6 h-6 lg:w-8 lg:h-8 mt-1">
                <div>
                    <h3 class="text-base lg:text-lg font-semibold text-gray-900">Unlimited Members</h3>
                    <p class="text-gray-600 text-sm lg:text-base">Invite users to collaborate in creation and management.</p>
                </div>
            </div>
            <div class="flex items-start space-x-4">
                <img src="{{ asset('asset/img/icon1.jpg') }}" alt="Analytics" class="w-6 h-6 lg:w-8 lg:h-8 mt-1">
                <div>
                    <h3 class="text-base lg:text-lg font-semibold text-gray-900">Complete QR Analytics</h3>
                    <p class="text-gray-600 text-sm lg:text-base">Get statistics on scans, locations, and devices.</p>
                </div>
            </div>
            <div class="flex items-start space-x-4">
                <img src="{{ asset('asset/img/icon1.jpg') }}" alt="Customization" class="w-6 h-6 lg:w-8 lg:h-8 mt-1">
                <div>
                    <h3 class="text-base lg:text-lg font-semibold text-gray-900">QR Editing & Management</h3>
                    <p class="text-gray-600 text-sm lg:text-base">Customize with colors, fonts, and logos.</p>
                </div>
            </div>
            <div class="flex items-start space-x-4">
                <img src="{{ asset('asset/img/icon1.jpg') }}" alt="Unlimited Scans" class="w-6 h-6 lg:w-8 lg:h-8 mt-1">
                <div>
                    <h3 class="text-base lg:text-lg font-semibold text-gray-900">Unlimited scans</h3>
                    <p class="text-gray-600 text-sm lg:text-base">Your QRs can be scanned without limits.</p>
                </div>
            </div>
            <div class="flex items-start space-x-4">
                <img src="{{ asset('asset/img/icon1.jpg') }}" alt="Bulk Creation" class="w-6 h-6 lg:w-8 lg:h-8 mt-1">
                <div>
                    <h3 class="text-base lg:text-lg font-semibold text-gray-900">Bulk creation</h3>
                    <p class="text-gray-600 text-sm lg:text-base">Generate multiple QRs with CSV or REST API.</p>
                </div>
            </div>
            <div class="flex items-start space-x-4">
                <img src="{{ asset('asset/img/icon1.jpg') }}" alt="Pixel Integration" class="w-6 h-6 lg:w-8 lg:h-8 mt-1">
                <div>
                    <h3 class="text-base lg:text-lg font-semibold text-gray-900">Pixel Integration</h3>
                    <p class="text-gray-600 text-sm lg:text-base">Integrate Google and Facebook Pixel tracking.</p>
                </div>
            </div>
            <div class="flex items-start space-x-4">
                <img src="{{ asset('asset/img/icon1.jpg') }}" alt="Premium Support" class="w-6 h-6 lg:w-8 lg:h-8 mt-1">
                <div>
                    <h3 class="text-base lg:text-lg font-semibold text-gray-900">Premium Support</h3>
                    <p class="text-gray-600 text-sm lg:text-base">Priority technical support for any issues.</p>
                </div>
            </div>
            <div class="flex items-start space-x-4">
                <img src="{{ asset('asset/img/icon1.jpg') }}" alt="Cancellation" class="w-6 h-6 lg:w-8 lg:h-8 mt-1">
                <div>
                    <h3 class="text-base lg:text-lg font-semibold text-gray-900">Flexible Cancellation</h3>
                    <p class="text-gray-600 text-sm lg:text-base">Cancel subscription anytime without restrictions.</p>
                </div>
            </div>
            <div class="flex items-start space-x-4">
                <img src="{{ asset('asset/img/icon1.jpg') }}" alt="Custom Domain" class="w-6 h-6 lg:w-8 lg:h-8 mt-1">
                <div>
                    <h3 class="text-base lg:text-lg font-semibold text-gray-900">Custom Domain</h3>
                    <p class="text-gray-600 text-sm lg:text-base">Use your own domain for QR URLs.</p>
                </div>
            </div>
        </div>
    </section>

    <script>
        function selectCategory(element) {
            document.querySelectorAll('.category-btn').forEach(btn => {
                btn.classList.remove('border-blue-500', 'text-blue-500');
            });
            element.classList.add('border-blue-500', 'text-blue-500');
        }

        document.addEventListener("DOMContentLoaded", () => {
            document.querySelectorAll(".flex").forEach((item, index) => {
                item.style.opacity = "0";
                setTimeout(() => {
                    item.style.transition = "opacity 0.5s ease-in-out";
                    item.style.opacity = "1";
                }, index * 100);
            });
        });
    </script>
@endsection

{{-- @push('styles')
<style>
    @media (max-width: 640px) {
        .category-btn {
            min-height: 100px;
            padding: 1rem;
        }
    }
</style>
@endpush --}}