<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{url("favicon.png")}}" />
    <title>Dashboard</title>
    <!-- PWA  -->
    <meta name="theme-color" content="#6777ef"/>
    <link rel="apple-touch-icon" href="{{ asset('/logo.png') }}">
    <link rel="manifest" href="{{ asset('/manifest.json') }}">

    {{--Style--}}
    @include("include.admin.style")
</head>
<body>
<div id="app">
    {{--SideNav--}}
    @include("include.admin.sidenav")


    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>
        {{--Content--}}
        @yield('content')

        {{--Footer--}}
        @include('include.admin.footer')

    </div>
</div>

    {{--Script--}}
    @include("include.admin.script")

</body>
</html>
