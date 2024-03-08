<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>Iniciar sesión</title>
    <link rel="icon" type="image/png" href="assets/images/logo/logo-bg-white.svg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/rt-plugins.css">
    <link href="https://unpkg.com/aos@2.3.0/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="">
    <link rel="stylesheet" href="assets/css/app.css">
    <script src="assets/js/store.js"></script>
</head>

<body class=" font-inter skin-default">
    <!-- [if IE]> <p class="browserupgrade">
            You are using an <strong>outdated</strong> browser. Please
            <a href="https://browsehappy.com/">upgrade your browser</a> to improve
            your experience and security.
        </p> <![endif] -->

    <!-- <div class="loginwrapper bg-cover bg-no-repeat bg-center" style="background-image: url(assets/images/all-img/page-bg.png);"> -->
    <div class="loginwrapper bg-cover bg-no-repeat bg-center" style="background-color: #98C379;">
        <div class="lg-inner-column">
            <div class="left-columns lg:w-1/2 lg:block hidden">
                <div class="logo-box-3 bg-white bg-center bg-no-repeat">
                    <a heref="index.html" class="">
                    <img src="assets/images/logo/logo-obscuro.svg" alt="" style="padding: 10px;" class="dark_logo bg-white rounded-lg">
                    </a>
                </div>
            </div>
            <div class="lg:w-1/2 w-full flex flex-col items-center justify-center ">
                <div class="auth-box-3">
                    <div class="mobile-logo mx-auto my-auto mb-6 lg:hidden block">
                        <a href="index.html">
                            <img src="assets/images/logo/logo-obscuro.svg" alt="" class="mb-6 dark_logo">
                        </a>
                    </div>

                    <div class="text-center 2xl:mb-10 mb-5">
                        <h4 class="font-medium">Iniciar sesión</h4>
                        <div class="text-slate-500 dark:text-slate-400 text-base">
                            Ingresa tu cuenta para poder ingresar
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
                            <label class="block capitalize form-label">Correo electronico</label>
                            <div class="relative">
                                <input type="email" name="email" class="form-control py-2" placeholder="Correo electronico">
                            </div>
                        </div>
                        <div class="fromGroup">
                            <label class="block capitalize form-label">contraseña</label>
                            <div class="relative "><input type="password" name="password" class="  form-control py-2" placeholder="Contraseña">
                            </div>
                        </div>
                        <div class="flex justify-between">

                            <div class="checkbox-area">
                                <label class="inline-flex items-center cursor-pointer">
                                    <input type="checkbox" class="hidden" name="checkbox">
                                    <span class="h-4 w-4 border flex-none border-slate-100 dark:border-slate-800 rounded inline-flex ltr:mr-3 rtl:ml-3 relative transition-all duration-150 bg-slate-100 dark:bg-slate-900">
                                        <img src="assets/images/icon/ck-white.svg" alt="" class="h-[10px] w-[10px] block m-auto opacity-0"></span>
                                    <span class="text-slate-500 dark:text-slate-400 text-sm leading-6">Mantener sesión iniciada?</span>
                                </label>
                            </div>
                            <a class="text-sm text-slate-800 dark:text-slate-400 leading-6 font-medium" href="/forgot-password">Olvidaste tu contraseña?</a>
                        </div>
                        <button type="submit" class="btn btn-dark block w-full text-center">Entrar</button>
                    </form>
                    <!-- END: Login Form -->
                    <div class="mx-auto font-normal text-slate-500 dark:text-slate-400 2xl:mt-12 mt-6 uppercase text-sm text-center">
                        ¿No tienes una cuenta?
                        <a href="/register" class="text-slate-900 dark:text-white font-medium hover:underline">
                            Regístrate
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
