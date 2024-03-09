<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>Recuperar contraseña</title>
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
            <div class="left-column relative z-[1] bg-cover" style="background-image: url('{{ asset('images/img_prueba5.png') }}');">
                
            </div>
            <div class="right-column relative">
                <div class="inner-content h-full flex flex-col bg-white dark:bg-slate-800">
                    <div class="auth-box2 flex flex-col justify-center h-full">
                        <div class="mobile-logo text-center mb-6 lg:hidden block">
                            <a href="index.html">
                                <img src="assets/images/logo/logo.svg" alt="" class="mx-auto">
                                <img src="assets/images/logo/logo-white.svg" alt="" class="mx-auto">
                            </a>
                        </div>
                        <div class="text-center 2xl:mb-10 mb-5">
                            <h4 class="font-medium mb-4">¿Olvidaste tu contraseña?</h4>
                            <div class="text-slate-500 dark:text-slate-400 text-base">
                                Recupera tu contraseña con Chamba
                            </div>
                        </div>
                        <div
                            class="font-normal text-base text-slate-500 dark:text-slate-400 text-center px-2 bg-slate-100 dark:bg-slate-600 rounded
                                py-3 mb-4 mt-10">
                            Ingresa tu correo electrónico y se te enviaran las intrucciones!
                        </div>
                        <!-- BEGIN: Forgot Password Form -->
                        @if (session('status'))
                            <div
                                class="font-normal text-base text-slate-500 dark:text-slate-400 text-center px-2 bg-slate-100 dark:bg-slate-600 rounded
                                py-3 mb-4 mt-10">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form method="POST" class="space-y-4" action="{{ route('password.request') }}">
                            @csrf
                            <div class="fromGroup">
                                <label class="block capitalize form-label">email</label>
                                <div class="relative ">
                                    <input type="email" name="email" class="form-control py-2"
                                        placeholder="Ingresa tu correo electrónico">
                                </div>
                                @error('email')
                                    <span>Email not found</span>
                                @enderror
                            </div>
                            <button class="btn btn-dark block w-full text-center" type="submit">Recuperar</button>
                        </form>
                        <!-- END: Forgot Password Form -->

                        <div
                            class="md:max-w-[345px] mx-auto font-normal text-slate-500 dark:text-slate-400 2xl:mt-12 mt-8 uppercase text-sm">
                            Olvídalo,
                            <a href="/login" class="text-slate-900 dark:text-white font-medium hover:underline">
                                Envíame de vuelta
                            </a>
                            a iniciar sesión
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
