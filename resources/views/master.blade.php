@extends('base')

@section('base.content')
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
@endsection
