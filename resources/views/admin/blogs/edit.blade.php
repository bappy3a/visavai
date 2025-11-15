@extends('admin.layouts.app')
@section('title', 'Edit Blog')

@section('content')
<div class="row">
    <div class="col-xl-12">
         <div class="card">
              <div class="card-header d-flex justify-content-between align-items-center">
                   <h4 class="card-title">Edit Blog</h4>
                   <a href="{{ route('admin.blogs.index') }}" class="btn btn-light">
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

                   <form action="{{ route('admin.blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                             <!-- Left Column -->
                             <div class="col-xl-8">
                                  <!-- General Information -->
                                  <div class="card mb-3">
                                       <div class="card-header">
                                            <h5 class="card-title mb-0">General Information</h5>
                                       </div>
                                       <div class="card-body">
                                            <div class="mb-3">
                                                 <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
                                                 <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $blog->title) }}" required>
                                            </div>
                                            <div class="mb-3">
                                                 <label for="slug" class="form-label">Slug <small class="text-muted">(Auto-generated)</small></label>
                                                 <div class="input-group">
                                                      <input type="text" class="form-control" id="slug" name="slug" value="{{ old('slug', $blog->slug) }}" placeholder="Auto-generated from title" readonly>
                                                      <button class="btn btn-outline-secondary" type="button" id="editSlugBtn" title="Edit slug manually">
                                                           <iconify-icon icon="solar:pen-2-broken"></iconify-icon>
                                                      </button>
                                                 </div>
                                                 <small class="text-muted">Slug is automatically generated from the title. Click the edit icon to customize.</small>
                                            </div>
                                            <div class="mb-3">
                                                 <label for="blog_category_id" class="form-label">Category <span class="text-danger">*</span></label>
                                                 <select class="form-select" id="blog_category_id" name="blog_category_id" required>
                                                      <option value="">Select Category</option>
                                                      @foreach ($categories as $category)
                                                           <option value="{{ $category->id }}" {{ old('blog_category_id', $blog->blog_category_id) == $category->id ? 'selected' : '' }}>
                                                                {{ $category->name }}
                                                           </option>
                                                      @endforeach
                                                 </select>
                                            </div>
                                            <div class="mb-3">
                                                 <label for="excerpt" class="form-label">Excerpt</label>
                                                 <textarea class="form-control" id="excerpt" name="excerpt" rows="3" placeholder="Short description of the blog">{{ old('excerpt', $blog->excerpt) }}</textarea>
                                                 <small class="text-muted">A brief summary of the blog post (optional)</small>
                                            </div>
                                            <div class="mb-3">
                                                 <label for="snow-editor" class="form-label">Content <span class="text-danger">*</span></label>
                                                 <div id="snow-editor" style="min-height: 300px; background: white;">{!! old('content', $blog->content) !!}</div>
                                                 <textarea id="content" name="content" style="display: none;" required>{{ old('content', $blog->content) }}</textarea>
                                                 <small class="text-muted">The main content of the blog post</small>
                                            </div>
                                            <div class="mb-3">
                                                 <label for="featured_image_file" class="form-label">Featured Image</label>
                                                 <input type="file" class="form-control" id="featured_image_file" name="featured_image_file" accept="image/*">
                                                 <small class="text-muted">Upload an image file (JPG, PNG, GIF, WEBP). Leave empty to keep current image.</small>
                                            </div>
                                       </div>
                                  </div>

                                  <!-- SEO Settings -->
                                  <div class="card">
                                       <div class="card-header">
                                            <h5 class="card-title mb-0">SEO Settings</h5>
                                       </div>
                                       <div class="card-body">
                                            <div class="mb-3">
                                                 <label for="meta_title" class="form-label">Meta Title</label>
                                                 <input type="text" class="form-control" id="meta_title" name="meta_title" value="{{ old('meta_title', $blog->meta_title) }}" placeholder="SEO title for search engines">
                                            </div>
                                            <div class="mb-3">
                                                 <label for="meta_description" class="form-label">Meta Description</label>
                                                 <textarea class="form-control" id="meta_description" name="meta_description" rows="3" placeholder="SEO description for search engines">{{ old('meta_description', $blog->meta_description) }}</textarea>
                                            </div>
                                            <div class="mb-3">
                                                 <label for="meta_keywords" class="form-label">Meta Keywords</label>
                                                 <input type="text" class="form-control" id="meta_keywords" name="meta_keywords" value="{{ old('meta_keywords', $blog->meta_keywords) }}" placeholder="keyword1, keyword2, keyword3">
                                                 <small class="text-muted">Comma-separated keywords</small>
                                            </div>
                                       </div>
                                  </div>
                             </div>

                             <!-- Right Column -->
                             <div class="col-xl-4">
                                  <!-- Publish Settings -->
                                  <div class="card mb-3">
                                       <div class="card-header">
                                            <h5 class="card-title mb-0">Publish Settings</h5>
                                       </div>
                                       <div class="card-body">
                                            <div class="mb-3">
                                                 <label for="status" class="form-label">Status <span class="text-danger">*</span></label>
                                                 <select class="form-select" id="status" name="status" required>
                                                      <option value="draft" {{ old('status', $blog->status) == 'draft' ? 'selected' : '' }}>Draft</option>
                                                      <option value="published" {{ old('status', $blog->status) == 'published' ? 'selected' : '' }}>Published</option>
                                                      <option value="archived" {{ old('status', $blog->status) == 'archived' ? 'selected' : '' }}>Archived</option>
                                                 </select>
                                            </div>
                                            <div class="mb-3">
                                                 <label for="published_at" class="form-label">Published Date</label>
                                                 <input type="datetime-local" class="form-control" id="published_at" name="published_at" value="{{ old('published_at', $blog->published_at ? $blog->published_at->format('Y-m-d\TH:i') : '') }}">
                                                 <small class="text-muted">Leave empty to publish immediately when status is "Published"</small>
                                            </div>
                                            <div class="mb-3">
                                                 <div class="form-check form-switch">
                                                      <input class="form-check-input" type="checkbox" role="switch" id="is_featured" name="is_featured" value="1" {{ old('is_featured', $blog->is_featured) ? 'checked' : '' }}>
                                                      <label class="form-check-label" for="is_featured">Featured Blog</label>
                                                 </div>
                                                 <small class="text-muted">Mark this blog as featured</small>
                                            </div>
                                            <div class="mb-3">
                                                 <div class="d-flex align-items-center gap-2">
                                                      <span class="text-muted">Views:</span>
                                                      <span class="badge bg-info">{{ $blog->views }}</span>
                                                 </div>
                                            </div>
                                       </div>
                                  </div>

                                  <!-- Featured Image Preview -->
                                  <div class="card">
                                       <div class="card-header">
                                            <h5 class="card-title mb-0">Featured Image Preview</h5>
                                       </div>
                                       <div class="card-body text-center">
                                            <div id="imagePreview" class="bg-light rounded p-3" style="min-height: 200px; display: flex; align-items: center; justify-content: center;">
                                                 @if($blog->featured_image)
                                                      <img src="{{ $blog->featured_image }}" alt="Featured Image" class="img-fluid rounded" style="max-height: 300px;" id="currentImage">
                                                 @else
                                                      <p class="text-muted mb-0">No image selected</p>
                                                 @endif
                                            </div>
                                       </div>
                                  </div>
                             </div>
                        </div>

                        <!-- Form Actions -->
                        <div class="row mt-3">
                             <div class="col-12">
                                  <div class="d-flex justify-content-end gap-2">
                                       <a href="{{ route('admin.blogs.index') }}" class="btn btn-light">Cancel</a>
                                       <button type="submit" class="btn btn-primary">
                                            <iconify-icon icon="solar:check-circle-bold-duotone" class="align-middle fs-18 me-1"></iconify-icon>
                                            Update Blog
                                       </button>
                                  </div>
                             </div>
                        </div>
                   </form>
              </div>
         </div>
    </div>
</div>

@push('scripts')
<script>
     // Initialize Quill Editor
     let quill;
     document.addEventListener('DOMContentLoaded', function() {
          if (document.getElementById('snow-editor')) {
               quill = new Quill('#snow-editor', {
                    theme: 'snow',
                    modules: {
                         toolbar: [
                              [{ 'font': [] }, { 'size': [] }],
                              ['bold', 'italic', 'underline', 'strike'],
                              [{ 'color': [] }, { 'background': [] }],
                              [{ 'script': 'super' }, { 'script': 'sub' }],
                              [{ 'header': [false, 1, 2, 3, 4, 5, 6] }, 'blockquote', 'code-block'],
                              [{ 'list': 'ordered' }, { 'list': 'bullet' }, { 'indent': '-1' }, { 'indent': '+1' }],
                              ['direction', { 'align': [] }],
                              ['link', 'image', 'video'],
                              ['clean']
                         ]
                    },
               });

               // Set initial content if exists
               const initialContent = document.getElementById('content').value;
               if (initialContent) {
                    quill.root.innerHTML = initialContent;
               }

               // Sync Quill content to hidden textarea on form submit
               const form = document.querySelector('form');
               if (form) {
                    form.addEventListener('submit', function(e) {
                         const contentTextarea = document.getElementById('content');
                         if (contentTextarea && quill) {
                              contentTextarea.value = quill.root.innerHTML;
                         }
                    });

                    // Also sync on content change
                    quill.on('text-change', function() {
                         const contentTextarea = document.getElementById('content');
                         if (contentTextarea) {
                              contentTextarea.value = quill.root.innerHTML;
                         }
                    });
               }
          }
     });

     // Function to generate slug from text
     function generateSlug(text) {
          return text.toLowerCase()
               .trim()
               .replace(/[^\w\s-]/g, '')
               .replace(/[\s_]+/g, '-')
               .replace(/-+/g, '-')
               .replace(/^-+|-+$/g, '');
     }

     // Auto-generate slug from title
     const titleInput = document.getElementById('title');
     const slugInput = document.getElementById('slug');
     const editSlugBtn = document.getElementById('editSlugBtn');
     let slugEditable = false;

     if (titleInput && slugInput) {
          titleInput.addEventListener('input', function() {
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
                         if (!slugInput.value) {
                              slugInput.value = generateSlug(titleInput.value);
                         }
                    }
               });
          }
     }

     // Featured image preview
     const featuredImageInput = document.getElementById('featured_image');
     const featuredImageFile = document.getElementById('featured_image_file');
     const imagePreview = document.getElementById('imagePreview');

     function updateImagePreview(source) {
          if (!imagePreview) return;

          if (source instanceof File) {
               const reader = new FileReader();
               reader.onload = function(e) {
                    imagePreview.innerHTML = `<img src="${e.target.result}" alt="Featured Image" class="img-fluid rounded" style="max-height: 300px;">`;
               };
               reader.readAsDataURL(source);
          } else if (typeof source === 'string' && source.trim()) {
               const img = document.createElement('img');
               img.src = source;
               img.alt = 'Featured Image';
               img.className = 'img-fluid rounded';
               img.style.maxHeight = '300px';
               img.onerror = function() {
                    imagePreview.innerHTML = '<p class="text-danger mb-0">Invalid image URL</p>';
               };
               imagePreview.innerHTML = '';
               imagePreview.appendChild(img);
          } else {
               imagePreview.innerHTML = '<p class="text-muted mb-0">No image selected</p>';
          }
     }

     // Handle file upload
     if (featuredImageFile && imagePreview) {
          featuredImageFile.addEventListener('change', function() {
               if (this.files && this.files[0]) {
                    updateImagePreview(this.files[0]);
               } else {
                    // If file is cleared, check URL input
                    const urlValue = featuredImageInput ? featuredImageInput.value.trim() : '';
                    updateImagePreview(urlValue);
               }
          });
     }

     // Handle URL input
     if (featuredImageInput && imagePreview) {
          featuredImageInput.addEventListener('input', function() {
               // Only update if no file is selected
               if (!featuredImageFile || !featuredImageFile.files || featuredImageFile.files.length === 0) {
                    updateImagePreview(this.value.trim());
               }
          });
     }
</script>
@endpush
@endsection

