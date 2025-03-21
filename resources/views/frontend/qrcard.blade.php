@extends('components.main')
@section('content')
    {{-- banner --}}
    <div class="text-center bg-white py-12">
        <h1 class="text-3xl font-bold text-black">QR codes in <span class="text-blue-600">Business cards</span></h1>
        <div class="relative inline-block mt-4">
            <button id="dropdownButton" class="text-blue-600 font-medium hover:underline flex items-center">
                Select other examples <span class="ml-1">&#9662;</span>
            </button>
            <div id="dropdownMenu"
                class="hidden absolute left-1/2 transform -translate-x-1/2 mt-2 w-40 bg-white shadow-lg rounded-lg overflow-hidden">
                <ul class="text-left">
                    <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">Art</li>
                    <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">Badges</li>
                    <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">Banners</li>
                </ul>
            </div>
        </div>
    </div>

    {{-- nav --}}
    <div class="bg-white flex justify-center">
        <ul class="flex space-x-6 py-4 text-gray-700 font-medium">
            <li class="capitalize border border-gray-700 p-4 rounded-full">Benefits</li>
            <li class="capitalize border border-gray-700 p-4 rounded-full">Best Practices</li>
            <li class="capitalize border border-gray-700 p-4 rounded-full">Use Cases</li>
            <li class="capitalize border border-gray-700 p-4 rounded-full">FAQs</li>
        </ul>
    </div>

    {{-- para --}}
    <div class="bg-white flex justify-center">
        <p class="text-base p-2  max-w-3xl">Include a QR code on your business cards and make a difference with other
            professionals: QRFY will allow you to share business information, contact information, samples of your work and
            much more in just one scan.</p>
    </div>

    {{-- cards as a products --}}
    <div class="bg-white flex md:flex-row flex-col justify-center gap-4">
        <div class="bg-white shadow-md py-4">
            <img src="{{ asset('asset/img/card1.jpg') }}" alt="" class="w-96">
            <div class="bg-white py-2"><button class="bg-blue-400 p-2 rounded-full ">Create Qr Code</button></div>
        </div>
        <div class="bg-white shadow-md">
            <img src="{{ asset('asset/img/card1.jpg') }}" alt="" class="w-96">
            <div class="bg-white py-2"><button class="bg-blue-400 p-2 rounded-full ">Create Qr Code</button></div>
        </div>
    </div>

    {{-- cards  --}}
    <div class="bg-white flex justify-center py-12 min-h-[300px]">
        <div class="bg-white shadow-md max-w-3xl">
            <img src="{{ asset('asset/img/card1.jpg') }}" alt="" class="w-full">
            <div class="bg-white py-2">
                <button class="bg-blue-400 p-2 rounded-full">Create QR Code</button>
            </div>
        </div>
    </div>

    {{-- text-content --}}
    <div class="bg-white  p-8 max-w-full w-full border border-gray-200">
        <h1 class="text-3xl font-bold text-gray-800 mb-4 border-b-2 border-gray-300 pb-2">The Benefits of Using QR Codes on
            Business Cards</h1>
        <p class="text-gray-700 leading-relaxed">
            The business card is a fundamental part of creating networks and work links. Adding a QR code to your business
            cards allows you to expand your contact list and improve the effectiveness of your social networks. It makes it
            easier for your clients to access your work samples and enables potential employers to save your information
            effortlessly. The benefits are numerous:
        </p>
        <ul class="mt-4 space-y-2">
            <li class="flex items-center text-gray-700"><span class="text-green-500 font-bold text-lg mr-2">✔</span> Instant
                access to contact details</li>
            <li class="flex items-center text-gray-700"><span class="text-green-500 font-bold text-lg mr-2">✔</span> Quick
                portfolio and social media links</li>
            <li class="flex items-center text-gray-700"><span class="text-green-500 font-bold text-lg mr-2">✔</span> Digital
                convenience for saving data</li>
            <li class="flex items-center text-gray-700"><span class="text-green-500 font-bold text-lg mr-2">✔</span> Modern
                and professional touch</li>
        </ul>
    </div>


    {{-- ACCORDIANS --}}

    <div class="max-w-full mx-auto px-5 bg-white min-h-sceen">

        <div class="grid divide-y divide-neutral-200 max-w-xl mx-auto">
            <div class="py-5">
                <details class="group">
                    <summary class="flex justify-between items-center font-medium cursor-pointer list-none">
                        <span class="font-bold"> What is a SAAS platform?</span>
                        <span class="transition group-open:rotate-180">
                            <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24"
                                width="24">
                                <path d="M6 9l6 6 6-6"></path>
                            </svg>
                        </span>
                    </summary>
                    <p class="text-neutral-600 mt-3 group-open:animate-fadeIn">
                        SAAS platform is a cloud-based software service that allows users to access
                        and use a variety of tools and functionality.
                    </p>
                </details>
            </div>
            <div class="py-5">
                <details class="group">
                    <summary class="flex justify-between items-center font-medium cursor-pointer list-none">
                        <span class="font-bold"> How does billing work?</span>
                        <span class="transition group-open:rotate-180">
                            <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24"
                                width="24">
                                <path d="M6 9l6 6 6-6"></path>
                            </svg>
                        </span>
                    </summary>
                    <p class="text-neutral-600 mt-3 group-open:animate-fadeIn">
                        We offers a variety of billing options, including monthly and annual subscription plans,
                        as well as pay-as-you-go pricing for certain services. Payment is typically made through a credit
                        card or other secure online payment method.
                    </p>
                </details>
            </div>
            <div class="py-5">
                <details class="group">
                    <summary class="flex justify-between items-center font-medium cursor-pointer list-none">
                        <span class="font-bold"> Can I get a refund for my subscription?</span>
                        <span class="transition group-open:rotate-180">
                            <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24"
                                width="24">
                                <path d="M6 9l6 6 6-6"></path>
                            </svg>
                        </span>
                    </summary>
                    <p class="text-neutral-600 mt-3 group-open:animate-fadeIn">
                        We offers a 30-day money-back guarantee for most of its subscription plans. If you are not
                        satisfied with your subscription within the first 30 days, you can request a full refund. Refunds
                        for subscriptions that have been active for longer than 30 days may be considered on a case-by-case
                        basis.
                    </p>
                </details>
            </div>
            <div class="py-5">
                <details class="group">
                    <summary class="flex justify-between items-center font-medium cursor-pointer list-none">
                        <span class="font-bold"> How do I cancel my subscription?</span>
                        <span class="transition group-open:rotate-180">
                            <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                viewBox="0 0 24 24" width="24">
                                <path d="M6 9l6 6 6-6"></path>
                            </svg>
                        </span>
                    </summary>
                    <p class="text-neutral-600 mt-3 group-open:animate-fadeIn">
                        To cancel your We subscription, you can log in to your account and navigate to the
                        subscription management page. From there, you should be able to cancel your subscription and stop
                        future billing.
                    </p>
                </details>
            </div>
            <div class="py-5">
                <details class="group">
                    <summary class="flex justify-between items-center font-medium cursor-pointer list-none">
                        <span class="font-bold"> Can I try this platform for free?</span>
                        <span class="transition group-open:rotate-180">
                            <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                viewBox="0 0 24 24" width="24">
                                <path d="M6 9l6 6 6-6"></path>
                            </svg>
                        </span>
                    </summary>
                    <p class="text-neutral-600 mt-3 group-open:animate-fadeIn">
                        We offers a free trial of its platform for a limited time. During the trial period,
                        you will have access to a limited set of features and functionality, but you will not be charged.
                    </p>
                </details>
            </div>
            <div class="py-5">
                <details class="group">
                    <summary class="flex justify-between items-center font-medium cursor-pointer list-none">
                        <span class="font-bold"> How do I access documentation?</span>
                        <span class="transition group-open:rotate-180">
                            <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                viewBox="0 0 24 24" width="24">
                                <path d="M6 9l6 6 6-6"></path>
                            </svg>
                        </span>
                    </summary>
                    <p class="text-neutral-600 mt-3 group-open:animate-fadeIn">
                        Documentation is available on the company's website and can be accessed by
                        logging in to your account. The documentation provides detailed information on how to use the ,
                        as well as code examples and other resources.
                    </p>
                </details>
            </div>
            <div class="py-5">
                <details class="group">
                    <summary class="flex justify-between items-center font-medium cursor-pointer list-none">
                        <span class="font-bold"> How do I contact support?</span>
                        <span class="transition group-open:rotate-180">
                            <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                viewBox="0 0 24 24" width="24">
                                <path d="M6 9l6 6 6-6"></path>
                            </svg>
                        </span>
                    </summary>
                    <p class="text-neutral-600 mt-3 group-open:animate-fadeIn">
                        If you need help with the platform or have any other questions, you can contact the
                        company's support team by submitting a support request through the website or by emailing
                        support@We.com.
                    </p>
                </details>
            </div>
            <div class="py-5">
                <details class="group">
                    <summary class="flex justify-between items-center font-medium cursor-pointer list-none">
                        <span class="font-bold"> Do you offer any discounts or promotions?</span>
                        <span class="transition group-open:rotate-180">
                            <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                viewBox="0 0 24 24" width="24">
                                <path d="M6 9l6 6 6-6"></path>
                            </svg>
                        </span>
                    </summary>
                    <p class="text-neutral-600 mt-3 group-open:animate-fadeIn">
                        We may offer discounts or promotions from time to time. To stay up-to-date on the latest
                        deals and special offers, you can sign up for the company's newsletter or follow it on social media.
                    </p>
                </details>
            </div>
            <div class="py-5">
                <details class="group">
                    <summary class="flex justify-between items-center font-medium cursor-pointer list-none">
                        <span class="font-bold"> How do we compare to other similar services?</span>
                        <span class="transition group-open:rotate-180">
                            <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                viewBox="0 0 24 24" width="24">
                                <path d="M6 9l6 6 6-6"></path>
                            </svg>
                        </span>
                    </summary>
                    <p class="text-neutral-600 mt-3 group-open:animate-fadeIn">
                        This platform is a highly reliable and feature-rich service that offers a wide range
                        of tools and functionality. It is competitively priced and offers a variety of billing options to
                        suit different needs and budgets.
                    </p>
                </details>
            </div>
        </div>
    </div>

    {{-- qr bussiness card --}}

    <div class="max-w-full bg-white">

        <div class="max-w-2xl mx-auto bg-white p-8 shadow-lg rounded-lg">
            <h1 class="text-3xl font-bold text-gray-900 mb-6">How to create a QR code for a business card?</h1>
            <div class="space-y-6">
                <div class="flex items-start gap-4">
                    <span
                        class="flex items-center justify-center w-10 h-10 bg-gray-900 text-white text-lg font-semibold rounded-full">1</span>
                    <p class="text-gray-700">Sign up to enter the QR code generator and select the QR code you want to add
                        to your business card. We recommend using the <a href="#"
                            class="text-blue-600 font-semibold">vCard Plus QR</a> to get started.</p>
                </div>
                <div class="flex items-start gap-4">
                    <span
                        class="flex items-center justify-center w-10 h-10 bg-gray-900 text-white text-lg font-semibold rounded-full">2</span>
                    <p class="text-gray-700">Complete the content of the QR with all the data you want to display.</p>
                </div>
                <div class="flex items-start gap-4">
                    <span
                        class="flex items-center justify-center w-10 h-10 bg-gray-900 text-white text-lg font-semibold rounded-full">3</span>
                    <p class="text-gray-700">Customize the design: add a frame, a logo, and the legend that will accompany
                        your QR code.</p>
                </div>
                <div class="flex items-start gap-4">
                    <span
                        class="flex items-center justify-center w-10 h-10 bg-gray-900 text-white text-lg font-semibold rounded-full">4</span>
                    <p class="text-gray-700">Choose the colors of your QR, so that they combine with those of your brand or
                        personal style.</p>
                </div>
                <div class="flex items-start gap-4">
                    <span
                        class="flex items-center justify-center w-10 h-10 bg-gray-900 text-white text-lg font-semibold rounded-full">5</span>
                    <p class="text-gray-700">Click “download” to get your QR code in JPEG format.</p>
                </div>
            </div>
        </div>

    </div>

    {{-- text{content} --}}
    <div class="bg-white max-w-full py-12">
        <div class="max-w-3xl mx-auto p-6 bg-white shadow-lg rounded-lg ">
            <h1 class="text-2xl font-bold text-gray-900 mb-4">The best ways to use QRFY on your <span
                    class="text-blue-600">Business Cards</span></h1>
            <p class="mb-6 text-gray-700">For some time now, the QR codes have begun to be renewed, leaving behind the
                typical black and white to open up to a new range of colors and more versatile designs...</p>

            <div class="space-y-6">
                <div>
                    <h2 class="text-lg font-semibold text-gray-900">1. Add instructions</h2>
                    <p class="text-gray-700">In the past, many people and companies have made the mistake of printing QR
                        codes without including a written clarification...</p>
                </div>
                <div>
                    <h2 class="text-lg font-semibold text-gray-900">2. Customize your frame</h2>
                    <p class="text-gray-700">You can make your QR code stand out by adding one of our various creative
                        frames...</p>
                </div>
                <div>
                    <h2 class="text-lg font-semibold text-gray-900">3. Add a logo to your QR code</h2>
                    <p class="text-gray-700">After customizing the frame, shape, and color of your QR code, you have the
                        option to also add your company logo...</p>
                </div>
                <div>
                    <h2 class="text-lg font-semibold text-gray-900">4. Save your designs</h2>
                    <p class="text-gray-700">Sign up for QRFY and you can reuse your saved QR code designs...</p>
                </div>
                <div>
                    <h2 class="text-lg font-semibold text-gray-900">5. Customizable URL</h2>
                    <p class="text-gray-700">QRFY allows you to set a short URL of each generated code...</p>
                </div>
                <div>
                    <h2 class="text-lg font-semibold text-gray-900">6. Test before printing</h2>
                    <p class="text-gray-700">When printing your QR code, you must keep in mind that the minimum recommended
                        size is 2 × 2 cm...</p>
                </div>
            </div>
        </div>
    </div>
    {{-- extra content --}}
    <div class="max-w-full bg-white">
        <div class="max-w-4xl mx-auto py-10 px-6 bg-white shadow-md rounded-lg">
            <h1 class="text-3xl font-bold text-gray-900 mb-4">Explore QR codes on Business Cards in action</h1>
            <p class="text-gray-700 mb-6">If you still cannot imagine the scope and benefits of using a QR code on your
                business cards, here we present some fictitious narratives, so that you can visualize the benefits that you
                can obtain in your business or company.</p>

            <div class="space-y-6">
                <div>
                    <h2 class="text-xl font-semibold text-gray-900">Business Consultants</h2>
                    <p class="text-gray-700">The founder and CEO of Smart Bank integrated a vCard Plus QR code into his
                        business cards. This allowed him to quickly establish contacts with potential clients. Even once, at
                        an event, he ran out of additional cards and was able, thanks to the QR code, to show his online
                        card so that other people could scan and save his contact directly on their mobile phone.</p>
                </div>

                <div>
                    <h2 class="text-xl font-semibold text-gray-900">Restaurants</h2>
                    <p class="text-gray-700">The manager of Los Burgers uses decided to add a Business QR code to the
                        restaurant’s business card, so that his customers have access to opening and closing times and
                        directions to get to the restaurant’s different branches. With a simple scan of the Los Burgers
                        business card, customers are always updated on hours, contact for reservations, menus, nearest
                        locations and much more.</p>
                </div>

                <div>
                    <h2 class="text-xl font-semibold text-gray-900">Government</h2>
                    <p class="text-gray-700">The employees of the Urban Assembly decided to add a QR code to the business
                        card of this government office, to optimize the way of sharing information with the public. In this
                        way, people access, through a simple scan, the office phone number and email, the website and hours,
                        as well as meeting dates, events and other notifications.</p>
                </div>

                <div>
                    <h2 class="text-xl font-semibold text-gray-900">Musicians and artists</h2>
                    <p class="text-gray-700">The Storms decided to use a MP3 QR code to stand out from other bank and
                        emerging musicians. The QR code included on their business cards allows their contacts to share
                        their musical work instantly. In the world of concerts and music festivals, the QRV business card
                        has helped potential customers, who discover their talent by scanning the code and being redirected
                        to an MP3 track, to listen to their recordings.</p>
                </div>

                <div>
                    <h2 class="text-xl font-semibold text-gray-900">Photographers and videographers</h2>
                    <p class="text-gray-700">Including a QR code in business cards allows many professionals to take their
                        portfolio everywhere. That’s what JPI photographer thought when he decided to integrate the Image
                        Gallery QR code into his business cards. In this way, he and his clients only need to carry his
                        business card to show a wide range of photographic work online. This code has also optimized the
                        booking of sessions and added a new online gallery, a “book” button that redirects users to the
                        contact form on its website.</p>
                </div>
            </div>
        </div>
    </div>

    {{-- faq --}}

    <div class="max-w-full mx-auto px-5 bg-white min-h-sceen">

        <div class="grid divide-y divide-neutral-200 max-w-xl mx-auto">
            <div class="py-5">
                <details class="group">
                    <summary class="flex justify-between items-center font-medium cursor-pointer list-none">
                        <span class="font-bold"> What is a SAAS platform?</span>
                        <span class="transition group-open:rotate-180">
                            <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                viewBox="0 0 24 24" width="24">
                                <path d="M6 9l6 6 6-6"></path>
                            </svg>
                        </span>
                    </summary>
                    <p class="text-neutral-600 mt-3 group-open:animate-fadeIn">
                        SAAS platform is a cloud-based software service that allows users to access
                        and use a variety of tools and functionality.
                    </p>
                </details>
            </div>
            <div class="py-5">
                <details class="group">
                    <summary class="flex justify-between items-center font-medium cursor-pointer list-none">
                        <span class="font-bold"> How does billing work?</span>
                        <span class="transition group-open:rotate-180">
                            <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                viewBox="0 0 24 24" width="24">
                                <path d="M6 9l6 6 6-6"></path>
                            </svg>
                        </span>
                    </summary>
                    <p class="text-neutral-600 mt-3 group-open:animate-fadeIn">
                        We offers a variety of billing options, including monthly and annual subscription plans,
                        as well as pay-as-you-go pricing for certain services. Payment is typically made through a credit
                        card or other secure online payment method.
                    </p>
                </details>
            </div>
            <div class="py-5">
                <details class="group">
                    <summary class="flex justify-between items-center font-medium cursor-pointer list-none">
                        <span class="font-bold"> Can I get a refund for my subscription?</span>
                        <span class="transition group-open:rotate-180">
                            <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                viewBox="0 0 24 24" width="24">
                                <path d="M6 9l6 6 6-6"></path>
                            </svg>
                        </span>
                    </summary>
                    <p class="text-neutral-600 mt-3 group-open:animate-fadeIn">
                        We offers a 30-day money-back guarantee for most of its subscription plans. If you are not
                        satisfied with your subscription within the first 30 days, you can request a full refund. Refunds
                        for subscriptions that have been active for longer than 30 days may be considered on a case-by-case
                        basis.
                    </p>
                </details>
            </div>
            <div class="py-5">
                <details class="group">
                    <summary class="flex justify-between items-center font-medium cursor-pointer list-none">
                        <span class="font-bold"> How do I cancel my subscription?</span>
                        <span class="transition group-open:rotate-180">
                            <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                viewBox="0 0 24 24" width="24">
                                <path d="M6 9l6 6 6-6"></path>
                            </svg>
                        </span>
                    </summary>
                    <p class="text-neutral-600 mt-3 group-open:animate-fadeIn">
                        To cancel your We subscription, you can log in to your account and navigate to the
                        subscription management page. From there, you should be able to cancel your subscription and stop
                        future billing.
                    </p>
                </details>
            </div>
            <div class="py-5">
                <details class="group">
                    <summary class="flex justify-between items-center font-medium cursor-pointer list-none">
                        <span class="font-bold"> Can I try this platform for free?</span>
                        <span class="transition group-open:rotate-180">
                            <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                viewBox="0 0 24 24" width="24">
                                <path d="M6 9l6 6 6-6"></path>
                            </svg>
                        </span>
                    </summary>
                    <p class="text-neutral-600 mt-3 group-open:animate-fadeIn">
                        We offers a free trial of its platform for a limited time. During the trial period,
                        you will have access to a limited set of features and functionality, but you will not be charged.
                    </p>
                </details>
            </div>
            <div class="py-5">
                <details class="group">
                    <summary class="flex justify-between items-center font-medium cursor-pointer list-none">
                        <span class="font-bold"> How do I access documentation?</span>
                        <span class="transition group-open:rotate-180">
                            <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                viewBox="0 0 24 24" width="24">
                                <path d="M6 9l6 6 6-6"></path>
                            </svg>
                        </span>
                    </summary>
                    <p class="text-neutral-600 mt-3 group-open:animate-fadeIn">
                        Documentation is available on the company's website and can be accessed by
                        logging in to your account. The documentation provides detailed information on how to use the ,
                        as well as code examples and other resources.
                    </p>
                </details>
            </div>
            <div class="py-5">
                <details class="group">
                    <summary class="flex justify-between items-center font-medium cursor-pointer list-none">
                        <span class="font-bold"> How do I contact support?</span>
                        <span class="transition group-open:rotate-180">
                            <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                viewBox="0 0 24 24" width="24">
                                <path d="M6 9l6 6 6-6"></path>
                            </svg>
                        </span>
                    </summary>
                    <p class="text-neutral-600 mt-3 group-open:animate-fadeIn">
                        If you need help with the platform or have any other questions, you can contact the
                        company's support team by submitting a support request through the website or by emailing
                        support@We.com.
                    </p>
                </details>
            </div>
            <div class="py-5">
                <details class="group">
                    <summary class="flex justify-between items-center font-medium cursor-pointer list-none">
                        <span class="font-bold"> Do you offer any discounts or promotions?</span>
                        <span class="transition group-open:rotate-180">
                            <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                viewBox="0 0 24 24" width="24">
                                <path d="M6 9l6 6 6-6"></path>
                            </svg>
                        </span>
                    </summary>
                    <p class="text-neutral-600 mt-3 group-open:animate-fadeIn">
                        We may offer discounts or promotions from time to time. To stay up-to-date on the latest
                        deals and special offers, you can sign up for the company's newsletter or follow it on social media.
                    </p>
                </details>
            </div>
            <div class="py-5">
                <details class="group">
                    <summary class="flex justify-between items-center font-medium cursor-pointer list-none">
                        <span class="font-bold"> How do we compare to other similar services?</span>
                        <span class="transition group-open:rotate-180">
                            <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                viewBox="0 0 24 24" width="24">
                                <path d="M6 9l6 6 6-6"></path>
                            </svg>
                        </span>
                    </summary>
                    <p class="text-neutral-600 mt-3 group-open:animate-fadeIn">
                        This platform is a highly reliable and feature-rich service that offers a wide range
                        of tools and functionality. It is competitively priced and offers a variety of billing options to
                        suit different needs and budgets.
                    </p>
                </details>
            </div>
        </div>
    </div>
    <!-- Call to Action -->
    <div class=" bg-white py-6 px-4 shadow-md text-center">
        <p class="text-gray-800 font-semibold">Do you want QR codes tailored to you? <span class="text-blue-600">Create
                your own design</span> and download it instantly.</p>
        <button class="mt-2 px-6 py-2 bg-blue-600 text-white rounded-lg">Register now</button>
    </div>


    <script>
        // ...
        // extend: {
        //   keyframes: {
        //     fadeIn: {
        //       "0%": { opacity: 0 },
        //       "100%": { opacity: 100 },
        //     },
        //   },
        //   animation: {
        //     fadeIn: "fadeIn 0.2s ease-in-out forwards",
        //   },
        // },
        // ...
    </script>

    <script>
        document.getElementById('dropdownButton').addEventListener('click', function() {
            document.getElementById('dropdownMenu').classList.toggle('hidden');
        });

        document.addEventListener('click', function(event) {
            const dropdownMenu = document.getElementById('dropdownMenu');
            const dropdownButton = document.getElementById('dropdownButton');
            if (!dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
                dropdownMenu.classList.add('hidden');
            }
        });
    </script>
@endsection
