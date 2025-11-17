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

              <h2 class="fw-bold fs-24">Change Password</h2>

              <p class="text-muted mt-1 mb-3">You are using the default password. Please change it to continue.</p>

              @if (session('success'))
                   <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                   </div>
              @endif

              <div class="mb-2">
                   <form action="{{ route('password.update') }}" method="POST" class="authentication-form">
                        @csrf
                        <div class="mb-3">
                             <label class="form-label" for="password">New Password</label>
                             <input name="password" type="password" id="password" class="form-control" placeholder="Enter your new password" required>
                             @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                             <label class="form-label" for="password_confirmation">Confirm New Password</label>
                             <input name="password_confirmation" type="password" id="password_confirmation" class="form-control" placeholder="Confirm your new password" required>
                        </div>

                        <div class="mb-1 text-center d-grid">
                            <button class="btn btn-soft-primary" type="submit">Change Password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

