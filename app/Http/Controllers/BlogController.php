<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\View\View;

class BlogController extends Controller
{
    private function fetchBlogs(): array
    {
        return Cache::remember('blogs_list', 3600, function () {
            $urls = [
                'https://thedigicoders.com/api/blogs',
                'http://thedigicoders.com/api/blogs',
                'http://localhost/thedigicoders-com/api/blogs',
            ];
            $allBlogs = [];
            foreach ($urls as $url) {
                try {
                    $response = Http::withoutVerifying()->timeout(5)->get($url);
                    if ($response->successful() && is_array($response->json())) {
                        $allBlogs = $response->json();
                        break;
                    }
                } catch (Exception $e) {
                    // Try next API URL safely
                }
            }

            if (empty($allBlogs)) {
                return [];
            }

            // Strictly filter active blogs for Gorakhpur location only
            return array_values(array_filter($allBlogs, function ($item) {
                $statusMatch = ! isset($item['status']) || $item['status'] === 'true' || $item['status'] === true || $item['status'] === 'published';
                $locationVal = strtolower($item['location'] ?? $item['city'] ?? $item['branch'] ?? 'gorakhpur');

                return $statusMatch && str_contains($locationVal, 'gorakhpur');
            }));
        });
    }

    public function index(Request $request): View
    {
        $seo = (object) [
            'meta_title' => 'Latest Tech Blogs & Tutorials | DigiCoders Technologies',
            'meta_description' => 'Read our latest tech articles, tutorials, and success stories from the IT industry. Learn, build, innovate, and get placed.',
            'meta_keywords' => 'DigiCoders Blog, Tech Articles, Summer Training Gorakhpur, Coding Tutorials, Web Development',
            'og_image' => 'assets/images/seo/blogs-og.webp',
        ];

        $blogs = $this->fetchBlogs();

        return view('blogs.index', compact('seo', 'blogs'));
    }

    public function show(string $slug): View
    {
        // 1. Fetch & Cache active Gorakhpur blogs from API
        $gorakhpurBlogs = $this->fetchBlogs();

        $blog = null;
        foreach ($gorakhpurBlogs as $item) {
            if (isset($item['url']) && $item['url'] === $slug) {
                $blog = $item;
                break;
            }
        }

        if (! $blog) {
            abort(404);
        }

        // 2. Classify Category based on keywords in title & content
        $searchString = strtolower(($blog['title'] ?? '').' '.($blog['content'] ?? ''));
        $category = 'trends';
        if (str_contains($searchString, 'mern') || str_contains($searchString, 'react') || str_contains($searchString, 'node') || str_contains($searchString, 'express') || str_contains($searchString, 'mongodb')) {
            $category = 'mern';
        } elseif (str_contains($searchString, 'php') || str_contains($searchString, 'laravel') || str_contains($searchString, 'codeigniter')) {
            $category = 'laravel';
        } elseif (str_contains($searchString, 'python') || str_contains($searchString, 'django') || str_contains($searchString, 'flask') || str_contains($searchString, 'machine learning') || str_contains($searchString, 'data science')) {
            $category = 'python';
        } elseif (str_contains($searchString, 'android') || str_contains($searchString, 'flutter') || str_contains($searchString, 'mobile app') || str_contains($searchString, 'kotlin') || str_contains($searchString, 'java')) {
            $category = 'android';
        }

        $badgeClass = match ($category) {
            'mern' => 'tag-green',
            'laravel' => 'tag-orange',
            'python' => 'tag-blue',
            'android' => 'tag-green',
            default => 'tag-orange',
        };

        $categoryLabel = match ($category) {
            'mern' => 'MERN Stack',
            'laravel' => 'PHP & Laravel',
            'python' => 'Python Dev',
            'android' => 'Android & Flutter',
            default => 'Tech Trends',
        };

        // 3. Format Date, Author, FAQs & SEO Details from API fields
        $cleanTitle = strip_tags($blog['title'] ?? '');
        $seoTitle = ! empty($blog['meta_title']) ? strip_tags($blog['meta_title']) : (! empty($blog['seo_title']) ? strip_tags($blog['seo_title']) : ($cleanTitle.' | DigiCoders Technologies Gorakhpur'));

        $cleanContent = strip_tags($blog['content'] ?? '');
        $seoDescription = ! empty($blog['meta_description']) ? strip_tags($blog['meta_description']) : (! empty($blog['seo_description']) ? strip_tags($blog['seo_description']) : mb_substr($cleanContent, 0, 160));
        $seoKeywords = ! empty($blog['keywords']) ? strip_tags($blog['keywords']) : (! empty($blog['seo_keyword']) ? strip_tags($blog['seo_keyword']) : 'web development trends, coding guides, programming tutorials, DigiCoders, summer training, industrial training, apprenticeship training, internship training, diploma cs it, btech cs it, bca, mca');
        $blogImage = $blog['img'] ?? 'https://thedigicoders.com/public/uploads/blog/default.png';
        $imgAlt = ! empty($blog['img_alt']) ? strip_tags($blog['img_alt']) : $cleanTitle;
        $authorName = ! empty($blog['author_name']) ? strip_tags($blog['author_name']) : 'DigiCoders Team';
        $authorDesignation = ! empty($blog['author_designation']) ? strip_tags($blog['author_designation']) : 'Tech Expert';
        $canonicalUrl = ! empty($blog['canonical_url']) ? trim($blog['canonical_url']) : '';
        $formattedDate = isset($blog['date']) ? date('F d, Y', strtotime($blog['date'])) : '';
        $formattedTime = ! empty($blog['time']) ? date('h:i A', strtotime($blog['time'])) : '';

        $datePublished = ! empty($blog['created_at']) ? date('Y-m-d', strtotime($blog['created_at'])) : (isset($blog['date']) ? date('Y-m-d', strtotime($blog['date'])) : date('Y-m-d'));
        $dateModified = ! empty($blog['updated_at']) ? date('Y-m-d', strtotime($blog['updated_at'])) : $datePublished;

        $tagArray = array_map('trim', explode(',', $seoKeywords));
        $tagArray = array_slice($tagArray, 0, 8);

        // 4. Extract FAQs from dedicated API field or content regex fallback
        $faqs = [];
        if (! empty($blog['faqs'])) {
            if (is_array($blog['faqs'])) {
                $faqs = $blog['faqs'];
            } elseif (is_string($blog['faqs'])) {
                $decoded = json_decode($blog['faqs'], true);
                if (is_array($decoded)) {
                    $faqs = $decoded;
                }
            }
        }
        if (empty($faqs) && ! empty($blog['content'])) {
            preg_match_all('/<(h[2-4]|strong|p)[^>]*>([^<]+\?)\s*<\/ \1>\s*<p[^>]*>(.*?)<\/ p>/is', $blog['content'], $matches, PREG_SET_ORDER);
            if (empty($matches)) {
                preg_match_all('/<(h[2-4]|strong|p)[^>]*>([^<]+\?)\s*<\/\1>\s*<p[^>]*>(.*?)<\/p>/is', $blog['content'], $matches, PREG_SET_ORDER);
            }
            foreach ($matches as $match) {
                $faqs[] = [
                    'question' => trim(strip_tags($match[2])),
                    'answer' => trim(strip_tags($match[3])),
                ];
            }
        }

        // 5. Recent Blogs list (exclude current, only from Gorakhpur)
        $recentPool = $gorakhpurBlogs;
        $recentBlogs = array_filter($recentPool, function ($item) use ($blog) {
            return $item['id'] !== $blog['id'];
        });
        $recentBlogs = array_slice($recentBlogs, 0, 5);

        // 6. Create SEO object without database call
        $seo = (object) [
            'meta_title' => $seoTitle,
            'meta_description' => $seoDescription,
            'meta_keywords' => $seoKeywords,
            'og_image' => $blogImage,
        ];

        return view('blogs.show', compact(
            'blog',
            'recentBlogs',
            'slug',
            'category',
            'badgeClass',
            'categoryLabel',
            'seoTitle',
            'seoDescription',
            'seoKeywords',
            'blogImage',
            'imgAlt',
            'authorName',
            'authorDesignation',
            'canonicalUrl',
            'formattedDate',
            'formattedTime',
            'datePublished',
            'dateModified',
            'tagArray',
            'faqs',
            'seo'
        ));
    }
}
