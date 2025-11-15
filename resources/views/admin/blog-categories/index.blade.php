@extends('admin.layouts.app')
@section('title', 'Blog Categories')

@section('content')
<div class="row">
    <div class="col-xl-12">
         <div class="card">
              <div class="d-flex card-header justify-content-between align-items-center">
                   <div>
                        <h4 class="card-title">All Blog Categories</h4>
                   </div>
                   <div>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createCategoryModal">
                             <iconify-icon icon="solar:add-circle-bold-duotone" class="align-middle fs-18 me-1"></iconify-icon>
                             Add Category
                        </button>
                   </div>
              </div>
              <div>
                   @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show m-3" role="alert">
                             {{ session('success') }}
                             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                   @endif

                   @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show m-3" role="alert">
                             <ul class="mb-0">
                                  @foreach ($errors->all() as $error)
                                       <li>{{ $error }}</li>
                                  @endforeach
                             </ul>
                             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                   @endif

                   <div class="table-responsive">
                        <table class="table align-middle mb-0 table-hover table-centered">
                             <thead class="bg-light-subtle">
                                  <tr>
                                       <th>ID</th>
                                       <th>Name</th>
                                       <th>Slug</th>
                                       <th>Description</th>
                                       <th>Status</th>
                                       <th>Created On</th>
                                       <th>Action</th>
                                  </tr>
                             </thead>
                             <tbody>
                                  @forelse ($categories as $category)
                                       <tr>
                                            <td>{{ $category->id }}</td>
                                            <td>
                                                 <h5 class="mb-0 fs-14">{{ $category->name }}</h5>
                                            </td>
                                            <td>
                                                 <span class="badge bg-soft-info text-info">{{ $category->slug }}</span>
                                            </td>
                                            <td>
                                                 <p class="mb-0 text-muted">{{ Str::limit($category->description, 50) }}</p>
                                            </td>
                                            <td>
                                                 <div class="form-check form-switch">
                                                      <input class="form-check-input status-toggle" type="checkbox" role="switch" 
                                                             data-id="{{ $category->id }}" 
                                                             {{ $category->is_active ? 'checked' : '' }}>
                                                 </div>
                                            </td>
                                            <td>{{ $category->created_at->format('d M Y') }}</td>
                                            <td>
                                                 <div class="d-flex gap-2">
                                                      <button type="button" class="btn btn-soft-primary btn-sm edit-category" 
                                                              data-id="{{ $category->id }}"
                                                              data-name="{{ $category->name }}"
                                                              data-slug="{{ $category->slug }}"
                                                              data-description="{{ $category->description }}"
                                                              data-is-active="{{ $category->is_active }}"
                                                              data-meta-title="{{ $category->meta_title }}"
                                                              data-meta-description="{{ $category->meta_description }}"
                                                              data-meta-keywords="{{ $category->meta_keywords }}"
                                                              data-meta-image="{{ $category->meta_image }}">
                                                           <iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon>
                                                      </button>
                                                      <form action="{{ route('admin.blog-categories.destroy', $category->id) }}" method="POST" class="d-inline delete-form">
                                                           @csrf
                                                           @method('DELETE')
                                                           <button type="submit" class="btn btn-soft-danger btn-sm" onclick="return confirm('Are you sure you want to delete this category?')">
                                                                <iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon>
                                                           </button>
                                                      </form>
                                                 </div>
                                            </td>
                                       </tr>
                                  @empty
                                       <tr>
                                            <td colspan="7" class="text-center py-4">
                                                 <p class="text-muted mb-0">No categories found. Create your first category!</p>
                                            </td>
                                       </tr>
                                  @endforelse
                             </tbody>
                        </table>
                   </div>
              </div>
              @if ($categories->hasPages())
                   <div class="card-footer border-top">
                        {{ $categories->links() }}
                   </div>
              @endif
         </div>
    </div>
</div>

<!-- Create Category Modal -->
<div class="modal fade" id="createCategoryModal" tabindex="-1" aria-labelledby="createCategoryModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-lg">
          <div class="modal-content">
               <div class="modal-header">
                    <h5 class="modal-title" id="createCategoryModalLabel">Create Blog Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <form action="{{ route('admin.blog-categories.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                         <div class="row">
                              <div class="col-md-12 mb-3">
                                   <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                                   <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                              </div>
                              <div class="col-md-12 mb-3">
                                   <label for="slug" class="form-label">Slug <small class="text-muted">(Auto-generated)</small></label>
                                   <div class="input-group">
                                        <input type="text" class="form-control" id="slug" name="slug" value="{{ old('slug') }}" placeholder="Auto-generated from name" readonly>
                                        <button class="btn btn-outline-secondary" type="button" id="editSlugBtn" title="Edit slug manually">
                                             <iconify-icon icon="solar:pen-2-broken"></iconify-icon>
                                        </button>
                                   </div>
                                   <small class="text-muted">Slug is automatically generated from the name. Click the edit icon to customize.</small>
                              </div>
                              <div class="col-md-12 mb-3">
                                   <label for="description" class="form-label">Description</label>
                                   <textarea class="form-control" id="description" name="description" rows="3">{{ old('description') }}</textarea>
                              </div>
                              <div class="col-md-12 mb-3">
                                   <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="is_active" name="is_active" value="1" {{ old('is_active', true) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="is_active">Active</label>
                                   </div>
                              </div>
                              <div class="col-12">
                                   <h6 class="mb-3">SEO Settings</h6>
                              </div>
                              <div class="col-md-12 mb-3">
                                   <label for="meta_title" class="form-label">Meta Title</label>
                                   <input type="text" class="form-control" id="meta_title" name="meta_title" value="{{ old('meta_title') }}">
                              </div>
                              <div class="col-md-12 mb-3">
                                   <label for="meta_description" class="form-label">Meta Description</label>
                                   <textarea class="form-control" id="meta_description" name="meta_description" rows="2">{{ old('meta_description') }}</textarea>
                              </div>
                              <div class="col-md-12 mb-3">
                                   <label for="meta_keywords" class="form-label">Meta Keywords</label>
                                   <input type="text" class="form-control" id="meta_keywords" name="meta_keywords" value="{{ old('meta_keywords') }}" placeholder="keyword1, keyword2, keyword3">
                              </div>
                              <div class="col-md-12 mb-3">
                                   <label for="meta_image" class="form-label">Meta Image URL</label>
                                   <input type="text" class="form-control" id="meta_image" name="meta_image" value="{{ old('meta_image') }}">
                              </div>
                         </div>
                    </div>
                    <div class="modal-footer">
                         <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                         <button type="submit" class="btn btn-primary">Create Category</button>
                    </div>
               </form>
          </div>
     </div>
</div>

<!-- Edit Category Modal -->
<div class="modal fade" id="editCategoryModal" tabindex="-1" aria-labelledby="editCategoryModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-lg">
          <div class="modal-content">
               <div class="modal-header">
                    <h5 class="modal-title" id="editCategoryModalLabel">Edit Blog Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <form id="editCategoryForm" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                         <div class="row">
                              <div class="col-md-12 mb-3">
                                   <label for="edit_name" class="form-label">Name <span class="text-danger">*</span></label>
                                   <input type="text" class="form-control" id="edit_name" name="name" required>
                              </div>
                              <div class="col-md-12 mb-3">
                                   <label for="edit_slug" class="form-label">Slug <small class="text-muted">(Auto-generated)</small></label>
                                   <div class="input-group">
                                        <input type="text" class="form-control" id="edit_slug" name="slug" placeholder="Auto-generated from name" readonly>
                                        <button class="btn btn-outline-secondary" type="button" id="editSlugBtnEdit" title="Edit slug manually">
                                             <iconify-icon icon="solar:pen-2-broken"></iconify-icon>
                                        </button>
                                   </div>
                                   <small class="text-muted">Slug is automatically generated from the name. Click the edit icon to customize.</small>
                              </div>
                              <div class="col-md-12 mb-3">
                                   <label for="edit_description" class="form-label">Description</label>
                                   <textarea class="form-control" id="edit_description" name="description" rows="3"></textarea>
                              </div>
                              <div class="col-md-12 mb-3">
                                   <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="edit_is_active" name="is_active" value="1">
                                        <label class="form-check-label" for="edit_is_active">Active</label>
                                   </div>
                              </div>
                              <div class="col-12">
                                   <h6 class="mb-3">SEO Settings</h6>
                              </div>
                              <div class="col-md-12 mb-3">
                                   <label for="edit_meta_title" class="form-label">Meta Title</label>
                                   <input type="text" class="form-control" id="edit_meta_title" name="meta_title">
                              </div>
                              <div class="col-md-12 mb-3">
                                   <label for="edit_meta_description" class="form-label">Meta Description</label>
                                   <textarea class="form-control" id="edit_meta_description" name="meta_description" rows="2"></textarea>
                              </div>
                              <div class="col-md-12 mb-3">
                                   <label for="edit_meta_keywords" class="form-label">Meta Keywords</label>
                                   <input type="text" class="form-control" id="edit_meta_keywords" name="meta_keywords" placeholder="keyword1, keyword2, keyword3">
                              </div>
                              <div class="col-md-12 mb-3">
                                   <label for="edit_meta_image" class="form-label">Meta Image URL</label>
                                   <input type="text" class="form-control" id="edit_meta_image" name="meta_image">
                              </div>
                         </div>
                    </div>
                    <div class="modal-footer">
                         <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                         <button type="submit" class="btn btn-primary">Update Category</button>
                    </div>
               </form>
          </div>
     </div>
</div>

@push('scripts')
<script>
     // Function to generate slug from text
     function generateSlug(text) {
          return text.toLowerCase()
               .trim()
               .replace(/[^\w\s-]/g, '') // Remove special characters
               .replace(/[\s_]+/g, '-') // Replace spaces and underscores with hyphens
               .replace(/-+/g, '-') // Replace multiple hyphens with single hyphen
               .replace(/^-+|-+$/g, ''); // Remove leading/trailing hyphens
     }

     // Auto-generate slug from name (Create Modal)
     const nameInput = document.getElementById('name');
     const slugInput = document.getElementById('slug');
     const editSlugBtn = document.getElementById('editSlugBtn');
     let slugEditable = false;

     if (nameInput && slugInput) {
          nameInput.addEventListener('input', function() {
               if (!slugEditable) {
                    slugInput.value = generateSlug(this.value);
               }
          });

          // Toggle slug editability
          if (editSlugBtn) {
               editSlugBtn.addEventListener('click', function() {
                    if (!slugEditable) {
                         slugInput.removeAttribute('readonly');
                         slugEditable = true;
                         this.innerHTML = '<iconify-icon icon="solar:check-circle-bold-duotone"></iconify-icon>';
                         this.classList.remove('btn-outline-secondary');
                         this.classList.add('btn-outline-success');
                    } else {
                         slugInput.setAttribute('readonly', 'readonly');
                         slugEditable = false;
                         this.innerHTML = '<iconify-icon icon="solar:pen-2-broken"></iconify-icon>';
                         this.classList.remove('btn-outline-success');
                         this.classList.add('btn-outline-secondary');
                         // Regenerate from name if empty
                         if (!slugInput.value) {
                              slugInput.value = generateSlug(nameInput.value);
                         }
                    }
               });
          }

          // Reset slug editability when modal is closed
          const createModal = document.getElementById('createCategoryModal');
          if (createModal) {
               createModal.addEventListener('hidden.bs.modal', function() {
                    slugEditable = false;
                    slugInput.setAttribute('readonly', 'readonly');
                    if (editSlugBtn) {
                         editSlugBtn.innerHTML = '<iconify-icon icon="solar:pen-2-broken"></iconify-icon>';
                         editSlugBtn.classList.remove('btn-outline-success');
                         editSlugBtn.classList.add('btn-outline-secondary');
                    }
               });
          }
     }

     // Auto-generate slug from name (Edit Modal)
     const editNameInput = document.getElementById('edit_name');
     const editSlugInput = document.getElementById('edit_slug');
     const editSlugBtnEdit = document.getElementById('editSlugBtnEdit');
     let editSlugEditable = false;

     if (editNameInput && editSlugInput) {
          editNameInput.addEventListener('input', function() {
               if (!editSlugEditable) {
                    editSlugInput.value = generateSlug(this.value);
               }
          });

          // Toggle slug editability for edit modal
          if (editSlugBtnEdit) {
               editSlugBtnEdit.addEventListener('click', function() {
                    if (!editSlugEditable) {
                         editSlugInput.removeAttribute('readonly');
                         editSlugEditable = true;
                         this.innerHTML = '<iconify-icon icon="solar:check-circle-bold-duotone"></iconify-icon>';
                         this.classList.remove('btn-outline-secondary');
                         this.classList.add('btn-outline-success');
                    } else {
                         editSlugInput.setAttribute('readonly', 'readonly');
                         editSlugEditable = false;
                         this.innerHTML = '<iconify-icon icon="solar:pen-2-broken"></iconify-icon>';
                         this.classList.remove('btn-outline-success');
                         this.classList.add('btn-outline-secondary');
                         // Regenerate from name if empty
                         if (!editSlugInput.value) {
                              editSlugInput.value = generateSlug(editNameInput.value);
                         }
                    }
               });
          }

          // Reset slug editability when edit modal is closed
          const editModal = document.getElementById('editCategoryModal');
          if (editModal) {
               editModal.addEventListener('hidden.bs.modal', function() {
                    editSlugEditable = false;
                    editSlugInput.setAttribute('readonly', 'readonly');
                    if (editSlugBtnEdit) {
                         editSlugBtnEdit.innerHTML = '<iconify-icon icon="solar:pen-2-broken"></iconify-icon>';
                         editSlugBtnEdit.classList.remove('btn-outline-success');
                         editSlugBtnEdit.classList.add('btn-outline-secondary');
                    }
               });
          }
     }

     // Edit category modal
     document.querySelectorAll('.edit-category').forEach(button => {
          button.addEventListener('click', function() {
               const id = this.getAttribute('data-id');
               const name = this.getAttribute('data-name');
               const slug = this.getAttribute('data-slug');
               const description = this.getAttribute('data-description');
               const isActive = this.getAttribute('data-is-active') === '1';
               const metaTitle = this.getAttribute('data-meta-title');
               const metaDescription = this.getAttribute('data-meta-description');
               const metaKeywords = this.getAttribute('data-meta-keywords');
               const metaImage = this.getAttribute('data-meta-image');

               document.getElementById('editCategoryForm').action = `{{ url('admin/blog-categories') }}/${id}`;
               document.getElementById('edit_name').value = name;
               document.getElementById('edit_slug').value = slug;
               document.getElementById('edit_description').value = description || '';
               document.getElementById('edit_is_active').checked = isActive;
               document.getElementById('edit_meta_title').value = metaTitle || '';
               document.getElementById('edit_meta_description').value = metaDescription || '';
               document.getElementById('edit_meta_keywords').value = metaKeywords || '';
               document.getElementById('edit_meta_image').value = metaImage || '';

               // Reset slug editability when opening edit modal
               editSlugEditable = false;
               if (editSlugInput) {
                    editSlugInput.setAttribute('readonly', 'readonly');
               }
               if (editSlugBtnEdit) {
                    editSlugBtnEdit.innerHTML = '<iconify-icon icon="solar:pen-2-broken"></iconify-icon>';
                    editSlugBtnEdit.classList.remove('btn-outline-success');
                    editSlugBtnEdit.classList.add('btn-outline-secondary');
               }

               new bootstrap.Modal(document.getElementById('editCategoryModal')).show();
          });
     });
</script>
@endpush
@endsection