@extends('components.main')
@section('content')
<div class="max-w-4xl mx-auto bg-white p-6 mt-10">
    <h1 class="text-3xl font-bold text-gray-800 text-center mb-6">Choose the Type of QR Code You Need to Improve Your Business</h1>
    
    <div class="space-y-6">
        <p class="text-gray-600 text-lg leading-relaxed">
            The variety of types of customizable QR codes will allow you to renew your print and digital media, improve the customer experience, and integrate links to any type of content. Whether you want to direct customers to a website, share contact information, or provide access to promotions, there’s a QR code type tailored to your needs.
        </p>
    </div>

    
{{-- icons --}}F575A
<div class="flex flex-row overflow-x-auto gap-4 mt-4">
    <div class="flex flex-col items-center bg-gray-100 p-4 rounded-lg shadow-md">
        <img src="{{asset('asset/img/coupon.png')}}" alt="Coupon" class="w-32 h-32 object-contain mb-4">
        <p class="text-xl font-semibold text-gray-800">Coupon</p>
    </div>
    <div class="flex flex-col items-center bg-gray-100 p-4 rounded-lg shadow-md">
        <img src="{{asset('asset/img/coupon.png')}}" alt="Coupon" class="w-32 h-32 object-contain mb-4">
        <p class="text-xl font-semibold text-gray-800">Coupon</p>
    </div>
    <div class="flex flex-col items-center bg-gray-100 p-4 rounded-lg shadow-md">
        <img src="{{asset('asset/img/coupon.png')}}" alt="Coupon" class="w-32 h-32 object-contain mb-4">
        <p class="text-xl font-semibold text-gray-800">Coupon</p>
    </div>
    <div class="flex flex-col items-center bg-gray-100 p-4 rounded-lg shadow-md">
        <img src="{{asset('asset/img/coupon.png')}}" alt="Coupon" class="w-32 h-32 object-contain mb-4">
        <p class="text-xl font-semibold text-gray-800">Coupon</p>
    </div>
    <div class="flex flex-col items-center bg-gray-100 p-4 rounded-lg shadow-md">
        <img src="{{asset('asset/img/coupon.png')}}" alt="Coupon" class="w-32 h-32 object-contain mb-4">
        <p class="text-xl font-semibold text-gray-800">Coupon</p>
    </div>
    <div class="flex flex-col items-center bg-gray-100 p-4 rounded-lg shadow-md">
        <img src="{{asset('asset/img/coupon.png')}}" alt="Coupon" class="w-32 h-32 object-contain mb-4">
        <p class="text-xl font-semibold text-gray-800">Coupon</p>
    </div>
    <div class="flex flex-col items-center bg-gray-100 p-4 rounded-lg shadow-md">
        <img src="{{asset('asset/img/coupon.png')}}" alt="Coupon" class="w-32 h-32 object-contain mb-4">
        <p class="text-xl font-semibold text-gray-800">Coupon</p>
    </div>
    <div class="flex flex-col items-center bg-gray-100 p-4 rounded-lg shadow-md">
        <img src="{{asset('asset/img/coupon.png')}}" alt="Coupon" class="w-32 h-32 object-contain mb-4">
        <p class="text-xl font-semibold text-gray-800">Coupon</p>
    </div>
    <div class="flex flex-col items-center bg-gray-100 p-4 rounded-lg shadow-md">
        <img src="{{asset('asset/img/coupon.png')}}" alt="Coupon" class="w-32 h-32 object-contain mb-4">
        <p class="text-xl font-semibold text-gray-800">Coupon</p>
    </div>
    <div class="flex flex-col items-center bg-gray-100 p-4 rounded-lg shadow-md">
        <img src="{{asset('asset/img/coupon.png')}}" alt="Coupon" class="w-32 h-32 object-contain mb-4">
        <p class="text-xl font-semibold text-gray-800">Coupon</p>
    </div>
    <div class="flex flex-col items-center bg-gray-100 p-4 rounded-lg shadow-md">
        <img src="{{asset('asset/img/coupon.png')}}" alt="Coupon" class="w-32 h-32 object-contain mb-4">
        <p class="text-xl font-semibold text-gray-800">Coupon</p>
    </div>
</div>
</div>

{{-- section1 --}}
<section class="p-6 max-w-full mx-auto bg-gradient-to-r from-[#EF575A] via-[#FEEBEB] to-white shadow-lg rounded-md grid grid-cols-1 lg:grid-cols-2 items-center gap-12 px-16">
    <!-- Left Image Section -->
    <div class="flex justify-center">
        <img src="{{asset('asset/img/types.jpg')}}" alt="QR Code Poster and Mobile Preview" class="h-80 w-auto object-contain">
    </div>
    <!-- Right Text Section -->
    <div class="max-w-lg mx-auto text-center lg:text-left">
        <header class="mb-6">
            <h1 class="text-4xl font-bold text-gray-800">Website</h1>
        </header>
        <p class="text-lg text-gray-600 mb-8 leading-relaxed">
            With just one click, send directly to the address you choose on your page or application, 
            to facilitate access and improve the experience of new users or clients.
        </p>
        <div class="flex justify-center lg:justify-start gap-6">
            <button class="px-6 py-3 bg-blue-600 text-white text-lg font-semibold rounded-lg hover:bg-blue-700">
                Create QR Code
            </button>
            <button class="px-6 py-3 bg-gray-300 text-gray-700 text-lg font-semibold rounded-lg hover:bg-gray-400">
                More Info
            </button>
        </div>
    </div>
</section>

{{-- section2 --}}
<section class="p-6 max-w-full mx-auto bg-gradient-to-l from-[#68D8E9] to-white shadow-lg rounded-md grid grid-cols-1 lg:grid-cols-2 items-center gap-12 px-16">
 
    <!-- Right Text Section -->
    <div class="max-w-lg mx-auto text-center lg:text-left">
        <header class="mb-6">
            <h1 class="text-4xl font-bold text-gray-800">List of Links</h1>
        </header>
        <p class="text-lg text-gray-600 mb-8 leading-relaxed">
            Renew your customers' experience, using a QR code to share your business or company's social networks. Share access to Instagram, Facebook, Twitter, LinkedIn and many more networks.
        </p>
        <div class="flex justify-center lg:justify-start gap-6">
            <button class="px-6 py-3 bg-blue-600 text-white text-lg font-semibold rounded-lg hover:bg-blue-700">
                Create QR Code
            </button>
            <button class="px-6 py-3 bg-gray-300 text-gray-700 text-lg font-semibold rounded-lg hover:bg-gray-400">
                More Info
            </button>
        </div>
    </div>
       <!-- Left Image Section -->
       <div class="flex justify-center">
        <img src="{{asset('asset/img/section2.jpg')}}" alt="QR Code Poster and Mobile Preview" class="h-80 w-auto object-contain">
    </div>
</section>

{{-- section3 --}}
<section class="p-6 max-w-full mx-auto bg-gradient-to-r from-[#D155D1] via-[#FEEBEB] to-white shadow-lg rounded-md grid grid-cols-1 lg:grid-cols-2 items-center gap-12 px-16">
    <!-- Left Image Section -->
    <div class="flex justify-center">
        <img src="{{asset('asset/img/section3.jpg')}}" alt="QR Code Poster and Mobile Preview" class="h-80 w-auto object-contain">
    </div>
    <!-- Right Text Section -->
    <div class="max-w-lg mx-auto text-center lg:text-left">
        <header class="mb-6">
            <h1 class="text-4xl font-bold text-gray-800">Video</h1>
        </header>
        <p class="text-lg text-gray-600 mb-8 leading-relaxed">
            With just one click, send directly to the address you choose on your page or application, to facilitate access and improve the experience of new users or clients.
        </p>
        <div class="flex justify-center lg:justify-start gap-6">
            <button class="px-6 py-3 bg-blue-600 text-white text-lg font-semibold rounded-lg hover:bg-blue-700">
                Create QR Code
            </button>
            <button class="px-6 py-3 bg-gray-300 text-gray-700 text-lg font-semibold rounded-lg hover:bg-gray-400">
                More Info
            </button>
        </div>
    </div>
</section>

{{-- section4 --}}
<section class="p-6 max-w-full mx-auto bg-gradient-to-l from-red-500 to-white shadow-lg rounded-md grid grid-cols-1 lg:grid-cols-2 items-center gap-12 px-16">
 
    <!-- Right Text Section -->
    <div class="max-w-lg mx-auto text-center lg:text-left">
        <header class="mb-6">
            <h1 class="text-4xl font-bold text-gray-800">Vcard Plus</h1>
        </header>
        <p class="text-lg text-gray-600 mb-8 leading-relaxed">
            With this type of QR code, you can expand the information on your business card to include more contact details and even, if you wish, access your resume or your social networks.
        </p>
        <div class="flex justify-center lg:justify-start gap-6">
            <button class="px-6 py-3 bg-blue-600 text-white text-lg font-semibold rounded-lg hover:bg-blue-700">
                Create QR Code
            </button>
            <button class="px-6 py-3 bg-gray-300 text-gray-700 text-lg font-semibold rounded-lg hover:bg-gray-400">
                More Info
            </button>
        </div>
    </div>
       <!-- Left Image Section -->
       <div class="flex justify-center">
        <img src="{{asset('asset/img/section2.jpg')}}" alt="QR Code Poster and Mobile Preview" class="h-80 w-auto object-contain">
    </div>
</section>

{{-- section5 --}}
<section class="p-6 max-w-full mx-auto bg-gradient-to-r from-[#255FF9] to-white shadow-lg rounded-md grid grid-cols-1 lg:grid-cols-2 items-center gap-12 px-16">
    <!-- Left Image Section -->
    <div class="flex justify-center">
        <img src="{{asset('asset/img/section3.jpg')}}" alt="QR Code Poster and Mobile Preview" class="h-80 w-auto object-contain">
    </div>
    <!-- Right Text Section -->
    <div class="max-w-lg mx-auto text-center lg:text-left">
        <header class="mb-6">
            <h1 class="text-4xl font-bold text-gray-800">Apps</h1>
        </header>
        <p class="text-lg text-gray-600 mb-8 leading-relaxed">
            Allow your clients to access the installation of applications, through a single scan. QRFY will allow them to access the Store where your application is located with a single QR code.
        </p>
        <div class="flex justify-center lg:justify-start gap-6">
            <button class="px-6 py-3 bg-blue-600 text-white text-lg font-semibold rounded-lg hover:bg-blue-700">
                Create QR Code
            </button>
            <button class="px-6 py-3 bg-gray-300 text-gray-700 text-lg font-semibold rounded-lg hover:bg-gray-400">
                More Info
            </button>
        </div>
    </div>
</section>

{{-- section6 --}}
<section class="p-6 max-w-full mx-auto bg-gradient-to-l from-[#C95053] to-white shadow-lg rounded-md grid grid-cols-1 lg:grid-cols-2 items-center gap-12 px-16">
 
    <!-- Right Text Section -->
    <div class="max-w-lg mx-auto text-center lg:text-left">
        <header class="mb-6">
            <h1 class="text-4xl font-bold text-gray-800">Coupon</h1>
        </header>
        <p class="text-lg text-gray-600 mb-8 leading-relaxed">
            With this type of QR code, you can expand the information on your business card to include more contact details and even, if you wish, access your resume or your social networks.
        </p>
        <div class="flex justify-center lg:justify-start gap-6">
            <button class="px-6 py-3 bg-blue-600 text-white text-lg font-semibold rounded-lg hover:bg-blue-700">
                Create QR Code
            </button>
            <button class="px-6 py-3 bg-gray-300 text-gray-700 text-lg font-semibold rounded-lg hover:bg-gray-400">
                More Info
            </button>
        </div>
    </div>
       <!-- Left Image Section -->
       <div class="flex justify-center">
        <img src="{{asset('asset/img/section2.jpg')}}" alt="QR Code Poster and Mobile Preview" class="h-80 w-auto object-contain">
    </div>
</section>

{{-- section7 --}}
<section class="p-6 max-w-full mx-auto bg-gradient-to-r from-[#ACACAC] to-white shadow-lg rounded-md grid grid-cols-1 lg:grid-cols-2 items-center gap-12 px-16">
    <!-- Left Image Section -->
    <div class="flex justify-center">
        <img src="{{asset('asset/img/section3.jpg')}}" alt="QR Code Poster and Mobile Preview" class="h-80 w-auto object-contain">
    </div>
    <!-- Right Text Section -->
    <div class="max-w-lg mx-auto text-center lg:text-left">
        <header class="mb-6">
            <h1 class="text-4xl font-bold text-gray-800">Apps</h1>
        </header>
        <p class="text-lg text-gray-600 mb-8 leading-relaxed">
            Allow your clients to access the installation of applications, through a single scan. QRFY will allow them to access the Store where your application is located with a single QR code.
        </p>
        <div class="flex justify-center lg:justify-start gap-6">
            <button class="px-6 py-3 bg-blue-600 text-white text-lg font-semibold rounded-lg hover:bg-blue-700">
                Create QR Code
            </button>
            <button class="px-6 py-3 bg-gray-300 text-gray-700 text-lg font-semibold rounded-lg hover:bg-gray-400">
                More Info
            </button>
        </div>
    </div>
</section>

{{-- section 8--}}
<section class="p-6 max-w-full mx-auto bg-gradient-to-l from-[#B7B088] to-white shadow-lg rounded-md grid grid-cols-1 lg:grid-cols-2 items-center gap-12 px-16">
 
    <!-- Right Text Section -->
    <div class="max-w-lg mx-auto text-center lg:text-left">
        <header class="mb-6">
            <h1 class="text-4xl font-bold text-gray-800">Coupon</h1>
        </header>
        <p class="text-lg text-gray-600 mb-8 leading-relaxed">
            With this type of QR code, you can expand the information on your business card to include more contact details and even, if you wish, access your resume or your social networks.
        </p>
        <div class="flex justify-center lg:justify-start gap-6">
            <button class="px-6 py-3 bg-blue-600 text-white text-lg font-semibold rounded-lg hover:bg-blue-700">
                Create QR Code
            </button>
            <button class="px-6 py-3 bg-gray-300 text-gray-700 text-lg font-semibold rounded-lg hover:bg-gray-400">
                More Info
            </button>
        </div>
    </div>
       <!-- Left Image Section -->
       <div class="flex justify-center">
        <img src="{{asset('asset/img/section2.jpg')}}" alt="QR Code Poster and Mobile Preview" class="h-80 w-auto object-contain">
    </div>
</section>

{{-- section 9--}}
<section class="p-6 max-w-full mx-auto bg-gradient-to-r from-[#EE854E] to-white shadow-lg rounded-md grid grid-cols-1 lg:grid-cols-2 items-center gap-12 px-16">
    <!-- Left Image Section -->
    <div class="flex justify-center">
        <img src="{{asset('asset/img/section3.jpg')}}" alt="QR Code Poster and Mobile Preview" class="h-80 w-auto object-contain">
    </div>
    <!-- Right Text Section -->
    <div class="max-w-lg mx-auto text-center lg:text-left">
        <header class="mb-6">
            <h1 class="text-4xl font-bold text-gray-800">Apps</h1>
        </header>
        <p class="text-lg text-gray-600 mb-8 leading-relaxed">
            Allow your clients to access the installation of applications, through a single scan. QRFY will allow them to access the Store where your application is located with a single QR code.
        </p>
        <div class="flex justify-center lg:justify-start gap-6">
            <button class="px-6 py-3 bg-blue-600 text-white text-lg font-semibold rounded-lg hover:bg-blue-700">
                Create QR Code
            </button>
            <button class="px-6 py-3 bg-gray-300 text-gray-700 text-lg font-semibold rounded-lg hover:bg-gray-400">
                More Info
            </button>
        </div>
    </div>
</section>

{{-- section 10--}}
<section class="p-6 max-w-full mx-auto bg-gradient-to-l from-[#FDCCBC] to-white shadow-lg rounded-md grid grid-cols-1 lg:grid-cols-2 items-center gap-12 px-16">
 
    <!-- Right Text Section -->
    <div class="max-w-lg mx-auto text-center lg:text-left">
        <header class="mb-6">
            <h1 class="text-4xl font-bold text-gray-800">Coupon</h1>
        </header>
        <p class="text-lg text-gray-600 mb-8 leading-relaxed">
            With this type of QR code, you can expand the information on your business card to include more contact details and even, if you wish, access your resume or your social networks.
        </p>
        <div class="flex justify-center lg:justify-start gap-6">
            <button class="px-6 py-3 bg-blue-600 text-white text-lg font-semibold rounded-lg hover:bg-blue-700">
                Create QR Code
            </button>
            <button class="px-6 py-3 bg-gray-300 text-gray-700 text-lg font-semibold rounded-lg hover:bg-gray-400">
                More Info
            </button>
        </div>
    </div>
       <!-- Left Image Section -->
       <div class="flex justify-center">
        <img src="{{asset('asset/img/section2.jpg')}}" alt="QR Code Poster and Mobile Preview" class="h-80 w-auto object-contain">
    </div>
</section>


{{-- section 11--}}
<section class="p-6 max-w-full mx-auto bg-gradient-to-r from-[#AD6D38] to-white shadow-lg rounded-md grid grid-cols-1 lg:grid-cols-2 items-center gap-12 px-16">
    <!-- Left Image Section -->
    <div class="flex justify-center">
        <img src="{{asset('asset/img/section3.jpg')}}" alt="QR Code Poster and Mobile Preview" class="h-80 w-auto object-contain">
    </div>
    <!-- Right Text Section -->
    <div class="max-w-lg mx-auto text-center lg:text-left">
        <header class="mb-6">
            <h1 class="text-4xl font-bold text-gray-800">Apps</h1>
        </header>
        <p class="text-lg text-gray-600 mb-8 leading-relaxed">
            Allow your clients to access the installation of applications, through a single scan. QRFY will allow them to access the Store where your application is located with a single QR code.
        </p>
        <div class="flex justify-center lg:justify-start gap-6">
            <button class="px-6 py-3 bg-blue-600 text-white text-lg font-semibold rounded-lg hover:bg-blue-700">
                Create QR Code
            </button>
            <button class="px-6 py-3 bg-gray-300 text-gray-700 text-lg font-semibold rounded-lg hover:bg-gray-400">
                More Info
            </button>
        </div>
    </div>
</section>

{{-- section 12--}}
<section class="p-6 max-w-full mx-auto bg-gradient-to-l from-[#306C3F] to-white shadow-lg rounded-md grid grid-cols-1 lg:grid-cols-2 items-center gap-12 px-16">
 
    <!-- Right Text Section -->
    <div class="max-w-lg mx-auto text-center lg:text-left">
        <header class="mb-6">
            <h1 class="text-4xl font-bold text-gray-800">Coupon</h1>
        </header>
        <p class="text-lg text-gray-600 mb-8 leading-relaxed">
            With this type of QR code, you can expand the information on your business card to include more contact details and even, if you wish, access your resume or your social networks.
        </p>
        <div class="flex justify-center lg:justify-start gap-6">
            <button class="px-6 py-3 bg-blue-600 text-white text-lg font-semibold rounded-lg hover:bg-blue-700">
                Create QR Code
            </button>
            <button class="px-6 py-3 bg-gray-300 text-gray-700 text-lg font-semibold rounded-lg hover:bg-gray-400">
                More Info
            </button>
        </div>
    </div>
       <!-- Left Image Section -->
       <div class="flex justify-center">
        <img src="{{asset('asset/img/section2.jpg')}}" alt="QR Code Poster and Mobile Preview" class="h-80 w-auto object-contain">
    </div>
</section>



{{-- section 13--}}
<section class="p-6 max-w-full mx-auto bg-gradient-to-r from-[#53E3C7] to-white shadow-lg rounded-md grid grid-cols-1 lg:grid-cols-2 items-center gap-12 px-16">
    <!-- Left Image Section -->
    <div class="flex justify-center">
        <img src="{{asset('asset/img/section3.jpg')}}" alt="QR Code Poster and Mobile Preview" class="h-80 w-auto object-contain">
    </div>
    <!-- Right Text Section -->
    <div class="max-w-lg mx-auto text-center lg:text-left">
        <header class="mb-6">
            <h1 class="text-4xl font-bold text-gray-800">Apps</h1>
        </header>
        <p class="text-lg text-gray-600 mb-8 leading-relaxed">
            Allow your clients to access the installation of applications, through a single scan. QRFY will allow them to access the Store where your application is located with a single QR code.
        </p>
        <div class="flex justify-center lg:justify-start gap-6">
            <button class="px-6 py-3 bg-blue-600 text-white text-lg font-semibold rounded-lg hover:bg-blue-700">
                Create QR Code
            </button>
            <button class="px-6 py-3 bg-gray-300 text-gray-700 text-lg font-semibold rounded-lg hover:bg-gray-400">
                More Info
            </button>
        </div>
    </div>
</section>

{{-- section 14--}}
<section class="p-6 max-w-full mx-auto bg-gradient-to-l from-[#FEE454] to-white shadow-lg rounded-md grid grid-cols-1 lg:grid-cols-2 items-center gap-12 px-16">
 
    <!-- Right Text Section -->
    <div class="max-w-lg mx-auto text-center lg:text-left">
        <header class="mb-6">
            <h1 class="text-4xl font-bold text-gray-800">Coupon</h1>
        </header>
        <p class="text-lg text-gray-600 mb-8 leading-relaxed">
            With this type of QR code, you can expand the information on your business card to include more contact details and even, if you wish, access your resume or your social networks.
        </p>
        <div class="flex justify-center lg:justify-start gap-6">
            <button class="px-6 py-3 bg-blue-600 text-white text-lg font-semibold rounded-lg hover:bg-blue-700">
                Create QR Code
            </button>
            <button class="px-6 py-3 bg-gray-300 text-gray-700 text-lg font-semibold rounded-lg hover:bg-gray-400">
                More Info
            </button>
        </div>
    </div>
       <!-- Left Image Section -->
       <div class="flex justify-center">
        <img src="{{asset('asset/img/section2.jpg')}}" alt="QR Code Poster and Mobile Preview" class="h-80 w-auto object-contain">
    </div>
</section>

{{-- section 15--}}
<section class="p-6 max-w-full mx-auto bg-gradient-to-r from-[#902D3D] to-white shadow-lg rounded-md grid grid-cols-1 lg:grid-cols-2 items-center gap-12 px-16">
    <!-- Left Image Section -->
    <div class="flex justify-center">
        <img src="{{asset('asset/img/section3.jpg')}}" alt="QR Code Poster and Mobile Preview" class="h-80 w-auto object-contain">
    </div>
    <!-- Right Text Section -->
    <div class="max-w-lg mx-auto text-center lg:text-left">
        <header class="mb-6">
            <h1 class="text-4xl font-bold text-gray-800">Apps</h1>
        </header>
        <p class="text-lg text-gray-600 mb-8 leading-relaxed">
            Allow your clients to access the installation of applications, through a single scan. QRFY will allow them to access the Store where your application is located with a single QR code.
        </p>
        <div class="flex justify-center lg:justify-start gap-6">
            <button class="px-6 py-3 bg-blue-600 text-white text-lg font-semibold rounded-lg hover:bg-blue-700">
                Create QR Code
            </button>
            <button class="px-6 py-3 bg-gray-300 text-gray-700 text-lg font-semibold rounded-lg hover:bg-gray-400">
                More Info
            </button>
        </div>
    </div>
</section>

{{-- grid section --}}
<section class="p-12 bg-gray-50">
    <div class="max-w-5xl mx-auto">
      <!-- Section Heading -->
      <header class="mb-12 text-center">
        <h2 class="text-3xl font-extrabold text-gray-800">Static QR Codes</h2>
      </header>
  
      <!-- Cards Container -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- URL Card -->
        <div class="bg-white shadow-lg rounded-lg p-6 text-center">
          <h3 class="text-xl font-bold text-gray-800 mb-4">URL</h3>
          <p class="text-gray-600 mb-6">
            Instantly access any website with our static QR. The easiest and fastest way to explore online content.
          </p>
          <button class="px-6 py-2 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700">
            Create QR Code
          </button>
        </div>
  
        <!-- WiFi Card -->
        <div class="bg-white shadow-lg rounded-lg p-6 text-center">
          <h3 class="text-xl font-bold text-gray-800 mb-4">WiFi</h3>
          <p class="text-gray-600 mb-6">
            Improve the experience of your clients, patients, or friends by sharing your WiFi network with them without entering a password.
          </p>
          <button class="px-6 py-2 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700">
            Create QR Code
          </button>
        </div>

                <!-- URL Card -->
                <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                    <h3 class="text-xl font-bold text-gray-800 mb-4">URL</h3>
                    <p class="text-gray-600 mb-6">
                      Instantly access any website with our static QR. The easiest and fastest way to explore online content.
                    </p>
                    <button class="px-6 py-2 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700">
                      Create QR Code
                    </button>
                  </div>
            
                  <!-- WiFi Card -->
                  <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                    <h3 class="text-xl font-bold text-gray-800 mb-4">WiFi</h3>
                    <p class="text-gray-600 mb-6">
                      Improve the experience of your clients, patients, or friends by sharing your WiFi network with them without entering a password.
                    </p>
                    <button class="px-6 py-2 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700">
                      Create QR Code
                    </button>
                  </div>

                          <!-- URL Card -->
        <div class="bg-white shadow-lg rounded-lg p-6 text-center">
            <h3 class="text-xl font-bold text-gray-800 mb-4">URL</h3>
            <p class="text-gray-600 mb-6">
              Instantly access any website with our static QR. The easiest and fastest way to explore online content.
            </p>
            <button class="px-6 py-2 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700">
              Create QR Code
            </button>
          </div>
    
          <!-- WiFi Card -->
          <div class="bg-white shadow-lg rounded-lg p-6 text-center">
            <h3 class="text-xl font-bold text-gray-800 mb-4">WiFi</h3>
            <p class="text-gray-600 mb-6">
              Improve the experience of your clients, patients, or friends by sharing your WiFi network with them without entering a password.
            </p>
            <button class="px-6 py-2 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700">
              Create QR Code
            </button>
          </div>
                  <!-- URL Card -->
        <div class="bg-white shadow-lg rounded-lg p-6 text-center">
            <h3 class="text-xl font-bold text-gray-800 mb-4">URL</h3>
            <p class="text-gray-600 mb-6">
              Instantly access any website with our static QR. The easiest and fastest way to explore online content.
            </p>
            <button class="px-6 py-2 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700">
              Create QR Code
            </button>
          </div>
    
          <!-- WiFi Card -->
          <div class="bg-white shadow-lg rounded-lg p-6 text-center">
            <h3 class="text-xl font-bold text-gray-800 mb-4">WiFi</h3>
            <p class="text-gray-600 mb-6">
              Improve the experience of your clients, patients, or friends by sharing your WiFi network with them without entering a password.
            </p>
            <button class="px-6 py-2 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700">
              Create QR Code
            </button>
          </div>
  
        <!-- VCard Card -->
        <div class="bg-white shadow-lg rounded-lg p-6 text-center">
          <h3 class="text-xl font-bold text-gray-800 mb-4">VCard</h3>
          <p class="text-gray-600 mb-6">
            Replace physical cards with our QR vCard. A single scan and your contact will be on your clients' phones.
          </p>
          <button class="px-6 py-2 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700">
            Create QR Code
          </button>
        </div>
      </div>
    </div>
</section>
  
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