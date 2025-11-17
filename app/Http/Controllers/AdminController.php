<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Contact;
use App\Models\User;
use Illuminate\View\View;

class AdminController extends Controller
{
    /**
     * Display the admin dashboard.
     */
    public function index(): View
    {
        $stats = [
            'total_users' => User::count(),
            'total_blogs' => Blog::count(),
            'total_categories' => BlogCategory::count(),
            'total_contacts' => Contact::count(),
            'published_blogs' => Blog::where('status', 'published')->count(),
            'draft_blogs' => Blog::where('status', 'draft')->count(),
            'featured_blogs' => Blog::where('is_featured', true)->count(),
            'total_views' => Blog::sum('views'),
            'recent_contacts' => Contact::latest()->limit(5)->get(),
            'recent_blogs' => Blog::latest()->limit(5)->get(),
            'contacts_today' => Contact::whereDate('created_at', today())->count(),
            'contacts_this_week' => Contact::whereBetween('created_at', [now()->startOfWeek(), now()->endOfWeek()])->count(),
            'contacts_this_month' => Contact::whereMonth('created_at', now()->month)
                ->whereYear('created_at', now()->year)
                ->count(),
        ];

        return view('admin.index', compact('stats'));
    }
}
