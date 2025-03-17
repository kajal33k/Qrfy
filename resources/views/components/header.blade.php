<header class="flex shadow-md py-4 px-4 sm:px-6 bg-white font-sans min-h-[70px] tracking-wide relative z-50">
  <div class="flex flex-wrap items-center justify-between gap-4 w-full max-w-screen-xl mx-auto">
      <!-- Logo -->
      <a href="javascript:void(0)" class="hidden sm:block">
          <img src="{{asset('asset/img/logo.png')}}" alt="logo" class="w-12" />
      </a>
      <a href="javascript:void(0)" class="sm:hidden">
          <img src="{{asset('asset/img/logo.png')}}" alt="logo" class="w-9" />
      </a>

      <!-- Navigation -->
      <nav id="collapseMenu"
          class="fixed lg:relative top-0 left-0 lg:flex lg:static bg-white w-3/5 max-w-[300px] lg:w-auto h-full lg:h-auto shadow-lg lg:shadow-none transform lg:transform-none transition-all duration-300 ease-in-out -translate-x-full lg:translate-x-0 z-50">
          <button id="toggleClose"
              class="lg:hidden absolute top-3 right-3 bg-gray-200 hover:bg-gray-300 rounded-full w-9 h-9 flex items-center justify-center">
              ✖
          </button>
          <ul class="flex flex-col lg:flex-row gap-4 lg:gap-x-5 px-6 lg:px-0 pt-16 lg:pt-0">

              <li class="group max-lg:border-b max-lg:px-3 max-lg:py-3 relative">
                  <a href="javascript:void(0)"
                      class="hover:text-[#007bff] hover:fill-[#007bff] text-gray-800 text-[15px] flex items-center font-bold">Products<svg
                          xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" class="ml-1 inline-block font-bold"
                          viewBox="0 0 24 24">
                          <path
                              d="M12 16a1 1 0 0 1-.71-.29l-6-6a1 1 0 0 1 1.42-1.42l5.29 5.3 5.29-5.29a1 1 0 0 1 1.41 1.41l-6 6a1 1 0 0 1-.7.29z"
                              data-name="16" data-original="#000000" />
                      </svg>
                  </a>
                  <ul
                      class="absolute top-5 max-lg:top-8 left-0 z-50 block space-y-2 shadow-lg bg-white max-h-0 overflow-hidden min-w-[230px] group-hover:opacity-100 group-hover:max-h-[700px] px-6 group-hover:pb-4 group-hover:pt-6 transition-all duration-[400ms]">
                      <div class="grid grid-cols-1 md:grid-cols-4 gap-2 p-2 w-[800px]">
                          <!-- List of Products -->
                          <div class="flex items-start p-0 border border-gray-200 rounded-lg shadow-md">
                              <svg class="w-6 h-6 text-blue-500 mr-4" xmlns="http://www.w3.org/2000/svg"
                                  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M9 12h6m-3 6v-6" />
                              </svg>
                              <div>
                                  <a href="{{ route('frontend.staticqr') }}"
                                      class="font-semibold text-sm text-wrap">Static QR
                                      <p class="text-xs text-gray-600 text-wrap">Permanent and unalterable QR codes.
                                      </p>
                                  </a>
                              </div>
                          </div>
                          <div class="flex items-start p-0 border border-gray-200 rounded-lg shadow-md">
                              <svg class="w-6 h-6 text-blue-500 mr-4" xmlns="http://www.w3.org/2000/svg"
                                  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M15 12H9m3-6v6" />
                              </svg>
                              <div>
                                  <a href="{{ route('frontend.staticqr') }}" 
                                      class="font-semibold text-sm text-wrap">Dynamic QR
                                      <p class="text-xs text-gray-600">QR codes updatable in real time.</p>
                                  </a>
                              </div>
                          </div>
                          <div class="flex items-start p-0 border border-gray-200 rounded-lg shadow-md">
                              <svg class="w-6 h-6 text-blue-500 mr-4" xmlns="http://www.w3.org/2000/svg"
                                  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M12 6v6h6" />
                              </svg>
                              <div>
                                  <a href="{{ route('frontend.staticqr') }}"
                                      class="font-semibold text-sm text-wrap">Variety of download formats
                                      <p class="text-xs text-gray-600 text-wrap">Expand the possibilities of use of
                                          your QRs.</p>
                                  </a>
                              </div>
                          </div>
                          <div class="flex items-start p-0 border border-gray-200 rounded-lg shadow-md">
                              <svg class="w-6 h-6 text-blue-500 mr-4" xmlns="http://www.w3.org/2000/svg"
                                  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M15 12H9" />
                              </svg>
                              <div>
                                  <a href="{{ route('frontend.staticqr') }}"
                                      class="font-semibold text-sm text-wrap">Limited contributing users
                                      <p class="text-xs text-gray-600">Manage your QRs as a team.</p>
                                  </a>
                              </div>
                          </div>
                          <div class="flex items-start p-0 border border-gray-200 rounded-lg shadow-md">
                              <svg class="w-6 h-6 text-blue-500 mr-4" xmlns="http://www.w3.org/2000/svg"
                                  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M12 6v6h6" />
                              </svg>
                              <div>
                                  <a href="{{ route('frontend.staticqr') }}"
                                      class="font-semibold text-sm text-wrap">Complete analytics
                                      <p class="text-xs text-gray-600 text-wrap">Understand performance with detailed
                                          data.</p>
                                  </a>
                              </div>
                          </div>
                          <div class="flex items-start p-0 border border-gray-200 rounded-lg shadow-md">
                              <svg class="w-6 h-6 text-blue-500 mr-4" xmlns="http://www.w3.org/2000/svg"
                                  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M6 6h6v6" />
                              </svg>
                              <div>
                                  <a href="{{ route('frontend.staticqr') }}"
                                      class="font-semibold text-sm text-wrap">Editing and management of QRs
                                      <p class="text-xs text-gray-600 text-wrap">Customize and organize your QRs.</p>
                                  </a>
                              </div>
                          </div>
                          <div class="flex items-start p-0 border border-gray-200 rounded-lg shadow-md">
                              <svg class="w-6 h-6 text-blue-500 mr-4" xmlns="http://www.w3.org/2000/svg"
                                  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M9 12h6m-3 6v-6" />
                              </svg>
                              <div>
                                  <a href="{{ route('frontend.staticqr') }}"
                                      class="font-semibold text-sm text-wrap">Bulk creation and download
                                      <p class="text-xs text-gray-600 text-wrap">Generate and download QRs on a large
                                          scale.</p>
                                  </a>
                              </div>
                          </div>
                          <div class="flex items-start p-0 border border-gray-200 rounded-lg shadow-md">
                              <svg class="w-6 h-6 text-blue-500 mr-4" xmlns="http://www.w3.org/2000/svg"
                                  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M6 6h6v6" />
                              </svg>
                              <div>
                                  <a href="{{ route('frontend.staticqr') }}"
                                      class="font-semibold text-sm text-wrap">Templates
                                      <p class="text-xs text-gray-600 text-wrap">Save and reuse your own designs.</p>
                                  </a>
                              </div>
                          </div>
                          <div class="flex items-start p-0 border border-gray-200 rounded-lg shadow-md">
                              <svg class="w-6 h-6 text-blue-500 mr-4" xmlns="http://www.w3.org/2000/svg"
                                  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M12 6v6h6" />
                              </svg>
                              <div>
                                  <a href="{{ route('frontend.staticqr') }}"
                                      class="font-semibold text-sm text-wrap">Password access protection
                                      <p class="text-xs text-gray-600 text-wrap">Secure your codes.</p>
                                  </a>
                              </div>
                          </div>
                          <div class="flex items-start p-0 border border-gray-200 rounded-lg shadow-md">
                              <svg class="w-6 h-6 text-blue-500 mr-4" xmlns="http://www.w3.org/2000/svg"
                                  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M6 6h6v6" />
                              </svg>
                              <div>
                                  <a href="{{ route('frontend.staticqr') }}"
                                      class="font-semibold text-sm text-wrap">Google pixel integration
                                      <p class="text-xs text-gray-600 text-wrap">Improve the analysis of your digital
                                          campaigns.</p>
                                  </a>
                              </div>
                          </div>
                          <div class="flex items-start p-0 border border-gray-200 rounded-lg shadow-md">
                              <svg class="w-6 h-6 text-blue-500 mr-4" xmlns="http://www.w3.org/2000/svg"
                                  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M12 6v6h6" />
                              </svg>
                              <div>
                                  <a href="{{ route('frontend.staticqr') }}"
                                      class="font-semibold text-sm text-wrap">Custom Domain
                                      <p class="text-xs text-gray-600 text-wrap">Strengthen your brand with your own
                                          domain.</p>
                                  </a>
                              </div>
                          </div>
                          <div class="flex items-start p-0 border border-gray-200 rounded-lg shadow-md">
                              <svg class="w-6 h-6 text-blue-500 mr-4" xmlns="http://www.w3.org/2000/svg"
                                  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M9 12h6m-3 6v-6" />
                              </svg>
                              <div>
                                  <a href="{{ route('frontend.staticqr') }}"
                                      class="font-semibold text-sm text-wrap">Event tracking
                                      <p class="text-xs text-gray-600 text-wrap">Track interactions.</p>
                                  </a>
                              </div>
                          </div>
                      </div>
                  </ul>
              </li>

              <!-- Other Menu Items -->
              <li class='group max-lg:border-b max-lg:px-3 max-lg:py-3 relative'>
                <a href='javascript:void(0)'
                  class='hover:text-[#007bff] hover:fill-[#007bff] text-gray-800 text-[15px] flex items-center font-bold'>Resources<svg
                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" class="ml-1 inline-block"
                    viewBox="0 0 24 24">
                    <path
                      d="M12 16a1 1 0 0 1-.71-.29l-6-6a1 1 0 0 1 1.42-1.42l5.29 5.3 5.29-5.29a1 1 0 0 1 1.41 1.41l-6 6a1 1 0 0 1-.7.29z"
                      data-name="16" data-original="#000000" />
                  </svg>
                </a>
                <ul
                  class='absolute top-5 max-lg:top-8 left-0 z-50 block space-y-2 shadow-lg bg-white max-h-0 overflow-hidden min-w-[230px] group-hover:opacity-100 group-hover:max-h-[700px] px-6 group-hover:pb-4 group-hover:pt-6 transition-all duration-[400ms]'>
                  <li class='border-b py-3'>
                    <a href="{{route('frontend.typesofqr')}}"
                      class='hover:text-[#007bff] hover:fill-[#007bff] text-gray-800 text-[15px] flex items-center'>
                      <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" class="mr-4 inline-block"
                        viewBox="0 0 64 64">
                        <path
                          d="M61.92 30.93a7.076 7.076 0 0 0-6.05-5.88 8.442 8.442 0 0 0-.87-.04V22A15.018 15.018 0 0 0 40 7H24A15.018 15.018 0 0 0 9 22v3.01a8.442 8.442 0 0 0-.87.04 7.076 7.076 0 0 0-6.05 5.88A6.95 6.95 0 0 0 7 38.7V52a3.009 3.009 0 0 0 3 3v6a1 1 0 0 0 1 1h3a1 1 0 0 0 .96-.73L16.75 55h30.5l1.79 6.27A1 1 0 0 0 50 62h3a1 1 0 0 0 1-1v-6a3.009 3.009 0 0 0 3-3V38.7a6.95 6.95 0 0 0 4.92-7.77ZM11 22A13.012 13.012 0 0 1 24 9h16a13.012 13.012 0 0 1 13 13v3.3a6.976 6.976 0 0 0-5 6.7v3.18a3 3 0 0 0-1-.18H17a3 3 0 0 0-1 .18V32a6.976 6.976 0 0 0-5-6.7Zm37 16v5H16v-5a1 1 0 0 1 1-1h30a1 1 0 0 1 1 1ZM13.25 60H12v-5h2.67ZM52 60h-1.25l-1.42-5H52Zm3.83-23.08a1.008 1.008 0 0 0-.83.99V52a1 1 0 0 1-1 1H10a1 1 0 0 1-1-1V37.91a1.008 1.008 0 0 0-.83-.99 4.994 4.994 0 0 1 .2-9.88A4.442 4.442 0 0 1 9 27h.01a4.928 4.928 0 0 1 3.3 1.26A5.007 5.007 0 0 1 14 32v12a1 1 0 0 0 1 1h34a1 1 0 0 0 1-1V32a5.007 5.007 0 0 1 1.69-3.74 4.932 4.932 0 0 1 3.94-1.22 5.018 5.018 0 0 1 4.31 4.18v.01a4.974 4.974 0 0 1-4.11 5.69Z"
                          data-original="#000000" />
                      </svg>
                      Plans and Prices
                    </a>
                  </li>
                  <li class='border-b py-3'>
                    <a href="{{route('frontend.typesofqr')}}"
                      class='hover:text-[#007bff] hover:fill-[#007bff] text-gray-800 text-[15px] flex items-center'>
                      <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" class="mr-4 inline-block"
                        viewBox="0 0 1700 1700">
                        <path
                          d="M916.7 1269.4c-10.7 0-20.4-7.2-23.2-18l-29.9-114.7c-3.3-12.8 4.3-25.9 17.2-29.3 12.8-3.3 25.9 4.3 29.3 17.2l29.9 114.7c3.3 12.8-4.3 25.9-17.2 29.3-2 .5-4.1.8-6.1.8zm-169.4 0c-2 0-4-.3-6.1-.8-12.8-3.3-20.5-16.4-17.2-29.3l29.9-114.7c3.3-12.8 16.4-20.5 29.3-17.2 12.8 3.3 20.5 16.4 17.2 29.3l-29.9 114.7c-2.8 10.8-12.6 18-23.2 18z"
                          data-original="#000000" />
                        <path
                          d="M1066.6 1358.8H597.4c-13.3 0-24-10.7-24-24 0-62.6 50.9-113.5 113.5-113.5h290.4c62.6 0 113.5 50.9 113.5 113.5-.2 13.3-10.9 24-24.2 24zm-440.7-48H1038c-9.6-24.3-33.3-41.5-60.9-41.5H686.8c-27.6.1-51.3 17.3-60.9 41.5zM276.4 762.7c-13.3 0-24-10.7-24-24V395c0-29.7 24.2-53.9 53.9-53.9h1051.4c29.7 0 53.9 24.2 53.9 53.9v297.8c0 13.3-10.7 24-24 24s-24-10.7-24-24V395c0-3.2-2.6-5.9-5.9-5.9H306.3c-3.2 0-5.9 2.6-5.9 5.9v343.7c0 13.2-10.7 24-24 24zm904.5 392H446.5c-13.3 0-24-10.7-24-24s10.7-24 24-24h734.3c13.3 0 24 10.7 24 24s-10.6 24-23.9 24zm0-120.8H446.5c-13.3 0-24-10.7-24-24s10.7-24 24-24h734.3c13.3 0 24 10.7 24 24s-10.6 24-23.9 24z"
                          data-original="#000000" />
                        <path
                          d="M424.1 1358.8H128.4c-25.6 0-46.4-20.8-46.4-46.4V761.1c0-25.6 20.8-46.4 46.4-46.4h295.7c25.6 0 46.4 20.8 46.4 46.4v551.3c0 25.6-20.8 46.4-46.4 46.4zm-294.1-48h292.5V762.7H130z"
                          data-original="#000000" />
                        <path
                          d="M446.5 853.6H106c-13.3 0-24-10.7-24-24s10.7-24 24-24h340.5c13.3 0 24 10.7 24 24s-10.7 24-24 24zm0 414.4H106c-13.3 0-24-10.7-24-24s10.7-24 24-24h340.5c13.3 0 24 10.7 24 24s-10.7 24-24 24zm1125.1 90.8h-368.3c-25.6 0-46.4-20.8-46.4-46.4V715.2c0-25.6 20.8-46.4 46.4-46.4h368.3c25.6 0 46.4 20.8 46.4 46.4v597.2c0 25.6-20.8 46.4-46.4 46.4zm-366.7-48H1570v-594h-365.1z"
                          data-original="#000000" />
                        <path
                          d="M1594 811.8h-413.1c-13.3 0-24-10.7-24-24s10.7-24 24-24H1594c13.3 0 24 10.7 24 24s-10.7 24-24 24zm0 452h-413.1c-13.3 0-24-10.7-24-24s10.7-24 24-24H1594c13.3 0 24 10.7 24 24s-10.7 24-24 24z"
                          data-original="#000000" />
                      </svg>
                      FAQ
                    </a>
                  </li>
                  <li class='border-b py-3'>
                    <a href="{{route('frontend.typesofqr')}}"
                      class='hover:text-[#007bff] hover:fill-[#007bff] text-gray-800 text-[15px] flex items-center'>
                      <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" class="mr-4 inline-block"
                        viewBox="0 0 407.7 407.7">
                        <path
                          d="M405.5 118.021a7.93 7.93 0 0 0-.29-.29l-84.16-74.8a7.994 7.994 0 0 0-2.64-1.6l-60.88-21.76a8 8 0 0 0-10.72 7.12c0 1.76-2.64 42.32-43.2 42.96-40.8-.64-43.36-41.2-43.44-42.96a8 8 0 0 0-10.64-7.12l-60.8 22c-.976.357-1.872.9-2.64 1.6l-83.6 74.56a8 8 0 0 0 0 11.6l66.56 67.28v184a8 8 0 0 0 8 8h253.6a8 8 0 0 0 8-8v-184l66.56-67.28a8 8 0 0 0 .29-11.31zm-67.09 55.79v-37.12a8 8 0 0 0-16 0v235.52H84.73v-235.52a8 8 0 0 0-16 0v37.2l-49.2-49.84 76.16-68.16 50.08-18.08c6.204 31.966 37.147 52.851 69.113 46.647 23.607-4.582 42.065-23.04 46.647-46.647l50.08 18.08 75.92 68.16-49.12 49.76z"
                          data-original="#000000" />
                      </svg>
                      API
                    </a>
                  </li>
                  <li class='border-b py-3'>
                    <a href="{{route('frontend.typesofqr')}}"
                      class='hover:text-[#007bff] hover:fill-[#007bff] text-gray-800 text-[15px] flex items-center'>
                      <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" class="mr-4 inline-block"
                        viewBox="0 0 512 512">
                        <path
                          d="M434.1 243.904h-5.955a95.572 95.572 0 0 1-61.022-22.072l-117.812-98.055a49.716 49.716 0 0 0-31.743-11.481c-27.361 0-49.621 22.26-49.621 49.621v11.586c0 22.572-18.364 40.937-40.937 40.937-15.844 0-30.407-9.279-37.102-23.639l-3.261-6.995c-7.434-15.944-23.604-26.246-41.195-26.246C20.39 157.56 0 177.949 0 203.012v118.792c0 42.954 34.946 77.9 77.9 77.9h356.2c42.954 0 77.9-34.946 77.9-77.9 0-42.954-34.946-77.9-77.9-77.9zm0 125.8H77.9c-17.829 0-33.403-9.799-41.65-24.287h439.5c-8.247 14.488-23.821 24.287-41.65 24.287zM30 315.419V203.012c0-8.521 6.932-15.452 15.452-15.452 5.98 0 11.478 3.503 14.005 8.923l3.261 6.994c11.601 24.884 36.837 40.963 64.293 40.963 39.115 0 70.937-31.822 70.937-70.937v-11.586c0-10.819 8.802-19.621 19.621-19.621a19.66 19.66 0 0 1 12.552 4.54l28.901 24.055-32.93 32.93 21.213 21.213 34.872-34.871 13.031 10.846-31.444 31.444 21.213 21.213 33.386-33.385 13.031 10.846-29.958 29.958 21.213 21.213 32.115-32.115c21.284 15.35 47.024 23.723 73.383 23.723h5.955c24.246 0 44.328 18.112 47.461 41.513H30z"
                          data-original="#000000" />
                      </svg>
                      Shoes Store
                    </a>
                  </li>
                </ul>
              </li>
              <li><a href="{{route('frontend.plans')}}" class="text-gray-600 hover:text-blue-600 font-bold block text-base">Plans </a></li>
              <li><a href="{{route('frontend.faq')}}" class="text-gray-600 hover:text-blue-600 font-bold block text-base">FAQ</a></li>
              <li><a href="{{route('frontend.api')}}" class="text-gray-600 hover:text-blue-600 font-bold block text-base">API</a></li>
          </ul>
      </nav>

      <!-- Right Side: Login & Menu Toggle -->
      <div class="flex items-center gap-4">
          <button
              class="bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded-full text-white text-[15px] font-semibold flex items-center gap-2">
              {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-4 h-4">
                  <path d="M16 2l4 4-4 4m-6-8v12" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round"
                      stroke-linejoin="round" />
              </svg> --}}
            <a href="{{route('frontend.login')}}">Log In</a>
          </button>
          <button id="toggleMenu" class="lg:hidden flex items-center gap-2 p-2 text-gray-600 hover:text-blue-600">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                  <path
                      d="M3 6h18M3 12h18M3 18h18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
          </button>
      </div>
  </div>
</header>


<script>
    document.getElementById('toggleMenu').addEventListener('click', function() {
    const menu = document.getElementById('collapseMenu');
    menu.classList.toggle('-translate-x-full');
});

document.getElementById('toggleClose').addEventListener('click', function() {
    const menu = document.getElementById('collapseMenu');
    menu.classList.add('-translate-x-full');
});
</script>