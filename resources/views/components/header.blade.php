<nav class="bg-white border-b border-gray-200">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between h-16 items-center">
      <!-- Left Section -->
      <div class="flex items-center">
        <!-- Logo -->
        <a href="#" class="flex items-center">
          <img src="{{asset('asset/img/logo.png')}}" alt="Logo" class="h-8 w-8">
          <span class="ml-2 text-xl font-bold text-gray-800">QRFY</span>
        </a>

        <!-- Desktop Menu -->
        <div class="hidden md:flex space-x-8 ml-10">
          <!-- Products Dropdown -->
          <div x-data="{ open: false }" class="relative group">
            <button @click="open = !open" class="text-gray-600 hover:text-gray-900 font-medium">Products</button>
            {{-- <div x-show="open" x-transition class="absolute hidden group-hover:block bg-white shadow-lg mt-2 py-2 rounded-md w-72">
              <!-- Dropdown Items -->
              <a href="{{route('frontend.staticqr')}}" @click="open = false" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Event Tracking</a>
              <a href="{{route('frontend.staticqr')}}" @click="open = false" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Event Tracking</a>
              <a href="{{route('frontend.staticqr')}}" @click="open = false" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Event Tracking</a>
              <a href="{{route('frontend.staticqr')}}" @click="open = false" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Event Tracking</a>
            </div> --}}
            <div x-show="open" x-transition class="absolute hidden group-hover:block bg-white shadow-lg mt-2 py-2 rounded-md w-[800px]">
              <div class="grid grid-cols-1 md:grid-cols-4 gap-2 p-2 w-[800px]">
                <div class="flex items-start p-0 border border-gray-200 rounded-lg shadow-md">
                  <svg class="w-6 h-6 text-blue-500 mr-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-3 6v-6" />
                  </svg>
                  <div>
                      <a href="{{route('frontend.staticqr')}}" @click="open = false" class="font-semibold text-sm text-wrap" >Static QR
                    <p class="text-xs text-gray-600 text-wrap">Permanent and unalterable QR codes.</p></a> 
                  </div>
                </div>
                <div class="flex items-start p-0 border border-gray-200 rounded-lg shadow-md">
                  <svg class="w-6 h-6 text-blue-500 mr-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12H9m3-6v6" />
                  </svg>
                  <div>
                    <a href="{{route('frontend.staticqr')}}" @click="open = false" class="font-semibold text-sm text-wrap">Dynamic QR
                    <p class="text-xs text-gray-600">QR codes updatable in real time.</p></a>
                  </div>
                </div>
                <div class="flex items-start p-0 border border-gray-200 rounded-lg shadow-md">
                  <svg class="w-6 h-6 text-blue-500 mr-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6h6" />
                  </svg>
                  <div>
                    <a href="{{route('frontend.staticqr')}}" @click="open = false" class="font-semibold text-sm text-wrap">Variety of download formats
                    <p class="text-xs text-gray-600 text-wrap">Expand the possibilities of use of your QRs.</p></a>
                  </div>
                </div>
                <div class="flex items-start p-0 border border-gray-200 rounded-lg shadow-md">
                  <svg class="w-6 h-6 text-blue-500 mr-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12H9" />
                  </svg>
                  <div>
                    <a href="{{route('frontend.staticqr')}}" @click="open = false" class="font-semibold text-sm text-wrap">Limited contributing users
                    <p class="text-xs text-gray-600">Manage your QRs as a team.</p></a>
                  </div>
                </div>
                <div class="flex items-start p-0 border border-gray-200 rounded-lg shadow-md">
                  <svg class="w-6 h-6 text-blue-500 mr-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6h6" />
                  </svg>
                  <div>
                    <a href="{{route('frontend.staticqr')}}" @click="open = false" class="font-semibold text-sm text-wrap">Complete analytics
                    <p class="text-xs text-gray-600 text-wrap">Understand performance with detailed data.</p></a>
                  </div>
                </div>
                <div class="flex items-start p-0 border border-gray-200 rounded-lg shadow-md">
                  <svg class="w-6 h-6 text-blue-500 mr-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 6h6v6" />
                  </svg>
                  <div>
                    <a href="{{route('frontend.staticqr')}}" @click="open = false" class="font-semibold text-sm text-wrap">Editing and management of QRs
                    <p class="text-xs text-gray-600 text-wrap">Customize and organize your QRs.</p></a>
                  </div>
                </div>
                <div class="flex items-start p-0 border border-gray-200 rounded-lg shadow-md">
                  <svg class="w-6 h-6 text-blue-500 mr-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-3 6v-6" />
                  </svg>
                  <div>
                    <a href="{{route('frontend.staticqr')}}" @click="open = false" class="font-semibold text-sm text-wrap">Bulk creation and download
                    <p class="text-xs text-gray-600 text-wrap">Generate and download QRs on a large scale.</p></a>
                  </div>
                </div>
                <div class="flex items-start p-0 border border-gray-200 rounded-lg shadow-md">
                  <svg class="w-6 h-6 text-blue-500 mr-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 6h6v6" />
                  </svg>
                  <div>
                    <a href="{{route('frontend.staticqr')}}" @click="open = false" class="font-semibold text-sm text-wrap">Templates
                    <p class="text-xs text-gray-600 text-wrap">Save and reuse your own designs.</p></a>
                  </div>
                </div>
                <div class="flex items-start p-0 border border-gray-200 rounded-lg shadow-md">
                  <svg class="w-6 h-6 text-blue-500 mr-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6h6" />
                  </svg>
                  <div>
                    <a href="{{route('frontend.staticqr')}}" @click="open = false" class="font-semibold text-sm text-wrap">Password access protection
                    <p class="text-xs text-gray-600 text-wrap">Secure your codes.</p></a>
                  </div>
                </div>
                <div class="flex items-start p-0 border border-gray-200 rounded-lg shadow-md">
                  <svg class="w-6 h-6 text-blue-500 mr-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 6h6v6" />
                  </svg>
                  <div>
                    <a href="{{route('frontend.staticqr')}}" @click="open = false"<h3 class="font-semibold text-sm text-wrap">Google pixel integration
                    <p class="text-xs text-gray-600 text-wrap">Improve the analysis of your digital campaigns.</p></a>
                  </div>
                </div>
                <div class="flex items-start p-0 border border-gray-200 rounded-lg shadow-md">
                  <svg class="w-6 h-6 text-blue-500 mr-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6h6" />
                  </svg>
                  <div>
                    <a href="{{route('frontend.staticqr')}}" @click="open = false" class="font-semibold text-sm text-wrap">Custom Domain
                    <p class="text-xs text-gray-600 text-wrap">Strengthen your brand with your own domain.</p></a>
                  </div>
                </div>
                <div class="flex items-start p-0 border border-gray-200 rounded-lg shadow-md">
                  <svg class="w-6 h-6 text-blue-500 mr-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-3 6v-6" />
                  </svg>
                  <div>
                    <a href="{{route('frontend.staticqr')}}" @click="open = false" class="font-semibold text-sm text-wrap">Event tracking
                    <p class="text-xs text-gray-600 text-wrap">Track interactions.</p></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Resources Dropdown -->
          <div x-data="{ open: false }" class="relative group">
            <button @click="open = !open" class="text-gray-600 hover:text-gray-900 font-medium">Resources</button>
            <div x-show="open" x-transition class="absolute hidden group-hover:block bg-white shadow-lg mt-2 py-2 rounded-md w-60">
              <a href="{{route('frontend.typesofqr')}}" @click="open = false" class="block px-2 py-2 text-gray-700 hover:bg-gray-100">Types of Qr Code</a>
              <a href="{{route('frontend.typesofqr')}}" @click="open = false" class="block px-2 py-2 text-gray-700 hover:bg-gray-100">Qr codes for</a>
              <a href="{{route('frontend.typesofqr')}}" @click="open = false" class="block px-2 py-2 text-gray-700 hover:bg-gray-100">Qr codes on</a>
              <a href="{{route('frontend.typesofqr')}}" @click="open = false" class="block px-2 py-2 text-gray-700 hover:bg-gray-100">Qr codes Generator</a>
            </div>
          </div>

          <!-- Static Links -->
          <a href="{{route('frontend.plans')}}" class="text-gray-600 hover:text-gray-900 font-medium">Plans and prices</a>
          <a href="{{route('frontend.faq')}}" class="text-gray-600 hover:text-gray-900 font-medium">FAQ</a>
          <a href="{{route('frontend.api')}}" class="text-gray-600 hover:text-gray-900 font-medium">API</a>
        </div>
      </div>

      <!-- Right Section -->
      <div class="flex items-center space-x-4">
        <a href="{{route('frontend.login')}}" class="text-gray-600 hover:text-gray-900 font-medium border border-blue-600 text-xs md:text-md md:px-3 md:py-1 p-2 rounded-full">
          Log In
        </a>
        <a href="{{route('frontend.login')}}" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 font-medium">
          Register
        </a>

        <!-- Mobile Menu Toggle -->
        <button id="menu-toggle" class="md:hidden text-gray-600 hover:text-gray-900">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </button>
      </div>
    </div>
  </div>

  <!-- Mobile Menu -->
  <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-200">
    <div class="space-y-1 py-3 px-4">
      <a href="{{route('frontend.staticqr')}}" class="block text-gray-600 hover:text-gray-900 font-medium">Products</a>
      <a href="{{route('frontend.typesofqr')}}" class="block text-gray-600 hover:text-gray-900 font-medium">Resources</a>
      <a href="{{route('frontend.plans')}}" class="block text-gray-600 hover:text-gray-900 font-medium">Plans and prices</a>
      <a href="{{route('frontend.faq')}}" class="block text-gray-600 hover:text-gray-900 font-medium">FAQ</a>
      <a href="{{route('frontend.api')}}" class="block text-gray-600 hover:text-gray-900 font-medium">API</a>
      <a href="{{route('frontend.login')}}" class="block text-blue-600 hover:text-blue-700 font-medium">Log In</a>
      <a href="{{route('frontend.login')}}" class="block bg-blue-600 text-white rounded-lg px-4 py-2 text-center hover:bg-blue-700 font-medium">
        Register
      </a>
    </div>
  </div>
</nav>

<script>
  // Toggle Mobile Menu
  document.getElementById('menu-toggle').addEventListener('click', () => {
    const mobileMenu = document.getElementById('mobile-menu');
    mobileMenu.classList.toggle('hidden');
  });
</script>
