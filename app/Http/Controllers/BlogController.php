<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\View\View;
use RuntimeException;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $blogs = Blog::with('category')->latest()->paginate(15);

        return view('admin.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $categories = BlogCategory::where('is_active', true)->get();

        return view('admin.blogs.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'blog_category_id' => ['required', 'exists:blog_categories,id'],
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255', 'unique:blogs,slug'],
            'excerpt' => ['nullable', 'string'],
            'content' => ['required', 'string'],
            'featured_image_file' => ['nullable', 'image', 'mimes:jpeg,jpg,png,gif,webp', 'max:2048'],
            'featured_image' => ['nullable', 'string'],
            'status' => ['required', 'in:draft,published,archived'],
            'published_at' => ['nullable', 'date'],
            'meta_title' => ['nullable', 'string', 'max:255'],
            'meta_description' => ['nullable', 'string'],
            'meta_keywords' => ['nullable', 'string'],
            'meta_image' => ['nullable', 'string'],
        ]);

        if (empty($validated['slug'])) {
            $validated['slug'] = Str::slug($validated['title']);
        }

        if ($validated['status'] === 'published' && empty($validated['published_at'])) {
            $validated['published_at'] = now();
        }

        $validated['is_featured'] = $request->has('is_featured');

        // Handle file upload
        if ($request->hasFile('featured_image_file')) {
            $imagePath = $this->convertAndStoreAsWebp($request->file('featured_image_file'));
            $validated['featured_image'] = $imagePath;
            $validated['meta_image'] = $imagePath;
        }

        // Remove the file input from validated data
        unset($validated['featured_image_file']);

        Blog::create($validated);

        return redirect()->route('backend.blogs.index')
            ->with('success', 'Blog created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog): View
    {
        $categories = BlogCategory::where('is_active', true)->get();

        return view('admin.blogs.edit', compact('blog', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog): RedirectResponse
    {
        $validated = $request->validate([
            'blog_category_id' => ['required', 'exists:blog_categories,id'],
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255', 'unique:blogs,slug,'.$blog->id],
            'excerpt' => ['nullable', 'string'],
            'content' => ['required', 'string'],
            'featured_image_file' => ['nullable', 'image', 'mimes:jpeg,jpg,png,gif,webp', 'max:2048'],
            'featured_image' => ['nullable', 'string'],
            'status' => ['required', 'in:draft,published,archived'],
            'published_at' => ['nullable', 'date'],
            'meta_title' => ['nullable', 'string', 'max:255'],
            'meta_description' => ['nullable', 'string'],
            'meta_keywords' => ['nullable', 'string'],
            'meta_image' => ['nullable', 'string'],
        ]);

        if (empty($validated['slug'])) {
            $validated['slug'] = Str::slug($validated['title']);
        }

        if ($validated['status'] === 'published' && empty($validated['published_at'])) {
            $validated['published_at'] = now();
        }

        $validated['is_featured'] = $request->has('is_featured');

        // Handle file upload
        if ($request->hasFile('featured_image_file')) {
            // Delete old image if exists
            if ($blog->featured_image && str_starts_with($blog->featured_image, '/storage/')) {
                $oldImagePath = str_replace('/storage/', '', $blog->featured_image);
                Storage::disk('public')->delete($oldImagePath);
            }

            $imagePath = $this->convertAndStoreAsWebp($request->file('featured_image_file'));
            $validated['featured_image'] = $imagePath;
            $validated['meta_image'] = $imagePath;
        }

        // Remove the file input from validated data
        unset($validated['featured_image_file']);

        $blog->update($validated);

        return redirect()->route('backend.blogs.index')
            ->with('success', 'Blog updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog): RedirectResponse
    {
        $blog->delete();

        return redirect()->route('backend.blogs.index')
            ->with('success', 'Blog deleted successfully.');
    }

    private function convertAndStoreAsWebp(UploadedFile $file, int $quality = 80): string
    {
        $imageResource = imagecreatefromstring($file->get());

        if ($imageResource === false) {
            throw new RuntimeException('Unable to read the uploaded image.');
        }

        $temporaryPath = tempnam(sys_get_temp_dir(), 'blog_webp_');

        if ($temporaryPath === false) {
            imagedestroy($imageResource);

            throw new RuntimeException('Unable to create a temporary file for image processing.');
        }

        if (! imagewebp($imageResource, $temporaryPath, $quality)) {
            imagedestroy($imageResource);
            @unlink($temporaryPath);

            throw new RuntimeException('Unable to convert the uploaded image to WebP format.');
        }

        imagedestroy($imageResource);

        $filename = Str::uuid().'.webp';
        $storagePath = 'uploads/blogs/'.$filename;

        Storage::put($storagePath, file_get_contents($temporaryPath));

        @unlink($temporaryPath);

        return $storagePath;
    }
}
