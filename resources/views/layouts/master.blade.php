<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>@yield('title') | Chamba [DASC]</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Chamba" name="description" />
    <meta content="Chamba" name="author" />
    @include('layouts.head-css')
    <script src="assets/js/store.js"></script>
</head>

@section('body')
    @include('layouts.body')
@show

<div id="layout-wrapper">
    @include('layouts.topbar')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
        @include('layouts.footer')
    </div>
</div>
@include('layouts.scripts')
</body>

</html>
