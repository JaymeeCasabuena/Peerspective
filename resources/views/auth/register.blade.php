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
                <h1 class="auth-header fw-bold mx-md-5 px-md-5 mb-4 mt-4 mt-md-0">Sign up</h1>

                <form method="POST" action="{{ route('register') }}" class="signup-form ms-md-5 px-md-5">
                    @csrf

                    <!-- Full Name -->
                    <div class="mb-1">
                        <x-bladewind::input name="name" required="true" placeholder="John T. Doe" prefix="user"
                            prefix_is_icon="true" :value="old('name')" autofocus />
                    </div>
                        @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror

                    <!-- Email Address -->
                    <div class="mb-1">
                        <x-bladewind::input name="email" required="true" placeholder="johndoe@griffithuni.edu.au"
                            prefix="envelope" prefix_is_icon="true" :value="old('email')" />
                    </div>
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                    <!-- sNumber and Password Inputs in a Row -->
                    <div class="d-flex gap-3">
                        <!-- sNumber Input -->
                        <x-bladewind::input name="sNumber" required="true" placeholder="sNumber" :value="old('sNumber')"
                            autofocus />

                        <!-- Password Input -->
                        <x-bladewind::input name="password" required="true" type="password" placeholder="Password"
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

                    <!-- Confirm Password -->
                    <div class="mb-3">
                        <x-bladewind::input name="password_confirmation" required="true" type="password"
                            placeholder="Confirm Password" prefix="key" prefix_is_icon="true" />
                        @error('password_confirmation')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Sign Up Button -->
                    <div class="mb-3 mt-5">
                        <button type="submit" value="Submit" class="btn w-100 text-uppercase">Sign up</button>
                    </div>

                    <!-- Already Registered Link -->
                    <div class="d-flex gap-3 mt-5 flex-row justify-content-start">
                        <p class="text-muted mt-5">Already have an account?</p>
                        <a href="{{ route('login') }}" class="mt-5 text-primary-emphasis text-decoration-none">Login</a>
                    </div>

                </form>
            </div>
        </div>

        <!-- Big Banner Section -->
        <div class="col-lg-6 col-md-6 d-none d-md-block p-0">
            <img src="{{ asset('assets/photos/banner2.png') }}" alt="Banner Image">
        </div>
    </div>
</div>
@endsection