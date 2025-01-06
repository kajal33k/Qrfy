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
            <div x-show="open" x-transition class="absolute hidden group-hover:block bg-white shadow-lg mt-2 py-2 rounded-md w-72">
              <!-- Dropdown Items -->
              <a href="#" @click="open = false" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Event Tracking</a>
              <a href="#" @click="open = false" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Event Tracking</a>
              <a href="#" @click="open = false" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Event Tracking</a>
              <a href="#" @click="open = false" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Event Tracking</a>
            </div>
          </div>

          <!-- Resources Dropdown -->
          <div x-data="{ open: false }" class="relative group">
            <button @click="open = !open" class="text-gray-600 hover:text-gray-900 font-medium">Resources</button>
            <div x-show="open" x-transition class="absolute hidden group-hover:block bg-white shadow-lg mt-2 py-2 rounded-md">
              <a href="#" @click="open = false" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Resource 1</a>
              <a href="#" @click="open = false" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Resource 2</a>
            </div>
          </div>

          <!-- Static Links -->
          <a href="#" class="text-gray-600 hover:text-gray-900 font-medium">Plans and prices</a>
          <a href="#" class="text-gray-600 hover:text-gray-900 font-medium">FAQ</a>
          <a href="#" class="text-gray-600 hover:text-gray-900 font-medium">API</a>
        </div>
      </div>

      <!-- Right Section -->
      <div class="flex items-center space-x-4">
        <a href="#" class="text-gray-600 hover:text-gray-900 font-medium border border-blue-600 px-3 py-1 rounded-full">
          Log In
        </a>
        <a href="#" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 font-medium">
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
      <a href="#" class="block text-gray-600 hover:text-gray-900 font-medium">Products</a>
      <a href="#" class="block text-gray-600 hover:text-gray-900 font-medium">Resources</a>
      <a href="#" class="block text-gray-600 hover:text-gray-900 font-medium">Plans and prices</a>
      <a href="#" class="block text-gray-600 hover:text-gray-900 font-medium">FAQ</a>
      <a href="#" class="block text-gray-600 hover:text-gray-900 font-medium">API</a>
      <a href="#" class="block text-blue-600 hover:text-blue-700 font-medium">Log In</a>
      <a href="#" class="block bg-blue-600 text-white rounded-lg px-4 py-2 text-center hover:bg-blue-700 font-medium">
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
