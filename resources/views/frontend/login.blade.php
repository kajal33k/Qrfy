@extends('components.main')
@section('comtent')
    <div class="grid grid-cols-1 grid-cols-2">  
        <div class="min-h-screen flex flex-col justify-center bg-gray-100 py-12 sm:px-6 lg:px-8">
                <div class="sm:w-full sm:max-w-md mx-auto">
                  <!-- Title Section -->
                  <div class="text-center">
                    <h2 class="text-3xl font-bold text-gray-900">Free QR Code Generator</h2>
                    <p class="mt-2 text-lg text-gray-600">Create your QR Code</p>
                  </div>
              
                  <!-- Login Form -->
                  <div class="mt-8 space-y-6">
                    <form action="#" method="POST" class="space-y-4">
                      <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
                        <input type="email" id="email" name="email" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" placeholder="name@email.com">
                      </div>
              
                      <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <input type="password" id="password" name="password" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" placeholder="Enter your password here...">
                      </div>
              
                      <div class="flex items-center justify-between">
                        <div class="text-sm">
                          <a href="#" class="font-medium text-blue-600 hover:text-blue-700">Forgot your password? Click here</a>
                        </div>
                      </div>
              
                      <div class="mt-6">
                        <button type="submit" class="w-full py-2 px-4 bg-blue-600 text-white rounded-md shadow-sm hover:bg-blue-700 focus:ring-2 focus:ring-blue-500">Login</button>
                      </div>
                    </form>
              
                    <!-- Registration Link -->
                    <div class="text-center">
                      <p class="text-sm text-gray-600">
                        Don't have an account? <a href="#" class="font-medium text-blue-600 hover:text-blue-700">Create an account</a>
                      </p>
                    </div>
                  </div>
              
                  <!-- Footer -->
                  <div class="mt-8 text-center text-sm text-gray-500">
                    <p>2022 © QRfy, Spain - <span class="font-medium text-blue-600">'QR Code' is a trademark of DENSO WAVE INCORPORATED</span></p>
                  </div>
                </div>
        </div>     
        <div>
            <img src="{{asset('asset/img/login-svg.svg')}}" alt="">
        </div>
    </div>
@endsection