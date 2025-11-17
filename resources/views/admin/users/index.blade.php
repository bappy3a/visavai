@extends('admin.layouts.app')
@section('title', 'Users')

@section('content')
<div class="row">
    <div class="col-xl-12">
         <div class="card">
              <div class="d-flex card-header justify-content-between align-items-center">
                   <div>
                        <h4 class="card-title">All Users</h4>
                   </div>
                   <div>
                        <a href="{{ route('backend.users.create') }}" class="btn btn-primary">
                             <iconify-icon icon="solar:add-circle-bold-duotone" class="align-middle fs-18 me-1"></iconify-icon>
                             Add User
                        </a>
                   </div>
              </div>
              <div>
                   @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show m-3" role="alert">
                             {{ session('success') }}
                             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                   @endif

                   @if (session('error'))
                        <div class="alert alert-danger alert-dismissible fade show m-3" role="alert">
                             {{ session('error') }}
                             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                   @endif

                   <div class="table-responsive">
                        <table class="table align-middle mb-0 table-hover table-centered">
                             <thead class="bg-light-subtle">
                                  <tr>
                                       <th>ID</th>
                                       <th>Name</th>
                                       <th>Email</th>
                                       <th>Email Verified</th>
                                       <th>Created At</th>
                                       <th>Action</th>
                                  </tr>
                             </thead>
                             <tbody>
                                  @forelse ($users as $user)
                                       <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>
                                                 <h5 class="mb-0 fs-14">{{ $user->name }}</h5>
                                            </td>
                                            <td>
                                                 <span class="text-muted">{{ $user->email }}</span>
                                            </td>
                                            <td>
                                                 @if($user->email_verified_at)
                                                      <span class="badge bg-success">Verified</span>
                                                 @else
                                                      <span class="badge bg-warning">Not Verified</span>
                                                 @endif
                                            </td>
                                            <td>{{ $user->created_at->format('d M Y, h:i A') }}</td>
                                            <td>
                                                 <div class="d-flex gap-2">
                                                      <a href="{{ route('backend.users.edit', $user->id) }}" class="btn btn-soft-primary btn-sm">
                                                           <iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon>
                                                      </a>
                                                      @if($user->id !== auth()->id())
                                                           <form action="{{ route('backend.users.destroy', $user->id) }}" method="POST" class="d-inline">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-soft-danger btn-sm" onclick="return confirm('Are you sure you want to delete this user?')">
                                                                     <iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon>
                                                                </button>
                                                           </form>
                                                      @else
                                                           <button class="btn btn-soft-secondary btn-sm" disabled title="Cannot delete your own account">
                                                                <iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon>
                                                           </button>
                                                      @endif
                                                 </div>
                                            </td>
                                       </tr>
                                  @empty
                                       <tr>
                                            <td colspan="6" class="text-center py-4">
                                                 <p class="text-muted mb-0">No users found. Create your first user!</p>
                                            </td>
                                       </tr>
                                  @endforelse
                             </tbody>
                        </table>
                   </div>
              </div>
              @if ($users->hasPages())
                   <div class="card-footer border-top">
                        {{ $users->links() }}
                   </div>
              @endif
         </div>
    </div>
</div>
@endsection

