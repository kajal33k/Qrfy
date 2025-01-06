@extends('components.main')
@section('comtent')
<div class="max-w-4xl mx-auto bg-white p-6  mt-10">
    <h1 class="text-3xl font-bold text-gray-800 text-center mb-6">Static QR</h1>
    
    <div class="flex justify-center mb-6">
        <img src="{{asset('asset/img/staticqr.jpg')}}" alt="Static QR Code" class="max-w-full h-auto rounded-lg shadow-lg">
    </div>

    <div>
        <p class="text-gray-600 text-lg leading-relaxed">
            Static QR codes are an efficient and versatile tool for sharing information digitally. Unlike dynamic QR codes, which allow linked content to be updated without changing the physical code, static QR codes keep information constant over time, making them valuable in various situations.
            <br><br>
            For example, imagine a coffee shop that offers free Wi-Fi to its customers. By using a static QR code, the coffee shop can generate a unique code that allows customers to easily connect to the Wi-Fi network. This code remains constant over time, ensuring that clients can always access the Wi-Fi network without needing to change the code.
            <br><br>
            In short, static QR codes offer a practical and reliable solution for sharing information in a constant and accessible way. Below, we present an overview of its most notable benefits.
        </p>
    </div>
</div>

<div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-lg mt-10">

    <!-- Benefits List -->
    <div class="space-y-4">
        <h2 class="text-2xl font-semibold text-gray-800">Benefits of Static QR Codes</h2>
        <ul class="list-disc pl-6 space-y-2 text-gray-600 text-lg">
            <li><strong>Content stability:</strong> Once created, the content of the static QR code remains constant, ensuring that information is always available and accessible consistently.</li>
            <li><strong>Simplicity of creation:</strong> Static QR codes are quick and easy to generate, making them ideal for situations where quick access to specific information is needed.</li>
            <li><strong>Universal Compatibility:</strong> Static QR Codes are compatible with a wide range of scanning devices and apps, ensuring that anyone with a compatible device can access the content.</li>
            <li><strong>No internet connection required:</strong> Once the static QR code has been generated, an internet connection is not required to access the linked content, making it ideal for situations where connectivity is limited or non-existent.</li>
            <li><strong>Lower complexity:</strong> By not requiring a management system to update content, static QR codes are simpler to manage and maintain, making them a practical and cost-effective option for various applications.</li>
            <li><strong>Reliability:</strong> Since the content remains unchanged, static QR codes offer greater reliability and consistency in the delivery of information, avoiding possible errors or misunderstandings caused by frequent updates.</li>
            <li><strong>Information security:</strong> By not allowing changes to the content, static QR codes ensure the integrity and security of the linked information, protecting it from possible unauthorized manipulation or alteration.</li>
        </ul>
    </div>
</div>

<div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-lg mt-10 mb-8">
    <h1 class="text-3xl font-bold text-gray-800 text-center mb-6">How to Use Static QR Codes</h1>
    
    <!-- Image of QR code usage -->
    <div class="flex justify-center mb-6">
        <img src="{{asset('asset/img/hhhh.jpg')}}" alt="How to Use Static QR Code" class="max-w-full h-auto rounded-md shadow-lg">
    </div>

    <!-- Instructions Section -->
    <div class="space-y-6">
        <p class="text-gray-600 text-lg leading-relaxed">
            Static QR codes are a quick and easy way to share information digitally. Here's how to create and customize your own static QR codes to get the most out of them:
        </p>
        
        <!-- Step 1: Choosing the type of static QR -->
        <div>
            <h2 class="text-2xl font-semibold text-gray-800">1. Choosing the type of static QR</h2>
            <p class="text-gray-600 text-lg leading-relaxed">
                Before creating your static QR code, decide what type of information you want to share. You can opt for a URL that points to your website, a simple text, or even a contact card. Choose the type of QR that best suits your needs and the experience you want to provide to your users.
            </p>
        </div>

        <!-- Step 2: Adding Required Information -->
        <div>
            <h2 class="text-2xl font-semibold text-gray-800">2. Adding Required Information</h2>
            <p class="text-gray-600 text-lg leading-relaxed">
                Once you have selected the type of static QR code, it is time to add the necessary information. It is crucial that the content is short, clear, and relevant to your users. This ensures that the information is easy to understand and useful to those who scan the code. Also, verify that the information is free of spelling or grammatical errors, since you will not be able to make modifications once it is printed. If you follow these guidelines, you will ensure an optimal experience for your users and project a professional image on your QRs.
            </p>
        </div>

        <!-- Step 3: QR Code Customization -->
        <div>
            <h2 class="text-2xl font-semibold text-gray-800">3. QR Code Customization</h2>
            <p class="text-gray-600 text-lg leading-relaxed">
                Customize your static QR code so that it reflects your brand and is easily recognizable. You can choose colors, add a frame, and adjust the design based on your brand identity. Also, consider adding a logo or custom design to make it more visually appealing.
            </p>
        </div>

        <!-- Step 4: QR Code Download -->
        <div>
            <h2 class="text-2xl font-semibold text-gray-800">4. QR Code Download</h2>
            <p class="text-gray-600 text-lg leading-relaxed">
                Once you have created and customized your static QR code, download it in the format that best suits your needs. You can choose between formats such as PNG, JPG, or SVG. The variety of formats will allow you to use your QR code on a variety of marketing materials, such as brochures, posters, business cards, and more.
            </p>
        </div>
    </div>
</div>



<div
        class="px-44 max-w-full mx-auto px-4 py-16 sm:px-6 lg:px-8 bg-gradient-to-r from-[#230F28] via-[#1D56F3] to-[#230F28] px-32">
        <!-- Header Section -->
        <div class="flex justify-between items-center mb-16 mx-8">
            <div class="max-w-2xl">
                <h1 class="text-5xl font-bold text-white mb-4 leading-tight">
                    Try our QR code generator for 7 days free.
                </h1>
            </div>
            <button class="px-6 py-3 text-white rounded-full border-2 border-white/20 hover:bg-white/10 transition-all">
                Register now
            </button>
        </div>

        <!-- Dashboard Preview -->
        <div class="mt-8 mx-8">
            <img class="w-full h-auto object-cover rounded-lg" src="{{ asset('asset/img/web-img') }}"
                alt="Dashboard preview">
        </div>
    </div>


<div class="max-w-full mx-auto bg-gradient-to-r from-[#230F28] via-[#201C50] to-[#230F28]">
    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-6 mx-8 py-8 px-36">
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
<div class="flex justify-between items-center  border-b border-white/10 pb-8 bg-[#230F28] px-36">
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