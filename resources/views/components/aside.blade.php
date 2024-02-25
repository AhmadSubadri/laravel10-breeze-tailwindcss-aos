<div class="flex">
    <div class="h-screen absolute w-56 overflow-hidden" :class="[sideBar === false ? 'z-10' : '']">
        <aside x-show="sideBar" x-transition:enter="transform transition ease-in-out duration-500 sm:duration-500"
            x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
            x-transition:leave="transform transition ease-in-out duration-500 sm:duration-500"
            x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full"
            class="absolute md:static sm:absolute h-full bg-gradient-to-b from-lime-900 to-lime-400 w-56 pl-5 text-white shadow-sm">
            <div class="pt-4 pr-3">
                <div class="flex">
                    <img class="pl-1 mt-1 ml-3" src="{{ asset('img/ndmu-seal-small.png') }}" width="45"
                        height="45" alt="">
                    <div class="pt-3">
                        <span class="text-2xl font-medium leading-5 text-lime-50 ml-3">SATP</span>
                    </div>
                </div>
            </div>
            <nav class="text-sm subpixel-antialiased pt-14 pr-5 relative">
                <div class="mb-3 pl-1">
                    <span class="font-medium">NAVIGATION</span>
                </div>
                <a href="#" tabindex="-1"
                    class="block py-1.5 px-4 rounded transition duration-200 bg-lime-50 text-lime-700 font-medium">
                    <svg class="w-4 h-4 inline mr-2 -mt-1 " fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                        </path>
                    </svg>
                    Dashboard
                </a>
                <a href="" tabindex="-1"
                    class="block py-1.5 px-4 rounded transition duration-200 hover:bg-lime-50 hover:text-lime-700 hover:font-medium">
                    <svg class="w-4 h-4 inline mr-2 -mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2">
                        </path>
                    </svg>
                    Students
                </a>
                <a href="" tabindex="-1"
                    class="block py-1.5 px-4 rounded transition duration-200 hover:bg-lime-50 hover:text-lime-700 hover:font-medium">
                    <svg class="w-4 h-4 inline mr-2 -mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                        </path>
                    </svg>
                    Teachers
                </a>
                <a href="" tabindex="-1"
                    class="block py-1.5 px-4 rounded transition duration-200 hover:bg-lime-50 hover:text-lime-700 hover:font-medium">
                    <svg class="w-4 h-4 inline mr-2 -mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                        </path>
                    </svg>
                    Reports
                </a>
                <a href="" tabindex="-1"
                    class="block py-1.5 px-4 rounded transition duration-200 hover:bg-lime-50 hover:text-lime-700 hover:font-medium">
                    <svg class="w-4 h-4 inline mr-2 -mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                    </svg>
                    Items
                </a>
                <div class="mb-3 pl-1 mt-3">
                    <span class="font-medium">SUPPORT</span>
                </div>
                <a href="" tabindex="-1"
                    class="block py-1.5 px-4 rounded transition duration-200 hover:bg-lime-50 hover:text-lime-700 hover:font-medium">
                    <svg class="w-4 h-4 inline mr-2 -mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                        </path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    Settings
                </a>
                <a href="" tabindex="-1"
                    class="block py-1.5 px-4 rounded transition duration-200 hover:bg-lime-50 hover:text-lime-700 hover:font-medium">
                    <svg class="w-4 h-4 inline mr-2 -mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                        </path>
                    </svg>
                    Developers
                </a>
                <a href="" tabindex="-1"
                    class="block py-1.5 px-4 rounded transition duration-200 hover:bg-lime-50 hover:text-lime-700 hover:font-medium">
                    <svg class="w-4 h-4 inline mr-2 -mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                        </path>
                    </svg>
                    FAQ
                </a>
            </nav>
        </aside>
    </div>
    <div class="h-screen w-16 absolute overflow-hidden" :class="[sideBar === false ? 'z-20' : '']">
        <aside x-show="sideBar === true ? false : true"
            x-transition:enter="transform transition ease-in-out duration-500 sm:duration-500"
            x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
            x-transition:leave="transform transition ease-in-out duration-500 sm:duration-500"
            x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full"
            class="relative md:static h-full bg-gradient-to-b from-lime-900 to-lime-400 pl-2 text-white">
            <div class="pt-3 pr-4">
                <img class="pl-1" src="{{ asset('img/ndmu-seal-small.png') }}" width="55" height="55"
                    alt="">
                <div class="pt-7 ml-1 relative h-screen">
                    <br>
                    <div
                        class="px-2 mt-2 cursor-pointer rounded-full w-10 h-10 hover:ml-0.5 flex items-center justify-center bg-lime-50 bg-opacity-20">
                        <svg class="w-8 h-8 stroke-current text-lime-50" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                            </path>
                        </svg>
                    </div>
                    <div
                        class="px-2 mt-2 cursor-pointer rounded-full w-10 h-10 hover:ml-0.5 flex items-center justify-center hover:bg-lime-50 hover:bg-opacity-20">
                        <svg class="w-8 h-8 stroke-current text-lime-50" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2">
                            </path>
                        </svg>
                    </div>
                    <div
                        class="px-2 mt-2 cursor-pointer rounded-full w-10 h-10 hover:ml-0.5 flex items-center justify-center hover:bg-lime-50 hover:bg-opacity-20">
                        <svg class="w-8 h-8 stroke-current text-lime-50" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                    </div>
                    <div
                        class="px-2 mt-2 cursor-pointer rounded-full w-10 h-10 hover:ml-0.5 flex items-center justify-center hover:bg-lime-50 hover:bg-opacity-20">
                        <svg class="w-8 h-8 stroke-current text-lime-50" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                            </path>
                        </svg>
                    </div>
                    <div
                        class="px-2 mt-2 cursor-pointer rounded-full w-10 h-10 hover:ml-0.5 flex items-center justify-center hover:bg-lime-50 hover:bg-opacity-20">
                        <svg class="w-8 h-8 stroke-current text-lime-50" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                        </svg>
                    </div>
                    <div
                        class="px-2 mt-2 cursor-pointer rounded-full w-10 h-10 hover:ml-0.5 flex items-center justify-center hover:bg-lime-50 hover:bg-opacity-20">
                        <svg class="w-8 h-8 stroke-current text-lime-50" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <div
                        class="px-2 mt-2 cursor-pointer rounded-full w-10 h-10 hover:ml-0.5 flex items-center justify-center hover:bg-lime-50 hover:bg-opacity-20">
                        <svg class="w-8 h-8 stroke-current text-lime-50" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                            </path>
                        </svg>
                    </div>
                    <div
                        class="px-2 mt-2 cursor-pointer rounded-full w-10 h-10 hover:ml-0.5 flex items-center justify-center hover:bg-lime-50 hover:bg-opacity-20">
                        <svg class="w-8 h-8 stroke-current text-lime-50" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                            </path>
                        </svg>
                    </div>
                </div>
            </div>
        </aside>
    </div>
</div>
