<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Course;
use Illuminate\Http\Response;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('index');
    }

    public function sitemap(): Response
    {
        try {
            $courses = Course::select('slug', 'updated_at')->get();
            $blogs = Blog::where('status', 'published')->select('slug', 'updated_at')->get();
        } catch (\Throwable $e) {
            $courses = collect();
            $blogs = collect();
        }

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
