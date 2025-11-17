<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\JsonResponse;

class HomeController extends Controller
{
    public function __construct() {}

    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about-us');
    }

    public function services()
    {
        return view('services');
    }

    public function blogs()
    {
        return view('blogs');
    }

    public function blogsDetails($slug)
    {
        return view('blog-details', compact('slug'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function store(ContactRequest $request): JsonResponse
    {
        $validated = $request->validated();
        $filePaths = [];

        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $filePath = $file->store('uploads/contacts', 'public');
                $filePaths[] = $filePath;
            }
        }

        $validated['files'] = ! empty($filePaths) ? $filePaths : null;

        Contact::create($validated);

        return response()->json([
            'message' => 'আপনার বার্তা সফলভাবে জমা দেওয়া হয়েছে। আমরা শীঘ্রই আপনার সাথে যোগাযোগ করব।',
        ], 200);
    }
}
