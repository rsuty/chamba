@extends('layouts.master')
@section('title')
    Perfil
@endsection
@section('css')
@endsection
@section('content')
    <div class="space-y-5 profile-page">
        <div
            class="profiel-wrap px-[35px] pb-10 md:pt-[84px] pt-10 rounded-lg bg-white dark:bg-slate-800 lg:flex lg:space-y-0
                space-y-6 justify-between items-end relative z-[1]">
            <div class="bg-slate-900 dark:bg-slate-700 absolute left-0 top-0 md:h-1/2 h-[150px] w-full z-[-1] rounded-t-lg">
            </div>
            <div class="profile-box flex-none md:text-start text-center">
                <div class="md:flex items-end md:space-x-6 rtl:space-x-reverse">
                    <div class="flex-none">
                        <div
                            class="md:h-[186px] md:w-[186px] h-[140px] w-[140px] md:ml-0 md:mr-0 ml-auto mr-auto md:mb-0 mb-4 rounded-full ring-4
                                ring-slate-100 relative">
                            <img src="assets/images/users/user-1.jpg" alt=""
                                class="w-full h-full object-cover rounded-full">
                            <a href="https://dashcode-html.codeshaper.tech/profile-setting"
                                class="absolute right-2 h-8 w-8 bg-slate-50 text-slate-600 rounded-full shadow-sm flex flex-col items-center
                                    justify-center md:top-[140px] top-[100px]">
                                <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                            </a>
                        </div>
                    </div>
                    <div class="flex-1">
                        <div class="text-2xl font-medium text-slate-900 dark:text-slate-200 mb-[3px]">
                            Albert Flores
                        </div>
                        <div class="text-sm font-light text-slate-600 dark:text-slate-400">
                            Front End Developer
                        </div>
                    </div>
                </div>
            </div>
            <!-- end profile box -->
            <div class="profile-info-500 md:flex md:text-start text-center flex-1 max-w-[516px] md:space-y-0 space-y-4">
                <div class="flex-1">
                    <div class="text-base text-slate-900 dark:text-slate-300 font-medium mb-1">
                        $32,400
                    </div>
                    <div class="text-sm text-slate-600 font-light dark:text-slate-300">
                        Total Balance
                    </div>
                </div>
                <!-- end single -->
                <div class="flex-1">
                    <div class="text-base text-slate-900 dark:text-slate-300 font-medium mb-1">
                        200
                    </div>
                    <div class="text-sm text-slate-600 font-light dark:text-slate-300">
                        Board Card
                    </div>
                </div>
                <!-- end single -->
                <div class="flex-1">
                    <div class="text-base text-slate-900 dark:text-slate-300 font-medium mb-1">
                        3200
                    </div>
                    <div class="text-sm text-slate-600 font-light dark:text-slate-300">
                        Calender Events
                    </div>
                </div>
                <!-- end single -->
            </div>
            <!-- profile info-500 -->
        </div>
        <div class="grid grid-cols-12 gap-6">
            <div class="lg:col-span-4 col-span-12">
                <div class="card h-full">
                    <header class="card-header">
                        <h4 class="card-title">Info</h4>
                    </header>
                    <div class="card-body p-6">
                        <ul class="list space-y-8">
                            <li class="flex space-x-3 rtl:space-x-reverse">
                                <div class="flex-none text-2xl text-slate-600 dark:text-slate-300">
                                    <iconify-icon icon="heroicons:envelope"></iconify-icon>
                                </div>
                                <div class="flex-1">
                                    <div class="uppercase text-xs text-slate-500 dark:text-slate-300 mb-1 leading-[12px]">
                                        EMAIL
                                    </div>
                                    <a href="mailto:someone@example.com"
                                        class="text-base text-slate-600 dark:text-slate-50">
                                        info-500@dashcode.com
                                    </a>
                                </div>
                            </li>
                            <!-- end single list -->
                            <li class="flex space-x-3 rtl:space-x-reverse">
                                <div class="flex-none text-2xl text-slate-600 dark:text-slate-300">
                                    <iconify-icon icon="heroicons:phone-arrow-up-right"></iconify-icon>
                                </div>
                                <div class="flex-1">
                                    <div class="uppercase text-xs text-slate-500 dark:text-slate-300 mb-1 leading-[12px]">
                                        PHONE
                                    </div>
                                    <a href="tel:0189749676767" class="text-base text-slate-600 dark:text-slate-50">
                                        +1-202-555-0151
                                    </a>
                                </div>
                            </li>
                            <!-- end single list -->
                            <li class="flex space-x-3 rtl:space-x-reverse">
                                <div class="flex-none text-2xl text-slate-600 dark:text-slate-300">
                                    <iconify-icon icon="heroicons:map"></iconify-icon>
                                </div>
                                <div class="flex-1">
                                    <div class="uppercase text-xs text-slate-500 dark:text-slate-300 mb-1 leading-[12px]">
                                        LOCATION
                                    </div>
                                    <div class="text-base text-slate-600 dark:text-slate-50">
                                        Home# 320/N, Road# 71/B, Mohakhali, Dhaka-1207, Bangladesh
                                    </div>
                                </div>
                            </li>
                            <!-- end single list -->
                        </ul>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-8 col-span-12">
                <div class="card">
                    <div class="card-body flex flex-col p-6">
                        <header
                            class="flex mb-5 items-center border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6">
                            <div class="flex-1">
                                <div class="card-title text-slate-900 dark:text-white">Default Tabs</div>
                            </div>
                        </header>
                        <div class="card-text h-full ">
                            <div class="active">
                                <ul class="nav nav-tabs flex flex-col md:flex-row flex-wrap list-none border-b-0 pl-0 mb-4 menu-open"
                                    id="tabs-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a href="#tabs-home"
                                            class="nav-link w-full block font-medium text-sm font-Inter leading-tight capitalize border-x-0 border-t-0 border-b border-transparent px-4 pb-2 my-2 hover:border-transparent focus:border-transparent dark:text-slate-300 active"
                                            id="tabs-home-tab" data-bs-toggle="pill" data-bs-target="#tabs-home"
                                            role="tab" aria-controls="tabs-home" aria-selected="true">Resenas</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a href="#tabs-profile"
                                            class="nav-link w-full block font-medium text-sm font-Inter leading-tight capitalize border-x-0 border-t-0 border-b border-transparent px-4 pb-2 my-2 hover:border-transparent focus:border-transparent dark:text-slate-300"
                                            id="tabs-profile-tab" data-bs-toggle="pill" data-bs-target="#tabs-profile"
                                            role="tab" aria-controls="tabs-profile" aria-selected="false">Galeria</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="tabs-tabContent">
                                    <div class="tab-pane fade active show" id="tabs-home" role="tabpanel"
                                        aria-labelledby="tabs-home-tab">
                                        <p class="text-sm text-gray-500 dark:text-gray-200">
                                            This is some placeholder content the
                                            <strong>Home</strong>
                                            tab's associated content. Clicking another tab will toggle the visibility of
                                            this one for the next. The tab JavaScript swaps classes to control the content
                                            visibility and styling. consectetur adipisicing elit. Ab ipsa!
                                        </p>
                                    </div>
                                    <div class="tab-pane fade" id="tabs-profile" role="tabpanel"
                                        aria-labelledby="tabs-profile-tab">
                                        <p class="text-sm text-gray-500 dark:text-gray-200">
                                            This is some placeholder content the
                                            <strong>Profile</strong>
                                            tab's associated content. Clicking another tab will toggle the visibility of
                                            this one for the next. The tab JavaScript swaps classes to control the content
                                            visibility and styling. consectetur adipisicing elit. Ab ipsa!
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
