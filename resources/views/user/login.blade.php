@extends('layouts.auth')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-7 col-md-10 col-sm-11 col-12">
                <div class="card shadow ">
                    <div class="card-body py-3">
                        <div class="text-center">
                            {{-- <img src="{{ asset('/storage/images/razor.jpg') }}" alt="avatar"
                                class="rounded-circle img-thumbnail border border-4 border-dark mb-3" height="100px"
                                width="100px">
                            <h2>Ra<span class="text-danger fw-bold">z</span>or Team Login Page</h2> --}}
                            <img src="{{ asset('/storage/images/images.png') }}" alt="avatar" class="rounded-circle img-fluid " height="80px" width="80px">
                        <h3> <span class="text-danger fw-bold" style="font-family: 'Poppins', sans-serif;"> Laravel </span>Login Page</h3>
                        </div>
                        <form method="POST" action="{{ route('login.store') }}">
                            @csrf
                            <div class="row mb-3">
                                <div class="form-outline text-start">
                                    <label for="email" class="col-form-label">Email</label>
                                    <div class="input-group">
                                        <div class="input-group-text"><i class="bi bi-envelope-fill"></i></div>
                                        <input type="email" id="email" placeholder="juandelacruz@hotmail.com"
                                            name="email" class="form-control @error('email') is-invalid @enderror" />
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-outline text-start">
                                    <label for="password" class="col-form-label">{{ __('Password') }}</label>
                                    <div class="input-group">
                                        <span class="input-group-text" onclick="password_show_hide();">
                                            <i class="fas fa-eye" id="show_eye"></i>
                                            <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                                        </span>
                                        <input id="password" type="password" placeholder="Must be 8-20 characters long."
                                            class="form-control @error('password') is-invalid @enderror" name="password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-outline text-start">
                                <div class="row mb-2">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                        <div class="form-check small">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                                {{ old('remember') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 text-end">
                                        <a class="text-underline small" href="#"
                                            onclick="return confirm('Kalma ako lang to')">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="text-center  btn btn-dark mb-3">Sign in</button>
                                </div>
                                <div class="row">
                                    <div class="col-lg-5 col-sm-5 col-md-5 col-5">
                                        <hr class="my-2">
                                    </div>
                                    <div class="col-lg-2 col-sm-2 col-md-2 col-2">
                                        <p class="text-center fw-bold small text-muted">OR</p>
                                    </div>
                                    <div class="col-lg-5 col-sm-5 col-md-5 col-5">
                                        <hr class="my-2">
                                    </div>
                                </div>
                                <div class="container justify-content-center">
                                    <div class="gap-3 text-center">
                                        <a href="{{ route('facebook.login') }}" target="_blank"><span
                                                class="fs-3 bi bi-facebook px-3"></span></a>
                                        <a href="https://github.com/rubickking04"><span
                                                class="fs-3 text-dark bi bi-github px-3"></span></a>
                                        <a href="https://github.com/rubickking04"><span
                                                class="fs-3 text-danger bi bi-google px-3"></span></a>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <p>Not a member? <a href="{{ route('user.register') }}">Sign up</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
