<!doctype html>
<html lang="en" class="h-100">

@include('layout.auth.driverHead')

<body class="body-scroll d-flex flex-column h-100" data-page="signin">

    @include('layout.auth.driverLoader')

    @yield('content')

@include('layout.auth.driverFooter')

</body>

</html>
