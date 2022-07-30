@extends('layouts.auth')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <div class="card shadow">
                <div class="card-body py-3">
                    <div class="text-center">
                        {{-- <img src="{{ asset('/storage/images/razor.jpg') }}" alt="avatar" class="rounded-circle img-thumbnail border border-4 border-dark mb-3" height="100px" width="100px">
                        <h3>Ra<span class="text-danger fw-bold">z</span>or Team Registration Page</h3> --}}
                        <img src="{{ asset('/storage/images/images.png') }}" alt="avatar" class="rounded-circle img-fluid " height="80px" width="80px">
                        <h3> <span class="text-danger fw-bold" style="font-family: 'Poppins', sans-serif;"> Laravel </span>Register Page</h3>
                    </div>
                    <form method="POST" action="{{ route('register.store') }}">
                        @csrf
                        <div class="row mb-3">
                            <div class="form-outline text-start">
                                <label for="name" class="col-form-label">Name</label>
                                <div class="input-group">
                                <div class="input-group-text"><i class="fa-solid fa-user"></i></div>
                                <input type="text" id="name" placeholder="Al-Fhaigar Usman" name="name" class="form-control @error('name') is-invalid @enderror"/>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                            <div class="form-outline text-start">
                                <label for="email" class="col-form-label">Email</label>
                                <div class="input-group">
                                <div class="input-group-text"><i class="bi bi-envelope-fill"></i></div>
                                <input type="email" id="email" placeholder="rubickking04@gmail.com" name="email" class="form-control @error('email') is-invalid @enderror"/>
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
                                    <input id="password" type="password" placeholder="Must be 8-20 characters long." class="form-control @error('password') is-invalid @enderror" name="password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-outline text-start">
                                <label for="password-confirm" class="col-form-label">{{ __('Confirm Password') }}</label>
                                <div class="input-group">
                                    <span class="input-group-text" onclick="password_show_hides();">
                                        <i class="fas fa-eye" id="show_eyes"></i>
                                        <i class="fas fa-eye-slash d-none" id="hide_eyes"></i>
                                    </span>
                                    <input id="password-confirm" type="password" placeholder="Confirm your password"  class="form-control @error('password-confirm') is-invalid @enderror" name="password_confirmation" autocomplete="new-password">
                                </div>
                                @error('password-confirm')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class=" text-center btn btn-dark mb-2">Sign up</button>
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
                                <a href="https://www.facebook.com/alfhaigar.usman.1/"><span class="fs-3 bi bi-facebook px-3"></span></a>
                                <a href="https://github.com/rubickking04"><span class="fs-3 text-dark bi bi-github px-3"></span></a>
                                <a href="https://github.com/rubickking04"><span class="fs-3 text-danger bi bi-google px-3"></span></a>
                            </div>
                        </div>
                        <div class="text-center">
                            <p>Already have an account? <a href="{{ route('login') }}">Sign in</a></p>
                        </div>
                                {{-- @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif --}}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
