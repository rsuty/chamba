<div class="z-[9] p-2 bg-white dark:bg-slate-800 dark:shadow-slate-700">
    <div class="z-[999]">
        <div class="flex justify-between items-center h-full">
            <div class="flex items-center md:space-x-4 space-x-4 rtl:space-x-reverse vertical-box">
                <a href="#" class="mobile-logo xl:hidden inline-block">
                    <img src="{{ asset('assets/images/logo/logo-obscuro-mobile.svg') }}" class="black_logo" alt="logo">
                    <img src="{{ asset('assets/images/logo/logo-claro-mobile.svg') }}" class="white_logo" alt="logo">
                </a>
                <button class="smallDeviceMenuController open-sdiebar-controller hidden xl:hidden md:inline-block">
                    <iconify-icon
                        class="leading-none bg-transparent relative text-xl top-[2px] text-slate-900 dark:text-white"
                        icon="heroicons-outline:menu-alt-3"></iconify-icon>
                </button>
                <button class="sidebarOpenButton text-xl text-slate-900 dark:text-white !ml-0 hidden rtl:rotate-180">
                    <iconify-icon icon="ph:arrow-right-bold"></iconify-icon>
                </button>
                <a href="#" class="xl:inline-block hidden mb-1">
                    <img src="{{ asset('assets/images/logo/logo-obscuro-mobile.svg') }}" class="black_logo" alt="logo">
                    <img src="{{ asset('assets/images/logo/logo-claro-mobile.svg') }}" class="white_logo" alt="logo">
                </a>
                <button
                    class="flex items-center xl:text-sm text-lg xl:text-slate-400 text-slate-800 dark:text-slate-300 focus:outline-none focus:shadow-none px-1 space-x-3
        rtl:space-x-reverse search-modal "
                    data-bs-toggle="modal" data-bs-target="#searchModal">
                    <iconify-icon icon="heroicons-outline:search">
                    </iconify-icon>
                    <span class="xl:inline-block hidden">Buscar...
                    </span>
                </button>
            </div>
            <!-- end vertcial -->
            <div class="items-center space-x-4 rtl:space-x-reverse horizental-box">
                <a href="index.html" class="leading-0">
                    <span class="xl:inline-block hidden">
                        <img src="{{ asset('assets/images/logo/logo-obscuro-mobile.svg') }}" class="black_logo"
                            alt="logo">
                        <img src="{{ asset('assets/images/logo/logo-claro-mobile.svg') }}" class="white_logo"
                            alt="logo">
                    </span>
                    <span class="xl:hidden inline-block">
                        <img src="{{ asset('assets/images/logo/logo-obscuro-mobile.svg') }}" class="black_logo"
                            alt="logo">
                        <img src="{{ asset('assets/images/logo/logo-claro-mobile.svg') }}" class="white_logo"
                            alt="logo">
                    </span>
                </a>
                <button class="smallDeviceMenuController open-sdiebar-controller hidden md:inline-block xl:hidden">
                    <iconify-icon
                        class="leading-none bg-transparent relative text-xl top-[2px] text-slate-900 dark:text-white"
                        icon="heroicons-outline:menu-alt-3"></iconify-icon>
                </button>
                <button
                    class="items-center xl:text-sm text-lg xl:text-slate-400 text-slate-800 dark:text-slate-300 focus:outline-none focus:shadow-none px-1 space-x-3
        rtl:space-x-reverse search-modal inline-flex xl:hidden"
                    data-bs-toggle="modal" data-bs-target="#searchModal">
                    <iconify-icon icon="heroicons-outline:search"></iconify-icon>
                    <span class="xl:inline-block hidden">Buscar...
                    </span>
                </button>

            </div>
            <!-- end horizental -->
            <!-- end top menu -->
            <div class="nav-tools flex items-center lg:space-x-5 space-x-3 rtl:space-x-reverse leading-0">
                <!-- BEGIN: Toggle Theme -->
                <div>
                    <button id="themeMood"
                        class="h-[28px] w-[28px] lg:h-[32px] lg:w-[32px] lg:bg-gray-500-f7 bg-slate-50 dark:bg-slate-900 lg:dark:bg-slate-900 dark:text-white text-slate-900 cursor-pointer rounded-full text-[20px] flex flex-col items-center justify-center">
                        <iconify-icon class="text-slate-800 dark:text-white text-xl dark:block hidden" id="moonIcon"
                            icon="line-md:sunny-outline-to-moon-alt-loop-transition"></iconify-icon>
                        <iconify-icon class="text-slate-800 dark:text-white text-xl dark:hidden block" id="sunIcon"
                            icon="line-md:moon-filled-to-sunny-filled-loop-transition"></iconify-icon>
                    </button>
                </div>
                <!-- END: TOggle Theme -->

                <!-- BEGIN: grayscal -->
                <div>
                    <button id="grayScale"
                        class="lg:h-[32px] lg:w-[32px] lg:bg-slate-100 lg:dark:bg-slate-900 dark:text-white text-slate-900 cursor-pointer
            rounded-full text-[20px] flex flex-col items-center justify-center">
                        <iconify-icon class="text-slate-800 dark:text-white text-xl"
                            icon="mdi:paint-outline"></iconify-icon>
                    </button>
                </div>
                <!-- END: grayscal -->

                <!-- BEGIN: Message Dropdown -->
                <!-- Mail Dropdown -->
                <div class="relative md:block hidden">
                    <button
                        class="lg:h-[32px] lg:w-[32px] lg:bg-slate-50 lg:dark:bg-slate-900 dark:text-white text-slate-900 cursor-pointer
      rounded-full text-[20px] flex flex-col items-center justify-center"
                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <iconify-icon class="text-slate-800 dark:text-white text-xl"
                            icon="heroicons-outline:mail"></iconify-icon>
                        <span
                            class="absolute -right-1 lg:top-0 -top-[6px] h-4 w-4 bg-red-500 text-[8px] font-semibold flex flex-col items-center
        justify-center rounded-full text-white z-[45]">
                            10</span>
                    </button>
                    <!-- Mail Dropdown -->
                    <div
                        class="dropdown-menu z-10 hidden bg-white divide-y divide-slate-100 dark:divide-slate-900 shadow w-[335px]
      dark:bg-slate-800 border dark:border-slate-900 !top-[23px] rounded-md overflow-hidden lrt:origin-top-right rtl:origin-top-left">
                        <div class="flex items-center justify-between py-4 px-4">
                            <h3 class="text-sm font-Inter font-medium text-slate-700 dark:text-white">Messages</h3>
                            <a class="text-xs font-Inter font-normal underline text-slate-500 dark:text-white"
                                href="#">See
                                All</a>
                        </div>
                        <div class="divide-y divide-slate-100 dark:divide-slate-900" role="none">
                            <div class="text-slate-600 dark:text-slate-300 block w-full px-4 py-2 text-sm">
                                <div class="flex ltr:text-left rtl:text-right space-x-3 rtl:space-x-reverse relative">
                                    <div class="flex-none">
                                        <div class="h-8 w-8 bg-white dark:bg-slate-700 rounded-full relative">
                                            <span
                                                class="bg-secondary-500 w-[10px] h-[10px] rounded-full border border-white dark:border-slate-700 inline-block absolute
                right-0 top-0"></span>
                                            <img src="assets/images/all-img/user.png" alt="user"
                                                class="block w-full h-full object-cover rounded-full border hover:border-white border-transparent">
                                        </div>
                                    </div>
                                    <div class="flex-1">
                                        <a href="#"
                                            class="text-slate-800 dark:text-slate-300 text-sm font-medium mb-1 before:w-full before:h-full before:absolute
                before:top-0 before:left-0">
                                            Wade Warren</a>
                                        <div
                                            class="text-xs hover:text-[#68768A] text-slate-600 dark:text-slate-300 mb-1">
                                            Hi! How are you doing?.....
                                        </div>
                                        <div class="text-slate-400 dark:text-slate-400 text-xs">
                                            3 min ago
                                        </div>
                                    </div>
                                    <div class="flex-0">
                                        <span
                                            class="h-4 w-4 bg-danger-500 border border-white rounded-full text-[10px] flex items-center justify-center text-white">
                                            1</span>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="text-slate-600 dark:text-slate-300 block w-full px-4 py-2 text-sm  cursor-pointer">
                                <div class="flex ltr:text-left rtl:text-right space-x-3 rtl:space-x-reverse relative">
                                    <div class="flex-none">
                                        <div class="h-8 w-8 bg-white dark:bg-slate-700 rounded-full relative">
                                            <span
                                                class="bg-green-500 w-[10px] h-[10px] rounded-full border border-white dark:border-slate-700 inline-block absolute
                right-0 top-0"></span>
                                            <img src="assets/images/all-img/user2.png" alt="user"
                                                class="block w-full h-full object-cover rounded-full border hover:border-white border-transparent">
                                        </div>
                                    </div>
                                    <div class="flex-1">
                                        <a href="#"
                                            class="text-slate-800 dark:text-slate-300 text-sm font-medium mb-1 before:w-full before:h-full before:absolute
                before:top-0 before:left-0">
                                            Savannah Nguyen</a>
                                        <div
                                            class="text-xs hover:text-[#68768A] text-slate-600 dark:text-slate-300 mb-1">
                                            Hi! How are you doing?.....
                                        </div>
                                        <div class="text-slate-400 dark:text-slate-400 text-xs">3 min ago
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="text-slate-600 dark:text-slate-300 block w-full px-4 py-2 text-sm  cursor-pointer">
                                <div class="flex ltr:text-left rtl:text-right space-x-3 rtl:space-x-reverse relative">
                                    <div class="flex-none">
                                        <div class="h-8 w-8 bg-white dark:bg-slate-700 rounded-full relative">
                                            <span
                                                class="bg-green-500 w-[10px] h-[10px] rounded-full border border-white dark:border-slate-700 inline-block absolute
                right-0 top-0"></span>
                                            <img src="assets/images/all-img/user3.png" alt="user"
                                                class="block w-full h-full object-cover rounded-full border hover:border-white border-transparent">
                                        </div>
                                    </div>
                                    <div class="flex-1">
                                        <a href="#"
                                            class="text-slate-800 dark:text-slate-300 text-sm font-medium mb-1 before:w-full before:h-full before:absolute
                before:top-0 before:left-0">
                                            Ralph Edwards</a>
                                        <div
                                            class="text-xs hover:text-[#68768A] text-slate-600 dark:text-slate-300 mb-1">
                                            Hi! How are you doing?.....
                                        </div>
                                        <div class="text-slate-400 dark:text-slate-400 text-xs">
                                            3 min ago
                                        </div>
                                    </div>
                                    <div class="flex-0">
                                        <span
                                            class="h-4 w-4 bg-danger-500 border border-white rounded-full text-[10px] flex items-center justify-center text-white">
                                            8</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Message Dropdown -->

                <!-- BEGIN: Notification Dropdown -->
                <!-- Notifications Dropdown area -->
                <div class="relative md:block hidden">
                    <button
                        class="lg:h-[32px] lg:w-[32px] lg:bg-slate-50 lg:dark:bg-slate-900 dark:text-white text-slate-900 cursor-pointer
      rounded-full text-[20px] flex flex-col items-center justify-center"
                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <iconify-icon class="animate-tada text-slate-800 dark:text-white text-xl"
                            icon="heroicons-outline:bell"></iconify-icon>
                        <span
                            class="absolute -right-1 lg:top-0 -top-[6px] h-4 w-4 bg-red-500 text-[8px] font-semibold flex flex-col items-center
        justify-center rounded-full text-white z-[99]">
                            4</span>
                    </button>
                    <!-- Notifications Dropdown -->
                    <div
                        class="dropdown-menu z-10 hidden bg-white divide-y divide-slate-100 dark:divide-slate-900 shadow w-[335px]
      dark:bg-slate-800 border dark:border-slate-900 !top-[23px] rounded-md overflow-hidden lrt:origin-top-right rtl:origin-top-left">
                        <div class="flex items-center justify-between py-4 px-4">
                            <h3 class="text-sm font-Inter font-medium text-slate-700 dark:text-white">Notifications
                            </h3>
                            <a class="text-xs font-Inter font-normal underline text-slate-500 dark:text-white"
                                href="#">See
                                All</a>
                        </div>
                        <div class="divide-y divide-slate-100 dark:divide-slate-900" role="none">
                            <div
                                class="bg-slate-100 dark:bg-slate-700 dark:bg-opacity-70 text-slate-800 block w-full px-4 py-2 text-sm relative">
                                <div class="flex ltr:text-left rtl:text-right">
                                    <div class="flex-none ltr:mr-3 rtl:ml-3">
                                        <div class="h-8 w-8 bg-white rounded-full">
                                            <img src="assets/images/all-img/user.png" alt="user"
                                                class="border-white block w-full h-full object-cover rounded-full border">
                                        </div>
                                    </div>
                                    <div class="flex-1">
                                        <a href="#"
                                            class="text-slate-600 dark:text-slate-300 text-sm font-medium mb-1 before:w-full before:h-full before:absolute
                before:top-0 before:left-0">
                                            Your order is placed</a>
                                        <div class="text-slate-500 dark:text-slate-200 text-xs leading-4">Amet minim
                                            mollit non deser unt ullamco est sit
                                            aliqua.
                                        </div>
                                        <div class="text-slate-400 dark:text-slate-400 text-xs mt-1">
                                            3 min ago
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-slate-600 dark:text-slate-300 block w-full px-4 py-2 text-sm">
                                <div class="flex ltr:text-left rtl:text-right relative">
                                    <div class="flex-none ltr:mr-3 rtl:ml-3">
                                        <div class="h-8 w-8 bg-white rounded-full">
                                            <img src="assets/images/all-img/user2.png" alt="user"
                                                class="border-transparent block w-full h-full object-cover rounded-full border">
                                        </div>
                                    </div>
                                    <div class="flex-1">
                                        <a href="#"
                                            class="text-slate-600 dark:text-slate-300 text-sm font-medium mb-1 before:w-full before:h-full before:absolute
                before:top-0 before:left-0">
                                            Congratulations Darlene 🎉</a>
                                        <div class="text-slate-600 dark:text-slate-300 text-xs leading-4">Won the
                                            monthly best seller badge
                                        </div>
                                        3 min ago
                                    </div>
                                </div>
                                <div class="flex-0">
                                    <span
                                        class="h-[10px] w-[10px] bg-danger-500 border border-white dark:border-slate-400 rounded-full inline-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="text-slate-600 dark:text-slate-300 block w-full px-4 py-2 text-sm">
                            <div class="flex ltr:text-left rtl:text-right relative">
                                <div class="flex-none ltr:mr-3 rtl:ml-3">
                                    <div class="h-8 w-8 bg-white rounded-full">
                                        <img src="assets/images/all-img/user3.png" alt="user"
                                            class="border-transparent block w-full h-full object-cover rounded-full border">
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <a href="#"
                                        class="text-slate-600 dark:text-slate-300 text-sm font-medium mb-1 before:w-full before:h-full before:absolute
              before:top-0 before:left-0">
                                        Revised Order 👋</a>
                                    <div class="text-slate-600 dark:text-slate-300 text-xs leading-4">Won the monthly
                                        best seller badge
                                    </div>
                                    <div class="text-slate-400 dark:text-slate-400 text-xs mt-1">3 min ago</div>
                                </div>
                            </div>
                        </div>
                        <div class="text-slate-600 dark:text-slate-300 block w-full px-4 py-2 text-sm">
                            <div class="flex ltr:text-left rtl:text-right relative">
                                <div class="flex-none ltr:mr-3 rtl:ml-3">
                                    <div class="h-8 w-8 bg-white rounded-full">
                                        <img src="assets/images/all-img/user4.png" alt="user"
                                            class="border-transparent block w-full h-full object-cover rounded-full border">
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <a href="#"
                                        class="text-slate-600 dark:text-slate-300 text-sm font-medium mb-1 before:w-full before:h-full before:absolute
              before:top-0 before:left-0">
                                        Brooklyn Simmons</a>
                                    <div class="text-slate-600 dark:text-slate-300 text-xs leading-4">Added you to Top
                                        Secret Project group...
                                    </div>
                                    <div class="text-slate-400 dark:text-slate-400 text-xs mt-1">
                                        3 min ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Notification Dropdown -->

                <!-- BEGIN: Profile Dropdown -->
                <!-- Profile DropDown Area -->
                <div class="md:block hidden w-full">
                    <button
                        class="text-slate-800 dark:text-white focus:ring-0 focus:outline-none font-medium rounded-lg text-sm text-center
      inline-flex items-center"
                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="lg:h-8 lg:w-8 h-7 w-7 rounded-full flex-1 ltr:mr-[10px] rtl:ml-[10px]">
                            <img src="assets/images/all-img/user.png" alt="user"
                                class="block w-full h-full object-cover rounded-full">
                        </div>
                        <span
                            class="flex-none text-slate-600 dark:text-white text-sm font-normal items-center lg:flex hidden overflow-hidden text-ellipsis whitespace-nowrap">{{ auth()->user()->name }}</span>
                        <svg class="w-[16px] h-[16px] dark:text-white hidden lg:inline-block text-base inline-block ml-[10px] rtl:mr-[10px]"
                            aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div
                        class="dropdown-menu z-10 hidden bg-white divide-y divide-slate-100 shadow w-44 dark:bg-slate-800 border dark:border-slate-700 !top-[23px] rounded-md
      overflow-hidden">
                        <ul class="py-1 text-sm text-slate-800 dark:text-slate-200">
                            <li>
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <button type="submit"
                                        class="block px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white font-inter text-sm text-slate-600
            dark:text-white font-normal">
                                        <iconify-icon icon="heroicons-outline:login"
                                            class="relative top-[2px] text-lg ltr:mr-1 rtl:ml-1"></iconify-icon>
                                        <span class="font-Inter">Logout</span>
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- BEGIN: Search Modal -->
                <!-- END: Search Modal -->
                <!-- END: Header -->
                <button class="smallDeviceMenuController md:hidden block leading-0">
                    <iconify-icon class="cursor-pointer text-slate-900 dark:text-white text-2xl"
                        icon="heroicons-outline:menu-alt-3"></iconify-icon>
                </button>
                <!-- end mobile menu -->
            </div>
            <!-- end nav tools -->
        </div>
    </div>
</div>
<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto inset-0 bg-slate-900/40 backdrop-filter backdrop-blur-sm backdrop-brightness-10"
    id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
    <div class="modal-dialog relative w-auto pointer-events-none top-1/4">
        <div
            class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white dark:bg-slate-900 bg-clip-padding rounded-md outline-none text-current">
            <form>
                <div class="relative">
                    <button
                        class="absolute left-0 top-1/2 -translate-y-1/2 w-9 h-full text-xl dark:text-slate-300 flex items-center justify-center">
                        <iconify-icon icon="heroicons-solid:search"></iconify-icon>
                    </button>
                    <input type="text" class="form-control !py-[14px] !pl-10" placeholder="Search" autofocus>
                </div>
            </form>
        </div>
    </div>
</div>
