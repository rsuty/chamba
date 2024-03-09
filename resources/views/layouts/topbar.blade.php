<div class="z-[9] p-3 bg-white">
    <div class="z-[999] bg-white dark:bg-slate-800 dark:shadow-slate-700">
        <div class="flex justify-between items-center h-full">
            <div class="flex items-center md:space-x-4 space-x-4 rtl:space-x-reverse vertical-box">
                <a href="index.html" class="mobile-logo xl:hidden inline-block">
                    <img src="{{asset("assets/images/logo/logo-c.svg")}}" class="black_logo" alt="logo">
                    <img src="{{asset("assets/images/logo/logo-c-white.svg")}}" class="white_logo" alt="logo">
                </a>
                <button class="smallDeviceMenuController open-sdiebar-controller hidden xl:hidden md:inline-block">
                    <iconify-icon
                        class="leading-none bg-transparent relative text-xl top-[2px] text-slate-900 dark:text-white"
                        icon="heroicons-outline:menu-alt-3"></iconify-icon>
                </button>
                <button class="sidebarOpenButton text-xl text-slate-900 dark:text-white !ml-0 hidden rtl:rotate-180">
                    <iconify-icon icon="ph:arrow-right-bold"></iconify-icon>
                </button>
                <button class="flex items-center xl:text-sm text-lg xl:text-slate-400 text-slate-800 dark:text-slate-300 focus:outline-none focus:shadow-none px-1 space-x-3
        rtl:space-x-reverse search-modal" data-bs-toggle="modal" data-bs-target="#searchModal">
                    <iconify-icon icon="heroicons-outline:search">
                    </iconify-icon>
                    <span class="xl:inline-block hidden">Search...
    </span>
                </button>

            </div>
            <!-- end vertcial -->
            <div class="items-center space-x-4 rtl:space-x-reverse horizental-box">
                <a href="index.html" class="leading-0">
                  <span class="xl:inline-block hidden">
        <img src="assets/images/logo/logo.svg" class="black_logo " alt="logo">
        <img src="assets/images/logo/logo-white.svg" class="white_logo" alt="logo">
    </span>
                    <span class="xl:hidden inline-block">
        <img src="assets/images/logo/logo-c.svg" class="black_logo " alt="logo">
        <img src="assets/images/logo/logo-c-white.svg" class="white_logo " alt="logo">
    </span>
                </a>
                <button class="smallDeviceMenuController open-sdiebar-controller hidden md:inline-block xl:hidden">
                    <iconify-icon
                        class="leading-none bg-transparent relative text-xl top-[2px] text-slate-900 dark:text-white"
                        icon="heroicons-outline:menu-alt-3"></iconify-icon>
                </button>
                <button class="items-center xl:text-sm text-lg xl:text-slate-400 text-slate-800 dark:text-slate-300 focus:outline-none focus:shadow-none px-1 space-x-3
        rtl:space-x-reverse search-modal inline-flex xl:hidden" data-bs-toggle="modal" data-bs-target="#searchModal">
                    <iconify-icon icon="heroicons-outline:search"></iconify-icon>
                    <span class="xl:inline-block hidden">Search...
    </span>
                </button>

            </div>
            <!-- end horizental -->


            <div class="main-menu">
                <ul>

                    <li class="
             menu-item-has-children
              ">
                        <!--  Single menu -->

                        <!-- has dropdown -->


                        <a href="javascript:void()">
                            <div class="flex flex-1 items-center space-x-[6px] rtl:space-x-reverse">
                        <span class="icon-box">
                    <iconify-icon icon="heroicons-outline:home"> </iconify-icon>
                  </span>
                                <div class="text-box">Dashboard</div>
                            </div>
                            <div class="flex-none text-sm ltr:ml-3 rtl:mr-3 leading-[1] relative top-1">
                                <iconify-icon icon="heroicons-outline:chevron-down"></iconify-icon>
                            </div>
                        </a>

                        <!-- Dropdown menu -->


                        <ul class="sub-menu">


                            <li>
                                <a href="index.html">
                                    <div class="flex space-x-2 items-start rtl:space-x-reverse">
                                        <iconify-icon icon="heroicons:presentation-chart-line"
                                                      class="leading-[1] text-base"></iconify-icon>
                                        <span class="leading-[1]">
                          Analytics Dashboard
                        </span>
                                    </div>
                                </a>
                            </li>


                            <li>
                                <a href="ecommerce-dashboard.html">
                                    <div class="flex space-x-2 items-start rtl:space-x-reverse">
                                        <iconify-icon icon="heroicons:shopping-cart"
                                                      class="leading-[1] text-base"></iconify-icon>
                                        <span class="leading-[1]">
                          Ecommerce Dashboard
                        </span>
                                    </div>
                                </a>
                            </li>


                            <li>
                                <a href="project-dashboard.html">
                                    <div class="flex space-x-2 items-start rtl:space-x-reverse">
                                        <iconify-icon icon="heroicons:briefcase"
                                                      class="leading-[1] text-base"></iconify-icon>
                                        <span class="leading-[1]">
                          Project Dashboard
                        </span>
                                    </div>
                                </a>
                            </li>


                            <li>
                                <a href="crm-dashboard.html">
                                    <div class="flex space-x-2 items-start rtl:space-x-reverse">
                                        <iconify-icon icon="ri:customer-service-2-fill"
                                                      class="leading-[1] text-base"></iconify-icon>
                                        <span class="leading-[1]">
                          CRM Dashboard
                        </span>
                                    </div>
                                </a>
                            </li>


                            <li>
                                <a href="banking-dashboard.html">
                                    <div class="flex space-x-2 items-start rtl:space-x-reverse">
                                        <iconify-icon icon="heroicons:wrench-screwdriver"
                                                      class="leading-[1] text-base"></iconify-icon>
                                        <span class="leading-[1]">
                          Banking Dashboard
                        </span>
                                    </div>
                                </a>
                            </li>

                        </ul>

                        <!-- Megamenu -->


                    </li>

                    <li class="
             menu-item-has-children
              ">
                        <!--  Single menu -->

                        <!-- has dropdown -->


                        <a href="javascript:void()">
                            <div class="flex flex-1 items-center space-x-[6px] rtl:space-x-reverse">
                        <span class="icon-box">
                    <iconify-icon icon="heroicons-outline:chip"> </iconify-icon>
                  </span>
                                <div class="text-box">App</div>
                            </div>
                            <div class="flex-none text-sm ltr:ml-3 rtl:mr-3 leading-[1] relative top-1">
                                <iconify-icon icon="heroicons-outline:chevron-down"></iconify-icon>
                            </div>
                        </a>

                        <!-- Dropdown menu -->


                        <ul class="sub-menu">


                            <li>
                                <a href="chat.html">
                                    <div class="flex space-x-2 items-start rtl:space-x-reverse">
                                        <iconify-icon icon="heroicons-outline:chat"
                                                      class="leading-[1] text-base"></iconify-icon>
                                        <span class="leading-[1]">
                          Chat
                        </span>
                                    </div>
                                </a>
                            </li>


                            <li>
                                <a href="email.html">
                                    <div class="flex space-x-2 items-start rtl:space-x-reverse">
                                        <iconify-icon icon="heroicons-outline:mail"
                                                      class="leading-[1] text-base"></iconify-icon>
                                        <span class="leading-[1]">
                          Email
                        </span>
                                    </div>
                                </a>
                            </li>


                            <li>
                                <a href="https://dashcode-html.codeshaper.tech/calender">
                                    <div class="flex space-x-2 items-start rtl:space-x-reverse">
                                        <iconify-icon icon="heroicons-outline:calendar"
                                                      class="leading-[1] text-base"></iconify-icon>
                                        <span class="leading-[1]">
                          Calendar
                        </span>
                                    </div>
                                </a>
                            </li>


                            <li>
                                <a href="kanban.html">
                                    <div class="flex space-x-2 items-start rtl:space-x-reverse">
                                        <iconify-icon icon="heroicons-outline:view-boards"
                                                      class="leading-[1] text-base"></iconify-icon>
                                        <span class="leading-[1]">
                          Kanban
                        </span>
                                    </div>
                                </a>
                            </li>


                            <li>
                                <a href="todo.html">
                                    <div class="flex space-x-2 items-start rtl:space-x-reverse">
                                        <iconify-icon icon="heroicons-outline:clipboard-check"
                                                      class="leading-[1] text-base"></iconify-icon>
                                        <span class="leading-[1]">
                          Todo
                        </span>
                                    </div>
                                </a>
                            </li>


                            <li>
                                <a href="https://dashcode-html.codeshaper.tech/projects">
                                    <div class="flex space-x-2 items-start rtl:space-x-reverse">
                                        <iconify-icon icon="heroicons-outline:document"
                                                      class="leading-[1] text-base"></iconify-icon>
                                        <span class="leading-[1]">
                          Projects
                        </span>
                                    </div>
                                </a>
                            </li>

                        </ul>

                        <!-- Megamenu -->


                    </li>

                    <li class="
              menu-item-has-children has-megamenu
            ">
                        <!--  Single menu -->

                        <!-- has dropdown -->


                        <a href="javascript:void()">
                            <div class="flex flex-1 items-center space-x-[6px] rtl:space-x-reverse">
                        <span class="icon-box">
                    <iconify-icon icon="heroicons-outline:view-boards"> </iconify-icon>
                  </span>
                                <div class="text-box">Pages</div>
                            </div>
                            <div class="flex-none text-sm ltr:ml-3 rtl:mr-3 leading-[1] relative top-1">
                                <iconify-icon icon="heroicons-outline:chevron-down"></iconify-icon>
                            </div>
                        </a>

                        <!-- Dropdown menu -->


                        <!-- Megamenu -->


                        <div class="rt-mega-menu active">
                            <div class="flex flex-wrap space-x-8 justify-between rtl:space-x-reverse menu-open">


                                <div>
                                    <!-- mega menu title -->
                                    <div
                                        class="text-sm font-medium text-slate-900 dark:text-white mb-2 flex space-x-1 items-center">

                                        <span> Authentication</span>
                                    </div>
                                    <!-- single menu item* -->


                                    <a href="signin-one.html">

                                        <div
                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                            <span
                                                class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                            <span class="capitalize text-slate-600 dark:text-slate-300">
                                Signin One
                              </span>
                                        </div>

                                    </a>


                                    <a href="signin-two.html">

                                        <div
                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                            <span
                                                class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                            <span class="capitalize text-slate-600 dark:text-slate-300">
                                Signin Two
                              </span>
                                        </div>

                                    </a>


                                    <a href="signin-three.html">

                                        <div
                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                            <span
                                                class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                            <span class="capitalize text-slate-600 dark:text-slate-300">
                                Signin Three
                              </span>
                                        </div>

                                    </a>


                                    <a href="signup-one.html">

                                        <div
                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                            <span
                                                class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                            <span class="capitalize text-slate-600 dark:text-slate-300">
                                Signup One
                              </span>
                                        </div>

                                    </a>


                                    <a href="signup-two.html">

                                        <div
                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                            <span
                                                class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                            <span class="capitalize text-slate-600 dark:text-slate-300">
                                Signup Two
                              </span>
                                        </div>

                                    </a>


                                    <a href="signup-three.html">

                                        <div
                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                            <span
                                                class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                            <span class="capitalize text-slate-600 dark:text-slate-300">
                                Signup Three
                              </span>
                                        </div>

                                    </a>


                                    <a href="forget-password-one.html">

                                        <div
                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                            <span
                                                class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                            <span class="capitalize text-slate-600 dark:text-slate-300">
                                Forget Password One
                              </span>
                                        </div>

                                    </a>


                                    <a href="forget-password-two.html">

                                        <div
                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                            <span
                                                class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                            <span class="capitalize text-slate-600 dark:text-slate-300">
                                Forget Password Two
                              </span>
                                        </div>

                                    </a>


                                    <a href="forget-password-three.html">

                                        <div
                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                            <span
                                                class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                            <span class="capitalize text-slate-600 dark:text-slate-300">
                                Forget Password Three
                              </span>
                                        </div>

                                    </a>


                                    <a href="lock-screen-one.html">

                                        <div
                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                            <span
                                                class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                            <span class="capitalize text-slate-600 dark:text-slate-300">
                                Lock Screen One
                              </span>
                                        </div>

                                    </a>


                                    <a href="lock-screen-two.html">

                                        <div
                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                            <span
                                                class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                            <span class="capitalize text-slate-600 dark:text-slate-300">
                                Lock Screen Two
                              </span>
                                        </div>

                                    </a>


                                    <a href="lock-screen-three.html">

                                        <div
                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                            <span
                                                class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                            <span class="capitalize text-slate-600 dark:text-slate-300">
                                Lock Screen Three
                              </span>
                                        </div>

                                    </a>

                                </div>


                                <div>
                                    <!-- mega menu title -->
                                    <div
                                        class="text-sm font-medium text-slate-900 dark:text-white mb-2 flex space-x-1 items-center">

                                        <span> Components</span>
                                    </div>
                                    <!-- single menu item* -->


                                    <a href="typography.html">

                                        <div
                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                            <span
                                                class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                            <span class="capitalize text-slate-600 dark:text-slate-300">
                                typography
                              </span>
                                        </div>

                                    </a>


                                    <a href="colors.html">

                                        <div
                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                            <span
                                                class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                            <span class="capitalize text-slate-600 dark:text-slate-300">
                                colors
                              </span>
                                        </div>

                                    </a>


                                    <a href="alert.html">

                                        <div
                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                            <span
                                                class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                            <span class="capitalize text-slate-600 dark:text-slate-300">
                                alert
                              </span>
                                        </div>

                                    </a>


                                    <a href="https://dashcode-html.codeshaper.tech/button.html">

                                        <div
                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                            <span
                                                class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                            <span class="capitalize text-slate-600 dark:text-slate-300">
                                button
                              </span>
                                        </div>

                                    </a>


                                    <a href="card.html">

                                        <div
                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                            <span
                                                class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                            <span class="capitalize text-slate-600 dark:text-slate-300">
                                card
                              </span>
                                        </div>

                                    </a>


                                    <a href="carousel.html">

                                        <div
                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                            <span
                                                class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                            <span class="capitalize text-slate-600 dark:text-slate-300">
                                carousel
                              </span>
                                        </div>

                                    </a>


                                    <a href="dropdown.html">

                                        <div
                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                            <span
                                                class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                            <span class="capitalize text-slate-600 dark:text-slate-300">
                                dropdown
                              </span>
                                        </div>

                                    </a>


                                    <a href="image.html">

                                        <div
                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                            <span
                                                class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                            <span class="capitalize text-slate-600 dark:text-slate-300">
                                image
                              </span>
                                        </div>

                                    </a>


                                    <a href="modal.html" class="active">

                                        <div
                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                            <span
                                                class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                            <span class="capitalize text-slate-600 dark:text-slate-300">
                                modal
                              </span>
                                        </div>

                                    </a>


                                    <a href="https://dashcode-html.codeshaper.tech/progress-bar.html">

                                        <div
                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                            <span
                                                class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                            <span class="capitalize text-slate-600 dark:text-slate-300">
                                Progress bar
                              </span>
                                        </div>

                                    </a>


                                    <a href="placeholder.html">

                                        <div
                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                            <span
                                                class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                            <span class="capitalize text-slate-600 dark:text-slate-300">
                                Placeholder
                              </span>
                                        </div>

                                    </a>


                                    <a href="tab-accordion.html">

                                        <div
                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                            <span
                                                class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                            <span class="capitalize text-slate-600 dark:text-slate-300">
                                Tab &amp; Accordion
                              </span>
                                        </div>

                                    </a>

                                </div>


                                <div>
                                    <!-- mega menu title -->
                                    <div
                                        class="text-sm font-medium text-slate-900 dark:text-white mb-2 flex space-x-1 items-center">

                                        <span> Forms</span>
                                    </div>
                                    <!-- single menu item* -->


                                    <a href="input.html">

                                        <div
                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                            <span
                                                class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                            <span class="capitalize text-slate-600 dark:text-slate-300">
                                Input
                              </span>
                                        </div>

                                    </a>


                                    <a href="input-group.html">

                                        <div
                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                            <span
                                                class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                            <span class="capitalize text-slate-600 dark:text-slate-300">
                                Input group
                              </span>
                                        </div>

                                    </a>


                                    <a href="input-layout.html">

                                        <div
                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                            <span
                                                class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                            <span class="capitalize text-slate-600 dark:text-slate-300">
                                Input layout
                              </span>
                                        </div>

                                    </a>


                                    <a href="form-validation.html">

                                        <div
                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                            <span
                                                class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                            <span class="capitalize text-slate-600 dark:text-slate-300">
                                Form validation
                              </span>
                                        </div>

                                    </a>


                                    <a href="https://dashcode-html.codeshaper.tech/form-wizard.html">

                                        <div
                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                            <span
                                                class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                            <span class="capitalize text-slate-600 dark:text-slate-300">
                                Wizard
                              </span>
                                        </div>

                                    </a>


                                    <a href="input-mask.html">

                                        <div
                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                            <span
                                                class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                            <span class="capitalize text-slate-600 dark:text-slate-300">
                                Input mask
                              </span>
                                        </div>

                                    </a>


                                    <a href="file-input.html">

                                        <div
                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                            <span
                                                class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                            <span class="capitalize text-slate-600 dark:text-slate-300">
                                File input
                              </span>
                                        </div>

                                    </a>


                                    <a href="form-repeater.html">

                                        <div
                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                            <span
                                                class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                            <span class="capitalize text-slate-600 dark:text-slate-300">
                                Form repeater
                              </span>
                                        </div>

                                    </a>


                                    <a href="textarea.html">

                                        <div
                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                            <span
                                                class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                            <span class="capitalize text-slate-600 dark:text-slate-300">
                                Textarea
                              </span>
                                        </div>

                                    </a>


                                    <a href="checkbox.html">

                                        <div
                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                            <span
                                                class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                            <span class="capitalize text-slate-600 dark:text-slate-300">
                                Checkbox
                              </span>
                                        </div>

                                    </a>


                                    <a href="https://dashcode-html.codeshaper.tech/radio-button.html">

                                        <div
                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                            <span
                                                class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                            <span class="capitalize text-slate-600 dark:text-slate-300">
                                Radio button
                              </span>
                                        </div>

                                    </a>


                                    <a href="switch.html">

                                        <div
                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                            <span
                                                class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                            <span class="capitalize text-slate-600 dark:text-slate-300">
                                Switch
                              </span>
                                        </div>

                                    </a>

                                </div>


                                <div>
                                    <!-- mega menu title -->
                                    <div
                                        class="text-sm font-medium text-slate-900 dark:text-white mb-2 flex space-x-1 items-center">

                                        <span> Utility</span>
                                    </div>
                                    <!-- single menu item* -->


                                    <a href="invoice.html">

                                        <div
                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                            <span
                                                class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                            <span class="capitalize text-slate-600 dark:text-slate-300">
                                Invoice
                              </span>
                                        </div>

                                    </a>


                                    <a href="pricing.html">

                                        <div
                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                            <span
                                                class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                            <span class="capitalize text-slate-600 dark:text-slate-300">
                                Pricing
                              </span>
                                        </div>

                                    </a>


                                    <a href="https://dashcode-html.codeshaper.tech/faq.html">

                                        <div
                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                            <span
                                                class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                            <span class="capitalize text-slate-600 dark:text-slate-300">
                                FAQ
                              </span>
                                        </div>

                                    </a>


                                    <a href="blank-page.html">

                                        <div
                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                            <span
                                                class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                            <span class="capitalize text-slate-600 dark:text-slate-300">
                                Blank page
                              </span>
                                        </div>

                                    </a>


                                    <a href="blog.html">

                                        <div
                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                            <span
                                                class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                            <span class="capitalize text-slate-600 dark:text-slate-300">
                                Blog
                              </span>
                                        </div>

                                    </a>


                                    <a href="404.html">

                                        <div
                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                            <span
                                                class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                            <span class="capitalize text-slate-600 dark:text-slate-300">
                                404 page
                              </span>
                                        </div>

                                    </a>


                                    <a href="comming-soon.html">

                                        <div
                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                            <span
                                                class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                            <span class="capitalize text-slate-600 dark:text-slate-300">
                                Coming Soon
                              </span>
                                        </div>

                                    </a>


                                    <a href="under-maintanance.html">

                                        <div
                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                            <span
                                                class="h-[6px] w-[6px] rounded-full border border-slate-600 dark:border-white inline-block flex-none"></span>
                                            <span class="capitalize text-slate-600 dark:text-slate-300">
                                Under Maintanance page
                              </span>
                                        </div>

                                    </a>

                                </div>

                            </div>
                        </div>

                    </li>

                    <li class="
             menu-item-has-children
              ">
                        <!--  Single menu -->

                        <!-- has dropdown -->


                        <a href="javascript:void()">
                            <div class="flex flex-1 items-center space-x-[6px] rtl:space-x-reverse">
                        <span class="icon-box">
                    <iconify-icon icon="heroicons-outline:view-grid-add"> </iconify-icon>
                  </span>
                                <div class="text-box">Widgets</div>
                            </div>
                            <div class="flex-none text-sm ltr:ml-3 rtl:mr-3 leading-[1] relative top-1">
                                <iconify-icon icon="heroicons-outline:chevron-down"></iconify-icon>
                            </div>
                        </a>

                        <!-- Dropdown menu -->


                        <ul class="sub-menu">


                            <li>
                                <a href="basic-widgets.html">
                                    <div class="flex space-x-2 items-start rtl:space-x-reverse">
                                        <iconify-icon icon="heroicons-outline:document-text"
                                                      class="leading-[1] text-base"></iconify-icon>
                                        <span class="leading-[1]">
                          Basic
                        </span>
                                    </div>
                                </a>
                            </li>


                            <li>
                                <a href="statistics-widgets.html">
                                    <div class="flex space-x-2 items-start rtl:space-x-reverse">
                                        <iconify-icon icon="heroicons-outline:document-text"
                                                      class="leading-[1] text-base"></iconify-icon>
                                        <span class="leading-[1]">
                          Statistic
                        </span>
                                    </div>
                                </a>
                            </li>

                        </ul>

                        <!-- Megamenu -->


                    </li>

                    <li class="
             menu-item-has-children
              ">
                        <!--  Single menu -->

                        <!-- has dropdown -->


                        <a href="javascript:void()">
                            <div class="flex flex-1 items-center space-x-[6px] rtl:space-x-reverse">
                        <span class="icon-box">
                    <iconify-icon icon="heroicons-outline:template"> </iconify-icon>
                  </span>
                                <div class="text-box">Extra</div>
                            </div>
                            <div class="flex-none text-sm ltr:ml-3 rtl:mr-3 leading-[1] relative top-1">
                                <iconify-icon icon="heroicons-outline:chevron-down"></iconify-icon>
                            </div>
                        </a>

                        <!-- Dropdown menu -->


                        <ul class="sub-menu">


                            <li>
                                <a href="basic-table.html">
                                    <div class="flex space-x-2 items-start rtl:space-x-reverse">
                                        <iconify-icon icon="heroicons-outline:table"
                                                      class="leading-[1] text-base"></iconify-icon>
                                        <span class="leading-[1]">
                          Basic Table
                        </span>
                                    </div>
                                </a>
                            </li>


                            <li>
                                <a href="advance-table.html">
                                    <div class="flex space-x-2 items-start rtl:space-x-reverse">
                                        <iconify-icon icon="heroicons-outline:table"
                                                      class="leading-[1] text-base"></iconify-icon>
                                        <span class="leading-[1]">
                          Advanced table
                        </span>
                                    </div>
                                </a>
                            </li>


                            <li>
                                <a href="apex-chart.html">
                                    <div class="flex space-x-2 items-start rtl:space-x-reverse">
                                        <iconify-icon icon="heroicons-outline:chart-bar"
                                                      class="leading-[1] text-base"></iconify-icon>
                                        <span class="leading-[1]">
                          Apex chart
                        </span>
                                    </div>
                                </a>
                            </li>


                            <li>
                                <a href="chartjs.html">
                                    <div class="flex space-x-2 items-start rtl:space-x-reverse">
                                        <iconify-icon icon="heroicons-outline:chart-bar"
                                                      class="leading-[1] text-base"></iconify-icon>
                                        <span class="leading-[1]">
                          Chart js
                        </span>
                                    </div>
                                </a>
                            </li>


                            <li>
                                <a href="map.html">
                                    <div class="flex space-x-2 items-start rtl:space-x-reverse">
                                        <iconify-icon icon="heroicons-outline:map"
                                                      class="leading-[1] text-base"></iconify-icon>
                                        <span class="leading-[1]">
                          Map
                        </span>
                                    </div>
                                </a>
                            </li>

                        </ul>

                        <!-- Megamenu -->


                    </li>

                </ul>
            </div>
            <!-- end top menu -->
            <div class="nav-tools flex items-center lg:space-x-5 space-x-3 rtl:space-x-reverse leading-0">
                <!-- BEGIN: Language Dropdown  -->

                <div class="relative">
                    <button class="text-slate-800 dark:text-white focus:ring-0 focus:outline-none font-medium rounded-lg text-sm text-center
            inline-flex items-center" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <iconify-icon icon="circle-flags:uk" class="mr-0 md:mr-2 rtl:ml-2 text-xl"></iconify-icon>
                        <span class="text-sm md:block hidden font-medium text-slate-600 dark:text-slate-300">
            En</span>
                    </button>
                    <!-- Language Dropdown menu -->
                    <div class="dropdown-menu z-10 hidden bg-white divide-y divide-slate-100 shadow w-44 dark:bg-slate-800 border dark:border-slate-900 !top-[29px] rounded-md
            overflow-hidden">
                        <ul class="py-1 text-sm text-slate-800 dark:text-slate-200">
                            <li>
                                <a href="#"
                                   class="flex items-center px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white">
                                    <iconify-icon icon="circle-flags:uk"
                                                  class="ltr:mr-2 rtl:ml-2 text-xl"></iconify-icon>
                                    <span class="font-medium">ENG</span>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                   class="flex items-center px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white">
                                    <iconify-icon icon="emojione:flag-for-germany"
                                                  class="ltr:mr-2 rtl:ml-2 text-xl"></iconify-icon>
                                    <span class="font-medium">GER</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Theme Changer -->
                <!-- END: Language Dropdown -->

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
                    <button id="grayScale" class="lg:h-[32px] lg:w-[32px] lg:bg-slate-100 lg:dark:bg-slate-900 dark:text-white text-slate-900 cursor-pointer
            rounded-full text-[20px] flex flex-col items-center justify-center">
                        <iconify-icon class="text-slate-800 dark:text-white text-xl"
                                      icon="mdi:paint-outline"></iconify-icon>
                    </button>
                </div>
                <!-- END: grayscal -->

                <!-- BEGIN: Message Dropdown -->
                <!-- Mail Dropdown -->
                <div class="relative md:block hidden">
                    <button class="lg:h-[32px] lg:w-[32px] lg:bg-slate-50 lg:dark:bg-slate-900 dark:text-white text-slate-900 cursor-pointer
      rounded-full text-[20px] flex flex-col items-center justify-center" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                        <iconify-icon class="text-slate-800 dark:text-white text-xl"
                                      icon="heroicons-outline:mail"></iconify-icon>
                        <span class="absolute -right-1 lg:top-0 -top-[6px] h-4 w-4 bg-red-500 text-[8px] font-semibold flex flex-col items-center
        justify-center rounded-full text-white z-[45]">
      10</span>
                    </button>
                    <!-- Mail Dropdown -->
                    <div class="dropdown-menu z-10 hidden bg-white divide-y divide-slate-100 dark:divide-slate-900 shadow w-[335px]
      dark:bg-slate-800 border dark:border-slate-900 !top-[23px] rounded-md overflow-hidden lrt:origin-top-right rtl:origin-top-left">
                        <div class="flex items-center justify-between py-4 px-4">
                            <h3 class="text-sm font-Inter font-medium text-slate-700 dark:text-white">Messages</h3>
                            <a class="text-xs font-Inter font-normal underline text-slate-500 dark:text-white" href="#">See
                                All</a>
                        </div>
                        <div class="divide-y divide-slate-100 dark:divide-slate-900" role="none">
                            <div class="text-slate-600 dark:text-slate-300 block w-full px-4 py-2 text-sm">
                                <div class="flex ltr:text-left rtl:text-right space-x-3 rtl:space-x-reverse relative">
                                    <div class="flex-none">
                                        <div class="h-8 w-8 bg-white dark:bg-slate-700 rounded-full relative">
                              <span class="bg-secondary-500 w-[10px] h-[10px] rounded-full border border-white dark:border-slate-700 inline-block absolute
                right-0 top-0"></span>
                                            <img src="assets/images/all-img/user.png" alt="user"
                                                 class="block w-full h-full object-cover rounded-full border hover:border-white border-transparent">
                                        </div>
                                    </div>
                                    <div class="flex-1">
                                        <a href="#" class="text-slate-800 dark:text-slate-300 text-sm font-medium mb-1 before:w-full before:h-full before:absolute
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
                              <span class="bg-green-500 w-[10px] h-[10px] rounded-full border border-white dark:border-slate-700 inline-block absolute
                right-0 top-0"></span>
                                            <img src="assets/images/all-img/user2.png" alt="user"
                                                 class="block w-full h-full object-cover rounded-full border hover:border-white border-transparent">
                                        </div>
                                    </div>
                                    <div class="flex-1">
                                        <a href="#" class="text-slate-800 dark:text-slate-300 text-sm font-medium mb-1 before:w-full before:h-full before:absolute
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
                              <span class="bg-green-500 w-[10px] h-[10px] rounded-full border border-white dark:border-slate-700 inline-block absolute
                right-0 top-0"></span>
                                            <img src="assets/images/all-img/user3.png" alt="user"
                                                 class="block w-full h-full object-cover rounded-full border hover:border-white border-transparent">
                                        </div>
                                    </div>
                                    <div class="flex-1">
                                        <a href="#" class="text-slate-800 dark:text-slate-300 text-sm font-medium mb-1 before:w-full before:h-full before:absolute
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
                    <button class="lg:h-[32px] lg:w-[32px] lg:bg-slate-50 lg:dark:bg-slate-900 dark:text-white text-slate-900 cursor-pointer
      rounded-full text-[20px] flex flex-col items-center justify-center" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                        <iconify-icon class="animate-tada text-slate-800 dark:text-white text-xl"
                                      icon="heroicons-outline:bell"></iconify-icon>
                        <span class="absolute -right-1 lg:top-0 -top-[6px] h-4 w-4 bg-red-500 text-[8px] font-semibold flex flex-col items-center
        justify-center rounded-full text-white z-[99]">
      4</span>
                    </button>
                    <!-- Notifications Dropdown -->
                    <div class="dropdown-menu z-10 hidden bg-white divide-y divide-slate-100 dark:divide-slate-900 shadow w-[335px]
      dark:bg-slate-800 border dark:border-slate-900 !top-[23px] rounded-md overflow-hidden lrt:origin-top-right rtl:origin-top-left">
                        <div class="flex items-center justify-between py-4 px-4">
                            <h3 class="text-sm font-Inter font-medium text-slate-700 dark:text-white">Notifications</h3>
                            <a class="text-xs font-Inter font-normal underline text-slate-500 dark:text-white" href="#">See
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
                                        <a href="#" class="text-slate-600 dark:text-slate-300 text-sm font-medium mb-1 before:w-full before:h-full before:absolute
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
                                        <a href="#" class="text-slate-600 dark:text-slate-300 text-sm font-medium mb-1 before:w-full before:h-full before:absolute
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
                                    <a href="#" class="text-slate-600 dark:text-slate-300 text-sm font-medium mb-1 before:w-full before:h-full before:absolute
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
                                    <a href="#" class="text-slate-600 dark:text-slate-300 text-sm font-medium mb-1 before:w-full before:h-full before:absolute
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
                    <button class="text-slate-800 dark:text-white focus:ring-0 focus:outline-none font-medium rounded-lg text-sm text-center
      inline-flex items-center" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="lg:h-8 lg:w-8 h-7 w-7 rounded-full flex-1 ltr:mr-[10px] rtl:ml-[10px]">
                            <img src="assets/images/all-img/user.png" alt="user"
                                 class="block w-full h-full object-cover rounded-full">
                        </div>
                        <span
                            class="flex-none text-slate-600 dark:text-white text-sm font-normal items-center lg:flex hidden overflow-hidden text-ellipsis whitespace-nowrap">{{auth()->user()->name}}</span>
                        <svg
                            class="w-[16px] h-[16px] dark:text-white hidden lg:inline-block text-base inline-block ml-[10px] rtl:mr-[10px]"
                            aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div class="dropdown-menu z-10 hidden bg-white divide-y divide-slate-100 shadow w-44 dark:bg-slate-800 border dark:border-slate-700 !top-[23px] rounded-md
      overflow-hidden">
                        <ul class="py-1 text-sm text-slate-800 dark:text-slate-200">
                            <li>
                                <form action="{{route('logout')}}" method="post">
                                    @csrf
                                    <button type="submit" class="block px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white font-inter text-sm text-slate-600
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
