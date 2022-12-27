<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    @include('layouts.css')
    @include('layouts.css_bblink')
</head>

<body>
    @include('layouts.header')
    @include('layouts.sidebar')

    <main id="main" class="main">
        @include('layouts.viewuser')
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('layouts.footer')

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    @include('layouts.js')

</body>

</html>