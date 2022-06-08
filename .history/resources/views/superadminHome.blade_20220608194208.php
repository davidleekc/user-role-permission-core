<!doctype html>
<html lang="en">

    <head>
        @include('layout.partials.htmlHead')
    </head>

<body class="body-scroll" data-page="index">

    @stack('layout.partials.mobileHeader')

    @stack('layout.partials.mobileSideMenu')

    @stack('layout.partials.mobileLoader')

    <!-- Begin page -->
    <main class="h-100">
        @yield('content')
    </main>
    <!-- End page -->

    @stack('layout.partials.mobileToastBox')

    @stack('layout.partials.mobileFooter')

    @stack('layout.partials.mobileScriptFooter')

</body>

</html>
