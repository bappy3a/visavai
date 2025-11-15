@extends('admin.layouts.auth')

@section('content')
<div class="row justify-content-center h-100">
    <div class="col-lg-6 py-lg-5">
         <div class="d-flex flex-column h-100 justify-content-center">
              <div class="auth-logo mb-4">
                   <a href="{{ route('home') }}" class="logo-dark">
                        <img src="{{ asset('assets/img/logo/logo.webp') }}" height="24" alt="logo dark">
                   </a>

                   <a href="{{ route('home') }}" class="logo-light">
                        <img src="{{ asset('assets/img/logo/logo.webp') }}" height="24" alt="logo light">
                   </a>
              </div>

              <h2 class="fw-bold fs-24">Sign In</h2>

              <p class="text-muted mt-1 mb-3">Enter your email address and password to access dashboard.</p>

              <div class="mb-2">
                   <form action="{{ route('login') }}" method="POST" class="authentication-form">
                        @csrf
                        <div class="mb-3">
                             <label class="form-label" for="example-email">Email</label>
                             <input value="{{ old('email') }}" name="email" type="email" id="example-email" name="example-email" class="form-control bg-" placeholder="Enter your email">
                             @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                             <label class="form-label" for="example-password">Password</label>
                             <input name="password" type="password" id="example-password" class="form-control" placeholder="Enter your password">
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-1 text-center d-grid">
                            <button class="btn btn-soft-primary" type="submit">Sign In</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection