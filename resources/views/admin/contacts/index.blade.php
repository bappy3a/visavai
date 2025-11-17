@extends('admin.layouts.app')
@section('title', 'Contact Messages')

@section('content')
<div class="row">
    <div class="col-xl-12">
         <div class="card">
              <div class="d-flex card-header justify-content-between align-items-center">
                   <div>
                        <h4 class="card-title">All Contact Messages</h4>
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
                                       <th>Name</th>
                                       <th>Email/Mobile</th>
                                       <th>Verification Type</th>
                                       <th>Message</th>
                                       <th>Files</th>
                                       <th>Created At</th>
                                       <th>Action</th>
                                  </tr>
                             </thead>
                             <tbody>
                                  @forelse ($contacts as $contact)
                                       <tr>
                                            <td>{{ $contact->id }}</td>
                                            <td>
                                                 <h5 class="mb-0 fs-14">{{ $contact->name }}</h5>
                                            </td>
                                            <td>
                                                 <span class="text-muted">{{ Str::limit($contact->email, 30) }}</span>
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
                                                 <span class="text-muted">{{ Str::limit($contact->message, 50) }}</span>
                                            </td>
                                            <td>
                                                 @if($contact->files && count($contact->files) > 0)
                                                      <span class="badge bg-soft-info text-info">{{ count($contact->files) }} file(s)</span>
                                                 @else
                                                      <span class="text-muted">-</span>
                                                 @endif
                                            </td>
                                            <td>{{ $contact->created_at->format('d M Y, h:i A') }}</td>
                                            <td>
                                                 <div class="d-flex gap-2">
                                                      <a href="{{ route('backend.contacts.show', $contact->id) }}" class="btn btn-soft-primary btn-sm">
                                                           <iconify-icon icon="solar:eye-bold-duotone" class="align-middle fs-18"></iconify-icon>
                                                      </a>
                                                      <form action="{{ route('backend.contacts.destroy', $contact->id) }}" method="POST" class="d-inline">
                                                           @csrf
                                                           @method('DELETE')
                                                           <button type="submit" class="btn btn-soft-danger btn-sm" onclick="return confirm('Are you sure you want to delete this contact message?')">
                                                                <iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon>
                                                           </button>
                                                      </form>
                                                 </div>
                                            </td>
                                       </tr>
                                  @empty
                                       <tr>
                                            <td colspan="8" class="text-center py-4">
                                                 <p class="text-muted mb-0">No contact messages found.</p>
                                            </td>
                                       </tr>
                                  @endforelse
                             </tbody>
                        </table>
                   </div>
              </div>
              @if ($contacts->hasPages())
                   <div class="card-footer border-top">
                        {{ $contacts->links() }}
                   </div>
              @endif
         </div>
    </div>
</div>
@endsection

