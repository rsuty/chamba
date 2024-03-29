<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>Registrar cuenta</title>
    <link rel="icon" type="image/png" href="assets/images/logo/logo-bg-white.svg">
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

    <div class="loginwrapper">
        <div class="lg-inner-column">
            <div class="left-column relative z-[1] bg-cover" style="background-image: url({{asset('assets/images/img_prueba6.png')}})">
                
            </div>
            <div class="right-column  relative">
                <div class="inner-content h-full flex flex-col bg-white dark:bg-slate-800">
                    <div class="auth-box h-full flex flex-col justify-center">
                        <div class="mobile-logo text-center mb-6 lg:hidden block">
                            <a href="index.html">
                                <img src="assets/images/logo/logo.svg" alt="" class="mb-10 dark_logo">
                                <img src="assets/images/logo/logo-white.svg" alt="" class="mb-10 white_logo">
                            </a>
                        </div>
                        <div class="text-center 2xl:mb-10 mb-4">
                            <h4 class="font-medium">Registrar cuenta</h4>
                            <div class="text-slate-500 text-base">
                                Registra una cuenta para comenzar a usar Chamba
                            </div>
                        </div>
                        <!-- BEGIN: Registration Form -->
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>

                        @endif
                        <form method="post" class="space-y-4" action="{{ route('register') }}">
                            @csrf
                            <div class="fromGroup">
                                <label class="block capitalize form-label">Nombre</label>
                                <div class="relative ">
                                    <input type="text" name="name" class="  form-control py-2"
                                        placeholder="Enter your name">
                                    @error('name')
                                        <span id="nameErrorMsg" class="font-Inter text-sm text-danger-500 pt-2 hidden mt-1"
                                            style="display: inline;">Please enter your name.</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="fromGroup">
                                <label class="block capitalize form-label">Correo electrónico</label>
                                <div class="relative ">
                                    <input type="email" name="email" class="form-control py-2"
                                        placeholder="Enter your email">
                                </div>
                            </div>
                            <div class="fromGroup">
                                <label class="block capitalize form-label">Contraseña</label>
                                <div class="relative "><input type="password" name="password"
                                        class="  form-control py-2" placeholder="Enter your password">
                                </div>
                            </div>
                            <div class="fromGroup">
                                <label class="block capitalize form-label">Confirmar contraseña</label>
                                <div class="relative "><input type="password" name="password_confirmation"
                                        class="  form-control py-2" placeholder="Enter your password">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-dark block w-full text-center">Crear cuenta</button>
                        </form>
                        <!-- END: Registration Form -->
                        <div class="relative border-b-[#9AA2AF] border-opacity-[16%] border-b pt-6">
                            <div
                                class="absolute inline-block bg-white dark:bg-slate-800 dark:text-slate-400 left-1/2 top-1/2 transform -translate-x-1/2
                                    px-4 min-w-max text-sm text-slate-500 font-normal">
                               O continuar con
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
                            class="md:max-w-[345px] mx-auto font-normal text-slate-500 dark:text-slate-400 mt-8 uppercase text-sm">
                            <span>Ya está registrado?
                            </span>
                            <a href="/login"
                                class="text-slate-900 dark:text-white font-medium hover:underline">
                                Iniciar sesión
                            </a>
                        </div>
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
