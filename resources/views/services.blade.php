@extends('layouts.app')

@section('content')
<!-- Hero Header -->
<section class="section-padding position-relative d-flex align-items-center" style="min-height: 40vh; background: var(--bg-secondary);">
    <div class="container text-center">
        <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 rounded-pill fw-semibold mb-3">Enterprise Deliveries</span>
        <h1 class="display-4 fw-bold mb-4" style="font-family: 'Montserrat', sans-serif;">
            Our Corporate <span class="gradient-text">Services</span>
        </h1>
        <p class="lead text-secondary max-w-xl mx-auto">
            Apart from technical training programs, our production dev studio builds custom, high-speed applications for enterprises worldwide.
        </p>
    </div>
</section>

<!-- Services Grid -->
<section class="section-padding">
    <div class="container">
        <div class="row g-4">
            <!-- 1. Web Development -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="glass-card p-4 h-100 d-flex flex-column justify-content-between">
                    <div>
                        <div class="text-primary fs-2 mb-3"><i class="bi bi-laptop"></i></div>
                        <h4 class="fw-bold mb-3">Custom Web Development</h4>
                        <p class="text-secondary mb-0">High-performance corporate portals, dynamic E-Commerce platforms, and SaaS products built on modern, secure frameworks (Laravel, Node, React).</p>
                    </div>
                    <div class="pt-3 mt-4 border-top border-secondary border-opacity-10">
                        <span class="text-primary text-sm fw-semibold">Next.js | React | PHP</span>
                    </div>
                </div>
            </div>
            
            <!-- 2. Software Development -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="glass-card p-4 h-100 d-flex flex-column justify-content-between">
                    <div>
                        <div class="text-primary fs-2 mb-3"><i class="bi bi-cpu"></i></div>
                        <h4 class="fw-bold mb-3">Enterprise Software (ERP/CRM)</h4>
                        <p class="text-secondary mb-0">Enterprise Resource Planning systems, Customer Relationship Management suites, school portals, and automated database trackers custom-tailored to operations.</p>
                    </div>
                    <div class="pt-3 mt-4 border-top border-secondary border-opacity-10">
                        <span class="text-primary text-sm fw-semibold">MySQL | PostgreSQL | Cloud</span>
                    </div>
                </div>
            </div>

            <!-- 3. Mobile App Development -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="glass-card p-4 h-100 d-flex flex-column justify-content-between">
                    <div>
                        <div class="text-primary fs-2 mb-3"><i class="bi bi-phone"></i></div>
                        <h4 class="fw-bold mb-3">Mobile App Engineering</h4>
                        <p class="text-secondary mb-0">Feature-rich cross-platform applications (iOS and Android) designed for quick response times, real-time sync, and fluid UX controls.</p>
                    </div>
                    <div class="pt-3 mt-4 border-top border-secondary border-opacity-10">
                        <span class="text-primary text-sm fw-semibold">Flutter | React Native | API</span>
                    </div>
                </div>
            </div>

            <!-- 4. UI/UX Interface Design -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="glass-card p-4 h-100 d-flex flex-column justify-content-between">
                    <div>
                        <div class="text-primary fs-2 mb-3"><i class="bi bi-palette"></i></div>
                        <h4 class="fw-bold mb-3">UI/UX Interface Design</h4>
                        <p class="text-secondary mb-0">Interactive Figma prototypes, user personas mapping, conversion-oriented graphic layouts, and responsive component UI styling sheets.</p>
                    </div>
                    <div class="pt-3 mt-4 border-top border-secondary border-opacity-10">
                        <span class="text-primary text-sm fw-semibold">Figma | Wireframes | Styleguides</span>
                    </div>
                </div>
            </div>

            <!-- 5. Advanced SEO & Marketing -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="glass-card p-4 h-100 d-flex flex-column justify-content-between">
                    <div>
                        <div class="text-primary fs-2 mb-3"><i class="bi bi-search"></i></div>
                        <h4 class="fw-bold mb-3">Digital Marketing & SEO</h4>
                        <p class="text-secondary mb-0">Search engine optimization algorithms, semantic HTML structures, XML generation pipelines, and high-conversion landing layout campaigns.</p>
                    </div>
                    <div class="pt-3 mt-4 border-top border-secondary border-opacity-10">
                        <span class="text-primary text-sm fw-semibold">SEO Audit | Rank Tracker | SEM</span>
                    </div>
                </div>
            </div>

            <!-- 6. Custom AI Solutions -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                <div class="glass-card p-4 h-100 d-flex flex-column justify-content-between">
                    <div>
                        <div class="text-primary fs-2 mb-3"><i class="bi bi-robot"></i></div>
                        <h4 class="fw-bold mb-3">Custom AI Integrations</h4>
                        <p class="text-secondary mb-0">Integrating generative language model APIs, custom chatbot interfaces, machine learning data pipes, and semantic search widgets.</p>
                    </div>
                    <div class="pt-3 mt-4 border-top border-secondary border-opacity-10">
                        <span class="text-primary text-sm fw-semibold">OpenAI API | Embeddings | Vector DB</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="section-padding bg-secondary bg-opacity-10 text-center">
    <div class="container">
        <h2 class="fw-bold mb-4" style="font-family: 'Montserrat', sans-serif;">Have an Enterprise Project Idea?</h2>
        <p class="text-secondary mb-4 max-w-xl mx-auto">Get in touch with our engineering leads to outline your database architectures, feature scopes, and launch schedules.</p>
        <a href="{{ route('contact') }}" class="btn-premium">Initiate Consultancy</a>
    </div>
</section>
@endsection
