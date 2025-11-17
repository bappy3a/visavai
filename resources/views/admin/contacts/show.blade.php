@extends('admin.layouts.app')
@section('title', 'Contact Message Details')

@section('content')
<div class="row">
    <div class="col-xl-12">
         <div class="card">
              <div class="d-flex card-header justify-content-between align-items-center">
                   <div>
                        <h4 class="card-title">Contact Message Details</h4>
                   </div>
                   <div>
                        <a href="{{ route('backend.contacts.index') }}" class="btn btn-soft-secondary">
                             <iconify-icon icon="solar:arrow-left-bold-duotone" class="align-middle fs-18 me-1"></iconify-icon>
                             Back to List
                        </a>
                   </div>
              </div>
              <div class="card-body">
                   <div class="row">
                        <div class="col-md-6 mb-3">
                             <label class="form-label fw-semibold">Name</label>
                             <p class="mb-0">{{ $contact->name }}</p>
                        </div>
                        <div class="col-md-6 mb-3">
                             <label class="form-label fw-semibold">Email/Mobile</label>
                             <p class="mb-0">{{ $contact->email }}</p>
                        </div>
                        <div class="col-md-6 mb-3">
                             <label class="form-label fw-semibold">Verification Type</label>
                             <p class="mb-0">
                                  @if($contact->verification_type == 'visa')
                                       <span class="badge bg-primary">Visa</span>
                                  @elseif($contact->verification_type == 'air_ticket')
                                       <span class="badge bg-info">Air Ticket</span>
                                  @elseif($contact->verification_type == 'offer_letter')
                                       <span class="badge bg-success">Offer Letter</span>
                                  @else
                                       <span class="badge bg-secondary">{{ $contact->verification_type }}</span>
                                  @endif
                             </p>
                        </div>
                        <div class="col-md-6 mb-3">
                             <label class="form-label fw-semibold">Submitted At</label>
                             <p class="mb-0">{{ $contact->created_at->format('d M Y, h:i A') }}</p>
                        </div>
                        <div class="col-12 mb-3">
                             <label class="form-label fw-semibold">Message / Document Number</label>
                             <div class="border rounded p-3 bg-light">
                                  <p class="mb-0">{{ $contact->message }}</p>
                             </div>
                        </div>
                        @if($contact->files && count($contact->files) > 0)
                             <div class="col-12 mb-3">
                                  <label class="form-label fw-semibold">Uploaded Files ({{ count($contact->files) }})</label>
                                  <div class="border rounded p-3 bg-light">
                                       <div class="d-flex flex-wrap gap-2">
                                            @foreach($contact->files as $file)
                                                 <div class="border rounded p-2 bg-white">
                                                      <div class="d-flex align-items-center gap-2">
                                                           <iconify-icon icon="solar:file-bold-duotone" class="fs-20 text-primary"></iconify-icon>
                                                           <div>
                                                                <a href="{{ asset('storage/' . $file) }}" target="_blank" class="text-decoration-none">
                                                                     <small class="d-block fw-medium">{{ basename($file) }}</small>
                                                                </a>
                                                                <a href="{{ asset('storage/' . $file) }}" target="_blank" class="btn btn-soft-primary btn-sm mt-1">
                                                                     <iconify-icon icon="solar:download-bold-duotone" class="align-middle fs-14 me-1"></iconify-icon>
                                                                     Download
                                                                </a>
                                                           </div>
                                                      </div>
                                                 </div>
                                            @endforeach
                                       </div>
                                  </div>
                             </div>
                        @endif
                   </div>
              </div>
              <div class="card-footer border-top">
                   <form action="{{ route('backend.contacts.destroy', $contact->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this contact message?')">
                             <iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18 me-1"></iconify-icon>
                             Delete Message
                        </button>
                   </form>
              </div>
         </div>
    </div>
</div>
@endsection

