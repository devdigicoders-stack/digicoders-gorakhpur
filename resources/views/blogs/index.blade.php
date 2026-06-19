@extends('layouts.app')

@section('content')
<section class="section-padding bg-secondary bg-opacity-10 py-5">
    <div class="container text-center">
        <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 rounded-pill fw-semibold mb-3">Our Technology Insights</span>
        <h1 class="display-5 fw-bold mb-3" style="font-family: 'Montserrat', sans-serif;">DigiCoders Corporate Blog</h1>
        <p class="lead text-secondary max-w-xl mx-auto">Latest trends in programming, database security, artificial intelligence, and software engineering career tips.</p>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <div class="row g-4">
            <!-- Sidebar with categories and latest updates -->
            <div class="col-lg-4" data-aos="fade-right">
                <div class="glass-panel p-4 rounded-3 border mb-4">
                    <h5 class="fw-bold mb-3">Categories</h5>
                    <div class="d-flex flex-column gap-2">
                        <a href="{{ route('blog.index') }}" class="text-decoration-none {{ !$category ? 'text-primary fw-bold' : 'text-secondary' }}">All Categories</a>
                        @foreach($categories as $cat)
                            <a href="{{ route('blog.index', ['category' => $cat]) }}" class="text-decoration-none {{ $category === $cat ? 'text-primary fw-bold' : 'text-secondary' }}">{{ $cat }}</a>
                        @endforeach
                    </div>
                </div>

                <div class="glass-panel p-4 rounded-3 border">
                    <h5 class="fw-bold mb-3">Latest Updates</h5>
                    <div class="d-flex flex-column gap-3">
                        @foreach($latestBlogs as $lb)
                            <div class="border-bottom pb-2 last-border-none">
                                <a href="{{ route('blog.show', $lb->slug) }}" class="fw-bold text-sm text-decoration-none text-primary d-block mb-1">{{ $lb->title }}</a>
                                <small class="text-secondary text-xs">{{ $lb->created_at->format('M d, Y') }}</small>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Blogs grid -->
            <div class="col-lg-8" data-aos="fade-left">
                <div class="row g-4">
                    @forelse($blogs as $b)
                        <div class="col-md-6">
                            <div class="glass-card h-100 d-flex flex-column justify-content-between p-4">
                                <div>
                                    <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-1 rounded-pill fw-semibold mb-3">{{ $b->category }}</span>
                                    <h4 class="fw-bold mb-3" style="font-size: 1.25rem; line-height: 1.3;">{{ $b->title }}</h4>
                                    <p class="text-secondary text-sm mb-4">{{ Str::limit(strip_tags($b->content), 130) }}</p>
                                </div>
                                <div class="pt-3 border-top border-secondary border-opacity-10 d-flex align-items-center justify-content-between">
                                    <span class="text-secondary text-xs">{{ $b->created_at->format('M d, Y') }}</span>
                                    <a href="{{ route('blog.show', $b->slug) }}" class="btn btn-sm btn-outline-primary rounded-pill px-3">Read Post</a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12 text-center">
                            <p class="text-secondary">No articles available in this category.</p>
                        </div>
                    @endforelse
                </div>

                <!-- Laravel Pagination links -->
                <div class="mt-4 d-flex justify-content-center">
                    {{ $blogs->links() }}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
