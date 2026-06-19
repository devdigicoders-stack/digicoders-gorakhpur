<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Seo;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BlogController extends Controller
{
    public function index(Request $request): View
    {
        $category = $request->query('category');
        $query = Blog::where('status', 'published');

        if ($category) {
            $query->where('category', $category);
        }

        $blogs = $query->orderBy('created_at', 'desc')->paginate(6);
        $categories = Blog::where('status', 'published')->distinct()->pluck('category')->all();

        $settings = Setting::pluck('value', 'key')->all();
        $seo = Seo::where('page_name', 'blogs')->first();

        $latestBlogs = Blog::where('status', 'published')->orderBy('created_at', 'desc')->take(3)->get();

        return view('blogs.index', compact('blogs', 'categories', 'settings', 'seo', 'latestBlogs', 'category'));
    }

    public function show(string $slug): View
    {
        $blog = Blog::where('slug', $slug)->where('status', 'published')->firstOrFail();
        $settings = Setting::pluck('value', 'key')->all();

        // Dynamically build SEO from the Blog table fields
        $seo = new Seo([
            'meta_title' => $blog->seo_title ?? ($blog->title.' | DigiCoders Blog'),
            'meta_description' => $blog->seo_description ?? substr(strip_tags($blog->content), 0, 160),
            'meta_keywords' => $blog->seo_keywords ?? 'DigiCoders tech blog, IT articles, coding tutorials',
            'og_image' => $blog->featured_image ?? 'assets/images/seo/blogs-og.webp',
        ]);

        // Related blogs
        $relatedBlogs = Blog::where('status', 'published')
            ->where('id', '!=', $blog->id)
            ->where('category', $blog->category)
            ->take(3)
            ->get();

        $latestBlogs = Blog::where('status', 'published')
            ->where('id', '!=', $blog->id)
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        return view('blogs.show', compact('blog', 'settings', 'seo', 'relatedBlogs', 'latestBlogs'));
    }
}
