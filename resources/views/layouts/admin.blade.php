<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.meta')
    <title>
        FIT LAUNDRY
    </title>
    @stack('before-style')

    @include('includes.style')

    @stack('after-style')

</head>

<body class="g-sidenav-show  bg-gray-100">

    @include('includes.sidebar')

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->

        @include('includes.navbar')

        <!-- End Navbar -->
        @yield('content')

    </main>

    @include('includes.setting')

    @stack('before-script')

    @include('includes.script')

    @stack('after-script')
</body>

</html>
