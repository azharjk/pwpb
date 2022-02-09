@extends('base')

@section('title', 'Register')


@section('base.content')
       <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                    <div class="login-brand">
                        <img src="{{ asset('dist/img/stisla-fill.svg') }}" alt="logo" width="100" class="shadow-light rounded-circle">
                    </div>

                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Registrasi</h4>
                        </div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('auth.register.user') }}" class="needs-validation" novalidate="">
                                @csrf
                                <div class="form-group">
                                    <label for="nik">NIK</label>
                                    <input id="nik" type="text" class="form-control" name="nik" tabindex="1" required
                                        autofocus>
                                    <div class="invalid-feedback">
                                        Please fill in your NIK
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="d-block">
                                        <label for="name" class="control-label">Nama lengkap</label>
                                    </div>
                                    <input id="name" type="text" class="form-control" name="name" tabindex="2"
                                        required>
                                    <div class="invalid-feedback">
                                        please fill in your nama lengkap
                                    </div>
                                </div>

                                {{-- <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="remember" class="custom-control-input" tabindex="3"
                                            id="remember-me">
                                        <label class="custom-control-label" for="remember-me">Remember Me</label>
                                    </div>
                                </div> --}}

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                        Register
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="mt-5 text-muted text-center">
                        Sudah punya akun? <a href="{{ route('auth.login') }}">sini</a>
                    </div>
                    <div class="simple-footer">
                        Copyright &copy; Stisla 2018
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
