<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Blog;
use App\Models\Contact;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\TwitterCard;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Str;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function __construct() {}

    public function index(): View
    {
        SEOMeta::setTitle('Visavai - Visa Verification, Air Ticket & Offer Letter Check | Document Verification Service');
        SEOMeta::setDescription('Professional visa verification, air ticket verification, and job offer letter verification services. Verify all your visa-related documents with Visavai. Get authentic reports within 24 hours. Trusted by thousands for secure document verification.');
        SEOMeta::setKeywords(['visa verification', 'air ticket verification', 'job offer letter verification', 'visa document check', 'document verification service', 'visa authenticity check', 'air ticket authenticity', 'offer letter verification', 'visa document verification', 'travel document verification', 'visa check online', 'fake visa check', 'fake ticket verification', 'visa verification service Bangladesh', 'document verification Bangladesh']);
        SEOMeta::setCanonical(url('/'));

        OpenGraph::setTitle('Visavai - Visa Verification, Air Ticket & Offer Letter Check');
        OpenGraph::setDescription('Professional visa verification, air ticket verification, and job offer letter verification services. Verify all your visa-related documents with Visavai.');
        OpenGraph::setUrl(url('/'));
        OpenGraph::setSiteName('Visavai');
        OpenGraph::addImage(asset('assets/img/logo/logo.webp'));

        TwitterCard::setTitle('Visavai - Visa Verification, Air Ticket & Offer Letter Check');
        TwitterCard::setDescription('Professional visa verification, air ticket verification, and job offer letter verification services.');
        TwitterCard::setImage(asset('assets/img/logo/logo.webp'));

        $blogs = Blog::where('status', 'published')
            ->whereNotNull('published_at')
            ->orderBy('published_at', 'desc')
            ->limit(3)
            ->get();

        return view('index', compact('blogs'));
    }

    public function about(): View
    {
        SEOMeta::setTitle('About Us - Visavai | Professional Visa & Document Verification Services');
        SEOMeta::setDescription('Learn about Visavai - your trusted partner for visa verification, air ticket verification, and job offer letter verification. Our expert team ensures 100% accurate document verification reports to protect you from fraud.');
        SEOMeta::setKeywords(['about visavai', 'visavai team', 'visa verification company', 'document verification service provider', 'visa check service', 'professional document verification', 'trusted visa verification', 'visa verification experts', 'document verification company Bangladesh']);
        SEOMeta::setCanonical(url('/about-us'));

        OpenGraph::setTitle('About Us - Visavai');
        OpenGraph::setDescription('Learn about Visavai - your trusted partner for visa verification, air ticket verification, and job offer letter verification.');
        OpenGraph::setUrl(url('/about-us'));

        return view('about-us');
    }

    public function services(): View
    {
        SEOMeta::setTitle('Our Services - Visa, Air Ticket & Offer Letter Verification | Visavai');
        SEOMeta::setDescription('Comprehensive document verification services: Visa verification, air ticket verification, job offer letter verification, and all visa-related document checks. Fast, reliable, and professional verification reports.');
        SEOMeta::setKeywords(['visa verification service', 'air ticket verification service', 'offer letter verification service', 'document verification services', 'visa check service', 'air ticket check', 'offer letter check', 'visa document verification', 'travel document verification', 'visa authenticity service', 'fake visa detection', 'fake ticket detection']);
        SEOMeta::setCanonical(url('/services'));

        OpenGraph::setTitle('Our Services - Visavai');
        OpenGraph::setDescription('Comprehensive document verification services: Visa verification, air ticket verification, job offer letter verification.');
        OpenGraph::setUrl(url('/services'));

        return view('services');
    }

    public function blogs(): View
    {
        SEOMeta::setTitle('Blog - Visa Verification Tips, Travel Guides & Document Verification News | Visavai');
        SEOMeta::setDescription('Read our latest blogs about visa verification, air ticket verification, job offer letter verification, travel tips, fraud prevention, and document verification guides. Stay informed and protected.');
        SEOMeta::setKeywords(['visa verification blog', 'document verification blog', 'travel blog', 'visa tips', 'air ticket verification guide', 'offer letter verification guide', 'visa fraud prevention', 'document verification news', 'travel safety tips', 'visa verification articles']);
        SEOMeta::setCanonical(url('/blogs'));

        OpenGraph::setTitle('Blog - Visavai');
        OpenGraph::setDescription('Read our latest blogs about visa verification, air ticket verification, job offer letter verification, travel tips, and fraud prevention.');
        OpenGraph::setUrl(url('/blogs'));

        return view('blogs');
    }

    public function blogsDetails(string $slug): View
    {
        $blog = Blog::where('slug', $slug)
            ->where('status', 'published')
            ->firstOrFail();

        $title = $blog->meta_title ?? $blog->title;
        $description = $blog->meta_description ?? $blog->excerpt ?? Str::limit(strip_tags($blog->content), 160);
        $keywords = $blog->meta_keywords ? explode(',', $blog->meta_keywords) : ['visa', 'travel', 'document verification'];
        $image = $blog->meta_image ? asset('storage/'.$blog->meta_image) : ($blog->featured_image ? asset('storage/'.$blog->featured_image) : asset('assets/img/logo/logo.webp'));
        $url = url('/blogs/'.$blog->slug);

        SEOMeta::setTitle($title);
        SEOMeta::setDescription($description);
        SEOMeta::setKeywords($keywords);
        SEOMeta::setCanonical($url);

        OpenGraph::setTitle($title);
        OpenGraph::setDescription($description);
        OpenGraph::setUrl($url);
        OpenGraph::setType('article');
        OpenGraph::addImage($image);

        TwitterCard::setTitle($title);
        TwitterCard::setDescription($description);
        TwitterCard::setImage($image);

        return view('blog-details', compact('blog', 'slug'));
    }

    public function contact(): View
    {
        SEOMeta::setTitle('Contact Us - Get Your Documents Verified | Visavai');
        SEOMeta::setDescription('Contact Visavai for visa verification, air ticket verification, and job offer letter verification services. Submit your documents online and get verified reports within 24 hours. Professional and confidential service.');
        SEOMeta::setKeywords(['contact visavai', 'visa verification contact', 'document verification contact', 'visa check contact', 'air ticket verification contact', 'offer letter verification contact', 'submit documents for verification', 'visa verification inquiry']);
        SEOMeta::setCanonical(url('/contact-us'));

        OpenGraph::setTitle('Contact Us - Visavai');
        OpenGraph::setDescription('Contact Visavai for visa verification, air ticket verification, and job offer letter verification services.');
        OpenGraph::setUrl(url('/contact-us'));

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
