@extends('components.main')
@section('comtent')

{{-- Hero Section --}}
<div class="bg-[#220E27] text-white py-16 px-32 flex flex-col items-center text-center">
    <h1 class="text-4xl md:text-5xl font-bold mb-4">
        Automate the Creation of Your QR Code with Our API
    </h1>
    <p class="text-lg md:text-xl text-gray-300 max-w-2xl mb-6">
        Create static & dynamic QR Codes wherever you want in just seconds.
    </p>
    
</div>

 <!-- API Documentation Section -->
 <section class="bg-gray-100 text-black py-12 px-8">
    <div class="flex flex-col md:flex-row gap-8 max-w-7xl mx-auto bg-white">
        <!-- Sidebar -->
        <aside class="w-full md:w-1/4 bg-white p-6 rounded-lg" id="sidebar">
            <h3 class="font-bold text-lg mb-4 cursor-pointer" onclick="toggleSection('qr-section')">QR</h3>
            <ul class="space-y-2 text-sm" id="qr-section">
                <li><a href="#" class="block text-blue-600 font-semibold">Bulk create</a></li>
                <li><a href="#" class="block hover:text-blue-600">Bulk edit</a></li>
                <li><a href="#" class="block hover:text-blue-600">List QRs</a></li>
                <li><a href="#" class="block hover:text-blue-600">Get a QR</a></li>
                <li><a href="#" class="block hover:text-blue-600">Update a QR</a></li>
                <li><a href="#" class="block hover:text-blue-600">Duplicate a QR</a></li>
                <li><a href="#" class="block hover:text-blue-600">Generate QR image</a></li>
                <li><a href="#" class="block hover:text-blue-600">Retrieve a QR image</a></li>
                <li><a href="#" class="block hover:text-blue-600">Batch delete</a></li>
                <li><a href="#" class="block hover:text-blue-600">Analysis report</a></li>
            </ul>
            <h3 class="font-bold text-lg mt-6 mb-4 cursor-pointer" onclick="toggleSection('folder-section')">Folder</h3>
            <ul class="space-y-2 text-sm hidden" id="folder-section">
                <li><a href="#" class="block hover:text-blue-600">Create a new folder</a></li>
                <li><a href="#" class="block hover:text-blue-600">Get folders list</a></li>
            </ul>
            <h3 class="font-bold text-lg mt-6 mb-4">FAQ</h3>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 bg-white p-8 rounded-lg">
            <h2 class="text-2xl font-bold mb-4">Bulk create</h2>

            <!-- Authorization -->
            <div class="mb-6">
                <h3 class="font-semibold text-lg">Authorizations</h3>
                <p class="text-blue-600">ApiKeyAuth</p>
            </div>

            <!-- Request Info -->
            <div class="mb-6">
                <h3 class="font-semibold text-lg">Request method</h3>
                <p class="bg-gray-200 text-gray-800 p-2 rounded">POST</p>
            </div>

            <div class="mb-6">
                <h3 class="font-semibold text-lg flex justify-between items-center">
                    Request URL
                    <button class="text-blue-600 text-sm" onclick="copyToClipboard('/api/public/qrs')">Copy</button>
                </h3>
                <p class="bg-gray-200 text-gray-800 p-2 rounded">/api/public/qrs</p>
            </div>

            <!-- Request Body Schema -->
            <div class="mb-6">
                <h3 class="font-semibold text-lg">Request Body schema</h3>
                <p class="text-sm text-gray-500 mb-2">application/json</p>
                <table class="w-full text-sm border-collapse border border-gray-300">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="border border-gray-300 p-2">Parameter</th>
                            <th class="border border-gray-300 p-2">Type</th>
                            <th class="border border-gray-300 p-2">Example</th>
                            <th class="border border-gray-300 p-2">Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border border-gray-300 p-2">style</td>
                            <td class="border border-gray-300 p-2">object</td>
                            <td class="border border-gray-300 p-2">-</td>
                            <td class="border border-gray-300 p-2">Style applied to all QRs</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 p-2">folder</td>
                            <td class="border border-gray-300 p-2">integer or null</td>
                            <td class="border border-gray-300 p-2">1</td>
                            <td class="border border-gray-300 p-2">Folder ID, assign a user folder to the QR</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 p-2">qrs <span class="text-red-600">*</span></td>
                            <td class="border border-gray-300 p-2">array of object</td>
                            <td class="border border-gray-300 p-2">-</td>
                            <td class="border border-gray-300 p-2"></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Responses -->
            <div>
                <h3 class="font-semibold text-lg">Responses status</h3>
                <ul class="text-sm space-y-2">
                    <li class="text-green-600">200 Created</li>
                    <li class="text-red-600">400 Validation Failed</li>
                    <li class="text-red-600">401 Invalid API key</li>
                    <li class="text-red-600">404 Not Found (when optional folder doesn't exist)</li>
                </ul>
            </div>

            <!-- Response Sample -->
            <div class="mt-6">
                <h3 class="font-semibold text-lg flex justify-between items-center">
                    Response sample
                    <button class="text-blue-600 text-sm" onclick="copyToClipboard('{\n  \"ids\": [1, 2, 3, 4]\n}')">Copy</button>
                </h3>
                <pre class="bg-gray-200 p-4 rounded text-sm">
{
"ids": [1, 2, 3, 4]
}
                </pre>
            </div>
        </main>
    </div>
</section>

<!-- JavaScript -->
<script>
    // Toggle sidebar sections
    function toggleSection(sectionId) {
        const section = document.getElementById(sectionId);
        section.classList.toggle('hidden');
    }

    // Copy text to clipboard
    function copyToClipboard(text) {
        navigator.clipboard.writeText(text).then(() => {
            alert("Copied to clipboard!");
        }).catch(err => {
            alert("Failed to copy: " + err);
        });
    }
</script>




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