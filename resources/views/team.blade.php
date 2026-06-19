@extends('layouts.app')

@section('content')
<!-- Hero Header -->
<section class="section-padding position-relative d-flex align-items-center" style="min-height: 40vh; background: var(--bg-secondary);">
    <div class="container text-center">
        <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 rounded-pill fw-semibold mb-3">The Builders</span>
        <h1 class="display-4 fw-bold mb-4" style="font-family: 'Montserrat', sans-serif;">
            Meet Our <span class="gradient-text">Engineering</span> Team
        </h1>
        <p class="lead text-secondary max-w-xl mx-auto">
            Learn directly from active industry developers, database engineers, and digital design architects.
        </p>
    </div>
</section>

<!-- Team Grid -->
<section class="section-padding">
    <div class="container">
        <div class="row g-4 justify-content-center">
            <!-- Team Member 1 -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="glass-card p-4 text-center h-100 d-flex flex-column justify-content-between">
                    <div>
                        <div class="rounded-circle bg-primary bg-opacity-10 text-primary mx-auto mb-4 d-flex align-items-center justify-content-center fw-bold" style="width: 100px; height: 100px; font-size: 2.5rem;">
                            SK
                        </div>
                        <h5 class="fw-bold mb-1">Saurabh Kumar</h5>
                        <small class="text-primary fw-semibold d-block mb-3">Lead Architect & Managing Director</small>
                        <p class="text-secondary text-sm mb-0">Directs strategic growth, handles cloud infrastructure deployments, and designs system architectures.</p>
                    </div>
                    <div class="d-flex justify-content-center gap-3 mt-4 pt-3 border-top border-secondary border-opacity-10">
                        <a href="https://linkedin.com" class="text-secondary hover-primary" target="_blank"><i class="bi bi-linkedin"></i></a>
                        <a href="https://github.com" class="text-secondary hover-primary" target="_blank"><i class="bi bi-github"></i></a>
                    </div>
                </div>
            </div>

            <!-- Team Member 2 -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="glass-card p-4 text-center h-100 d-flex flex-column justify-content-between">
                    <div>
                        <div class="rounded-circle bg-primary bg-opacity-10 text-primary mx-auto mb-4 d-flex align-items-center justify-content-center fw-bold" style="width: 100px; height: 100px; font-size: 2.5rem;">
                            AP
                        </div>
                        <h5 class="fw-bold mb-1">Abhay Pratap Singh</h5>
                        <small class="text-primary fw-semibold d-block mb-3">Director & Chief Academic Relations</small>
                        <p class="text-secondary text-sm mb-0">Manages academic relationships, directs placement training systems, and coordinates enterprise hiring.</p>
                    </div>
                    <div class="d-flex justify-content-center gap-3 mt-4 pt-3 border-top border-secondary border-opacity-10">
                        <a href="https://linkedin.com" class="text-secondary hover-primary" target="_blank"><i class="bi bi-linkedin"></i></a>
                        <a href="https://github.com" class="text-secondary hover-primary" target="_blank"><i class="bi bi-github"></i></a>
                    </div>
                </div>
            </div>

            <!-- Team Member 3 -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="glass-card p-4 text-center h-100 d-flex flex-column justify-content-between">
                    <div>
                        <div class="rounded-circle bg-primary bg-opacity-10 text-primary mx-auto mb-4 d-flex align-items-center justify-content-center fw-bold" style="width: 100px; height: 100px; font-size: 2.5rem;">
                            AK
                        </div>
                        <h5 class="fw-bold mb-1">Amit Kumar</h5>
                        <small class="text-primary fw-semibold d-block mb-3">Lead Backend Developer & Instructor</small>
                        <p class="text-secondary text-sm mb-0">Expert PHP and Laravel engineer. Hands-on mentor for database operations, security frameworks, and API layers.</p>
                    </div>
                    <div class="d-flex justify-content-center gap-3 mt-4 pt-3 border-top border-secondary border-opacity-10">
                        <a href="https://linkedin.com" class="text-secondary hover-primary" target="_blank"><i class="bi bi-linkedin"></i></a>
                        <a href="https://github.com" class="text-secondary hover-primary" target="_blank"><i class="bi bi-github"></i></a>
                    </div>
                </div>
            </div>

            <!-- Team Member 4 -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="glass-card p-4 text-center h-100 d-flex flex-column justify-content-between">
                    <div>
                        <div class="rounded-circle bg-primary bg-opacity-10 text-primary mx-auto mb-4 d-flex align-items-center justify-content-center fw-bold" style="width: 100px; height: 100px; font-size: 2.5rem;">
                            AS
                        </div>
                        <h5 class="fw-bold mb-1">Abhishek Shukla</h5>
                        <small class="text-primary fw-semibold d-block mb-3">Senior Frontend & UI Lead</small>
                        <p class="text-secondary text-sm mb-0">Master of responsive web designs and frontend interactions. Trainer for Figma prototyping, CSS, and React modules.</p>
                    </div>
                    <div class="d-flex justify-content-center gap-3 mt-4 pt-3 border-top border-secondary border-opacity-10">
                        <a href="https://linkedin.com" class="text-secondary hover-primary" target="_blank"><i class="bi bi-linkedin"></i></a>
                        <a href="https://github.com" class="text-secondary hover-primary" target="_blank"><i class="bi bi-github"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
