@extends('components.main')
@section('content')

<!-- Pricing Section -->
<section class="max-w-6xl mx-auto mt-20 p-6 text-center">
    <h1 class="text-2xl text-white  font-bold mb-2">Pricing & Plans</h1>
    <h2 class="text-xl text-gray-100 font-medium mb-2">You have free unlimited updates and premium support on each package.</h2>

    <!-- Plan Toggle -->
    <div class="flex justify-center mb-6">
        <button class="bg-white text-blue-600 border border-blue-600 px-6 py-2 rounded-l-md font-medium">Yearly</button>
        <button class="bg-blue-600 text-white px-6 py-2 rounded-r-md font-medium">Monthly</button>
    </div>

    <!-- Pricing Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        
        <!-- Free Plan -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-lg font-semibold">Free</h3>
            <p class="text-2xl font-bold text-gray-800">$0<span class="text-sm font-light"> / Month</span></p>
            <p class="text-gray-500 mb-4">Forever Free</p>
            <ul class="text-left space-y-2 text-gray-700">
                <li>✔ 10,000 QR Codes</li>
                <li>✔ Unlimited Scans</li>
                <li>✔ Unlimited Lifetime</li>
                <li>✔ Unlimited Tracking</li>
                <li>✔ Multi-User Access</li>
                <li>✔ 100 MB Storage</li>
                <li class="text-red-500">✖ Email After Scan</li>
                <li class="text-red-500">✖ API Integration</li>
            </ul>
            <button class="w-full mt-4 border border-blue-600 text-blue-600 py-2 rounded-md hover:bg-blue-50 transition">Get Free</button>
        </div>

        <!-- Lite Plan -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-lg font-semibold">Lite</h3>
            <p class="text-2xl font-bold text-gray-800">$9<span class="text-sm font-light"> / Month</span></p>
            <p class="text-gray-500 mb-4">Billed Monthly</p>
            <ul class="text-left space-y-2 text-gray-700">
                <li>✔ 10,000 QR Codes</li>
                <li>✔ Unlimited Scans</li>
                <li>✔ Unlimited Lifetime</li>
                <li>✔ Unlimited Tracking</li>
                <li>✔ Multi-User Access</li>
                <li>✔ 100 MB Storage</li>
                <li>✔ Email After Scan</li>
                <li class="text-red-500">✖ API Integration</li>
            </ul>
            <button class="w-full mt-4 border border-blue-600 text-blue-600 py-2 rounded-md hover:bg-blue-50 transition">Upgrade</button>
        </div>

        <!-- Premium Plan -->
        <div class="bg-white p-6 rounded-lg shadow-md ">
            <h3 class="text-lg font-semibold">Premium</h3>
            <p class="text-2xl font-bold text-gray-800">$15<span class="text-sm font-light"> / Month</span></p>
            <p class="text-gray-500 mb-4">Billed Monthly</p>
            <ul class="text-left space-y-2 text-gray-700">
                <li>✔ 1,000,000 QR Codes</li>
                <li>✔ Unlimited Scans</li>
                <li>✔ Unlimited Lifetime</li>
                <li>✔ Unlimited Tracking</li>
                <li>✔ Multi-User Access</li>
                <li>✔ 500 MB Storage</li>
                <li>✔ Email After Scan</li>
                <li>✔ API Integration</li>
            </ul>
            <button class="w-full mt-4 border border-blue-600 text-blue-600 py-2 rounded-md hover:bg-blue-50 transition">Upgrade</button>
        </div>

    </div>
</section>

<section class="py-4 text-gray-900 bg-white">
    <div class="px-4 mx-auto max-w-7xl">

        <div class="text-center mb-8">
            <h2 class="text-2xl font-semibold text-black sm:text-3xl md:text-4xl mb-4">
                Payment Methods
            </h2>
            <div class="flex justify-center flex-wrap gap-6 mb-6">
                <img src="{{asset('asset/img/pm1.svg')}}" alt="Visa" class="w-16 h-16 sm:w-12 sm:h-12 md:w-20 md:h-20">
                <img src="{{asset('asset/img/pm2.svg')}}" alt="MasterCard" class="w-16 h-16 sm:w-12 sm:h-12 md:w-20 md:h-20">
                <img src="{{asset('asset/img/pm3.svg')}}" alt="Amex" class="w-16 h-16 sm:w-12 sm:h-12 md:w-20 md:h-20">
                <img src="{{asset('asset/img/pm4.svg')}}" alt="Discover" class="w-16 h-16 sm:w-12 sm:h-12 md:w-20 md:h-20">
                <img src="{{asset('asset/img/pm5.svg')}}" alt="UnionPay" class="w-16 h-16 sm:w-12 sm:h-12 md:w-20 md:h-20">
                <img src="{{asset('asset/img/pm6.svg')}}" alt="Diners" class="w-16 h-16 sm:w-12 sm:h-12 md:w-20 md:h-20">
                <img src="{{asset('asset/img/pm7.svg')}}" alt="PayPal" class="w-16 h-16 sm:w-12 sm:h-12 md:w-20 md:h-20">
                <img src="{{asset('asset/img/pm8.svg')}}" alt="Google Pay" class="w-16 h-16 sm:w-12 sm:h-12 md:w-20 md:h-20">
                <img src="{{asset('asset/img/pm9.svg')}}" alt="Apple Pay" class="w-16 h-16 sm:w-12 sm:h-12 md:w-20 md:h-20">
            </div>
            {{-- <p class="text-base text-gray-600 mb-4 sm:px-16 md:px-32">
                If you represent a non-profit organization, university, school, or other similar entity, we invite you to contact our support team to offer you a solution that suits your needs. 
                <a href="#" class="text-blue-600 hover:text-blue-700">Contact us</a>
            </p>
            <p class="text-sm text-gray-600">Value Added Tax not included in the amounts.</p> --}}
        </div>

    </div>
</section>
 <!-- Features Section -->
 <section class="max-w-6xl mx-auto  p-6">
    <h1 class="text-4xl text-center font-bold text-white">Features</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-8">
        <!-- Feature Items -->
        <div class="flex items-center space-x-3 bg-white p-4 rounded-lg shadow hover:shadow-lg transition">
            <span class="text-blue-600 text-xl">✔</span>
            <a href="#" class="text-lg font-medium hover:text-blue-600">Free QR code creation</a>
        </div>
        <div class="flex items-center space-x-3 bg-white p-4 rounded-lg shadow hover:shadow-lg transition">
            <span class="text-blue-600 text-xl">✔</span>
            <a href="#" class="text-lg font-medium hover:text-blue-600">Different QR code types</a>
        </div>
        <div class="flex items-center space-x-3 bg-white p-4 rounded-lg shadow hover:shadow-lg transition">
            <span class="text-blue-600 text-xl">✔</span>
            <a href="#" class="text-lg font-medium hover:text-blue-600">App Store and Google Play QR codes</a>
        </div>
        <div class="flex items-center space-x-3 bg-white p-4 rounded-lg shadow hover:shadow-lg transition">
            <span class="text-blue-600 text-xl">✔</span>
            <a href="#" class="text-lg font-medium hover:text-blue-600">Dynamic QR Codes</a>
        </div>
        <div class="flex items-center space-x-3 bg-white p-4 rounded-lg shadow hover:shadow-lg transition">
            <span class="text-blue-600 text-xl">✔</span>
            <a href="#" class="text-lg font-medium hover:text-blue-600">QR codes with design</a>
        </div>
        <div class="flex items-center space-x-3 bg-white p-4 rounded-lg shadow hover:shadow-lg transition">
            <span class="text-blue-600 text-xl">✔</span>
            <a href="#" class="text-lg font-medium hover:text-blue-600">Unlimited QR code creation</a>
        </div>
        <div class="flex items-center space-x-3 bg-white p-4 rounded-lg shadow hover:shadow-lg transition">
            <span class="text-blue-600 text-xl">✔</span>
            <a href="#" class="text-lg font-medium hover:text-blue-600">Bulk QR code creation</a>
        </div>
        <div class="flex items-center space-x-3 bg-white p-4 rounded-lg shadow hover:shadow-lg transition">
            <span class="text-blue-600 text-xl">✔</span>
            <a href="#" class="text-lg font-medium hover:text-blue-600">QR code expiration management</a>
        </div>
        <div class="flex items-center space-x-3 bg-white p-4 rounded-lg shadow hover:shadow-lg transition">
            <span class="text-blue-600 text-xl">✔</span>
            <a href="#" class="text-lg font-medium hover:text-blue-600">QR code analytics</a>
        </div>
        <div class="flex items-center space-x-3 bg-white p-4 rounded-lg shadow hover:shadow-lg transition">
            <span class="text-blue-600 text-xl">✔</span>
            <a href="#" class="text-lg font-medium hover:text-blue-600">Scanning notifications</a>
        </div>
        <div class="flex items-center space-x-3 bg-white p-4 rounded-lg shadow hover:shadow-lg transition">
            <span class="text-blue-600 text-xl">✔</span>
            <a href="#" class="text-lg font-medium hover:text-blue-600">Saving high res codes</a>
        </div>
        <div class="flex items-center space-x-3 bg-white p-4 rounded-lg shadow hover:shadow-lg transition">
            <span class="text-blue-600 text-xl">✔</span>
            <a href="#" class="text-lg font-medium hover:text-blue-600">Adding GA UTM tags</a>
        </div>
    </div>
</section>

<div class="relative w-full bg-white px-6 pt-10 pb-8 mt-8 sm:mx-auto sm:max-w-2xl sm:rounded-lg sm:px-10">
    <div class="mx-auto px-5">
        <div class="flex flex-col items-center">
            <h2 class="mt-5 text-center text-3xl font-bold tracking-tight md:text-4xl lg:text-5xl">Questions about plans</h2>
        </div>
        <div class="mx-auto mt-8 max-w-5xl divide-y divide-neutral-200">
            <!-- FAQ Item 1 -->
            <div class="py-5">
                <details class="group">
                    <summary class="flex cursor-pointer list-none items-center justify-between font-medium text-lg md:text-xl">
                        <span>How does the billing work?</span>
                        <span class="transition group-open:rotate-180">
                            <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                <path d="M6 9l6 6 6-6"></path>
                            </svg>
                        </span>
                    </summary>
                    <p class="group-open:animate-fadeIn mt-3 text-neutral-600 text-sm md:text-base">Springerdata offers a variety of billing options, including monthly and annual subscription plans, as well as pay-as-you-go pricing for certain services. Payment is typically made through a credit card or other secure online payment method.</p>
                </details>
            </div>
            <!-- FAQ Item 2 -->
            <div class="py-5">
                <details class="group">
                    <summary class="flex cursor-pointer list-none items-center justify-between font-medium text-lg md:text-xl">
                        <span>Can I get a refund for my subscription?</span>
                        <span class="transition group-open:rotate-180">
                            <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                <path d="M6 9l6 6 6-6"></path>
                            </svg>
                        </span>
                    </summary>
                    <p class="group-open:animate-fadeIn mt-3 text-neutral-600 text-sm md:text-base">We offer a 30-day money-back guarantee for most of its subscription plans. If you are not satisfied with your subscription within the first 30 days, you can request a full refund. Refunds for subscriptions that have been active for longer than 30 days may be considered on a case-by-case basis.</p>
                </details>
            </div>
            <!-- FAQ Item 3 -->
            <div class="py-5">
                <details class="group">
                    <summary class="flex cursor-pointer list-none items-center justify-between font-medium text-lg md:text-xl">
                        <span>How do I cancel my subscription?</span>
                        <span class="transition group-open:rotate-180">
                            <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                <path d="M6 9l6 6 6-6"></path>
                            </svg>
                        </span>
                    </summary>
                    <p class="group-open:animate-fadeIn mt-3 text-neutral-600 text-sm md:text-base">To cancel your subscription, you can log in to your account and navigate to the subscription management page. From there, you should be able to cancel your subscription and stop future billing.</p>
                </details>
            </div>
            <!-- FAQ Item 4 -->
            <div class="py-5">
                <details class="group">
                    <summary class="flex cursor-pointer list-none items-center justify-between font-medium text-lg md:text-xl">
                        <span>Is there a free trial?</span>
                        <span class="transition group-open:rotate-180">
                            <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                <path d="M6 9l6 6 6-6"></path>
                            </svg>
                        </span>
                    </summary>
                    <p class="group-open:animate-fadeIn mt-3 text-neutral-600 text-sm md:text-base">We offer a free trial of our software for a limited time. During the trial period, you will have access to a limited set of features and functionality, but you will not be charged.</p>
                </details>
            </div>
            <!-- FAQ Item 5 -->
            <div class="py-5">
                <details class="group">
                    <summary class="flex cursor-pointer list-none items-center justify-between font-medium text-lg md:text-xl">
                        <span>How do I contact support?</span>
                        <span class="transition group-open:rotate-180">
                            <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                <path d="M6 9l6 6 6-6"></path>
                            </svg>
                        </span>
                    </summary>
                    <p class="group-open:animate-fadeIn mt-3 text-neutral-600 text-sm md:text-base">If you need help with our platform or have any other questions, you can contact the company's support team by submitting a support request through the website or by emailing support@ourwebsite.com.</p>
                </details>
            </div>
            <!-- FAQ Item 6 -->
            <div class="py-5">
                <details class="group">
                    <summary class="flex cursor-pointer list-none items-center justify-between font-medium text-lg md:text-xl">
                        <span>Do you offer any discounts or promotions?</span>
                        <span class="transition group-open:rotate-180">
                            <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                <path d="M6 9l6 6 6-6"></path>
                            </svg>
                        </span>
                    </summary>
                    <p class="group-open:animate-fadeIn mt-3 text-neutral-600 text-sm md:text-base">We may offer discounts or promotions from time to time. To stay up-to-date on the latest deals and special offers, you can sign up for the company's newsletter or follow it on social media.</p>
                </details>
            </div>
        </div>
    </div>
</div>

@endsection