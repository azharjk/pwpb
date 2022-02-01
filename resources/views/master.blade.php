<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>@yield('title') — Stisla</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('dist/modules/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/modules/fontawesome/css/all.min.css') }}">

    <!-- Plugins -->
    <link rel="stylesheet" href="{{ asset('dist/modules/bootstrap-social/bootstrap-social.css') }}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/components.css') }}">
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            @include('components.navbar')
            <div class="main-sidebar">
                @include('components.sidebar')
            </div>

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1>@yield('title')</h1>
                    </div>

                    <div class="section-body">
                        @yield('content')
                    </div>
                </section>
            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright © 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad
                        Nauval Azhar</a>
                </div>
                <div class="footer-right">
                    v2.0.0
                </div>
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="{{ asset('dist/modules/jquery.min.js') }}"></script>
    <script src="{{ asset('dist/modules/popper.js') }}"></script>
    <script src="{{ asset('dist/modules/tooltip.js') }}"></script>
    <script src="{{ asset('dist/modules/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('dist/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('dist/modules/moment.min.js') }}"></script>
    <script src="{{ asset('dist/js/stisla.js') }}"></script>

    <!-- Plugins -->

    <!-- Page Specific JS File -->

    <!-- Template JS File -->
    <script src="{{ asset('dist/js/scripts.js') }}"></script>
    <script src="{{ asset('dist/js/custom.js') }}"></script>
</body>

</html>
