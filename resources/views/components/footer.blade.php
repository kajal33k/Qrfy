<footer class="max-w-full mx-auto px-6 md:px-12 py-16 bg-[#230F28]">
    <!-- Footer Navigation -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
        <!-- QRFY Column -->
        <div class="space-y-4">
            <h3 class="text-white font-semibold mb-6">QRFY</h3>
            <ul class="space-y-3">
                <li><a href="#" class="text-white/60 hover:text-white">QR Code Generator</a></li>
                <li><a href="{{route('frontend.plans')}}" class="text-white/60 hover:text-white">Plans and prices</a></li>
                <li><a href="{{route('frontend.about')}}" class="text-white/60 hover:text-white">About us</a></li>
            </ul>
        </div>

        <!-- Company Column -->
        <div class="space-y-4">
            <h3 class="text-white font-semibold mb-6">Company</h3>
            <ul class="space-y-3">
                <li><a href="{{route('frontend.plans')}}" class="text-white/60 hover:text-white">Terms of Use and Contract</a></li>
                <li><a href="{{route('frontend.plans')}}" class="text-white/60 hover:text-white">Privacy Policy</a></li>
                <li><a href="{{route('frontend.faq')}}" class="text-white/60 hover:text-white">Cookies Policy</a></li>
                <li><a href="{{route('frontend.api')}}" class="text-white/60 hover:text-white">GDPR</a></li>
            </ul>
        </div>

        <!-- Resources Column -->
        <div class="space-y-4">
            <h3 class="text-white font-semibold mb-6">Resources</h3>
            <ul class="space-y-3">
                <li><a href="{{route('frontend.faq')}}" class="text-white/60 hover:text-white">QR Codes for</a></li>
                <li><a href="{{route('frontend.api')}}" class="text-white/60 hover:text-white">QR Codes on</a></li>
            </ul>
        </div>

        <!-- Help Column -->
        <div class="space-y-4">
            <h3 class="text-white font-semibold mb-6">Help</h3>
            <ul class="space-y-3">
                <li><a href="{{route('frontend.login')}}" class="text-white/60 hover:text-white">Contact us</a></li>
                <li><a href="{{route('frontend.faq')}}" class="text-white/60 hover:text-white">FAQ</a></li>
                <li><a href="{{route('frontend.api')}}" class="text-white/60 hover:text-white">API Docs</a></li>
                <li><a href="{{route('frontend.plans')}}" class="text-white/60 hover:text-white">Report abuse</a></li>
            </ul>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="flex flex-col sm:flex-row justify-between items-center pt-8 border-t border-white/10">
        <p class="text-white/60 text-sm mb-4 sm:mb-0">
            2024 © QR Code Generator PRO S.L. - "QR Code" is a trademark of DENSO WAVE INCORPORATED
        </p>
        <div class="flex items-center gap-6">
            <button class="text-white/60 hover:text-white flex items-center gap-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                </svg>
                English
            </button>
            <button class="text-white/60 hover:text-white">Currency</button>
            <div class="flex items-center gap-4">
                <a href="#" class="text-white/60 hover:text-white">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
                    </svg>
                </a>
                <a href="#" class="text-white/60 hover:text-white">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"></path>
                    </svg>
                </a>
                <a href="#" class="text-white/60 hover:text-white">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</footer>
