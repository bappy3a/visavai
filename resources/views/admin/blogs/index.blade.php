@extends('admin.layouts.app')
@section('title', 'Blogs')

@section('content')
<div class="row">
    <div class="col-xl-12">
         <div class="card">
              <div class="d-flex card-header justify-content-between align-items-center">
                   <div>
                        <h4 class="card-title">All Blogs</h4>
                   </div>
                   <div>
                        <a href="{{ route('backend.blogs.create') }}" class="btn btn-primary">
                             <iconify-icon icon="solar:add-circle-bold-duotone" class="align-middle fs-18 me-1"></iconify-icon>
                             Add Blog
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

                   <div class="table-responsive">
                        <table class="table align-middle mb-0 table-hover table-centered">
                             <thead class="bg-light-subtle">
                                  <tr>
                                       <th>ID</th>
                                       <th>Title</th>
                                       <th>Category</th>
                                       <th>Status</th>
                                       <th>Featured</th>
                                       <th>Views</th>
                                       <th>Published At</th>
                                       <th>Created On</th>
                                       <th>Action</th>
                                  </tr>
                             </thead>
                             <tbody>
                                  @forelse ($blogs as $blog)
                                       <tr>
                                            <td>{{ $blog->id }}</td>
                                            <td>
                                                 <h5 class="mb-0 fs-14">{{ Str::limit($blog->title, 50) }}</h5>
                                                 <small class="text-muted">{{ Str::limit($blog->slug, 40) }}</small>
                                            </td>
                                            <td>
                                                 <span class="badge bg-soft-info text-info">{{ $blog->category->name ?? 'N/A' }}</span>
                                            </td>
                                            <td>
                                                 @if($blog->status == 'published')
                                                      <span class="badge bg-success">Published</span>
                                                 @elseif($blog->status == 'draft')
                                                      <span class="badge bg-warning">Draft</span>
                                                 @else
                                                      <span class="badge bg-secondary">Archived</span>
                                                 @endif
                                            </td>
                                            <td>
                                                 @if($blog->is_featured)
                                                      <span class="badge bg-primary">Featured</span>
                                                 @else
                                                      <span class="text-muted">-</span>
                                                 @endif
                                            </td>
                                            <td>
                                                 <span class="badge bg-soft-info text-info">{{ $blog->views }}</span>
                                            </td>
                                            <td>
                                                 @if($blog->published_at)
                                                      {{ $blog->published_at->format('d M Y') }}
                                                 @else
                                                      <span class="text-muted">-</span>
                                                 @endif
                                            </td>
                                            <td>{{ $blog->created_at->format('d M Y') }}</td>
                                            <td>
                                                 <div class="d-flex gap-2">
                                                      <a href="{{ route('backend.blogs.edit', $blog->id) }}" class="btn btn-soft-primary btn-sm">
                                                           <iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon>
                                                      </a>
                                                      <form action="{{ route('backend.blogs.destroy', $blog->id) }}" method="POST" class="d-inline">
                                                           @csrf
                                                           @method('DELETE')
                                                           <button type="submit" class="btn btn-soft-danger btn-sm" onclick="return confirm('Are you sure you want to delete this blog?')">
                                                                <iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon>
                                                           </button>
                                                      </form>
                                                 </div>
                                            </td>
                                       </tr>
                                  @empty
                                       <tr>
                                            <td colspan="9" class="text-center py-4">
                                                 <p class="text-muted mb-0">No blogs found. Create your first blog!</p>
                                            </td>
                                       </tr>
                                  @endforelse
                             </tbody>
                        </table>
                   </div>
              </div>
              @if ($blogs->hasPages())
                   <div class="card-footer border-top">
                        {{ $blogs->links() }}
                   </div>
              @endif
         </div>
    </div>
</div>
@endsection

