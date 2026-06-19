@extends('layouts.app')

@section('content')
<!-- Hero Header -->
<section class="section-padding position-relative d-flex align-items-center" style="min-height: 40vh; background: var(--bg-secondary);">
    <div class="container text-center">
        <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 rounded-pill fw-semibold mb-3">Who We Are</span>
        <h1 class="display-4 fw-bold mb-4" style="font-family: 'Montserrat', sans-serif;">
            About <span class="gradient-text">DigiCoders</span> Technologies
        </h1>
        <p class="lead text-secondary max-w-xl mx-auto">
            Gorakhpur's leading IT training and software development powerhouse, preparing next-generation engineers for global tech platforms.
        </p>
    </div>
</section>

<!-- Company Vision & Details -->
<section class="section-padding">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6" data-aos="fade-right">
                <h2 class="fw-bold mb-4" style="font-family: 'Montserrat', sans-serif; color: var(--primary);">Bridging Academic Gaps With Execution</h2>
                <p class="text-secondary mb-3">
                    DigiCoders Technologies Pvt. Ltd. was founded with a singular, clear directive: to stop passive theoretical tutoring and construct an environment where candidates learn through actual practical coding.
                </p>
                <p class="text-secondary mb-4">
                    Based in the heart of Gorakhpur, we act as both an elite software consultancy and a dedicated development lab. Every instructor is an active developer or designer working on real production applications, databases, and APIs.
                </p>
                
                <div class="row g-3">
                    <div class="col-md-6 d-flex gap-2">
                        <i class="bi bi-patch-check text-primary fs-4"></i>
                        <div>
                            <h6 class="fw-bold mb-1">ISO 9001:2015 Certification</h6>
                            <p class="text-secondary text-sm">Validating quality training systems across all departments.</p>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex gap-2">
                        <i class="bi bi-award text-primary fs-4"></i>
                        <div>
                            <h6 class="fw-bold mb-1">100% Placement Record</h6>
                            <p class="text-secondary text-sm">Placing thousands of engineering alumni across tier-1 platforms.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6" data-aos="fade-left">
                <div class="glass-card p-5">
                    <h4 class="fw-bold mb-4" style="color: var(--secondary);">Our Core Principles</h4>
                    <ul class="list-unstyled d-flex flex-column gap-3">
                        <li class="d-flex gap-3">
                            <span class="rounded-circle bg-success bg-opacity-10 text-success d-flex align-items-center justify-content-center" style="width: 32px; height: 32px; flex-shrink: 0;"><i class="bi bi-check2"></i></span>
                            <div>
                                <h6 class="fw-bold mb-0">Live Server Deployments</h6>
                                <small class="text-secondary">Students launch and host projects in real-time, working with actual domain routes.</small>
                            </div>
                        </li>
                        <li class="d-flex gap-3">
                            <span class="rounded-circle bg-success bg-opacity-10 text-success d-flex align-items-center justify-content-center" style="width: 32px; height: 32px; flex-shrink: 0;"><i class="bi bi-check2"></i></span>
                            <div>
                                <h6 class="fw-bold mb-0">Version Control Workflows</h6>
                                <small class="text-secondary">Using Git and GitHub from day one for code management and collaboration.</small>
                            </div>
                        </li>
                        <li class="d-flex gap-3">
                            <span class="rounded-circle bg-success bg-opacity-10 text-success d-flex align-items-center justify-content-center" style="width: 32px; height: 32px; flex-shrink: 0;"><i class="bi bi-check2"></i></span>
                            <div>
                                <h6 class="fw-bold mb-0">Interactive Mentorship</h6>
                                <small class="text-secondary">Weekly 1-on-1 code reviews to debug logical gaps and improve architecture.</small>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Student Testimonials -->
@if($testimonials->count() > 0)
<section class="section-padding bg-secondary bg-opacity-10">
    <div class="container">
        <div class="text-center max-w-xl mx-auto mb-5" data-aos="fade-up">
            <span class="text-primary fw-bold text-sm uppercase">Success Stories</span>
            <h2 class="fw-bold h1 mt-2" style="font-family: 'Montserrat', sans-serif;">What Alumni Say</h2>
        </div>
        <div class="row g-4">
            @foreach($testimonials as $t)
                <div class="col-md-6" data-aos="fade-up">
                    <div class="glass-card p-4 h-100 d-flex flex-column justify-content-between">
                        <p class="text-secondary italic mb-4">"{{ $t->review_text }}"</p>
                        <div class="d-flex align-items-center gap-3">
                            <div class="rounded-circle bg-primary bg-opacity-20 d-flex align-items-center justify-content-center fw-bold text-primary" style="width: 50px; height: 50px; font-size: 1.25rem;">
                                {{ substr($t->student_name, 0, 1) }}
                            </div>
                            <div>
                                <h6 class="fw-bold mb-0">{{ $t->student_name }}</h6>
                                <small class="text-secondary d-block">{{ $t->course_name }}</small>
                                @if($t->company_name)
                                    <small class="text-primary fw-semibold">Placed at {{ $t->company_name }}</small>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- Accordion FAQs -->
@if($faqs->count() > 0)
<section class="section-padding">
    <div class="container">
        <div class="text-center max-w-xl mx-auto mb-5">
            <span class="text-primary fw-bold text-sm uppercase">General Answers</span>
            <h2 class="fw-bold h1 mt-2" style="font-family: 'Montserrat', sans-serif;">Frequently Asked Questions</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="accordion" id="faqAccordion">
                    @foreach($faqs as $index => $faq)
                        <div class="accordion-item" data-aos="fade-up">
                            <h2 class="accordion-header" id="heading{{ $index }}">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $index }}" aria-expanded="false" aria-controls="collapse{{ $index }}">
                                    {{ $faq->question }}
                                </button>
                            </h2>
                            <div id="collapse{{ $index }}" class="accordion-collapse collapse" aria-labelledby="heading{{ $index }}" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    {{ $faq->answer }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endif
@endsection
