@extends('components.main')
@section('comtent')

<section class="py-4 leading-7 text-gray-900 bg-white sm:py-8 md:py-12">
    <div class="px-4 mx-auto max-w-7xl">

        <div class="text-center text-gray-900 mb-8">
            <h2 id="pricing" class="text-2xl font-semibold sm:text-3xl md:text-4xl text-black">
                Plans and Prices
            </h2>
            <p class="mt-2 text-lg sm:text-xl text-gray-600">
                Try it for 7 days for free before subscribing to the plan that best suits your needs.
            </p>
        </div>

        <div id="pricing" class="grid grid-cols-1 gap-6 sm:gap-8 lg:grid-cols-3 lg:gap-12">
            <!-- Price 1 -->
            <div class="relative z-10 flex flex-col items-center p-6 border border-gray-200 rounded-lg bg-white">
                <h3 class="text-xl font-semibold sm:text-2xl md:text-3xl text-black">
                    Best Value - Save 51%
                </h3>
                <div class="flex items-end mt-4 text-gray-900">
                    <p class="text-4xl font-semibold">₹1,732.00</p>
                    <p>/ month</p>
                </div>
                <p class="text-base text-gray-600">Billed annually</p>
                <ul class="mt-4 space-y-2">
                    <li class="flex items-center font-semibold text-gray-900">
                        <svg class="w-5 h-5 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        12 MONTHS
                    </li>
                </ul>
                <a href="#" class="inline-flex justify-center w-full px-6 py-3 mt-6 text-sm text-center text-blue-600 border border-blue-600 rounded-md bg-transparent hover:bg-blue-700 hover:border-blue-700 hover:text-white">
                    Start Now
                </a>
            </div>

            <!-- Price 2 -->
            <div class="relative z-20 flex flex-col items-center p-6 bg-white border-4 border-blue-600 rounded-lg">
                <h3 class="text-xl font-semibold sm:text-2xl md:text-3xl text-black">
                    6 Months Plan
                </h3>
                <div class="flex items-end mt-4 text-gray-900">
                    <p class="text-4xl font-semibold">₹2,645.00</p>
                    <p>/ month</p>
                </div>
                <p class="text-base text-gray-600">Billed every semester</p>
                <ul class="mt-4 space-y-2">
                    <li class="flex items-center font-semibold text-gray-900">
                        <svg class="w-5 h-5 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        6 MONTHS
                    </li>
                </ul>
                <a href="#" class="inline-flex justify-center w-full px-6 py-3 mt-6 text-sm text-center text-white bg-blue-600 border border-blue-600 rounded-md hover:bg-blue-700 hover:border-blue-700 hover:text-white">
                    Start Now
                </a>
            </div>

            <!-- Price 3 -->
            <div class="relative z-10 flex flex-col items-center p-6 border border-gray-200 rounded-lg bg-white">
                <h3 class="text-xl font-semibold sm:text-2xl md:text-3xl text-black">
                    3 Months Plan
                </h3>
                <div class="flex items-end mt-4 text-gray-900">
                    <p class="text-4xl font-semibold">₹3,559.00</p>
                    <p>/ month</p>
                </div>
                <p class="text-base text-gray-600">Billed quarterly</p>
                <ul class="mt-4 space-y-2">
                    <li class="flex items-center font-semibold text-gray-900">
                        <svg class="w-5 h-5 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        3 MONTHS
                    </li>
                </ul>
                <a href="#" class="inline-flex justify-center w-full px-6 py-3 mt-6 text-sm text-center text-blue-600 border border-blue-600 rounded-md bg-transparent hover:bg-blue-700 hover:border-blue-700 hover:text-white">
                    Start Now
                </a>
            </div>
        </div>
    </div>
</section>

<section class="py-6 text-gray-900 bg-white">
    <div class="px-4 mx-auto max-w-7xl">

        <div class="text-center mb-8">
            <h2 class="text-2xl font-semibold text-black sm:text-3xl md:text-4xl mb-4">
                Payment Methods
            </h2>
            <div class="flex justify-center flex-wrap gap-6 mb-6">
                <img src="{{asset('asset/img/pm1.svg')}}" alt="Visa" class="w-16 h-16 sm:w-12 sm:h-12 md:w-10 md:h-10">
                <img src="{{asset('asset/img/pm2.svg')}}" alt="MasterCard" class="w-16 h-16 sm:w-12 sm:h-12 md:w-10 md:h-10">
                <img src="{{asset('asset/img/pm3.svg')}}" alt="Amex" class="w-16 h-16 sm:w-12 sm:h-12 md:w-10 md:h-10">
                <img src="{{asset('asset/img/pm4.svg')}}" alt="Discover" class="w-16 h-16 sm:w-12 sm:h-12 md:w-10 md:h-10">
                <img src="{{asset('asset/img/pm5.svg')}}" alt="UnionPay" class="w-16 h-16 sm:w-12 sm:h-12 md:w-10 md:h-10">
                <img src="{{asset('asset/img/pm6.svg')}}" alt="Diners" class="w-16 h-16 sm:w-12 sm:h-12 md:w-10 md:h-10">
                <img src="{{asset('asset/img/pm7.svg')}}" alt="PayPal" class="w-16 h-16 sm:w-12 sm:h-12 md:w-10 md:h-10">
                <img src="{{asset('asset/img/pm8.svg')}}" alt="Google Pay" class="w-16 h-16 sm:w-12 sm:h-12 md:w-10 md:h-10">
                <img src="{{asset('asset/img/pm9.svg')}}" alt="Apple Pay" class="w-16 h-16 sm:w-12 sm:h-12 md:w-10 md:h-10">
            </div>
            <p class="text-base text-gray-600 mb-4 sm:px-16 md:px-32">
                If you represent a non-profit organization, university, school, or other similar entity, we invite you to contact our support team to offer you a solution that suits your needs. 
                <a href="#" class="text-blue-600 hover:text-blue-700">Contact us</a>
            </p>
            <p class="text-sm text-gray-600">Value Added Tax not included in the amounts.</p>
        </div>

    </div>
</section>

<section class="py-8 bg-white text-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-semibold text-center text-black mb-8">All Plans Include</h2>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
            <!-- Feature 1 -->
            <div class="flex flex-col items-start p-6 border border-gray-200 rounded-lg shadow-sm hover:shadow-lg transition-shadow duration-300">
                <h3 class="text-xl font-semibold text-black mb-4">Unlimited Dynamic QR</h3>
                <p class="text-gray-600">Create unlimited QRs and update them whenever you want in real time.</p>
            </div>

            <!-- Feature 2 -->
            <div class="flex flex-col items-start p-6 border border-gray-200 rounded-lg shadow-sm hover:shadow-lg transition-shadow duration-300">
                <h3 class="text-xl font-semibold text-black mb-4">Variety of QR Types</h3>
                <p class="text-gray-600">Choose from multiple QR types, such as URL, PDF, Menu, and more.</p>
            </div>

            <!-- Feature 3 -->
            <div class="flex flex-col items-start p-6 border border-gray-200 rounded-lg shadow-sm hover:shadow-lg transition-shadow duration-300">
                <h3 class="text-xl font-semibold text-black mb-4">Variety of Download Formats</h3>
                <p class="text-gray-600">Download your QR in PNG, SVG, PDF, among others.</p>
            </div>

            <!-- Feature 4 -->
            <div class="flex flex-col items-start p-6 border border-gray-200 rounded-lg shadow-sm hover:shadow-lg transition-shadow duration-300">
                <h3 class="text-xl font-semibold text-black mb-4">Unlimited Users</h3>
                <p class="text-gray-600">Invite the users you want to collaborate in the creation and management of your QR.</p>
            </div>

            <!-- Feature 5 -->
            <div class="flex flex-col items-start p-6 border border-gray-200 rounded-lg shadow-sm hover:shadow-lg transition-shadow duration-300">
                <h3 class="text-xl font-semibold text-black mb-4">Complete QR Analytics</h3>
                <p class="text-gray-600">Get statistics on the number of scans, locations and user devices.</p>
            </div>

            <!-- Feature 6 -->
            <div class="flex flex-col items-start p-6 border border-gray-200 rounded-lg shadow-sm hover:shadow-lg transition-shadow duration-300">
                <h3 class="text-xl font-semibold text-black mb-4">Premium Support</h3>
                <p class="text-gray-600">Receive priority and personalized technical assistance to solve any problem.</p>
            </div>

            <!-- Feature 7 -->
            <div class="flex flex-col items-start p-6 border border-gray-200 rounded-lg shadow-sm hover:shadow-lg transition-shadow duration-300">
                <h3 class="text-xl font-semibold text-black mb-4">Editing and Management of QR Codes</h3>
                <p class="text-gray-600">Customize your QRs with colors, fonts, and the logo of your choice, among other options.</p>
            </div>

            <!-- Feature 8 -->
            <div class="flex flex-col items-start p-6 border border-gray-200 rounded-lg shadow-sm hover:shadow-lg transition-shadow duration-300">
                <h3 class="text-xl font-semibold text-black mb-4">Unlimited Scans</h3>
                <p class="text-gray-600">Your QRs can be scanned unlimited times.</p>
            </div>

            <!-- Feature 9 -->
            <div class="flex flex-col items-start p-6 border border-gray-200 rounded-lg shadow-sm hover:shadow-lg transition-shadow duration-300">
                <h3 class="text-xl font-semibold text-black mb-4">Bulk Create and Download</h3>
                <p class="text-gray-600">Generate multiple QRs with CSV or REST API and get them in a single download.</p>
            </div>

            <!-- Feature 10 -->
            <div class="flex flex-col items-start p-6 border border-gray-200 rounded-lg shadow-sm hover:shadow-lg transition-shadow duration-300">
                <h3 class="text-xl font-semibold text-black mb-4">Integrate Google and Facebook Pixel</h3>
                <p class="text-gray-600">Keep track of the interaction with your QRs.</p>
            </div>

            <!-- Feature 11 -->
            <div class="flex flex-col items-start p-6 border border-gray-200 rounded-lg shadow-sm hover:shadow-lg transition-shadow duration-300">
                <h3 class="text-xl font-semibold text-black mb-4">Cancel Whenever You Want</h3>
                <p class="text-gray-600">Cancel your subscription at any time, without restrictions.</p>
            </div>

            <!-- Feature 12 -->
            <div class="flex flex-col items-start p-6 border border-gray-200 rounded-lg shadow-sm hover:shadow-lg transition-shadow duration-300">
                <h3 class="text-xl font-semibold text-black mb-4">Custom Domain</h3>
                <p class="text-gray-600">Use your own domain to customize the URL of your QRs.</p>
            </div>
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