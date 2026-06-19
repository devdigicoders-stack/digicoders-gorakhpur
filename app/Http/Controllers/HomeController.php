<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Course;
use App\Models\Faq;
use App\Models\Gallery;
use App\Models\Seo;
use App\Models\Setting;
use App\Models\Testimonial;
use Illuminate\Http\Response;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $courses = Course::all();
        $popularCourses = Course::where('is_popular', true)->get();
        $blogs = Blog::where('status', 'published')->orderBy('created_at', 'desc')->take(3)->get();
        $gallery = Gallery::orderBy('created_at', 'desc')->get();
        $testimonials = Testimonial::all();
        $faqs = Faq::where('category', 'general')->get();

        // Settings key-value pairs
        $settings = Setting::pluck('value', 'key')->all();

        // Page SEO
        $seo = Seo::where('page_name', 'home')->first();

        return view('index', compact(
            'courses',
            'popularCourses',
            'blogs',
            'gallery',
            'testimonials',
            'faqs',
            'settings',
            'seo'
        ));
    }

    public function contact(): View
    {
        $settings = Setting::pluck('value', 'key')->all();
        $seo = Seo::where('page_name', 'contact')->first();
        $courses = Course::select('name')->get();

        return view('contact', compact('settings', 'seo', 'courses'));
    }

    public function about(): View
    {
        $seo = Seo::where('page_name', 'about')->first();
        $testimonials = Testimonial::all();
        $faqs = Faq::where('category', 'general')->get();

        return view('about', compact('seo', 'testimonials', 'faqs'));
    }

    public function services(): View
    {
        $seo = Seo::where('page_name', 'services')->first();

        return view('services', compact('seo'));
    }

    public function team(): View
    {
        $seo = Seo::where('page_name', 'team')->first();

        return view('team', compact('seo'));
    }

    public function sitemap(): Response
    {
        $courses = Course::select('slug', 'updated_at')->get();
        $blogs = Blog::where('status', 'published')->select('slug', 'updated_at')->get();

        $xml = '<?xml version="1.0" encoding="UTF-8"?>';
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

        // Static URLs
        $xml .= '<url>';
        $xml .= '<loc>'.url('/').'</loc>';
        $xml .= '<lastmod>'.date('Y-m-d').'</lastmod>';
        $xml .= '<changefreq>daily</changefreq>';
        $xml .= '<priority>1.0</priority>';
        $xml .= '</url>';

        $xml .= '<url>';
        $xml .= '<loc>'.url('/courses').'</loc>';
        $xml .= '<lastmod>'.date('Y-m-d').'</lastmod>';
        $xml .= '<changefreq>weekly</changefreq>';
        $xml .= '<priority>0.8</priority>';
        $xml .= '</url>';

        $xml .= '<url>';
        $xml .= '<loc>'.url('/blog').'</loc>';
        $xml .= '<lastmod>'.date('Y-m-d').'</lastmod>';
        $xml .= '<changefreq>weekly</changefreq>';
        $xml .= '<priority>0.8</priority>';
        $xml .= '</url>';

        $xml .= '<url>';
        $xml .= '<loc>'.url('/about').'</loc>';
        $xml .= '<lastmod>'.date('Y-m-d').'</lastmod>';
        $xml .= '<changefreq>monthly</changefreq>';
        $xml .= '<priority>0.8</priority>';
        $xml .= '</url>';

        $xml .= '<url>';
        $xml .= '<loc>'.url('/services').'</loc>';
        $xml .= '<lastmod>'.date('Y-m-d').'</lastmod>';
        $xml .= '<changefreq>monthly</changefreq>';
        $xml .= '<priority>0.8</priority>';
        $xml .= '</url>';

        $xml .= '<url>';
        $xml .= '<loc>'.url('/team').'</loc>';
        $xml .= '<lastmod>'.date('Y-m-d').'</lastmod>';
        $xml .= '<changefreq>monthly</changefreq>';
        $xml .= '<priority>0.8</priority>';
        $xml .= '</url>';

        $xml .= '<url>';
        $xml .= '<loc>'.url('/contact').'</loc>';
        $xml .= '<lastmod>'.date('Y-m-d').'</lastmod>';
        $xml .= '<changefreq>monthly</changefreq>';
        $xml .= '<priority>0.7</priority>';
        $xml .= '</url>';

        // Courses URLs
        foreach ($courses as $course) {
            $xml .= '<url>';
            $xml .= '<loc>'.url('/'.$course->slug).'</loc>';
            $xml .= '<lastmod>'.$course->updated_at->format('Y-m-d').'</lastmod>';
            $xml .= '<changefreq>weekly</changefreq>';
            $xml .= '<priority>0.9</priority>';
            $xml .= '</url>';
        }

        // Blogs URLs
        foreach ($blogs as $blog) {
            $xml .= '<url>';
            $xml .= '<loc>'.url('/blog/'.$blog->slug).'</loc>';
            $xml .= '<lastmod>'.$blog->updated_at->format('Y-m-d').'</lastmod>';
            $xml .= '<changefreq>weekly</changefreq>';
            $xml .= '<priority>0.8</priority>';
            $xml .= '</url>';
        }

        $xml .= '</urlset>';

        return response($xml, 200)
            ->header('Content-Type', 'text/xml');
    }

    public function robots(): Response
    {
        $robots = "User-agent: *\n";
        $robots .= "Allow: /\n";
        $robots .= "Disallow: /admin/\n";
        $robots .= "Disallow: /admin\n";
        $robots .= "\n";
        $robots .= 'Sitemap: '.url('/sitemap.xml')."\n";

        return response($robots, 200)
            ->header('Content-Type', 'text/plain');
    }
}
