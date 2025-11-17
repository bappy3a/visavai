@extends('admin.layouts.app')
@section('title', 'My Profile')

@section('content')
<div class="row">
    <div class="col-xl-12">
         <div class="card">
              <div class="card-header d-flex justify-content-between align-items-center">
                   <h4 class="card-title">My Profile</h4>
                   <a href="{{ route('backend.index') }}" class="btn btn-light">
                        <iconify-icon icon="solar:arrow-left-bold-duotone" class="align-middle fs-18 me-1"></iconify-icon>
                        Back to Dashboard
                   </a>
              </div>
              <div class="card-body">
                   @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                             {{ session('success') }}
                             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                   @endif

                   @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                             <ul class="mb-0">
                                  @foreach ($errors->all() as $error)
                                       <li>{{ $error }}</li>
                                  @endforeach
                             </ul>
                             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                   @endif

                   <form action="{{ route('backend.profile.update') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                             <div class="col-md-8">
                                  <div class="mb-3">
                                       <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                                       <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name) }}" required>
                                  </div>

                                  <div class="mb-3">
                                       <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                       <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $user->email) }}" required>
                                  </div>

                                  <div class="mb-3">
                                       <label for="password" class="form-label">Password <small class="text-muted">(Leave blank to keep current password)</small></label>
                                       <input type="password" class="form-control" id="password" name="password">
                                       <small class="text-muted">Only fill this if you want to change the password. Must be at least 8 characters long.</small>
                                  </div>

                                  <div class="mb-3">
                                       <label for="password_confirmation" class="form-label">Confirm Password</label>
                                       <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                                  </div>

                                  <div class="mb-3">
                                       <button type="submit" class="btn btn-primary">
                                            <iconify-icon icon="solar:check-circle-bold-duotone" class="align-middle fs-18 me-1"></iconify-icon>
                                            Update Profile
                                       </button>
                                       <a href="{{ route('backend.index') }}" class="btn btn-light ms-2">Cancel</a>
                                  </div>
                             </div>
                        </div>
                   </form>
              </div>
         </div>
    </div>
</div>
@endsection

