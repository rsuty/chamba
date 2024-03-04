<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>Dashcode - HTML Template</title>
    <link rel="icon" type="image/png" href="assets/images/logo/favicon.svg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="assets/css/rt-plugins.css">
    <link href="https://unpkg.com/aos@2.3.0/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
        integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="">
    <link rel="stylesheet" href="assets/css/app.css">
    <script src="assets/js/store.js"></script>
</head>

<body class=" font-inter skin-default">
    <!-- [if IE]> <p class="browserupgrade">
            You are using an <strong>outdated</strong> browser. Please
            <a href="https://browsehappy.com/">upgrade your browser</a> to improve
            your experience and security.
        </p> <![endif] -->

    <div class="loginwrapper bg-cover bg-no-repeat bg-center"
        style="background-image: url(assets/images/all-img/page-bg.png);">
        <div class="lg-inner-column">
            <div class="left-columns lg:w-1/2 lg:block hidden">
                <div class="logo-box-3">
                    <a heref="index.html" class="">
                        <img src="assets/images/logo/logo-white.svg" alt="">
                    </a>
                </div>
            </div>
            <div class="lg:w-1/2 w-full flex flex-col items-center justify-center">
                <div class="auth-box-3">
                    <div class="mobile-logo text-center mb-6 lg:hidden block">
                        <a heref="index.html">
                            <img src="assets/images/logo/logo.svg" alt="" class="mb-10 dark_logo">
                            <img src="assets/images/logo/logo-white.svg" alt="" class="mb-10 white_logo">
                        </a>
                    </div>
                    <div class="text-center 2xl:mb-10 mb-5">
                        <h4 class="font-medium">Sign In</h4>
                        <div class="text-slate-500 dark:text-slate-400 text-base">
                            Sign in to your account to start using Dashcode
                        </div>
                    </div>
                    <!-- BEGIN: Login Form -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>

                    @endif
                    <form class="space-y-4" action="{{ route('login') }}" method="post">
                        @csrf
                        <div class="fromGroup">
                            <label class="block capitalize form-label">email</label>
                            <div class="relative ">
                                <input type="email" name="email" class="form-control py-2"
                                    placeholder="Add placeholder">
                            </div>
                        </div>
                        <div class="fromGroup">
                            <label class="block capitalize form-label">passwrod</label>
                            <div class="relative "><input type="password" name="password" class="  form-control py-2"
                                    placeholder="Add placeholder">
                            </div>
                        </div>
                        <div class="flex justify-between">

                            <div class="checkbox-area">
                                <label class="inline-flex items-center cursor-pointer">
                                    <input type="checkbox" class="hidden" name="checkbox">
                                    <span
                                        class="h-4 w-4 border flex-none border-slate-100 dark:border-slate-800 rounded inline-flex ltr:mr-3 rtl:ml-3 relative transition-all duration-150 bg-slate-100 dark:bg-slate-900">
                                        <img src="assets/images/icon/ck-white.svg" alt=""
                                            class="h-[10px] w-[10px] block m-auto opacity-0"></span>
                                    <span class="text-slate-500 dark:text-slate-400 text-sm leading-6">Keep me signed
                                        in</span>
                                </label>
                            </div>
                            <a class="text-sm text-slate-800 dark:text-slate-400 leading-6 font-medium"
                                href="/forgot-password">Forgot Password?</a>
                        </div>
                        <button type="submit" class="btn btn-dark block w-full text-center">Sign in</button>
                    </form>
                    <!-- END: Login Form -->
                    <div class=" relative border-b-[#9AA2AF] border-opacity-[16%] border-b pt-6">
                        <div
                            class=" absolute inline-block bg-white dark:bg-slate-800 dark:text-slate-400 left-1/2 top-1/2 transform -translate-x-1/2
                                px-4 min-w-max text-sm text-slate-500 dark:text-slate-400font-normal ">
                            Or continue with
                        </div>
                    </div>
                    <div class="max-w-[242px] mx-auto mt-8 w-full">

                        <!-- BEGIN: Social Log in Area -->
                        <ul class="flex">
                            <li class="flex-1">
                                <a href="#"
                                    class="inline-flex h-10 w-10 bg-[#1C9CEB] text-white text-2xl flex-col items-center justify-center rounded-full">
                                    <img src="assets/images/icon/tw.svg" alt="">
                                </a>
                            </li>
                            <li class="flex-1">
                                <a href="#"
                                    class="inline-flex h-10 w-10 bg-[#395599] text-white text-2xl flex-col items-center justify-center rounded-full">
                                    <img src="assets/images/icon/fb.svg" alt="">
                                </a>
                            </li>
                            <li class="flex-1">
                                <a href="#"
                                    class="inline-flex h-10 w-10 bg-[#0A63BC] text-white text-2xl flex-col items-center justify-center rounded-full">
                                    <img src="assets/images/icon/in.svg" alt="">
                                </a>
                            </li>
                            <li class="flex-1">
                                <a href="#"
                                    class="inline-flex h-10 w-10 bg-[#EA4335] text-white text-2xl flex-col items-center justify-center rounded-full">
                                    <img src="assets/images/icon/gp.svg" alt="">
                                </a>
                            </li>
                        </ul>
                        <!-- END: Social Log In Area -->
                    </div>
                    <div
                        class="mx-auto font-normal text-slate-500 dark:text-slate-400 2xl:mt-12 mt-6 uppercase text-sm text-center">
                        Don't have you account?
                        <a href="/register" class="text-slate-900 dark:text-white font-medium hover:underline">
                            Sign Up
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- scripts -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/rt-plugins.js"></script>
    <script src="assets/js/app.js"></script>
</body>

</html>
