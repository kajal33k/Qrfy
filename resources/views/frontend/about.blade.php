@extends('components.main')
@section('comtent')
<div class="bg-gray-50 py-12 px-6 sm:px-12 lg:px-32">
    <div class="max-w-7xl mx-auto text-center">
        <h2 class="text-3xl font-semibold text-gray-900">About Us</h2>
        <p class="mt-4 text-lg text-gray-600">At QRFY, we have been specializing in transforming interaction through QR technology since our founding in 2022.</p>
    </div>
</div>
<div class="flex justify-center lg:px-32">
    <img src="{{asset('asset/img/about.jpeg')}}" alt="">
</div>
<div class="flex justify-center lg:px-32 m-2">
    <p class="px-8">Our team of developers, designers and support work together to offer a solid and constantly evolving platform. We focus on providing the best quality QR codes on the market, accompanied by detailed statistics to optimize marketing strategies and facilitate their effective use for companies and individuals.</p>
</div>
{{-- mission and values --}}

<div class="grid grid-cols-1 md:grid-cols-2 gap-6 py-12 px-6 sm:px-12 lg:px-32">
    <!-- Mission Section -->
    <div class="flex flex-col items-center text-center p-8">
        <img src="{{asset('asset/img/mission.jpg')}}" alt="Mission" class="w-full h-auto rounded-lg shadow-md mb-4">
        <h1 class="text-2xl font-semibold text-gray-900">Mission</h1>
        <p class="mt-2 text-gray-600 max-w-lg mx-auto">QRFY's mission is to provide a reliable and easy-to-use QR code platform, designed by a dedicated and passionate team. We are committed to delivering a stable and secure technical infrastructure, while maintaining an intuitive interface that anyone can use.</p>
    </div>
    
    <!-- Values Section -->
    <div class="flex flex-col items-center text-center p-8">
        <img src="{{asset('asset/img/valuse.jpg')}}" alt="Values" class="w-full h-auto rounded-lg shadow-md mb-4">
        <h1 class="text-2xl font-semibold text-gray-900">Values</h1>
        <p class="mt-2 text-gray-600 max-w-lg mx-auto">We develop our tools with a focus on the needs of our users and use their feedback to continuously improve. QRFY's driving force is to provide our users with the necessary tools to enhance their projects and integrate them with technological innovation in an accessible and simple way.</p>
    </div>
</div>


<div class="max-w-7xl mx-auto px-4 py-16 sm:px-6 lg:px-32">
    <!-- Header Section -->
    <div class="text-center mb-16">
      <h2 class="text-4xl font-bold text-gray-900 mb-4">Our Achievements</h2>
      <p class="text-lg text-gray-600 max-w-3xl mx-auto">
        They reaffirm our commitment to customer satisfaction and this is reflected in our ratings. 
        These positive comments are a testament to our dedication to providing a high-quality service 
        and a reliable platform.
      </p>
    </div>
  
    <!-- Achievements Cards Section -->
    <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-4">
      <!-- Achievement 1 -->
      <div class="flex flex-col items-center p-8 bg-white rounded-lg">
        <div class="w-16 h-16 mb-6 p-4 bg-blue-50 rounded-full flex items-center justify-center">
          <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
          </svg>
        </div>
        <h3 class="text-4xl font-bold text-gray-900 mb-2">+ 5M</h3>
        <h4 class="text-lg font-semibold text-gray-800 mb-2">QR codes created</h4>
        <p class="text-sm text-gray-600 text-center">of codes created to date by QRFY.</p>
      </div>
  
      <!-- Achievement 2 -->
      <div class="flex flex-col items-center p-8 bg-white rounded-lg">
        <div class="w-16 h-16 mb-6 p-4 bg-blue-50 rounded-full flex items-center justify-center">
          <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1zm12 0h2a1 1 0 001-1V5a1 1 0 00-1-1h-2a1 1 0 00-1 1v2a1 1 0 001 1zM5 20h2a1 1 0 001-1v-2a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z" />
          </svg>
        </div>
        <h3 class="text-4xl font-bold text-gray-900 mb-2">+ 500M</h3>
        <h4 class="text-lg font-semibold text-gray-800 mb-2">Scans</h4>
        <p class="text-sm text-gray-600 text-center">serving millions of users around the world.</p>
      </div>
  
      <!-- Achievement 3 -->
      <div class="flex flex-col items-center p-8 bg-white rounded-lg">
        <div class="w-16 h-16 mb-6 p-4 bg-blue-50 rounded-full flex items-center justify-center">
          <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M5 13l4 4L19 7" />
          </svg>
        </div>
        <h3 class="text-4xl font-bold text-gray-900 mb-2">+ 5K</h3>
        <h4 class="text-lg font-semibold text-gray-800 mb-2">Trustpilot Reviews</h4>
        <p class="text-sm text-gray-600 text-center">with a rating of 4.6 in customer satisfaction.</p>
      </div>
  
      <!-- Achievement 4 -->
      <div class="flex flex-col items-center p-8 bg-white rounded-lg">
        <div class="w-16 h-16 mb-6 p-4 bg-blue-50 rounded-full flex items-center justify-center">
          <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M5 13l4 4L19 7" />
          </svg>
        </div>
        <h3 class="text-4xl font-bold text-gray-900 mb-2">+ 11K</h3>
        <h4 class="text-lg font-semibold text-gray-800 mb-2">Google Reviews</h4>
        <p class="text-sm text-gray-600 text-center">with a positive score of 4.7.</p>
      </div>
    </div>
</div>

  {{-- section --}}
  <div class="max-w-5xl grid grid-cols-1 lg:grid-cols-2 mx-auto px-4 py-16 sm:px-6 lg:px-8">
    <!-- Image Section -->
    <div class="mb-8 lg:mb-0">
      <img src="{{asset('asset/img/abtqr.jpg')}}" alt="About QR" class=" rounded-lg shadow-lg">
    </div>
  
    <!-- Text Section -->
    <div class="flex flex-col justify-center text-center lg:text-left">
      <h2 class="text-3xl font-semibold text-gray-900 mb-4">
        We are here to help you
      </h2>
      <p class="text-lg text-gray-600 max-w-3xl mx-auto lg:mx-0 mb-8">
        We are here to help you so that you can achieve your goals with professionalism and efficiency, offering the best tools and support you need to make the most of QR technology.
      </p>
    </div>
  </div>
  
@endsection