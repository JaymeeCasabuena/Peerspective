@extends('layouts.guest')

@section('title')
Auth
@endsection

@section('content')

<div class="container-fluid">
    <div class="row align-items-center justify-content-between bg-body-tertiary">
        <!-- Small Banner Section -->
        <div class="d-md-none col-sm-12">
            <img src="{{ asset('assets/photos/small_banner.png') }}" alt="Banner Image">
        </div>

        <!-- Form Section -->
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="d-flex flex-column align-items-start">

                <h1 class="auth-header fw-bold mx-md-5 px-md-5 mt-4 mt-md-0">Log in</h1>
                <p class="text-muted mx-md-5 px-md-5 mb-5">Enter your account details</p>

                <form method="POST" action="{{ route('login') }}" class="login-form ms-md-5 px-md-5">
                    @csrf

                    <!-- sNumber and Password Inputs in a Row -->
                    <div class="d-flex gap-3">
                        <!-- sNumber Input -->
                        <x-bladewind::input name="sNumber" placeholder="sNumber" :value="old('sNumber')"
                            autofocus />

                        <!-- Password Input -->
                        <x-bladewind::input name="password" type="password" placeholder="Password"
                            prefix="key" prefix_is_icon="true" prefix_icon_css="text-orange-500" viewable="true" />
                    </div>
                    <div class="d-flex gap-3">
                        @error('sNumber')
                            <p class="text-danger mb-4">{{ $message }}</p>
                        @enderror

                        @error('password')
                            <p class="text-danger mb-4">{{ $message }}</p>
                        @enderror
                    </div>
                    <!-- Remember Me -->
                    <div class="form-check p-0">
                        <label for="remember_me" class="text-muted subtext">
                            <x-bladewind::checkbox label="Remember me" checked="false" />
                        </label>
                    </div>

                    <!-- Login Button -->
                    <div class="mb-3 mt-5">
                        <button type="submit" value="Submit" class="btn w-100 text-uppercase">Login</button>
                    </div>

                    <!-- Forgot Password Link -->
                    <div class="mb-3">
                        @if (Route::has('password.request'))
                            <a class="text-decoration-none text-muted subtext" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                    </div>

                    <!-- Create Account Link -->
                    <div class="d-flex gap-3 mt-5 flex-row justify-content-start">
                        <p class="text-muted mt-5">Don't have an account?</p>
                        <a href="{{ route('register') }}" class="mt-5 text-primary-emphasis text-decoration-none">Create</a>
                    </div>
                </form>

            </div>
        </div>

        <!-- Big Banner Section -->
        <div class="col-lg-6 col-md-6 d-none d-md-block p-0">
            <img src="{{ asset('assets/photos/banner.png') }}" alt="Banner Image">
        </div>
    </div>
</div>
@endsection