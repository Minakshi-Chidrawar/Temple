<!DOCTYPE html>
<html>
<head>
    @include('partials.headLink')
</head>

<body>
    <!-- Navigation -->
    @include('master.nav')    

    <!-- div class="container mt-4" -->
        @yield('content')
    <!-- /div -->

    @include('master.footer')
</body>
</html>