@extends('admin.layouts.app')
@section('title', 'Create User')

@section('content')
<div class="row">
    <div class="col-xl-12">
         <div class="card">
              <div class="card-header d-flex justify-content-between align-items-center">
                   <h4 class="card-title">Create New User</h4>
                   <a href="{{ route('backend.users.index') }}" class="btn btn-light">
                        <iconify-icon icon="solar:arrow-left-bold-duotone" class="align-middle fs-18 me-1"></iconify-icon>
                        Back to List
                   </a>
              </div>
              <div class="card-body">
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

                   <form action="{{ route('backend.users.store') }}" method="POST">
                        @csrf
                        <div class="row">
                             <div class="col-md-8">
                                  <div class="mb-3">
                                       <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                                       <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                                  </div>

                                  <div class="mb-3">
                                       <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                       <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                                  </div>

                                  <div class="alert alert-info">
                                       <strong>Default Password:</strong> New users will be created with the default password <strong>VisaVai2025</strong>. They will be required to change it on their first login.
                                  </div>

                                  <div class="mb-3">
                                       <button type="submit" class="btn btn-primary">
                                            <iconify-icon icon="solar:check-circle-bold-duotone" class="align-middle fs-18 me-1"></iconify-icon>
                                            Create User
                                       </button>
                                       <a href="{{ route('backend.users.index') }}" class="btn btn-light ms-2">Cancel</a>
                                  </div>
                             </div>
                        </div>
                   </form>
              </div>
         </div>
    </div>
</div>
@endsection

