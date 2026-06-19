@extends('layouts.app')

@section('content')
<section class="section-padding py-5">
    <div class="container">
        <div class="row g-5">
            <!-- Main Article Area -->
            <div class="col-lg-8" data-aos="fade-right">
                <nav aria-label="breadcrumb" class="mb-3">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('blog.index') }}">Blog</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ Str::limit($blog->title, 20) }}</li>
                    </ol>
                </nav>
                
                <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-1 rounded-pill fw-semibold mb-3">{{ $blog->category }}</span>
                <h1 class="display-6 fw-bold mb-3" style="font-family: 'Montserrat', sans-serif; line-height: 1.25;">{{ $blog->title }}</h1>
                <p class="text-secondary text-sm mb-4">Published on {{ $blog->created_at->format('F d, Y') }} by DigiCoders Tech Lead</p>
                
                <hr class="my-4 border-secondary border-opacity-10">

                <div class="blog-content text-secondary" style="font-size: 1.05rem; line-height: 1.7;">
                    {!! nl2br(e($blog->content)) !!}
                </div>

                <hr class="my-5 border-secondary border-opacity-10">

                <!-- Dynamic comments placeholder -->
                <div class="comments-placeholder glass-panel p-4 rounded-3 border">
                    <h5 class="fw-bold mb-3">Comments</h5>
                    <p class="text-secondary text-sm mb-0">Comments are moderated and will load dynamically upon administrator approval.</p>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4" data-aos="fade-left">
                <!-- Related posts -->
                @if($relatedBlogs->isNotEmpty())
                    <div class="glass-panel p-4 rounded-3 border mb-4">
                        <h5 class="fw-bold mb-3">Related Posts</h5>
                        <div class="d-flex flex-column gap-3">
                            @foreach($relatedBlogs as $rb)
                                <div class="border-bottom pb-2 last-border-none">
                                    <a href="{{ route('blog.show', $rb->slug) }}" class="fw-bold text-sm text-decoration-none text-primary d-block mb-1">{{ $rb->title }}</a>
                                    <small class="text-secondary text-xs">{{ $rb->created_at->format('M d, Y') }}</small>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif

                <!-- Latest Posts -->
                <div class="glass-panel p-4 rounded-3 border mb-4">
                    <h5 class="fw-bold mb-3">Latest Posts</h5>
                    <div class="d-flex flex-column gap-3">
                        @foreach($latestBlogs as $lb)
                            <div class="border-bottom pb-2 last-border-none">
                                <a href="{{ route('blog.show', $lb->slug) }}" class="fw-bold text-sm text-decoration-none text-primary d-block mb-1">{{ $lb->title }}</a>
                                <small class="text-secondary text-xs">{{ $lb->created_at->format('M d, Y') }}</small>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Registration Sidebar Widget -->
                <div class="glass-card p-4">
                    <h5 class="fw-bold mb-3">Looking to Up-skill?</h5>
                    <p class="text-secondary text-sm mb-3">Join our professional industrial training programs and build corporate-level products under expert developers.</p>
                    <a href="{{ route('contact') }}" class="btn-premium d-block text-center text-decoration-none">Enroll Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
