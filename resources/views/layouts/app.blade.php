<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('partials.headLink')
</head>
<body>
    <div id="app">
        <!-- Navigation -->
        @include('admin.nav')  

        <main class="container mt-4">
            @yield('content')
        </main>

        @include('master.footer')
    </div>
</body>
</html>
