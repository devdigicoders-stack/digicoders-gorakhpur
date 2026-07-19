@extends('layouts.app')

@section('content')
    <!-- Blog Hero Section -->
    <section class="position-relative overflow-hidden py-4 border-bottom"
        style="background: linear-gradient(135deg, transparent 0%, rgba(231, 96, 40, 0.03) 100%); border-color: var(--glass-border) !important;">
        <!-- Decorative blurred background circles -->
        <div class="position-absolute rounded-circle bg-secondary opacity-5"
            style="width: 200px; height: 200px; bottom: -50px; right: -50px; filter: blur(50px);"></div>

        <div class="container position-relative z-3 py-2">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8" data-aos="fade-up">
                    <span
                        class="badge bg-white bg-opacity-5 text-primary border border-primary border-opacity-20 px-3 py-1.5 rounded-pill fw-semibold text-xs uppercase mb-2.5 shadow-sm"
                        style="backdrop-filter: blur(5px); font-size: 0.7rem; letter-spacing: 0.5px;">
                        <i class="bi bi-journal-text me-1 text-primary"></i> DigiCoders Tech Blog
                    </span>
                    <h2 class="fw-extrabold mb-3"
                        style="font-family: 'Montserrat', sans-serif; font-size: 3.6rem; letter-spacing: -0.5px; color: var(--text-primary) !important;">
                        Stay Updated with <span class="text-brand-blue" style="color: var(--primary) !important;">Latest
                            Tech</span> Trends
                    </h2>
                    <p class="text-secondary mb-0 mx-auto"
                        style="color: var(--text-secondary) !important; font-size: 1.05rem; line-height: 1.6; max-width: 680px;">
                        Explore industry insights, technical tutorials, summer training opportunities, and success
                        guidelines from our expert mentors.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Blogs Content Section -->
    <section class="section-padding">
        <div class="container">
            <!-- Search & Filters Container (Premium Glass Panel) -->
            <div class="glass-panel p-4 rounded-4 mb-5 border border-white border-opacity-10" data-aos="fade-up">
                <div class="row align-items-center justify-content-between g-3">
                    <!-- Search Input -->
                    <div class="col-lg-4 col-md-5">
                        <div class="position-relative">
                            <input type="text" id="blog-search"
                                class="form-control ps-4 pe-5 py-2.5 rounded-3 border-0 bg-white bg-opacity-5 text-primary"
                                placeholder="Search blog posts..."
                                style="background-color: rgba(255,255,255,0.05); border: 1px solid var(--glass-border) !important; color: var(--text-primary); outline: none;">
                            <span class="position-absolute end-0 top-50 translate-middle-y me-3 text-secondary">
                                <i class="bi bi-search"></i>
                            </span>
                        </div>
                    </div>

                    <!-- Categories Tabs Scroll -->
                    <div class="col-lg-8 col-md-7">
                        <div class="d-flex align-items-center gap-2 overflow-x-auto pb-1" id="category-tabs"
                            style="scrollbar-width: thin; -ms-overflow-style: none;">
                            <button
                                class="btn filter-tab active px-3 py-1.5 rounded-pill text-xs fw-semibold border border-primary border-opacity-25"
                                data-category="all">
                                All Posts
                            </button>
                            <button class="btn filter-tab px-3 py-1.5 rounded-pill text-xs fw-semibold"
                                data-category="mern">
                                MERN Stack
                            </button>
                            <button class="btn filter-tab px-3 py-1.5 rounded-pill text-xs fw-semibold"
                                data-category="laravel">
                                PHP & Laravel
                            </button>
                            <button class="btn filter-tab px-3 py-1.5 rounded-pill text-xs fw-semibold"
                                data-category="python">
                                Python Dev
                            </button>
                            <button class="btn filter-tab px-3 py-1.5 rounded-pill text-xs fw-semibold"
                                data-category="android">
                                Android & Flutter
                            </button>
                            <button class="btn filter-tab px-3 py-1.5 rounded-pill text-xs fw-semibold"
                                data-category="trends">
                                Tech Trends
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Loading Skeletons -->
            <div id="blog-loading-skeletons" class="row g-4">
                @for ($i = 0; $i < 6; $i++)
                    <div class="col-lg-4 col-md-6">
                        <div class="glass-card p-0 rounded-4 overflow-hidden border border-white border-opacity-10"
                            style="height: 420px; background: var(--glass-bg);">
                            <div class="w-100 skeleton-pulse" style="aspect-ratio: 4 / 3; background: rgba(128,128,128,0.15);">
                            </div>
                            <div class="p-4 d-flex flex-column justify-content-between" style="height: 220px;">
                                <div>
                                    <div class="skeleton-pulse rounded mb-2"
                                        style="width: 30%; height: 16px; background: rgba(128,128,128,0.15);"></div>
                                    <div class="skeleton-pulse rounded mb-2"
                                        style="width: 90%; height: 24px; background: rgba(128,128,128,0.15);"></div>
                                    <div class="skeleton-pulse rounded mb-1"
                                        style="width: 100%; height: 14px; background: rgba(128,128,128,0.15);"></div>
                                    <div class="skeleton-pulse rounded"
                                        style="width: 70%; height: 14px; background: rgba(128,128,128,0.15);"></div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <div class="skeleton-pulse rounded"
                                        style="width: 25%; height: 14px; background: rgba(128,128,128,0.15);"></div>
                                    <div class="skeleton-pulse rounded"
                                        style="width: 30%; height: 32px; background: rgba(128,128,128,0.15);"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>

            <!-- Blog Grid (Dynamic Injection) -->
            <div id="blogs-grid-container" class="row g-4 d-none">
                <!-- Blogs will be injected here -->
            </div>

            <!-- No Results State (initially hidden) -->
            <div id="blogs-empty-state" class="text-center py-5 d-none">
                <div class="glass-card p-5 max-w-md mx-auto rounded-4 border border-white border-opacity-10"
                    style="max-width: 500px; background: var(--glass-bg);">
                    <div class="text-warning mb-3">
                        <i class="bi bi-search fs-1 text-secondary"></i>
                    </div>
                    <h4 class="fw-bold mb-2">No Matching Blog Posts</h4>
                    <p class="text-secondary mb-4">We couldn't find any articles matching your search query. Try typing
                        another keyword or selecting a different category.</p>
                    <button class="btn btn-premium btn-sm" id="reset-search-btn">Reset Search</button>
                </div>
            </div>

            <!-- Error fallback state (initially hidden) -->
            <div id="blogs-error-state" class="text-center py-5 d-none">
                <div class="glass-card p-5 max-w-md mx-auto rounded-4 border border-white border-opacity-10"
                    style="max-width: 500px; background: var(--glass-bg);">
                    <div class="text-danger mb-3">
                        <i class="bi bi-exclamation-triangle fs-1"></i>
                    </div>
                    <h4 class="fw-bold mb-2">Unable to Load Blog Posts</h4>
                    <p class="text-secondary mb-4">We are currently experiencing issues connecting to our blog API database.
                        Please try again later or visit our main site.</p>
                    <a href="https://thedigicoders.com/blog" class="btn btn-premium btn-sm" target="_blank"
                        rel="noopener noreferrer">Visit DigiCoders Blog</a>
                </div>
            </div>

            <!-- Pagination Control (Glass container) -->
            <div id="blogs-pagination-wrap" class="d-none mt-5">
                <div
                    class="glass-panel p-3 rounded-4 d-flex justify-content-between align-items-center border border-white border-opacity-10">
                    <button id="prev-page-btn" class="btn btn-glass-sm"
                        style="border: 1px solid var(--glass-border) !important; background: transparent; color: var(--text-primary);">
                        <i class="bi bi-chevron-left"></i> Previous
                    </button>
                    <span class="text-sm font-semibold text-secondary" id="pagination-info">Page 1 of 1</span>
                    <button id="next-page-btn" class="btn btn-glass-sm"
                        style="border: 1px solid var(--glass-border) !important; background: transparent; color: var(--text-primary);">
                        Next <i class="bi bi-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Custom CSS styles specifically for the premium filters & cards -->
    <style>
        .filter-tab {
            white-space: nowrap;
            background: transparent;
            color: var(--text-secondary);
            border: 1px solid var(--glass-border) !important;
            transition: all 0.3s ease;
        }

        .filter-tab:hover {
            border-color: var(--primary) !important;
            color: var(--text-primary);
        }

        .filter-tab.active {
            background-color: var(--primary) !important;
            color: white !important;
            border-color: var(--primary) !important;
            box-shadow: 0 4px 12px rgba(0, 109, 171, 0.25);
        }

        .blog-premium-card {
            background: var(--glass-bg);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid var(--glass-border);
            box-shadow: 0 8px 32px 0 var(--glass-shadow);
            border-radius: 16px;
            overflow: hidden;
            height: 100%;
            display: flex;
            flex-direction: column;
            transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
            position: relative;
        }

        .blog-premium-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.08), transparent);
            transition: 0.5s;
            pointer-events: none;
            z-index: 1;
        }

        .blog-premium-card:hover::before {
            left: 100%;
        }

        .blog-premium-card:hover {
            transform: translateY(-8px);
            border-color: var(--card-hover-border);
            box-shadow: 0 16px 40px 0 rgba(0, 109, 171, 0.15);
        }

        .blog-card-img-wrap {
            position: relative;
            aspect-ratio: 4 / 3;
            overflow: hidden;
        }

        .blog-card-img-wrap img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s cubic-bezier(0.25, 0.8, 0.25, 1);
        }

        .blog-premium-card:hover .blog-card-img-wrap img {
            transform: scale(1.08);
        }

        .blog-card-category {
            position: absolute;
            top: 15px;
            left: 15px;
            background: rgba(0, 109, 171, 0.85);
            backdrop-filter: blur(5px);
            color: white;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.7rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            border: 1px solid rgba(255, 255, 255, 0.15);
        }

        .blog-card-body {
            padding: 24px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            flex-grow: 1;
        }

        .blog-card-title {
            font-size: 1.15rem;
            font-weight: 700;
            line-height: 1.4;
            margin-bottom: 12px;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            font-family: 'Montserrat', sans-serif;
        }

        .blog-card-title a {
            color: var(--text-primary);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .blog-card-title a:hover {
            color: var(--primary);
        }

        .blog-card-desc {
            color: var(--text-secondary);
            font-size: 0.875rem;
            line-height: 1.6;
            margin-bottom: 20px;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .blog-card-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-top: 1px solid var(--glass-border);
            padding-top: 16px;
            margin-top: auto;
        }

        .blog-card-btn {
            color: var(--primary);
            font-size: 0.85rem;
            font-weight: 600;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 6px;
            transition: all 0.3s ease;
        }

        .blog-card-btn i {
            transition: transform 0.3s ease;
        }

        .blog-premium-card:hover .blog-card-btn {
            color: var(--secondary);
        }

        .blog-premium-card:hover .blog-card-btn i {
            transform: translateX(4px);
        }

        .skeleton-pulse {
            animation: skeleton-blink 1.5s ease-in-out infinite;
        }

        @keyframes skeleton-blink {
            0% {
                opacity: 0.6;
            }

            50% {
                opacity: 1;
            }

            100% {
                opacity: 0.6;
            }
        }
    </style>

    <!-- Client-Side Fetch & Logic script -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // State variables
            let allBlogs = [];
            let filteredBlogs = [];
            let categories = [];

            // Pagination state
            const itemsPerPage = 9;
            let currentPage = 1;
            let totalPages = 1;

            // DOM Elements
            const skeletons = document.getElementById('blog-loading-skeletons');
            const gridContainer = document.getElementById('blogs-grid-container');
            const emptyState = document.getElementById('blogs-empty-state');
            const errorState = document.getElementById('blogs-error-state');
            const searchInput = document.getElementById('blog-search');
            const categoryTabsContainer = document.getElementById('category-tabs');
            const paginationWrap = document.getElementById('blogs-pagination-wrap');
            const paginationInfo = document.getElementById('pagination-info');
            const prevPageBtn = document.getElementById('prev-page-btn');
            const nextPageBtn = document.getElementById('next-page-btn');
            const resetSearchBtn = document.getElementById('reset-search-btn');

            // API endpoints fallback
            const endpoints = [
                'https://thedigicoders.com/api/blogs',
                'http://thedigicoders.com/api/blogs',
                'http://localhost/thedigicoders-com/api/blogs'
            ];

            // Date Format helper
            const formatDate = (dateStr) => {
                try {
                    const date = new Date(dateStr);
                    return date.toLocaleDateString('en-US', { month: 'short', day: 'numeric', year: 'numeric' });
                } catch (e) {
                    return dateStr;
                }
            };

            // HTML Tag Strip helper
            const stripTags = (html) => {
                return (html || '').replace(/<\/?[^>]+(>|$)/g, "");
            };

            // Fetch and Initialise Blogs
            const initBlogs = async () => {
                let data = null;
                for (const url of endpoints) {
                    try {
                        const response = await fetch(url);
                        if (response.ok) {
                            data = await response.json();
                            break;
                        }
                    } catch (e) {
                        console.warn(`Failed to fetch blogs from ${url}:`, e);
                    }
                }

                if (!data) {
                    // Show error fallback
                    skeletons.classList.add('d-none');
                    errorState.classList.remove('d-none');
                    return;
                }

                // Filter blogs: status "true" and location strictly containing "gorakhpur"
                allBlogs = data.filter(item => {
                    const statusMatch = item.status === 'true';
                    const locationVal = (item.location || item.city || item.branch || '').toLowerCase();
                    return statusMatch && locationVal.includes('gorakhpur');
                });

                // Map categories dynamically based on title/content keywords
                const getBlogCategory = (title, content) => {
                    const searchString = (title + ' ' + content).toLowerCase();
                    if (searchString.includes('mern') || searchString.includes('react') || searchString.includes('node') || searchString.includes('express') || searchString.includes('mongodb')) {
                        return 'mern';
                    }
                    if (searchString.includes('php') || searchString.includes('laravel') || searchString.includes('codeigniter')) {
                        return 'laravel';
                    }
                    if (searchString.includes('python') || searchString.includes('django') || searchString.includes('flask') || searchString.includes('machine learning') || searchString.includes('data science')) {
                        return 'python';
                    }
                    if (searchString.includes('android') || searchString.includes('flutter') || searchString.includes('mobile app') || searchString.includes('kotlin') || searchString.includes('java')) {
                        return 'android';
                    }
                    return 'trends';
                };

                // Add computedCategory to items
                allBlogs = allBlogs.map(item => {
                    return {
                        ...item,
                        computedCategory: getBlogCategory(item.title, item.content)
                    };
                });

                // Sort blogs by date descending
                allBlogs.sort((a, b) => new Date(b.date) - new Date(a.date));

                // Read URL query parameters if any
                const urlParams = new URLSearchParams(window.location.search);
                const queryParam = urlParams.get('search');
                const catParam = urlParams.get('category');

                if (queryParam) {
                    searchInput.value = queryParam;
                }

                if (catParam) {
                    const matchedTab = Array.from(document.querySelectorAll('.filter-tab'))
                        .find(t => t.getAttribute('data-category').toLowerCase() === catParam.toLowerCase());
                    if (matchedTab) {
                        document.querySelectorAll('.filter-tab').forEach(t => t.classList.remove('active'));
                        matchedTab.classList.add('active');
                    }
                }

                // Add click event listeners to category tabs
                const tabs = document.querySelectorAll('.filter-tab');
                tabs.forEach(tab => {
                    tab.addEventListener('click', () => {
                        tabs.forEach(t => t.classList.remove('active'));
                        tab.classList.add('active');
                        currentPage = 1; // Reset to page 1
                        filterAndSearchBlogs();
                    });
                });

                // Initial search and filter
                filterAndSearchBlogs();

                // Hide skeletons & reveal container
                skeletons.classList.add('d-none');
                gridContainer.classList.remove('d-none');
            };

            // Category label dictionary
            const getCategoryLabel = (category) => {
                switch (category) {
                    case 'mern': return 'MERN Stack';
                    case 'laravel': return 'PHP & Laravel';
                    case 'python': return 'Python Dev';
                    case 'android': return 'Android & Flutter';
                    default: return 'Tech Trends';
                }
            };

            // Filter and Search Engine
            const filterAndSearchBlogs = () => {
                const searchQuery = searchInput.value.toLowerCase().trim();
                const activeTab = document.querySelector('.filter-tab.active');
                const categoryFilter = activeTab ? activeTab.getAttribute('data-category') : 'all';

                filteredBlogs = allBlogs.filter(blog => {
                    const title = stripTags(blog.title).toLowerCase();
                    const desc = stripTags(blog.meta_description || blog.content).toLowerCase();

                    const matchesSearch = title.includes(searchQuery) || desc.includes(searchQuery);
                    const matchesCategory = categoryFilter === 'all' || blog.computedCategory === categoryFilter;

                    return matchesSearch && matchesCategory;
                });

                renderCurrentPage();
            };

            // Render matching blogs onto current page grid
            const renderCurrentPage = () => {
                gridContainer.innerHTML = '';

                if (filteredBlogs.length === 0) {
                    gridContainer.classList.add('d-none');
                    emptyState.classList.remove('d-none');
                    paginationWrap.classList.add('d-none');
                    return;
                }

                emptyState.classList.add('d-none');
                gridContainer.classList.remove('d-none');

                // Calculate pagination math
                totalPages = Math.ceil(filteredBlogs.length / itemsPerPage);
                if (currentPage > totalPages) currentPage = totalPages;
                if (currentPage < 1) currentPage = 1;

                const startIndex = (currentPage - 1) * itemsPerPage;
                const endIndex = startIndex + itemsPerPage;
                const pageItems = filteredBlogs.slice(startIndex, endIndex);

                // Populate grid
                pageItems.forEach((blog, index) => {
                    const cleanTitle = stripTags(blog.title);
                    const cleanDesc = blog.meta_description || stripTags(blog.content).substring(0, 120) + '...';

                    // Route link to local details page
                    const detailUrl = `{{ url('/blog') }}/${blog.url}`;

                    const col = document.createElement('div');
                    col.className = 'col-lg-4 col-md-6';
                    col.setAttribute('data-aos', 'fade-up');
                    col.setAttribute('data-aos-delay', `${(index % 3) * 100}`);

                    col.innerHTML = `
                            <div class="blog-premium-card">
                                <div class="blog-card-img-wrap">
                                    <span class="blog-card-category">${getCategoryLabel(blog.computedCategory)}</span>
                                    <img src="${blog.img}" 
                                         alt="${cleanTitle}" 
                                         loading="lazy"
                                         onerror="this.src='https://thedigicoders.com/public/uploads/blog/default.png';">
                                </div>
                                <div class="blog-card-body">
                                    <div>
                                        <h4 class="blog-card-title" title="${cleanTitle}">
                                            <a href="${detailUrl}">${cleanTitle}</a>
                                        </h4>
                                        <p class="blog-card-desc">${cleanDesc}</p>
                                    </div>
                                    <div class="blog-card-footer">
                                        <span class="text-secondary text-xs" style="font-size: 0.75rem;"><i class="bi bi-calendar3 me-1"></i>${formatDate(blog.date)}</span>
                                        <a href="${detailUrl}" class="blog-card-btn">
                                            Read Post <i class="bi bi-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        `;
                    gridContainer.appendChild(col);
                });

                // Init AOS on dynamic elements
                if (typeof AOS !== 'undefined') {
                    AOS.refresh();
                }

                // Render pagination wrapper
                if (totalPages > 1) {
                    paginationWrap.classList.remove('d-none');
                    paginationInfo.innerText = `Page ${currentPage} of ${totalPages}`;
                    prevPageBtn.disabled = currentPage === 1;
                    nextPageBtn.disabled = currentPage === totalPages;
                } else {
                    paginationWrap.classList.add('d-none');
                }
            };

            // Event Listeners for Filters/Search
            searchInput.addEventListener('input', () => {
                currentPage = 1;
                filterAndSearchBlogs();
            });

            resetSearchBtn.addEventListener('click', () => {
                searchInput.value = '';
                const allTab = document.querySelector('.filter-tab[data-category="all"]');
                if (allTab) {
                    document.querySelectorAll('.filter-tab').forEach(t => t.classList.remove('active'));
                    allTab.classList.add('active');
                }
                currentPage = 1;
                filterAndSearchBlogs();
            });

            // Pagination Button listeners
            prevPageBtn.addEventListener('click', () => {
                if (currentPage > 1) {
                    currentPage--;
                    renderCurrentPage();
                    document.querySelector('.section-padding').scrollIntoView({ behavior: 'smooth' });
                }
            });

            nextPageBtn.addEventListener('click', () => {
                if (currentPage < totalPages) {
                    currentPage++;
                    renderCurrentPage();
                    document.querySelector('.section-padding').scrollIntoView({ behavior: 'smooth' });
                }
            });

            // Launch the module!
            initBlogs();
        });
    </script>
@endsection