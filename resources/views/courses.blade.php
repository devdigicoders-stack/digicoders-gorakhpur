@extends('layouts.app')

@section('content')
<section class="section-padding bg-secondary bg-opacity-10 py-5">
    <div class="container text-center">
        <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 rounded-pill fw-semibold mb-3">Our Core Offerings</span>
        <h1 class="display-5 fw-bold mb-3" style="font-family: 'Montserrat', sans-serif;">Explore Our Professional IT Courses</h1>
        <p class="lead text-secondary max-w-xl mx-auto">100% Practical training, real projects, verified certifications, and dedicated placements in Gorakhpur.</p>
    </div>
</section>

<!-- Course Programs / Training Formats -->
<section class="section-padding" id="course-programs">
    <div class="container">
        <div class="text-center max-w-xl mx-auto mb-5" data-aos="fade-up">
            <span class="text-primary fw-bold text-sm uppercase">Training Formats</span>
            <h2 class="fw-bold h1 mt-2" style="font-family: 'Montserrat', sans-serif;">Our Course Programs</h2>
            <p class="text-secondary">Choose the training format that suits your academic schedule and career goals.</p>
        </div>
        
        <div class="row g-4">
            <!-- Card 1: Vocational Training -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="glass-card premium-program-card p-4 h-100 d-flex flex-column justify-content-between">
                    <div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="icon-container">
                                <i class="bi bi-laptop fs-3"></i>
                            </div>
                            <span class="badge-blue">45-60 DAYS</span>
                        </div>
                        <h4 class="fw-bold mb-3" style="font-family: 'Montserrat', sans-serif; font-size: 1.25rem;">Vocational Training</h4>
                        <p class="text-secondary text-sm mb-4">Designed for Polytechnic/Diploma students to explore the IT industry and start an engineering career.</p>
                    </div>
                    <div class="pt-3 border-top border-secondary border-opacity-10 d-flex align-items-center justify-content-between">
                        <span class="fs-5 fw-bold" style="color: var(--blue);">₹7,000</span>
                        <a href="https://thedigicoders.com/home/vocationaltraining" class="fw-bold text-decoration-none d-inline-flex align-items-center gap-1 hover-arrow" style="color: var(--blue);" target="_blank" rel="noopener noreferrer">
                            View more <i class="bi bi-arrow-right arrow-icon"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Card 2: Summer Training -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="glass-card premium-program-card p-4 h-100 d-flex flex-column justify-content-between">
                    <div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="icon-container">
                                <i class="bi bi-sun fs-3"></i>
                            </div>
                            <span class="badge-blue">45-60 DAYS</span>
                        </div>
                        <h4 class="fw-bold mb-3" style="font-family: 'Montserrat', sans-serif; font-size: 1.25rem;">Summer Training</h4>
                        <p class="text-secondary text-sm mb-4">Intensive summer sessions for engineering students to master full-stack and modern tech stacks.</p>
                    </div>
                    <div class="pt-3 border-top border-secondary border-opacity-10 d-flex align-items-center justify-content-between">
                        <span class="fs-5 fw-bold" style="color: var(--blue);">₹7,000</span>
                        <a href="https://thedigicoders.com/home/summertraining" class="fw-bold text-decoration-none d-inline-flex align-items-center gap-1 hover-arrow" style="color: var(--blue);" target="_blank" rel="noopener noreferrer">
                            View more <i class="bi bi-arrow-right arrow-icon"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Card 3: Winter Training -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="glass-card premium-program-card p-4 h-100 d-flex flex-column justify-content-between">
                    <div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="icon-container">
                                <i class="bi bi-snow fs-3"></i>
                            </div>
                            <span class="badge-blue">45-60 DAYS</span>
                        </div>
                        <h4 class="fw-bold mb-3" style="font-family: 'Montserrat', sans-serif; font-size: 1.25rem;">Winter Training</h4>
                        <p class="text-secondary text-sm mb-4">Short-term winter programs focusing on specialized skills and real-world project development.</p>
                    </div>
                    <div class="pt-3 border-top border-secondary border-opacity-10 d-flex align-items-center justify-content-between">
                        <span class="fs-5 fw-bold" style="color: var(--blue);">₹7,000</span>
                        <a href="https://thedigicoders.com/home/wintertraining" class="fw-bold text-decoration-none d-inline-flex align-items-center gap-1 hover-arrow" style="color: var(--blue);" target="_blank" rel="noopener noreferrer">
                            View more <i class="bi bi-arrow-right arrow-icon"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Card 4: Industrial Training -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="glass-card premium-program-card p-4 h-100 d-flex flex-column justify-content-between">
                    <div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="icon-container">
                                <i class="bi bi-buildings fs-3"></i>
                            </div>
                            <span class="badge-blue">45-60 DAYS</span>
                        </div>
                        <h4 class="fw-bold mb-3" style="font-family: 'Montserrat', sans-serif; font-size: 1.25rem;">Industrial Training</h4>
                        <p class="text-secondary text-sm mb-4">Exclusively for B.Tech/MCA final year students to bridge the gap between academia and MNC standards.</p>
                    </div>
                    <div class="pt-3 border-top border-secondary border-opacity-10 d-flex align-items-center justify-content-between">
                        <span class="fs-5 fw-bold" style="color: var(--blue);">₹7,000</span>
                        <a href="https://thedigicoders.com/home/industrialtraining" class="fw-bold text-decoration-none d-inline-flex align-items-center gap-1 hover-arrow" style="color: var(--blue);" target="_blank" rel="noopener noreferrer">
                            View more <i class="bi bi-arrow-right arrow-icon"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Card 5: Apprenticeship Training -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="glass-card premium-program-card p-4 h-100 d-flex flex-column justify-content-between">
                    <div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="icon-container">
                                <i class="bi bi-mortarboard fs-3"></i>
                            </div>
                            <span class="badge-blue">6 MONTHS</span>
                        </div>
                        <h4 class="fw-bold mb-3" style="font-family: 'Montserrat', sans-serif; font-size: 1.25rem;">Apprenticeship Training</h4>
                        <p class="text-secondary text-sm mb-4">Deep-dive professional training for final year students aiming for high-salary job roles in IT.</p>
                    </div>
                    <div class="pt-3 border-top border-secondary border-opacity-10 d-flex align-items-center justify-content-between">
                        <span class="fs-5 fw-bold" style="color: var(--blue);">₹30,000</span>
                        <a href="https://thedigicoders.com/home/apprenticeshiptraining" class="fw-bold text-decoration-none d-inline-flex align-items-center gap-1 hover-arrow" style="color: var(--blue);" target="_blank" rel="noopener noreferrer">
                            View more <i class="bi bi-arrow-right arrow-icon"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Card 6: Internship Training -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="glass-card premium-program-card p-4 h-100 d-flex flex-column justify-content-between">
                    <div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="icon-container">
                                <i class="bi bi-briefcase fs-3"></i>
                            </div>
                            <span class="badge-blue">6 MONTHS</span>
                        </div>
                        <h4 class="fw-bold mb-3" style="font-family: 'Montserrat', sans-serif; font-size: 1.25rem;">Internship Training</h4>
                        <p class="text-secondary text-sm mb-4">Work on live commercial projects with our development team and gain professional experience.</p>
                    </div>
                    <div class="pt-3 border-top border-secondary border-opacity-10 d-flex align-items-center justify-content-between">
                        <span class="fs-5 fw-bold" style="color: var(--blue);">₹30,000</span>
                        <a href="https://thedigicoders.com/home/internshiptraining" class="fw-bold text-decoration-none d-inline-flex align-items-center gap-1 hover-arrow" style="color: var(--blue);" target="_blank" rel="noopener noreferrer">
                            View more <i class="bi bi-arrow-right arrow-icon"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Card 7: Project Training -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="glass-card premium-program-card p-4 h-100 d-flex flex-column justify-content-between">
                    <div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="icon-container">
                                <i class="bi bi-diagram-3 fs-3"></i>
                            </div>
                            <span class="badge-blue">45-60 DAYS</span>
                        </div>
                        <h4 class="fw-bold mb-3" style="font-family: 'Montserrat', sans-serif; font-size: 1.25rem;">Project Training</h4>
                        <p class="text-secondary text-sm mb-4">Dedicated guidance for final year minor/major projects following SDLC and industrial patterns.</p>
                    </div>
                    <div class="pt-3 border-top border-secondary border-opacity-10 d-flex align-items-center justify-content-between">
                        <span class="fs-5 fw-bold" style="color: var(--blue);">₹7,000</span>
                        <a href="https://thedigicoders.com/home/projecttraining" class="fw-bold text-decoration-none d-inline-flex align-items-center gap-1 hover-arrow" style="color: var(--blue);" target="_blank" rel="noopener noreferrer">
                            View more <i class="bi bi-arrow-right arrow-icon"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Card 8: Syllabus Training -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="glass-card premium-program-card p-4 h-100 d-flex flex-column justify-content-between">
                    <div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="icon-container">
                                <i class="bi bi-book fs-3"></i>
                            </div>
                            <span class="badge-blue">45-60 DAYS</span>
                        </div>
                        <h4 class="fw-bold mb-3" style="font-family: 'Montserrat', sans-serif; font-size: 1.25rem;">Syllabus Training</h4>
                        <p class="text-secondary text-sm mb-4">Covers academic curriculum with practical implementation for B.Tech/Diploma 1st, 2nd & 3rd year.</p>
                    </div>
                    <div class="pt-3 border-top border-secondary border-opacity-10 d-flex align-items-center justify-content-between">
                        <span class="fs-5 fw-bold" style="color: var(--blue);">₹7,000</span>
                        <a href="https://thedigicoders.com/home/syllabustraining" class="fw-bold text-decoration-none d-inline-flex align-items-center gap-1 hover-arrow" style="color: var(--blue);" target="_blank" rel="noopener noreferrer">
                            View more <i class="bi bi-arrow-right arrow-icon"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Card 9: Faculty Training -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="glass-card premium-program-card p-4 h-100 d-flex flex-column justify-content-between">
                    <div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="icon-container">
                                <i class="bi bi-person-video3 fs-3"></i>
                            </div>
                            <span class="badge-blue">45-60 DAYS</span>
                        </div>
                        <h4 class="fw-bold mb-3" style="font-family: 'Montserrat', sans-serif; font-size: 1.25rem;">Faculty Training</h4>
                        <p class="text-secondary text-sm mb-4">Upgradation programs for teachers and faculty of engineering colleges on latest tech trends.</p>
                    </div>
                    <div class="pt-3 border-top border-secondary border-opacity-10 d-flex align-items-center justify-content-between">
                        <span class="fs-5 fw-bold" style="color: var(--blue);">₹7,000</span>
                        <a href="https://thedigicoders.com/home/facultytraining" class="fw-bold text-decoration-none d-inline-flex align-items-center gap-1 hover-arrow" style="color: var(--blue);" target="_blank" rel="noopener noreferrer">
                            View more <i class="bi bi-arrow-right arrow-icon"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-padding" id="dynamic-courses">
    <div class="container">
        <div class="text-center max-w-xl mx-auto mb-5" data-aos="fade-up">
            <span class="text-primary fw-bold text-sm uppercase">Curriculum Catalog</span>
            <h2 class="fw-bold h1 mt-2" style="font-family: 'Montserrat', sans-serif;">Specialized Technology Courses</h2>
            <p class="text-secondary">Explore hands-on curriculum in key software engineering domains.</p>
        </div>
        <div class="row g-4">
            {{-- Dynamic code commented out
            @forelse($courses as $course)
                <div class="col-lg-4 col-md-6" data-aos="fade-up">
                    <div class="glass-card tilt-card h-100 d-flex flex-column justify-content-between p-4">
                        <div>
                            @if($course->is_popular)
                                <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-1 rounded-pill fw-semibold mb-3">Popular</span>
                            @else
                                <span class="badge bg-secondary bg-opacity-15 text-secondary px-3 py-1 rounded-pill fw-semibold mb-3">Professional</span>
                            @endif
                            <h4 class="fw-bold mb-3">{{ $course->name }}</h4>
                            <ul class="list-unstyled text-sm text-secondary d-flex flex-column gap-2 mb-4">
                                <li class="d-flex align-items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock text-primary" viewBox="0 0 16 16">
                                      <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                    </svg>
                                    <span><strong>Duration:</strong> {{ $course->duration }}</span>
                                </li>
                                <li class="d-flex align-items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-mortarboard text-primary" viewBox="0 0 16 16">
                                      <path d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.862L8 9.584l7.186-3.175a.5.5 0 0 0 .025-.862l-7.5-3.5zM1.79 5.5l6-2.8 6 2.8-6 2.8-6-2.8z"/>
                                    </svg>
                                    <span><strong>Eligibility:</strong> {{ Str::limit($course->eligibility, 30) }}</span>
                                </li>
                            </ul>
                        </div>
                        <div class="pt-3 border-top border-secondary border-opacity-10 d-flex align-items-center justify-content-between">
                            <span class="fs-5 fw-bold text-primary">&#8377; {{ number_format($course->fees) }}</span>
                            <a href="{{ route('courses.show', $course->slug) }}" class="btn btn-sm btn-primary rounded-pill px-3 py-2">Explore Details</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center">
                    <p class="text-secondary">No courses found.</p>
                </div>
            @endforelse
            --}}
            <div class="col-12 text-center">
                <p class="text-secondary">Please check back later or contact us directly for technology-specific custom schedules.</p>
            </div>
        </div>
    </div>
</section>
@endsection
