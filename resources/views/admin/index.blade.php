@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="row">
    <!-- Statistics Cards -->
    <div class="col-xl-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                        <div class="avatar-sm bg-primary bg-soft rounded">
                            <span class="avatar-title bg-primary rounded-circle">
                                <iconify-icon icon="solar:users-group-rounded-bold-duotone" class="align-middle fs-24 text-white"></iconify-icon>
                            </span>
                        </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <p class="text-uppercase fw-medium text-muted mb-0">Total Users</p>
                        <h4 class="mb-0 mt-1">{{ $stats['total_users'] }}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                        <div class="avatar-sm bg-success bg-soft rounded">
                            <span class="avatar-title bg-success rounded-circle">
                                <iconify-icon icon="solar:document-text-bold-duotone" class="align-middle fs-24 text-white"></iconify-icon>
                            </span>
                        </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <p class="text-uppercase fw-medium text-muted mb-0">Total Blogs</p>
                        <h4 class="mb-0 mt-1">{{ $stats['total_blogs'] }}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                        <div class="avatar-sm bg-info bg-soft rounded">
                            <span class="avatar-title bg-info rounded-circle">
                                <iconify-icon icon="solar:folder-bold-duotone" class="align-middle fs-24 text-white"></iconify-icon>
                            </span>
                        </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <p class="text-uppercase fw-medium text-muted mb-0">Categories</p>
                        <h4 class="mb-0 mt-1">{{ $stats['total_categories'] }}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                        <div class="avatar-sm bg-warning bg-soft rounded">
                            <span class="avatar-title bg-warning rounded-circle">
                                <iconify-icon icon="solar:letter-bold-duotone" class="align-middle fs-24 text-white"></iconify-icon>
                            </span>
                        </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <p class="text-uppercase fw-medium text-muted mb-0">Contact Messages</p>
                        <h4 class="mb-0 mt-1">{{ $stats['total_contacts'] }}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <!-- Blog Statistics -->
    <div class="col-xl-4 col-md-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Blog Statistics</h4>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div>
                        <p class="text-muted mb-1">Published</p>
                        <h5 class="mb-0">{{ $stats['published_blogs'] }}</h5>
                    </div>
                    <div class="avatar-sm bg-success bg-soft rounded">
                        <span class="avatar-title bg-success rounded-circle">
                            <iconify-icon icon="solar:check-circle-bold-duotone" class="align-middle fs-18 text-white"></iconify-icon>
                        </span>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div>
                        <p class="text-muted mb-1">Drafts</p>
                        <h5 class="mb-0">{{ $stats['draft_blogs'] }}</h5>
                    </div>
                    <div class="avatar-sm bg-warning bg-soft rounded">
                        <span class="avatar-title bg-warning rounded-circle">
                            <iconify-icon icon="solar:file-text-bold-duotone" class="align-middle fs-18 text-white"></iconify-icon>
                        </span>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <p class="text-muted mb-1">Featured</p>
                        <h5 class="mb-0">{{ $stats['featured_blogs'] }}</h5>
                    </div>
                    <div class="avatar-sm bg-primary bg-soft rounded">
                        <span class="avatar-title bg-primary rounded-circle">
                            <iconify-icon icon="solar:star-bold-duotone" class="align-middle fs-18 text-white"></iconify-icon>
                        </span>
                    </div>
                </div>
                <hr>
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <p class="text-muted mb-1">Total Views</p>
                        <h5 class="mb-0">{{ number_format($stats['total_views']) }}</h5>
                    </div>
                    <div class="avatar-sm bg-info bg-soft rounded">
                        <span class="avatar-title bg-info rounded-circle">
                            <iconify-icon icon="solar:eye-bold-duotone" class="align-middle fs-18 text-white"></iconify-icon>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Statistics -->
    <div class="col-xl-4 col-md-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Contact Statistics</h4>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div>
                        <p class="text-muted mb-1">Today</p>
                        <h5 class="mb-0">{{ $stats['contacts_today'] }}</h5>
                    </div>
                    <div class="avatar-sm bg-primary bg-soft rounded">
                        <span class="avatar-title bg-primary rounded-circle">
                            <iconify-icon icon="solar:calendar-bold-duotone" class="align-middle fs-18 text-white"></iconify-icon>
                        </span>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div>
                        <p class="text-muted mb-1">This Week</p>
                        <h5 class="mb-0">{{ $stats['contacts_this_week'] }}</h5>
                    </div>
                    <div class="avatar-sm bg-info bg-soft rounded">
                        <span class="avatar-title bg-info rounded-circle">
                            <iconify-icon icon="solar:calendar-mark-bold-duotone" class="align-middle fs-18 text-white"></iconify-icon>
                        </span>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <p class="text-muted mb-1">This Month</p>
                        <h5 class="mb-0">{{ $stats['contacts_this_month'] }}</h5>
                    </div>
                    <div class="avatar-sm bg-success bg-soft rounded">
                        <span class="avatar-title bg-success rounded-circle">
                            <iconify-icon icon="solar:calendar-date-bold-duotone" class="align-middle fs-18 text-white"></iconify-icon>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="col-xl-4 col-md-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Quick Actions</h4>
            </div>
            <div class="card-body">
                <div class="d-grid gap-2">
                    <a href="{{ route('backend.blogs.create') }}" class="btn btn-primary">
                        <iconify-icon icon="solar:add-circle-bold-duotone" class="align-middle fs-18 me-1"></iconify-icon>
                        Create New Blog
                    </a>
                    <a href="{{ route('backend.blog-categories.create') }}" class="btn btn-soft-primary">
                        <iconify-icon icon="solar:folder-add-bold-duotone" class="align-middle fs-18 me-1"></iconify-icon>
                        Add Category
                    </a>
                    <a href="{{ route('backend.users.create') }}" class="btn btn-soft-primary">
                        <iconify-icon icon="solar:user-plus-bold-duotone" class="align-middle fs-18 me-1"></iconify-icon>
                        Add User
                    </a>
                    <a href="{{ route('backend.contacts.index') }}" class="btn btn-soft-info">
                        <iconify-icon icon="solar:letter-bold-duotone" class="align-middle fs-18 me-1"></iconify-icon>
                        View Messages
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <!-- Recent Contacts -->
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title">Recent Contact Messages</h4>
                <a href="{{ route('backend.contacts.index') }}" class="btn btn-soft-primary btn-sm">
                    View All
                    <iconify-icon icon="solar:arrow-right-bold-duotone" class="align-middle fs-18 ms-1"></iconify-icon>
                </a>
            </div>
            <div class="card-body">
                @if($stats['recent_contacts']->count() > 0)
                    <div class="table-responsive">
                        <table class="table table-sm table-hover mb-0">
                            <thead class="bg-light-subtle">
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Type</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($stats['recent_contacts'] as $contact)
                                    <tr>
                                        <td>
                                            <h6 class="mb-0 fs-14">{{ $contact->name }}</h6>
                                        </td>
                                        <td>
                                            <span class="text-muted">{{ Str::limit($contact->email, 25) }}</span>
                                        </td>
                                        <td>
                                            @if($contact->verification_type == 'visa')
                                                <span class="badge bg-primary">Visa</span>
                                            @elseif($contact->verification_type == 'air_ticket')
                                                <span class="badge bg-info">Air Ticket</span>
                                            @elseif($contact->verification_type == 'offer_letter')
                                                <span class="badge bg-success">Offer Letter</span>
                                            @else
                                                <span class="badge bg-secondary">{{ $contact->verification_type }}</span>
                                            @endif
                                        </td>
                                        <td>
                                            <small class="text-muted">{{ $contact->created_at->format('d M Y') }}</small>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <div class="text-center py-4">
                        <p class="text-muted mb-0">No recent contact messages.</p>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <!-- Recent Blogs -->
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title">Recent Blogs</h4>
                <a href="{{ route('backend.blogs.index') }}" class="btn btn-soft-primary btn-sm">
                    View All
                    <iconify-icon icon="solar:arrow-right-bold-duotone" class="align-middle fs-18 ms-1"></iconify-icon>
                </a>
            </div>
            <div class="card-body">
                @if($stats['recent_blogs']->count() > 0)
                    <div class="table-responsive">
                        <table class="table table-sm table-hover mb-0">
                            <thead class="bg-light-subtle">
                                <tr>
                                    <th>Title</th>
                                    <th>Status</th>
                                    <th>Views</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($stats['recent_blogs'] as $blog)
                                    <tr>
                                        <td>
                                            <h6 class="mb-0 fs-14">{{ Str::limit($blog->title, 30) }}</h6>
                                        </td>
                                        <td>
                                            @if($blog->status == 'published')
                                                <span class="badge bg-success">Published</span>
                                            @else
                                                <span class="badge bg-warning">Draft</span>
                                            @endif
                                        </td>
                                        <td>
                                            <span class="text-muted">{{ number_format($blog->views ?? 0) }}</span>
                                        </td>
                                        <td>
                                            <small class="text-muted">{{ $blog->created_at->format('d M Y') }}</small>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <div class="text-center py-4">
                        <p class="text-muted mb-0">No blogs found. Create your first blog!</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
