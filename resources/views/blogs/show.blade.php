@extends('layouts.app')

@section('additional_schema')
    <!-- JSON-LD Schemas for search engines -->
    <script type="application/ld+json">
        {
          "@@context": "https://schema.org",
          "@@type": "BlogPosting",
          "headline": "{{ strip_tags($blog['title'] ?? '') }}",
          "description": "{{ $seoDescription }}",
          "image": "{{ $blogImage }}",
          "author": {
            "@@type": "Organization",
            "name": "DigiCoders Technologies Pvt. Ltd."
          },
          "publisher": {
            "@@type": "Organization",
            "name": "DigiCoders Technologies Pvt. Ltd.",
            "logo": {
              "@@type": "ImageObject",
              "url": "https://thedigicoders.com/logo.png"
            }
          },
          "datePublished": "{{ $datePublished }}",
          "dateModified": "{{ $dateModified }}",
          "mainEntityOfPage": "{{ url()->current() }}"
        }
        </script>
    @if(!empty($canonicalUrl))
        <link rel="canonical" href="{{ $canonicalUrl }}" />
    @endif

    <script type="application/ld+json">
        {
          "@@context": "https://schema.org",
          "@@type": "BreadcrumbList",
          "itemListElement": [
            {
              "@@type": "ListItem",
              "position": 1,
              "name": "Home",
              "item": "{{ url('/') }}"
            },
            {
              "@@type": "ListItem",
              "position": 2,
              "name": "Blogs",
              "item": "{{ url('/blogs') }}"
            },
            {
              "@@type": "ListItem",
              "position": 3,
              "name": "{{ strip_tags($blog['title'] ?? '') }}",
              "item": "{{ url()->current() }}"
            }
          ]
        }
        </script>

    @if(count($faqs) > 0)
        <script type="application/ld+json">
                {
                  "@@context": "https://schema.org",
                  "@@type": "FAQPage",
                  "mainEntity": [
                    @foreach($faqs as $index => $faq)
                        {
                          "@@type": "Question",
                          "name": "{{ $faq['question'] }}",
                          "acceptedAnswer": {
                            "@@type": "Answer",
                            "text": "{{ $faq['answer'] }}"
                          }
                        }{{ $index < count($faqs) - 1 ? ',' : '' }}
                    @endforeach
                  ]
                }
                </script>
    @endif
@endsection

@section('content')
    <!-- Banner/Header Section -->
    <section class="blog-detail-hero position-relative py-5 overflow-hidden"
        style="background: linear-gradient(135deg, transparent 0%, rgba(231, 96, 40, 0.03) 100%);">
        <div class="position-absolute w-100 h-100 top-0 start-0 blog-hero-blur-bg"
            style="background-image: url('{{ $blog['img'] ?? '' }}'); background-size: cover; background-position: center; filter: blur(60px); opacity: 0.08; z-index: 1;">
        </div>

        <div class="container position-relative z-3 py-4">
            <nav aria-label="breadcrumb" class="mb-4" data-aos="fade-down">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}"
                            class="text-secondary text-decoration-none">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('blogs.index') }}"
                            class="text-secondary text-decoration-none">Blogs</a></li>
                    <li class="breadcrumb-item active text-primary" aria-current="page">
                        {{ Str::limit(strip_tags($blog['title'] ?? ''), 30) }}</li>
                </ol>
            </nav>

            <div class="row">
                <div class="col-lg-9" data-aos="fade-right">
                    <span
                        class="badge bg-primary px-3 py-2 rounded-pill fw-bold text-xs uppercase mb-3 text-white">{{ $categoryLabel }}</span>
                    <h1 class="display-5 fw-bold mb-4 text-primary"
                        style="font-family: 'Montserrat', sans-serif; color: var(--text-primary) !important;">
                        {!! strip_tags($blog['title'] ?? '') !!}</h1>

                    <div class="d-flex flex-wrap align-items-center gap-4 text-secondary text-sm"
                        style="color: var(--text-secondary) !important;">
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-calendar3 text-primary"></i>
                            <span>{{ $formattedDate }} @if(!empty($formattedTime)) <small class="opacity-75">•
                            {{ $formattedTime }}</small> @endif</span>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-person text-primary"></i>
                            <span>By <strong>{{ $authorName }}</strong> @if(!empty($authorDesignation)) <small
                            class="text-xs opacity-75">({{ $authorDesignation }})</small> @endif</span>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-clock text-secondary"></i>
                            <span>@php
                                $words = str_word_count(strip_tags($blog['content'] ?? ''));
                                $min = (int) ceil($words / 200) ?: 3;
                                echo "$min min read";
                            @endphp</span>
                        </div>
                        <div class="d-flex align-items-center gap-2 ms-lg-2">
                            <span class="small text-secondary fw-bold me-1"
                                style="color: var(--text-secondary) !important;">Share:</span>
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}"
                                target="_blank" class="btn btn-sm btn-outline-primary rounded-circle"
                                style="width: 32px; height: 32px; display: inline-flex; align-items: center; justify-content: center; padding: 0;"
                                title="Share on Facebook"><i class="bi bi-facebook"></i></a>
                            <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode(strip_tags($blog['title'] ?? '')) }}"
                                target="_blank" class="btn btn-sm btn-outline-dark rounded-circle"
                                style="width: 32px; height: 32px; display: inline-flex; align-items: center; justify-content: center; padding: 0;"
                                title="Share on X (Twitter)"><i class="bi bi-twitter-x"></i></a>
                            <a href="https://api.whatsapp.com/send?text={{ urlencode(strip_tags($blog['title'] ?? '') . ' - ' . url()->current()) }}"
                                target="_blank" class="btn btn-sm btn-outline-success rounded-circle"
                                style="width: 32px; height: 32px; display: inline-flex; align-items: center; justify-content: center; padding: 0;"
                                title="Share on WhatsApp"><i class="bi bi-whatsapp"></i></a>
                            <button onclick="copyToClipboard()" class="btn btn-sm btn-outline-secondary rounded-circle"
                                style="width: 32px; height: 32px; display: inline-flex; align-items: center; justify-content: center; padding: 0;"
                                title="Copy Link"><i class="bi bi-link-45deg"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Body Grid Section -->
    <section class="section-padding py-5">
        <div class="container">
            <div class="row g-4 g-lg-5">
                <!-- Left: Main Blog Content (8 cols) -->
                <div class="col-lg-8" data-aos="fade-right">
                    <!-- Featured Image inside glass panel border -->
                    <div
                        class="glass-panel p-2 rounded-4 mb-4 border border-white border-opacity-10 overflow-hidden shadow-sm">
                        <img src="{{ $blog['img'] ?? '' }}" class="w-100 rounded-3 img-fluid" alt="{{ $imgAlt }}"
                            style="aspect-ratio: 16 / 9; object-fit: cover;"
                            onerror="this.src='https://thedigicoders.com/public/uploads/blog/default.png';">
                    </div>

                    <!-- Blog Content Panel (Glassmorphic Container) -->
                    <div class="glass-panel p-4 p-md-5 rounded-4 border border-white border-opacity-10 shadow-sm"
                        style="background: var(--glass-bg);">
                        <div class="blog-body-html text-secondary"
                            style="color: var(--text-secondary) !important; font-size: 1.05rem; line-height: 1.8;">
                            {!! $blog['content'] ?? '' !!}
                        </div>
                    </div>

                    <!-- Author Badge Card -->
                    <div
                        class="glass-panel p-3 px-4 rounded-4 mt-4 border border-white border-opacity-10 shadow-sm d-flex align-items-center gap-3">
                        <div class="rounded-circle bg-primary bg-opacity-10 text-primary d-flex align-items-center justify-content-center flex-shrink-0"
                            style="width: 48px; height: 48px;">
                            <i class="bi bi-person-badge fs-4"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-0 text-primary" style="color: var(--text-primary) !important;">Article
                                Written By: {{ $authorName }}</h6>
                            <small class="text-secondary">{{ $authorDesignation }} • DigiCoders Technologies</small>
                        </div>
                    </div>

                    <!-- Frequently Asked Questions Accordion -->
                    @if(count($faqs) > 0)
                        <div class="mt-5 pt-4 border-top" data-aos="fade-up">
                            <h3 class="fw-bold mb-4 position-relative pb-2"
                                style="font-size: 1.5rem; font-family: 'Montserrat', sans-serif; color: var(--text-primary);">
                                Frequently Asked Questions (FAQs)
                                <span class="d-block"
                                    style="width: 50px; height: 3px; background: var(--blue); margin-top: 8px; border-radius: 2px;"></span>
                            </h3>

                            <div class="accordion accordion-flush" id="blogFaqAccordion">
                                @foreach($faqs as $index => $faq)
                                    <div class="accordion-item border-0 mb-3 rounded-3 overflow-hidden shadow-sm"
                                        style="background: rgba(255, 255, 255, 0.45); border: 1px solid var(--glass-border) !important;">
                                        <h2 class="accordion-header" id="faq-heading-{{ $index }}">
                                            <button
                                                class="accordion-button collapsed fw-semibold bg-transparent py-3 px-4 shadow-none"
                                                type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse-{{ $index }}"
                                                aria-expanded="false" aria-controls="faq-collapse-{{ $index }}"
                                                style="font-size: 1rem; color: var(--text-primary) !important;">
                                                <i class="bi bi-question-circle-fill me-2 text-primary"></i>
                                                {{ $faq['question'] }}
                                            </button>
                                        </h2>
                                        <div id="faq-collapse-{{ $index }}" class="accordion-collapse collapse"
                                            aria-labelledby="faq-heading-{{ $index }}" data-bs-parent="#blogFaqAccordion">
                                            <div class="accordion-body py-3 px-4 text-secondary leading-relaxed"
                                                style="background: rgba(0, 109, 171, 0.02); font-size: 0.95rem; color: var(--text-secondary) !important;">
                                                {{ $faq['answer'] }}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    <div class="mt-5 pt-4 border-top d-flex flex-wrap justify-content-between align-items-center gap-3"
                        data-aos="fade-up">
                        <a href="{{ route('blogs.index') }}" class="btn btn-sm btn-premium"><i class="bi bi-arrow-left"></i>
                            Back to Tech Blogs</a>

                        <div class="d-flex align-items-center gap-2">
                            <span class="small text-secondary fw-bold me-2"
                                style="color: var(--text-secondary) !important;">Share:</span>
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}"
                                target="_blank" class="btn btn-sm btn-outline-primary rounded-circle"
                                style="width: 35px; height: 35px; display: inline-flex; align-items: center; justify-content: center;"><i
                                    class="bi bi-facebook"></i></a>
                            <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode(strip_tags($blog['title'] ?? '')) }}"
                                target="_blank" class="btn btn-sm btn-outline-dark rounded-circle"
                                style="width: 35px; height: 35px; display: inline-flex; align-items: center; justify-content: center;"><i
                                    class="bi bi-twitter-x"></i></a>
                            <a href="https://api.whatsapp.com/send?text={{ urlencode(strip_tags($blog['title'] ?? '') . ' - ' . url()->current()) }}"
                                target="_blank" class="btn btn-sm btn-outline-success rounded-circle"
                                style="width: 35px; height: 35px; display: inline-flex; align-items: center; justify-content: center;"><i
                                    class="bi bi-whatsapp"></i></a>
                            <button onclick="copyToClipboard()" class="btn btn-sm btn-outline-secondary rounded-circle"
                                style="width: 35px; height: 35px; display: inline-flex; align-items: center; justify-content: center;"><i
                                    class="bi bi-link-45deg"></i></button>
                        </div>
                    </div>
                    <div id="share-toast" class="alert alert-success d-none mt-3 py-2 px-3 text-xs rounded border-0"
                        role="alert"
                        style="background: rgba(40, 167, 69, 0.1); color: #28a745; max-width: 250px; margin-left: auto;">
                        <i class="bi bi-check-circle me-1"></i> Link copied to clipboard!
                    </div>
                </div>

                <!-- Right: Sidebar (4 cols) -->
                <div class="col-lg-4" data-aos="fade-left">
                    <div class="sticky-top d-flex flex-column gap-4" style="top: 100px; z-index: 10;">
                        <!-- Table of Contents Card -->
                        <div class="glass-panel p-4 rounded-4 border border-white border-opacity-10 shadow-sm"
                            id="tocWidget">
                            <h5 class="fw-bold mb-3"
                                style="font-family: 'Montserrat', sans-serif; color: var(--text-primary);">Table of Contents
                            </h5>
                            <div class="toc-list" id="tocList">
                                <!-- Filled dynamically via JavaScript -->
                            </div>
                        </div>

                        <!-- Recent Posts Card -->
                        <div class="glass-panel p-4 rounded-4 border border-white border-opacity-10 shadow-sm">
                            <h5 class="fw-bold mb-4"
                                style="font-family: 'Montserrat', sans-serif; color: var(--text-primary);">Recent Articles
                            </h5>
                            <div class="d-flex flex-column gap-3">
                                @if(count($recentBlogs) > 0)
                                    @foreach($recentBlogs as $item)
                                        @php
                                            $itemTitle = strip_tags($item['title'] ?? '');
                                            $itemUrl = route('blogs.show', $item['url']);
                                            $itemDate = isset($item['date']) ? date('M d, Y', strtotime($item['date'])) : '';
                                        @endphp
                                        <a href="{{ $itemUrl }}" class="recent-blog-item">
                                            <img src="{{ $item['img'] ?? '' }}" alt="{{ $itemTitle }}" class="recent-blog-thumb"
                                                onerror="this.src='https://thedigicoders.com/public/uploads/blog/default.png';">
                                            <div>
                                                <span class="recent-blog-title" title="{{ $itemTitle }}">{{ $itemTitle }}</span>
                                                <span class="recent-blog-date"><i class="bi bi-calendar3"></i>
                                                    {{ $itemDate }}</span>
                                            </div>
                                        </a>
                                    @endforeach
                                @else
                                    <p class="text-secondary small mb-0">No other articles available.</p>
                                @endif
                            </div>
                        </div>

                        <!-- Categories Card -->
                        <div class="glass-panel p-4 rounded-4 border border-white border-opacity-10 shadow-sm">
                            <h5 class="fw-bold mb-3"
                                style="font-family: 'Montserrat', sans-serif; color: var(--text-primary);">Categories</h5>
                            <div class="d-flex flex-wrap gap-2">
                                <a href="{{ url('/blogs') }}?category=mern" class="sidebar-cat-tag">MERN Stack</a>
                                <a href="{{ url('/blogs') }}?category=laravel" class="sidebar-cat-tag">PHP & Laravel</a>
                                <a href="{{ url('/blogs') }}?category=python" class="sidebar-cat-tag">Python Dev</a>
                                <a href="{{ url('/blogs') }}?category=android" class="sidebar-cat-tag">Android & Flutter</a>
                                <a href="{{ url('/blogs') }}?category=trends" class="sidebar-cat-tag">Tech Trends</a>
                            </div>
                        </div>

                        <!-- Training CTA card -->
                        <div class="glass-panel p-4 rounded-4 border border-white border-opacity-10 shadow-sm text-center position-relative overflow-hidden"
                            style="background: linear-gradient(135deg, rgba(0, 109, 171, 0.05) 0%, rgba(231, 96, 40, 0.05) 100%);">
                            <h5 class="fw-bold mb-3"
                                style="font-family: 'Montserrat', sans-serif; color: var(--text-primary);">Upgrade Your
                                Skills</h5>
                            <p class="text-secondary small mb-3">Learn from experts, build real projects, and accelerate
                                your tech career with guided, structured programs.</p>

                            <!-- Phone Numbers -->
                            <div class="d-flex flex-column gap-2 align-items-center mb-4">
                                <a href="tel:+919801017529" class="cta-phone-link"><i
                                        class="bi bi-telephone-fill text-primary"></i> +91 98010 17529</a>
                                <a href="tel:+919198483820" class="cta-phone-link"><i
                                        class="bi bi-telephone-fill text-primary"></i> +91 91984 83820</a>
                                <a href="https://wa.me/916394296293" target="_blank" class="cta-phone-link"><i
                                        class="bi bi-whatsapp text-success"></i> +91 63942 96293</a>
                            </div>

                            <a href="https://thedigicoders.com/registration" target="_blank"
                                class="btn btn-premium btn-sm w-100">Enroll Today <i
                                    class="bi bi-arrow-right-circle ms-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Custom CSS styles specifically for styling body tags in parsed content -->
    <style>
        .blog-body-html p {
            margin-bottom: 22px;
            color: var(--text-secondary);
            text-align: justify;
        }

        .blog-body-html h2,
        .blog-body-html h3,
        .blog-body-html h4 {
            color: var(--text-primary);
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            margin-top: 35px;
            margin-bottom: 15px;
        }

        .blog-body-html h2 {
            font-size: 1.55rem;
        }

        .blog-body-html h3 {
            font-size: 1.3rem;
        }

        .blog-body-html ul,
        .blog-body-html ol {
            margin-bottom: 22px;
            padding-left: 25px;
        }

        .blog-body-html li {
            margin-bottom: 10px;
            color: var(--text-secondary);
        }

        .blog-body-html blockquote {
            border-left: 4px solid var(--secondary);
            background: rgba(231, 96, 40, 0.05);
            padding: 15px 20px;
            font-style: italic;
            border-radius: 0 8px 8px 0;
            margin: 25px 0;
            color: var(--text-secondary);
        }

        .blog-body-html pre,
        .blog-body-html code {
            font-family: monospace;
            background: rgba(255, 255, 255, 0.05);
            padding: 2px 6px;
            border-radius: 4px;
            font-size: 0.9em;
            color: var(--primary);
        }

        .blog-body-html pre {
            padding: 20px;
            overflow-x: auto;
            border: 1px solid var(--glass-border);
            border-radius: 8px;
            background: rgba(0, 0, 0, 0.1);
            margin: 25px 0;
        }

        .blog-body-html pre code {
            background: transparent;
            padding: 0;
            color: var(--text-primary);
        }

        .blog-body-html img {
            max-width: 100%;
            height: auto;
            border-radius: 12px;
            margin: 25px 0;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.06);
            border: 1px solid var(--glass-border);
        }

        .blog-body-html table {
            width: 100%;
            margin-bottom: 25px;
            border-collapse: collapse;
        }

        .blog-body-html th,
        .blog-body-html td {
            border: 1px solid var(--glass-border);
            padding: 12px;
            font-size: 0.95rem;
            color: var(--text-secondary);
        }

        .blog-body-html th {
            background-color: rgba(0, 109, 171, 0.05);
            color: var(--text-primary);
            font-weight: 600;
        }

        /* Sidebar widgets */
        .recent-blog-item {
            display: flex;
            gap: 15px;
            align-items: center;
            text-decoration: none;
            transition: all 0.3s ease;
            padding: 8px;
            border-radius: 12px;
            border: 1px solid transparent;
        }

        .recent-blog-item:hover {
            background: rgba(255, 255, 255, 0.05);
            border-color: var(--glass-border);
            box-shadow: 0 5px 15px var(--glass-shadow);
        }

        .recent-blog-thumb {
            width: 65px;
            height: 65px;
            border-radius: 8px;
            object-fit: cover;
            border: 1px solid var(--glass-border);
            flex-shrink: 0;
        }

        .recent-blog-title {
            font-size: 0.88rem;
            font-weight: 600;
            color: var(--text-primary);
            line-height: 1.4;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            transition: color 0.3s ease;
        }

        .recent-blog-item:hover .recent-blog-title {
            color: var(--primary);
        }

        .recent-blog-date {
            font-size: 0.72rem;
            color: var(--text-secondary);
            margin-top: 4px;
            display: block;
        }

        .sidebar-cat-tag {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid var(--glass-border);
            color: var(--text-secondary);
            text-decoration: none;
            font-size: 0.75rem;
            padding: 6px 14px;
            border-radius: 20px;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .sidebar-cat-tag:hover {
            border-color: var(--primary);
            color: var(--text-primary);
            background: rgba(0, 109, 171, 0.08);
        }

        /* Table of Contents Styling */
        .toc-list {
            display: flex;
            flex-direction: column;
            gap: 10px;
            border-left: 2px solid rgba(0, 109, 171, 0.1);
            padding-left: 14px;
            margin-left: 4px;
            max-height: 380px;
            overflow-y: auto;
            padding-right: 6px;
            scrollbar-width: thin;
            scrollbar-color: var(--primary) transparent;
        }

        .toc-list::-webkit-scrollbar {
            width: 4px;
        }

        .toc-list::-webkit-scrollbar-track {
            background: transparent;
        }

        .toc-list::-webkit-scrollbar-thumb {
            background: rgba(0, 109, 171, 0.3);
            border-radius: 4px;
        }

        .toc-list::-webkit-scrollbar-thumb:hover {
            background: var(--primary);
        }

        .toc-item {
            font-size: 0.88rem;
            color: var(--text-secondary);
            text-decoration: none;
            transition: all 0.2s ease;
            line-height: 1.4;
            display: flex;
            align-items: flex-start;
            gap: 8px;
            cursor: pointer;
            position: relative;
        }

        .toc-item::before {
            content: '•';
            color: var(--primary);
            font-size: 1.1rem;
            line-height: 1;
            flex-shrink: 0;
            transition: transform 0.2s ease, color 0.2s ease;
        }

        .toc-item:hover,
        .toc-item.active {
            color: var(--primary);
            font-weight: 600;
            transform: translateX(2px);
        }

        .toc-item:hover::before,
        .toc-item.active::before {
            transform: scale(1.3);
            color: var(--primary);
        }

        .toc-item.toc-h3 {
            padding-left: 14px;
            font-size: 0.82rem;
            opacity: 0.85;
        }

        .toc-item.toc-h3::before {
            content: '◦';
            font-size: 0.9rem;
        }

        .toc-item.toc-h3:hover,
        .toc-item.toc-h3.active {
            padding-left: 16px;
        }

        .cta-phone-link {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            color: var(--text-primary) !important;
            text-decoration: none;
            font-size: 0.88rem;
            font-weight: 700;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid var(--glass-border);
            padding: 8px 16px;
            border-radius: 10px;
            width: 100%;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .cta-phone-link:hover {
            background: rgba(255, 255, 255, 0.12);
            border-color: var(--primary);
            transform: translateY(-2px);
        }

        .accordion-button:not(.collapsed) {
            background-color: rgba(0, 109, 171, 0.04) !important;
            color: var(--primary) !important;
            box-shadow: none !important;
        }

        .accordion-button:focus {
            box-shadow: none !important;
            border-color: rgba(0, 109, 171, 0.1) !important;
        }
    </style>

    <!-- Details Interaction Script -->
    <script>
        const copyToClipboard = () => {
            const dummy = document.createElement('input');
            document.body.appendChild(dummy);
            dummy.value = window.location.href;
            dummy.select();
            document.execCommand('copy');
            document.body.removeChild(dummy);

            const toast = document.getElementById('share-toast');
            toast.classList.remove('d-none');
            setTimeout(() => {
                toast.classList.add('d-none');
            }, 3000);
        };

        document.addEventListener('DOMContentLoaded', () => {
            const articleContent = document.querySelector('.blog-body-html');
            const tocWidget = document.getElementById('tocWidget');
            const tocList = document.getElementById('tocList');

            if (articleContent && tocWidget && tocList) {
                // 1. Hide unwanted raw contact / footer text blocks from article body if present
                const bodyEls = articleContent.querySelectorAll('h1, h2, h3, h4, h5, h6, p, div');
                const unwantedTerms = [
                    'contact us:-', 'visit our websites:', 'visit digicoders gorakhpur:-',
                    'get touch with us', 'get in touch with us'
                ];
                bodyEls.forEach((el) => {
                    const txt = (el.innerText || '').toLowerCase().trim();
                    if (unwantedTerms.some(term => txt.includes(term))) {
                        el.style.display = 'none';
                    }
                });

                // 2. Parse and build Table of Contents dynamically
                tocList.innerHTML = '';
                const candidates = articleContent.querySelectorAll('h1, h2, h3, h4, h5, h6, p, div');
                const headingElements = [];

                const isUnwantedHeading = (text) => {
                    const lower = text.toLowerCase().trim();
                    if (!lower) return true;
                    return 
                    (
                        lower.includes('contact') ||
                        lower.includes('visit our') || 
                        lower.includes('visit digicoders') || 
                        lower.includes('get touch') || 
                        lower.includes('get in touch') || 
                        lower.includes('thedigicoders.com') ||
                        lower.includes('digicodersgorakhpur.com') ||
                        lower.includes('+91') ||
                        lower.includes('follow us') ||
                        lower.includes('phone number') ||
                        lower.includes('call us') ||
                        lower.includes('whatsapp us') ||
                        lower.includes('start your industrial training journey today')
                    );
                };

                candidates.forEach((el) => {
                    if (el.style.display === 'none' || el.offsetParent === null) {
                        return;
                    }

                    const tagName = el.tagName.toLowerCase();
                    const rawText = el.innerText ? el.innerText.trim() : '';
                    const text = rawText.replace(/\s+/g, ' ');

                    if (!text || isUnwantedHeading(text)) {
                        return;
                    }

                    let isHeading = false;
                    let level = 2;

                    if (['h1', 'h2', 'h3', 'h4', 'h5', 'h6'].includes(tagName)) {
                        isHeading = true;
                        level = parseInt(tagName.replace('h', '')) || 2;
                    } else if (tagName === 'p' || tagName === 'div') {
                        const styleAttr = el.getAttribute('style') || '';
                        const hasOutlineLevel = styleAttr.includes('mso-outline-level');
                        const hasLargeFont = /font-size\s*:\s*(1[3-9]|[2-9][0-9])(\.[0-9]+)?(pt|px|rem|em)/i.test(styleAttr);

                        const boldChild = el.querySelector('b, strong');
                        let isOnlyBold = false;
                        if (boldChild) {
                            const boldText = (boldChild.innerText || '').trim().replace(/\s+/g, ' ');
                            if (boldText === text) {
                                isOnlyBold = true;
                            }
                        }

                        if ((hasOutlineLevel || hasLargeFont || isOnlyBold) && text.length >=3 && text.length <= 110) {
                            if (!text.endsWith('.') || text.endsWith('?') || text.endsWith(':') || hasOutlineLevel) {
                                isHeading = true;
                                if (hasOutlineLevel) {
                                    const matchLevel = styleAttr.match(/mso-outline-level\s*:\s*([0-9]+)/i);
                                    level = matchLevel ? parseInt(matchLevel[1]) : 2;
                                }
                                else if (/^[0-9]+\./.test(text) || text.endsWith('?')) {
                                    level = 3;
                                }
                                 else
                                  {
                                    level = 2;
                                  }
                            }
                        }
                    }

                    if (isHeading) {
                        headingElements.push({ el, text, level });
                    }
                });
                if (headingElements.length > 0) {
                    // Ignore H1 title if it's the main blog header repeated
                    const filteredHeadings = headingElements.filter((item, idx) => {
                        return !(idx === 0 && item.level === 1);
                    });

                    filteredHeadings.forEach((item, idx) => {
                        const heading = item.el;
                        if (!heading.id) {
                            heading.id = 'heading-' + idx;
                        }

                        const link = document.createElement('a');
                        let levelClass = item.level > 2 ? ' toc-h3' : '';
                        link.className = 'toc-item' + levelClass;
                        link.innerText = item.text;
                        link.href = '#' + heading.id;

                        link.addEventListener('click', (e) => {
                            e.preventDefault();
                            heading.scrollIntoView({ behavior: 'smooth', block: 'start' });
                        });

                        tocList.appendChild(link);
                    });
                } else {
                    tocWidget.classList.add('d-none');
                }
            }
        });
    </script>
@endsection