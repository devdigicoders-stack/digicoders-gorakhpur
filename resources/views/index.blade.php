@extends('layouts.app')
@section('content')
    <!-- 1. Hero Section -->
    <section class="hero-section position-relative">
        <!-- Desktop Full-bleed Background Image on Right -->
        <div class="hero-right-bg-image"
            style="background-image: url('{{ asset('assets/images/hero-student-new.jpg') }}');"></div>
        <div class="container position-relative" style="z-index: 2;">
            <!-- Top Badges Row (Trophy Badge Left) -->
            <div class="row align-items-center g-3 mb-3">
                <div class="col-12 text-center text-md-start">
                    <div class="hero-top-info-badge training-badge d-inline-flex align-items-center gap-2">
                        <div class="hero-top-info-badge-icon">
                            <i class="bi bi-trophy-fill"></i>
                        </div>
                        <div>
                            <div class="hero-top-info-badge-title">No.1 Choice for Summer Training</div>
                            <div class="hero-top-info-badge-sub">in Gorakhpur</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Content Row -->
            <div class="row justify-content-between g-4 mb-3">
                <!-- Left: Text & Grid Content -->
                <div class="col-lg-7 d-flex flex-column justify-content-between" data-aos="fade-right"
                    data-aos-duration="800">
                    <div>
                        <span class="hero-tagline mb-2 d-inline-block">LEARN. BUILD. INNOVATE. GET PLACED.</span>
                        <h1 class="hero-headline mb-3">
                            Your Summer,<br>
                            Your <span class="hero-headline-accent-blue">Success</span> Story!
                        </h1>
                        <p class="hero-subtext mb-3">
                            Industry Oriented Training for B.Tech (CS/IT), Diploma (CS/IT), BCA, MCA & More
                        </p>

                        <!-- Feature Badges Row (4 Columns in a single line on large screens) -->
                        <div class="row g-2 hero-features-grid mb-3">
                            <div class="col-xl-3 col-md-6 col-12">
                                <div class="feature-badge-card feature-card-blue d-flex align-items-center gap-2">
                                    <div class="feature-badge-icon">
                                        <i class="bi bi-code-slash"></i>
                                    </div>
                                    <div>
                                        <div class="feature-badge-title">Live Projects</div>
                                        <div class="feature-badge-desc">Hands-on Experience</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 col-12">
                                <div class="feature-badge-card feature-card-green d-flex align-items-center gap-2">
                                    <div class="feature-badge-icon">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div>
                                        <div class="feature-badge-title">Expert Mentors</div>
                                        <div class="feature-badge-desc">Industry Professionals</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 col-12">
                                <div class="feature-badge-card feature-card-purple d-flex align-items-center gap-2">
                                    <div class="feature-badge-icon">
                                        <i class="bi bi-briefcase"></i>
                                    </div>
                                    <div>
                                        <div class="feature-badge-title">Placement</div>
                                        <div class="feature-badge-desc">100% Assistance</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 col-12">
                                <div class="feature-badge-card feature-card-orange d-flex align-items-center gap-2">
                                    <div class="feature-badge-icon">
                                        <i class="bi bi-award"></i>
                                    </div>
                                    <div>
                                        <div class="feature-badge-title">Certification</div>
                                        <div class="feature-badge-desc">Industry Recognized</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Bottom: Statistics Capsule Bar -->
                    <div class="hero-stats-capsule-bar mb-3" data-aos="fade-up" data-aos-delay="200">
                        <div class="row g-3 text-center justify-content-between align-items-center w-100 m-0">
                            <div class="col-md-3 col-6 border-end-md">
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <div class="stat-capsule-icon-new stat-blue"><i class="bi bi-people-fill"></i></div>
                                    <div class="text-start">
                                        <h3 class="stat-capsule-val mb-0 stat-number" data-target="21000">0+</h3>
                                        <span class="stat-capsule-lbl">Trained Students</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6 border-end-md">
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <div class="stat-capsule-icon-new stat-green"><i class="bi bi-code-slash"></i></div>
                                    <div class="text-start">
                                        <h3 class="stat-capsule-val mb-0 stat-number" data-target="1000">0+</h3>
                                        <span class="stat-capsule-lbl">Live Projects</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6 border-end-md">
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <div class="stat-capsule-icon-new stat-purple"><i class="bi bi-briefcase-fill"></i>
                                    </div>
                                    <div class="text-start">
                                        <h3 class="stat-capsule-val mb-0 stat-number" data-target="500">0+</h3>
                                        <span class="stat-capsule-lbl">Hiring Partners</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <div class="stat-capsule-icon-new stat-orange"><i class="bi bi-graph-up-arrow"></i>
                                    </div>
                                    <div class="text-start">
                                        <h3 class="stat-capsule-val mb-0">100%</h3>
                                        <span class="stat-capsule-lbl">Practical Training</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column (Overlays on Desktop, stacked on Mobile) -->
                <div class="col-lg-5 position-relative d-flex flex-column justify-content-end" style="z-index: 5;"
                    data-aos="fade-left" data-aos-duration="900" data-aos-delay="100">

                </div>
            </div>

            <!-- Bottom: Technologies strip -->
            <div class="hero-tech-strip-container d-flex flex-wrap align-items-center justify-content-center gap-3 py-2 border-top border-secondary border-opacity-10 mt-2"
                data-aos="fade-up" data-aos-delay="300">
                <span class="hero-tech-strip-label">Technologies You'll Work With</span>
                <div class="d-flex flex-wrap align-items-center gap-3 hero-tech-icons">
                    {{-- Python --}}
                    <span class="tech-icon-item">
                        <svg width="16" height="16" viewBox="0 0 128 128" class="me-1">
                            <path
                                d="M63.391 1.988c-4.222.02-8.252.379-11.8 1.007-10.45 1.846-12.346 5.71-12.346 12.837v9.411h24.693v3.137H29.977c-7.176 0-13.46 4.313-15.426 12.521-2.268 9.405-2.368 15.275 0 25.096 1.755 7.311 5.947 12.519 13.124 12.519h8.491V67.234c0-8.151 7.051-15.34 15.426-15.34h24.665c6.866 0 12.346-5.654 12.346-12.548V15.833c0-6.693-5.646-11.72-12.346-12.837-4.244-.706-8.645-1.027-12.866-1.008zM50.037 9.557c2.55 0 4.634 2.117 4.634 4.721 0 2.593-2.083 4.69-4.634 4.69-2.56 0-4.633-2.097-4.633-4.69-.001-2.604 2.073-4.721 4.633-4.721z"
                                fill="#387EB8" />
                            <path
                                d="M91.682 28.38v10.966c0 8.5-7.208 15.655-15.426 15.655H51.591c-6.756 0-12.346 5.783-12.346 12.549v23.515c0 6.691 5.818 10.628 12.346 12.547 7.816 2.297 15.312 2.713 24.665 0 6.216-1.801 12.346-5.423 12.346-12.547v-9.412H63.938v-3.138h37.012c7.176 0 9.852-5.005 12.348-12.519 2.578-7.735 2.467-15.174 0-25.096-1.774-7.145-5.161-12.521-12.348-12.521h-9.268zM77.809 87.927c2.561 0 4.634 2.097 4.634 4.692 0 2.602-2.074 4.719-4.634 4.719-2.55 0-4.633-2.117-4.633-4.719 0-2.595 2.083-4.692 4.633-4.692z"
                                fill="#FFE052" />
                        </svg>
                        Python
                    </span>
                    {{-- Java --}}
                    <span class="tech-icon-item">
                        <svg width="16" height="16" viewBox="0 0 128 128" class="me-1">
                            <path
                                d="M47.617 98.12s-4.767 2.774 3.397 3.71c9.892 1.13 14.947.968 25.845-1.092 0 0 2.871 1.795 6.873 3.351-24.439 10.47-55.308-.607-36.115-5.969zm-2.988-13.665s-5.348 3.959 2.823 4.805c10.567 1.091 18.91 1.18 33.354-1.6 0 0 1.993 2.025 5.132 3.131-29.542 8.64-62.446.68-41.309-6.336z"
                                fill="#0074BD" />
                            <path
                                d="M69.802 61.271c6.025 6.935-1.58 13.17-1.58 13.17s15.289-7.891 8.269-17.777c-6.559-9.215-11.587-13.792 15.635-29.58 0 .001-42.731 10.67-22.324 34.187z"
                                fill="#EA2D2E" />
                            <path
                                d="M102.123 108.229s3.529 2.91-3.888 5.159c-14.102 4.272-58.706 5.56-71.094.171-4.451-1.938 3.894-4.625 6.515-5.189 2.733-.593 4.295-.485 4.295-.485-4.946-3.484-31.997 6.843-13.737 9.815 49.821 8.076 90.817-3.637 77.909-9.471zM49.912 70.294s-22.686 5.389-8.033 7.348c6.188.828 18.518.638 30.011-.326 9.386-.789 18.813-2.474 18.813-2.474s-3.308 1.419-5.704 3.053c-23.042 6.061-67.544 3.238-54.731-2.958 10.832-5.239 19.644-4.643 19.644-4.643zm40.697 22.747c23.421-12.167 12.591-23.86 5.032-22.285-1.848.385-2.677.72-2.677.72s.688-1.079 2-1.543c14.953-5.255 26.451 15.503-4.823 23.725 0-.002.359-.327.468-.617z"
                                fill="#0074BD" />
                            <path
                                d="M76.491 1.587S89.459 14.563 64.188 34.51c-20.266 16.006-4.621 25.13-.007 35.559-11.831-10.673-20.509-20.07-14.688-28.815 8.548-12.834 32.229-19.059 26.998-39.667z"
                                fill="#EA2D2E" />
                            <path
                                d="M52.214 126.021c22.476 1.437 57-.8 57.817-11.436 0 0-1.571 4.032-18.577 7.231-19.186 3.612-42.854 3.191-56.887.874 0 .001 2.875 2.381 17.647 3.331z"
                                fill="#0074BD" />
                        </svg>
                        Java
                    </span>
                    {{-- PHP --}}
                    <span class="tech-icon-item">
                        <svg width="16" height="16" viewBox="0 0 128 128" class="me-1">
                            <path
                                d="M64 33.039c-33.74 0-61.094 13.862-61.094 30.961S30.26 94.961 64 94.961 125.094 81.1 125.094 64 97.74 33.039 64 33.039zm-15.897 32.159H42.78l-2.498 12.969H31.16L38.298 40.4h19.132c7.333 0 11.428 4.368 10.063 11.505-1.46 7.508-7.698 13.293-19.39 13.293zm30.117 0h-5.323l-2.498 12.969H61.277L68.415 40.4h19.132c7.333 0 11.428 4.368 10.063 11.505-1.46 7.508-7.698 13.293-19.39 13.293zm22.476 12.969h-9.122L94.67 55.198h-6.453l-2.02 10.481c-1.462 7.637 2.431 12.488 9.564 12.488 1.143 0 2.411-.165 3.563-.454l-1.609 8.354c-1.362.289-2.769.454-4.175.454-12.537 0-19.47-7.184-17.345-18.523l2.369-12.8h-4.668l1.62-8.437h4.668l1.82-9.46h9.122l-1.82 9.46h6.453l-1.62 8.437h-1.143l-2.499 12.969z"
                                fill="#777BB4" />
                        </svg>
                        PHP
                    </span>
                    {{-- Laravel --}}
                    <span class="tech-icon-item">
                        <svg width="16" height="16" viewBox="0 0 50 52" class="me-1" fill="none">
                            <path
                                d="M49.626 11.564a.809.809 0 0 1 .028.209v10.972a.8.8 0 0 1-.402.694l-9.209 5.302V39.25c0 .286-.152.55-.4.694L20.42 51.01c-.044.025-.092.041-.14.058-.018.006-.035.017-.054.022a.805.805 0 0 1-.41 0c-.022-.006-.042-.018-.063-.026-.044-.016-.09-.03-.132-.054L.402 39.944A.801.801 0 0 1 0 39.25V6.334c0-.072.01-.144.028-.209.006-.023.02-.044.028-.067.015-.042.029-.085.051-.124.015-.026.037-.047.055-.071.023-.032.044-.065.071-.093.023-.023.053-.04.079-.06.029-.024.055-.05.088-.069h.001l9.61-5.533a.802.802 0 0 1 .8 0l9.61 5.533h.002c.032.02.059.045.088.068.026.02.055.038.078.06.028.029.048.062.072.094.017.024.04.045.054.071.023.04.036.082.052.124.008.023.022.044.028.068a.809.809 0 0 1 .028.209v20.559l8.008-4.611v-10.51c0-.07.01-.141.028-.208.007-.024.02-.045.028-.068.016-.042.03-.085.052-.124.015-.026.037-.047.054-.071.024-.032.044-.065.072-.093.023-.023.052-.04.078-.06.03-.024.056-.05.088-.069h.001l9.611-5.533a.801.801 0 0 1 .8 0l9.61 5.533c.034.02.06.045.09.068.025.02.054.038.077.06.028.029.048.062.072.094.017.024.04.045.054.071.023.039.036.082.052.124.008.023.022.044.028.068zm-1.574 10.718v-9.124l-3.363 1.936-4.646 2.675v9.124l8.01-4.611zm-9.61 16.553v-9.132l-4.57 2.619-13.05 7.473v9.216l17.62-10.176zM1.602 7.719v31.068l17.619 10.17v-9.214l-9.204-5.209-.003-.002-.004-.002c-.031-.018-.057-.044-.086-.066-.025-.02-.054-.036-.076-.058l-.002-.003c-.026-.025-.044-.056-.066-.084-.02-.027-.044-.05-.059-.078l-.001-.002c-.018-.03-.029-.066-.042-.1-.013-.03-.03-.058-.038-.09v-.001c-.01-.038-.012-.078-.016-.117-.004-.03-.012-.06-.012-.09v-.002-21.481L4.965 9.654 1.602 7.72zm8.81-5.994L2.405 6.334l8.005 4.609 8.006-4.61-8.006-4.608zm4.164 28.764l4.645-2.674V7.719l-3.363 1.936-4.646 2.675v20.096l3.364-1.937zM39.243 7.164l-8.006 4.609 8.006 4.609 8.005-4.61-8.005-4.608zm-.801 10.605-4.646-2.675-3.363-1.936v9.124l4.645 2.674 3.364 1.937v-9.124zM20.02 38.33l11.743-6.704 5.87-3.35-7.982-4.597-9.211 5.303-8.395 4.833 7.975 4.515z"
                                fill="#FF2D20" />
                        </svg>
                        Laravel
                    </span>
                    {{-- React --}}
                    <span class="tech-icon-item">
                        <svg width="16" height="16" viewBox="0 0 128 128" class="me-1">
                            <g fill="#61DAFB">
                                <circle cx="64" cy="64" r="11.4" />
                                <path
                                    d="M107.3 45.2c-2.2-.8-4.5-1.6-6.9-2.3.6-2.4 1.1-4.8 1.5-7.1 2.1-13.2-.2-22.5-6.6-26.1-1.9-1.1-4-1.6-6.4-1.6-7 0-15.9 5.2-24.9 13.9-9-8.7-17.9-13.9-24.9-13.9-2.4 0-4.5.5-6.4 1.6-6.4 3.7-8.7 13-6.6 26.1.4 2.3.9 4.7 1.5 7.1-2.4.7-4.7 1.4-6.9 2.3C8.2 50 1.4 56.6 1.4 64s6.8 14 19.3 18.8c2.2.8 4.5 1.6 6.9 2.3-.6 2.4-1.1 4.8-1.5 7.1-2.1 13.2.2 22.5 6.6 26.1 1.9 1.1 4 1.6 6.4 1.6 7.1 0 16-5.2 24.9-13.9 9 8.7 17.9 13.9 24.9 13.9 2.4 0 4.5-.5 6.4-1.6 6.4-3.7 8.7-13 6.6-26.1-.4-2.3-.9-4.7-1.5-7.1 2.4-.7 4.7-1.4 6.9-2.3 12.5-4.8 19.3-11.4 19.3-18.8s-6.8-14-19.3-18.8zM92.5 14.7c4.1 2.4 5.5 9.8 3.8 20.3-.3 2.1-.8 4.3-1.4 6.6-5.2-1.2-10.7-2-16.5-2.5-3.4-4.8-6.9-9.1-10.4-13 7.4-7.3 14.9-12.3 21-12.3 1.3 0 2.5.3 3.5.9zM81.3 74c-1.8 3.2-3.9 6.4-6.1 9.6-3.7.3-7.4.4-11.2.4-3.9 0-7.6-.1-11.2-.4-2.2-3.2-4.2-6.4-6-9.6-1.9-3.3-3.7-6.7-5.3-10 1.6-3.3 3.4-6.7 5.3-10 1.8-3.2 3.9-6.4 6.1-9.6 3.7-.3 7.4-.4 11.2-.4 3.9 0 7.6.1 11.2.4 2.2 3.2 4.2 6.4 6 9.6 1.9 3.3 3.7 6.7 5.3 10-1.7 3.3-3.4 6.6-5.3 10zm8.3-3.3c1.5 3.5 2.7 6.9 3.8 10.3-3.4.8-7 1.4-10.8 1.9 1.2-1.9 2.5-3.9 3.6-6 1.2-2.1 2.3-4.2 3.4-6.2zm-25.6 27.1c-2.4-2.6-4.7-5.4-6.9-8.3 2.3.1 4.6.2 6.9.2 2.3 0 4.6-.1 6.8-.2-2.2 2.9-4.5 5.7-6.8 8.1zm-18.3-15c-3.8-.5-7.4-1.1-10.8-1.9 1-3.4 2.2-6.8 3.8-10.3 1.1 2 2.2 4.1 3.4 6.1 1.2 2.2 2.4 4.1 3.6 6.1zm-7-25.5c-1.5-3.5-2.7-6.9-3.8-10.3 3.4-.8 7-1.4 10.8-1.9-1.2 1.9-2.5 3.9-3.6 6-1.2 2.1-2.3 4.2-3.4 6.2zM64 16.4c2.4 2.6 4.7 5.4 6.9 8.3-2.3-.1-4.6-.2-6.9-.2-2.3 0-4.6.1-6.8.2 2.2-2.9 4.5-5.7 6.8-8.3zm-16.9 5.1c-1.1 2-2.2 4.1-3.4 6.1-1.2 2.1-2.3 4.2-3.4 6.2-1.5-3.5-2.7-6.9-3.8-10.3 3.4-.8 7-1.4 10.6-2zm-14.7 17.3c-2.4-2.7-4.7-5.6-6.9-8.6.6-2.3 1.2-4.5 1.9-6.6 2.9 1 5.9 2.1 9 3.5-.8 2.3-1.4 4.8-1.9 7.1-.2.8-.4 1.7-.5 2.5-.5.6-.9 1.4-1.6 2.1zm-14.9 22c-4.8-2.6-7.7-6.7-7.7-10.3s2.9-7.6 7.7-10.3c1.3-.7 2.6-1.4 4.1-2.1 1.8 4.3 3.9 8.7 6.2 13-2.3 4.3-4.4 8.7-6.2 13-1.5-.6-2.9-1.3-4.1-2.3zm4.6 42.7c-4.1-2.4-5.5-9.8-3.8-20.3.3-2.1.8-4.3 1.4-6.6 5.2 1.2 10.7 2 16.5 2.5 3.4 4.8 6.9 9.1 10.4 13-7.4 7.3-14.9 12.3-21 12.3-1.3-.1-2.5-.4-3.5-1zm60.7-1c-1 .6-2.2.9-3.5.9-6 0-13.6-5-21-12.3 3.5-3.8 7-8.2 10.4-13 5.8-.5 11.3-1.3 16.5-2.5.6 2.3 1.1 4.5 1.4 6.6 1.7 10.5.3 17.9-3.8 20.3zm4.5-42.6c-1.8-4.3-3.9-8.7-6.2-13 2.3-4.3 4.4-8.7 6.2-13 1.5.7 2.9 1.4 4.1 2.1 4.8 2.6 7.7 6.7 7.7 10.3s-2.9 7.6-7.7 10.3c-1.3.7-2.6 1.4-4.1 2.1z" />
                            </g>
                        </svg>
                        React
                    </span>
                    {{-- Node.js --}}
                    <span class="tech-icon-item">
                        <svg width="16" height="16" viewBox="0 0 128 128" class="me-1">
                            <path
                                d="M114.36 37.12L68.4 10.44a8.69 8.69 0 00-8.8 0L13.64 37.12A8.74 8.74 0 009.2 44.7v53.34a8.74 8.74 0 004.44 7.58l45.96 26.68a8.69 8.69 0 008.8 0l45.96-26.68a8.74 8.74 0 004.44-7.58V44.7a8.74 8.74 0 00-4.44-7.58z"
                                fill="#339933" />
                            <path
                                d="M64 110.62a2 2 0 01-1-.26L45.94 100.5c-.3-.17-.15-.23-.05-.27a24.13 24.13 0 003.36-1.93.24.24 0 01.24 0l13.36 7.92a.31.31 0 00.3 0l52.12-30.1a.3.3 0 00.15-.26V37.34a.31.31 0 00-.15-.26L63.15 7 11 37.08a.31.31 0 00-.15.26v60.15a.3.3 0 00.15.26l14.27 8.24c7.74 3.87 12.48-.69 12.48-5.28V44.19a.28.28 0 01.28-.28h4a.28.28 0 01.28.28v56.52c0 10.33-5.63 16.27-15.43 16.27a22.23 22.23 0 01-11.94-3.24L1.61 105.18A3.3 3.3 0 010 102.28V25.72a3.3 3.3 0 011.61-2.9L62.39 1.36a3.34 3.34 0 013.22 0l60.78 21.46a3.3 3.3 0 011.61 2.9v76.56a3.3 3.3 0 01-1.61 2.9L65 110.36a2 2 0 01-1 .26z"
                                fill="#fff" />
                        </svg>
                        Node.js
                    </span>
                    {{-- MySQL --}}
                    <span class="tech-icon-item">
                        <svg width="16" height="16" viewBox="0 0 128 128" class="me-1">
                            <path
                                d="M2 9.227h10.93l.52.01c3.2.07 6.12 1.27 8.67 2.84 3.61 2.21 7.1 5.81 9.23 9.49 1.15 1.99 2.02 4.3 2.25 6.59l.04.5c.09 1.15.14 2.32.09 3.48-.3 6.88-3.7 13.44-9.47 17.58-3.01 2.14-6.4 3.41-9.97 3.68-.98.07-1.97.1-2.96.08H2V9.227zm7.24 6.143v31.237h2.86l1.24-.04c1.27-.07 2.5-.32 3.68-.78 3.28-1.27 5.94-3.98 7.4-7.13 1.05-2.27 1.46-4.78 1.41-7.26-.07-3.84-1.26-7.71-3.71-10.68-1.71-2.08-3.99-3.63-6.53-4.38-.87-.26-1.76-.41-2.66-.44l-1.64-.04-.05.52zM45.52 26.42h12.05l.01 5.33c1.15-1.79 2.58-3.39 4.33-4.56 1.68-1.12 3.66-1.78 5.68-1.78.88 0 1.75.12 2.59.35l-.86 6.38a8.35 8.35 0 0 0-2.38-.35c-1.37 0-2.69.39-3.82 1.09-1.81 1.1-3.16 2.85-3.94 4.78-.56 1.38-.79 2.88-.79 4.38v11.22H45.52V26.42zM90.93 24.9c5.91 0 11.26 2.49 14.71 6.76l.36.45-5.07 4.52c-2.11-2.89-5.34-4.71-8.99-4.71-3.19 0-6.06 1.36-8.03 3.52-1.97 2.16-3.16 5.11-3.16 8.33 0 3.19 1.19 6.11 3.14 8.26 1.96 2.15 4.81 3.5 7.98 3.5 3.59 0 6.76-1.77 8.87-4.59l5.1 4.49-.39.48C101.97 59.71 96.63 62 90.79 62c-5.94 0-11.3-2.49-15.01-6.5-3.38-3.65-5.44-8.58-5.44-13.99 0-5.43 2.06-10.38 5.44-14.04C79.5 27.44 84.9 24.9 90.93 24.9zM118.03 26.42v13.56c0 3.54.08 7.33 1.7 10.42 1.15 2.17 3.16 3.82 5.44 4.45l.38.1-1.93 5.47c-4.24-.97-7.7-3.85-9.56-7.72-2.04-4.24-2.19-8.96-2.19-13.36V26.42h6.16z"
                                fill="#00758F" />
                            <path
                                d="M126 55.3c-1.44 0-2.56 1.12-2.56 2.56 0 1.44 1.12 2.56 2.56 2.56 1.44 0 2.56-1.12 2.56-2.56 0-1.44-1.12-2.56-2.56-2.56zm0 4.72c-1.19 0-2.16-.97-2.16-2.16 0-1.19.97-2.16 2.16-2.16 1.19 0 2.16.97 2.16 2.16 0 1.19-.97 2.16-2.16 2.16zm.58-2.93c0-.45-.31-.7-.83-.7h-.86v2.3h.42v-.9h.38l.51.9h.47l-.55-.97c.29-.1.46-.32.46-.63zm-.83.36h-.44v-.72h.44c.27 0 .42.12.42.36 0 .23-.15.36-.42.36z"
                                fill="#00758F" />
                        </svg>
                        MySQL
                    </span>
                    {{-- MongoDB --}}
                    <span class="tech-icon-item">
                        <svg width="16" height="16" viewBox="0 0 128 128" class="me-1">
                            <path
                                d="M87.96 25.23C81.1 16.25 71.83 9.66 64.02 3 56.21 9.66 46.94 16.25 40.08 25.23 23.77 46.5 27.72 74.44 27.72 74.44s9.57-6.07 13.2-13.05c1.83 7.54 5.55 16.38 15.48 23.87 1.3.98 1.73 1.91 1.59 3.12-.42 3.56-.68 7.14-.91 10.72-.05.79-.12 1.59-.12 2.39a.67.67 0 0 0 .67.66.63.63 0 0 0 .29-.07c2.6-1.24 5.37-2.48 6.35-5.52.44-1.37.61-2.85.77-4.29.11-1.04.21-2.07.39-3.07a.91.91 0 0 1 .4-.64c11.72-7.86 14.79-18.97 16.08-25.13 3.63 6.98 13.2 13.05 13.2 13.05s3.94-27.94-12.36-49.25"
                                fill="#599636" />
                            <path
                                d="M64.02 3c-.04 21.58-.42 79.89-.19 95.98.06 3.7 1.51 7.32 4.47 9.59.42-3.56.68-7.14.91-10.72.14-1.21-.29-2.14-1.59-3.12C57.69 87.23 53.97 78.39 52.14 70.85c-3.63 6.98-13.2 13.05-13.2 13.05-.26-1.86-.38-3.74-.4-5.62 0 0 0 .01 0 0 5.61-6.73 9.34-16.01 10.45-28.42C50.78 37.61 56.1 19.17 64.02 3"
                                fill="#6cac48" />
                            <path
                                d="M64.83 104.45c3-.59 4.43-2.43 5.13-4.9-2.96-2.27-4.41-5.89-4.47-9.59-.05-3.77-.1-11.23-.14-19.4-.04-11.33-.07-24.24-.05-33.37.09-11.42.28-20.38.4-25.73-1.41 2.73-2.76 5.59-3.68 8.54 0 0 .77 18.89-10.55 28.86-1.6 1.43-2.09 3.38-1.83 5.45.96 7.58 4.55 16.17 15.19 24.72z"
                                fill="#c2bfbf" />
                        </svg>
                        MongoDB
                    </span>
                    {{-- Flutter --}}
                    <span class="tech-icon-item">
                        <svg width="16" height="16" viewBox="0 0 128 128" class="me-1">
                            <g fill="#3FB6D3">
                                <path
                                    d="M12.3 64.2L76.3 0h39.4L32.1 83.6zM76.3 128h39.4L81.6 93.9l34.1-34.8H76.3L42.2 93.5z" />
                            </g>
                            <path fill="#27AACD" d="M81.6 93.9l-20-20-19.4 19.6 19.4 34.5z" />
                            <path fill="#19599A" d="M76.3 128l-14.5-34.1 14.5-14 34.9 48.1z" />
                        </svg>
                        Flutter
                    </span>
                    {{-- AWS --}}
                    <span class="tech-icon-item">
                        <svg width="20" height="12" viewBox="0 0 50 30" class="me-1" fill="none">
                            <path
                                d="M14.01 12.08c0 .52.06 1 .17 1.4.12.4.28.84.52 1.3.08.14.12.27.12.4 0 .17-.1.35-.32.52l-1.05.7c-.15.1-.3.15-.44.15-.17 0-.35-.08-.52-.25a5.38 5.38 0 0 1-.63-.82 13.4 13.4 0 0 1-.54-1.06c-1.36 1.6-3.07 2.4-5.13 2.4-1.47 0-2.64-.42-3.5-1.26-.86-.84-1.3-1.96-1.3-3.35 0-1.48.52-2.68 1.57-3.58 1.05-.9 2.44-1.35 4.2-1.35.58 0 1.18.05 1.8.14.63.1 1.27.23 1.95.4V7.47c0-1.3-.27-2.22-.8-2.74-.55-.52-1.46-.78-2.76-.78-.6 0-1.2.07-1.83.22-.63.15-1.24.34-1.84.58-.27.12-.47.2-.58.22-.12.03-.2.04-.28.04-.24 0-.36-.17-.36-.52V3.37c0-.27.04-.47.12-.6.08-.12.24-.24.48-.36a12.5 12.5 0 0 1 2.36-.75 11.5 11.5 0 0 1 2.76-.32c2.1 0 3.63.48 4.6 1.44.96.96 1.44 2.42 1.44 4.38v5.77zm-7.1 2.66c.56 0 1.14-.1 1.75-.3.6-.2 1.14-.57 1.6-1.08.27-.32.47-.67.57-1.06.1-.4.17-.87.17-1.43v-.7a14.16 14.16 0 0 0-1.54-.28 12.57 12.57 0 0 0-1.57-.1c-1.12 0-1.94.22-2.5.67-.55.45-.82 1.08-.82 1.9 0 .78.2 1.36.6 1.74.4.4.96.6 1.7.6h.04zm13.5 1.82c-.3 0-.5-.05-.63-.16-.13-.1-.24-.3-.34-.6L16.1 2.88a2.94 2.94 0 0 1-.15-.64c0-.26.13-.4.38-.4h1.56c.31 0 .52.05.64.16.13.1.23.3.33.6l2.84 11.2 2.64-11.2c.08-.3.18-.5.3-.6.13-.1.35-.16.65-.16h1.27c.31 0 .52.05.65.16.12.1.23.3.3.6l2.67 11.34L32.9 2.6c.1-.3.2-.5.33-.6.13-.1.34-.16.64-.16h1.48c.26 0 .4.13.4.4 0 .08-.01.16-.03.24-.02.08-.05.19-.1.34L31.8 15.8c-.1.3-.2.5-.34.6-.13.1-.34.16-.63.16h-1.37c-.31 0-.52-.05-.65-.16-.12-.1-.23-.3-.3-.62L26.9 4.1l-2.6 11.7c-.08.3-.18.5-.3.62-.13.1-.35.16-.65.16h-1.36zm20.2.44c-.83 0-1.66-.1-2.46-.3-.8-.2-1.43-.42-1.85-.68-.26-.15-.44-.31-.5-.46a1.17 1.17 0 0 1-.1-.47v-.73c0-.35.13-.52.38-.52.1 0 .2.02.3.06.1.04.25.1.41.17.55.24 1.15.44 1.78.57.64.13 1.27.2 1.91.2.76 0 1.7-.15 2.08-.45a1.5 1.5 0 0 0 .6-1.2c0-.35-.11-.64-.34-.88-.23-.24-.66-.45-1.3-.65l-1.86-.58c-.94-.3-1.63-.73-2.06-1.3a3.16 3.16 0 0 1-.64-1.93c0-.55.12-1.04.36-1.47.24-.42.56-.79.96-1.08.4-.3.86-.53 1.4-.69.54-.16 1.1-.23 1.7-.23.3 0 .6.02.9.06.3.04.59.1.87.16.27.06.53.14.77.22.24.08.43.16.57.24.2.12.34.24.42.36.08.12.12.28.12.48v.68c0 .35-.13.53-.38.53-.13 0-.34-.07-.63-.2a7.6 7.6 0 0 0-3.12-.62c-.92 0-1.55.15-1.95.45-.4.3-.6.74-.6 1.33 0 .35.12.65.36.9.24.24.7.47 1.38.68l1.83.56c.93.3 1.6.72 2 1.26.4.55.6 1.17.6 1.87 0 .56-.12 1.07-.34 1.52-.23.45-.54.85-.95 1.17-.41.34-.9.59-1.47.76-.6.18-1.22.27-1.88.27h.02z"
                                fill="#252F3E" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M42.24 22.27c-5.14 3.8-12.6 5.82-19.02 5.82-9 0-17.1-3.33-23.22-8.86-.48-.43-.05-1.02.52-.68 6.61 3.84 14.77 6.15 23.2 6.15 5.69 0 11.94-1.18 17.7-3.62.87-.37 1.6.57.82 1.19zm2.32-2.64c-.65-.84-4.3-.4-5.95-.2-.5.06-.58-.37-.13-.68 2.92-2.05 7.7-1.46 8.26-.77.56.69-.15 5.49-2.88 7.78-.42.35-.82.16-.63-.3.61-1.53 2-4.98 1.33-5.83z"
                                fill="#FF9900" />
                        </svg>
                        AWS
                    </span>
                    <span class="tech-icon-item text-secondary">and More...</span>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. About DigiCoders -->
    <section class="section-padding" id="about">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <span class="text-brand-blue fw-bold text-sm uppercase mb-2 d-block">About Us</span>
                    <h2 class="h1 fw-bold mb-4" style="font-family: 'Montserrat', sans-serif;">DigiCoders Technologies Pvt.
                        Ltd.</h2>
                    <p class="mb-4 text-secondary">
                        Based in Gorakhpur, DigiCoders Technologies is a premium IT Training Institute and software
                        development company. We bridge the gap between academic education and industry standards by offering
                        dynamic, project-oriented courses taught by real development professionals.
                    </p>
                    <p class="mb-4 text-secondary">
                        Our curriculum focuses on hands-on practical implementation, version control via GitHub, testing
                        paradigms, and modern cloud deployment architectures. We prepare candidates to think like senior
                        builders rather than passive coders.
                    </p>

                    {{--
                    <!-- Premium Stats Mini Grid -->
                    <div class="row g-3 mb-4 mt-2">
                        <div class="col-6 col-md-3">
                            <div class="border-start border-brand-blue border-3 ps-3">
                                <h4 class="fw-bold mb-0 text-brand-blue">10+</h4>
                                <small class="text-secondary text-xs">Years Exp</small>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="border-start border-brand-blue border-3 ps-3">
                                <h4 class="fw-bold mb-0 text-brand-blue">50+</h4>
                                <small class="text-secondary text-xs">Tech Stacks</small>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="border-start border-brand-blue border-3 ps-3">
                                <h4 class="fw-bold mb-0 text-brand-blue">1000+</h4>
                                <small class="text-secondary text-xs">Placement</small>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="border-start border-brand-blue border-3 ps-3">
                                <h4 class="fw-bold mb-0 text-brand-blue">50+</h4>
                                <small class="text-secondary text-xs">Trainers</small>
                            </div>
                        </div>
                    </div>
                    --}}

                    <div class="row g-4 mt-2">
                        <div class="col-md-6 d-flex gap-3">
                            <div class="text-brand-blue mt-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    class="bi bi-cpu" viewBox="0 0 16 16">
                                    <path
                                        d="M5 0a.5.5 0 0 1 .5.5V2h1V.5a.5.5 0 0 1 1 0V2h1V.5a.5.5 0 0 1 1 0V2h1V.5a.5.5 0 0 1 1 0V2h.5a.5.5 0 0 1 .5.5v1.5h1.5a.5.5 0 0 1 0 1H14v1h1.5a.5.5 0 0 1 0 1H14v1h1.5a.5.5 0 0 1 0 1H14v1h1.5a.5.5 0 0 1 0 1H14v.5a.5.5 0 0 1-.5.5H12v1.5a.5.5 0 0 1-1 0V14h-1v1.5a.5.5 0 0 1-1 0V14h-1v1.5a.5.5 0 0 1-1 0V14h-1v1.5a.5.5 0 0 1-1 0V14h-.5a.5.5 0 0 1-.5-.5V12H.5a.5.5 0 0 1 0-1H2v-1H.5a.5.5 0 0 1 0-1H2V7H.5a.5.5 0 0 1 0-1H2V5H.5a.5.5 0 0 1 0-1H2V3.5a.5.5 0 0 1 .5-.5H5V.5A.5.5 0 0 1 5 0zm4 4H5v7h7V4H9z" />
                                </svg>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1">State-of-the-art Labs</h6>
                                <p class="text-secondary text-sm mb-0">Complete high-speed computing setups optimized for
                                    programming compilers.</p>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex gap-3">
                            <div class="text-brand-blue mt-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    class="bi bi-people" viewBox="0 0 16 16">
                                    <path
                                        d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724C2.3 10.634 3.27 10 5 10c.026 0 .051 0 .077.001A5.19 5.19 0 0 0 4.92 10zM5 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm1-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                </svg>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1">Corporate Mentors</h6>
                                <p class="text-secondary text-sm mb-0">Learn directly from senior stack developers and
                                    architects active in remote setups.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="about-image-wrapper">
                        <div class="about-img-container">
                            <img src="{{ asset('assets/images/digicoders-gorakhpur-office-front-view.jpeg') }}"
                                class="about-img" alt="DigiCoders IT Training Classroom">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Swiper Section -->
    <section class="section-padding team-swiper-section bg-secondary bg-opacity-10" id="team-swiper">
        <div class="container">
            <div class="text-center max-w-xl mx-auto mb-5" data-aos="fade-up">
                <span class="badge bg-brand-blue-10 text-brand-blue px-3 py-2 rounded-pill fw-semibold mb-3">Our
                    Instructors</span>
                <h2 class="fw-bold h1 mt-2" style="font-family: 'Montserrat', sans-serif;">Meet Our <span
                        style="color: var(--orange);">Leadership Team</span></h2>
                <p class="text-secondary">Learn directly from active industry developers, database architects, and system
                    administrators.</p>
            </div>

            <!-- Swiper Container (inside container for header alignment) -->
            <div class="swiper-marquee-container swiper mySwiper">
                <div class="swiper-wrapper">
                    <!-- Slide 1: Abhishek Singh -->
                    <div class="swiper-slide swiper-marquee-slide">
                        <img src="{{ asset('assets/images/team/Abhishek-Singh-digicoders-gorakhpur.jpeg') }}" alt="Abhishek Singh - IT Trainer and Developer at DigiCoders Gorakhpur" style="aspect-ratio: 5/4; object-fit: cover;">
                        <div class="swiper-marquee-overlay">
                            <h4 class="swiper-marquee-title">Abhishek Singh</h4>
                            <div class="swiper-marquee-desc">Branch Head &amp; Data Analyst</div>
                        </div>
                    </div>
                    <!-- Slide 2: Muskan -->
                    <div class="swiper-slide swiper-marquee-slide">
                        <img src="{{ asset('assets/images/team/Muskan-digicoders-gorakhpur.jpeg') }}" alt="Muskan - IT Trainer and Developer at DigiCoders Gorakhpur" style="aspect-ratio: 5/4; object-fit: cover;">
                        <div class="swiper-marquee-overlay">
                            <h4 class="swiper-marquee-title">Muskan</h4>
                            <div class="swiper-marquee-desc">Hr Executive</div>
                        </div>
                    </div>
                    <!-- Slide 3: Priyanshu Singh -->
                    <div class="swiper-slide swiper-marquee-slide">
                        <img src="{{ asset('assets/images/team/Priyanshu-Singh-digicoders-gorakhpur.jpeg') }}" alt="Priyanshu Singh - IT Trainer and Developer at DigiCoders Gorakhpur" style="aspect-ratio: 5/4; object-fit: cover;">
                        <div class="swiper-marquee-overlay">
                            <h4 class="swiper-marquee-title">Priyanshu Singh</h4>
                            <div class="swiper-marquee-desc">Trainer &amp; Developer</div>
                        </div>
                    </div>
                    <!-- Slide 4: Sarvesh -->
                    <div class="swiper-slide swiper-marquee-slide">
                        <img src="{{ asset('assets/images/team/Sarvesh-digicoders-gorakhpur.jpeg') }}" alt="Sarvesh - IT Trainer and Developer at DigiCoders Gorakhpur" style="aspect-ratio: 5/4; object-fit: cover;">
                        <div class="swiper-marquee-overlay">
                            <h4 class="swiper-marquee-title">Sarvesh</h4>
                            <div class="swiper-marquee-desc">Trainer &amp; Developer</div>
                        </div>
                    </div>
                    <!-- Slide 5: Zaid -->
                    <div class="swiper-slide swiper-marquee-slide">
                        <img src="{{ asset('assets/images/team/Zaid-digicoders-gorakhpur.jpeg') }}" alt="Zaid - IT Trainer and Developer at DigiCoders Gorakhpur" style="aspect-ratio: 5/4; object-fit: cover;">
                        <div class="swiper-marquee-overlay">
                            <h4 class="swiper-marquee-title">Zaid</h4>
                            <div class="swiper-marquee-desc">Trainer &amp; Developer</div>
                        </div>
                    </div>
                    <!-- Slide 6: Abhishek Singh (Repeat for loop) -->
                    <div class="swiper-slide swiper-marquee-slide">
                        <img src="{{ asset('assets/images/team/Abhishek-Singh-digicoders-gorakhpur.jpeg') }}" alt="Abhishek Singh - IT Trainer and Developer at DigiCoders Gorakhpur" style="aspect-ratio: 5/4; object-fit: cover;">
                        <div class="swiper-marquee-overlay">
                            <h4 class="swiper-marquee-title">Abhishek Singh</h4>
                            <div class="swiper-marquee-desc">Branch Head &amp; Data Analyst</div>
                        </div>
                    </div>
                    <!-- Slide 7: Muskan (Repeat for loop) -->
                    <div class="swiper-slide swiper-marquee-slide">
                        <img src="{{ asset('assets/images/team/Muskan-digicoders-gorakhpur.jpeg') }}" alt="Muskan - IT Trainer and Developer at DigiCoders Gorakhpur" style="aspect-ratio: 5/4; object-fit: cover;">
                        <div class="swiper-marquee-overlay">
                            <h4 class="swiper-marquee-title">Muskan</h4>
                            <div class="swiper-marquee-desc">Hr Executive</div>
                        </div>
                    </div>
                    <!-- Slide 8: Priyanshu Singh (Repeat for loop) -->
                    <div class="swiper-slide swiper-marquee-slide">
                        <img src="{{ asset('assets/images/team/Priyanshu-Singh-digicoders-gorakhpur.jpeg') }}" alt="Priyanshu Singh - IT Trainer and Developer at DigiCoders Gorakhpur" style="aspect-ratio: 5/4; object-fit: cover;">
                        <div class="swiper-marquee-overlay">
                            <h4 class="swiper-marquee-title">Priyanshu Singh</h4>
                            <div class="swiper-marquee-desc">Trainer &amp; Developer</div>
                        </div>
                    </div>
                    <!-- Slide 9: Sarvesh (Repeat for loop) -->
                    <div class="swiper-slide swiper-marquee-slide">
                        <img src="{{ asset('assets/images/team/Sarvesh-digicoders-gorakhpur.jpeg') }}" alt="Sarvesh - IT Trainer and Developer at DigiCoders Gorakhpur" style="aspect-ratio: 5/4; object-fit: cover;">
                        <div class="swiper-marquee-overlay">
                            <h4 class="swiper-marquee-title">Sarvesh</h4>
                            <div class="swiper-marquee-desc">Trainer &amp; Developer</div>
                        </div>
                    </div>
                    <!-- Slide 10: Zaid (Repeat for loop) -->
                    <div class="swiper-slide swiper-marquee-slide">
                        <img src="{{ asset('assets/images/team/Zaid-digicoders-gorakhpur.jpeg') }}" alt="Zaid - IT Trainer and Developer at DigiCoders Gorakhpur" style="aspect-ratio: 5/4; object-fit: cover;">
                        <div class="swiper-marquee-overlay">
                            <h4 class="swiper-marquee-title">Zaid</h4>
                            <div class="swiper-marquee-desc">Trainer &amp; Developer</div>
                        </div>
                    </div>
                </div>
            </div><!-- /swiper-marquee-container -->
        </div><!-- /container -->
    </section>

    <!-- 4. Why Choose DigiCoders -->
    <section class="section-padding bg-secondary bg-opacity-10">
        <div class="container">
            <div class="text-center max-w-xl mx-auto mb-5" data-aos="fade-up">
                <span class="text-brand-blue fw-bold text-sm uppercase">Advantages</span>
                <h2 class="fw-bold h1 mt-2" style="font-family: 'Montserrat', sans-serif;">Why Students Choose DigiCoders
                </h2>
                <p class="text-secondary">A training model focused strictly on execution, deployment, and landing tech jobs.
                </p>
            </div>
            <div class="row g-4">
                <div class="col-md-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="glass-card tilt-card p-4 h-100">
                        <div class="text-brand-blue mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                class="bi bi-briefcase" viewBox="0 0 16 16">
                                <path
                                    d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v9A1.5 1.5 0 0 0 1.5 15h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5zm1.886 6.914L15 7.151V13.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0zM1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5z" />
                            </svg>
                        </div>
                        <h5 class="fw-bold">100% Placement Support</h5>
                        <p class="text-secondary mb-0">We have in-house placement cells maintaining constant communication
                            with 500+ recruitment agencies in major cities.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="glass-card tilt-card p-4 h-100">
                        <div class="text-brand-blue mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                class="bi bi-terminal" viewBox="0 0 16 16">
                                <path
                                    d="M6 9a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3A.5.5 0 0 1 6 9zM3.854 4.146a.5.5 0 1 0-.708.708L4.793 6.5 3.146 8.146a.5.5 0 1 0 .708.708l2-2a.5.5 0 0 0 0-.708l-2-2z" />
                                <path
                                    d="M2 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h12z" />
                            </svg>
                        </div>
                        <h5 class="fw-bold">Execution Based Projects</h5>
                        <p class="text-secondary mb-0">No dummy projects. You construct custom databases, handle security
                            tokens, and host applications on production servers.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="glass-card tilt-card p-4 h-100">
                        <div class="text-brand-blue mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                class="bi bi-award" viewBox="0 0 16 16">
                                <path
                                    d="M9.669.864 8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 16l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68-1.858-.282zM1.884 7.5l.054-.33.245-1.486-.245-1.486-.054-.33.15-.098.813-.535 1.054-1.041.535-.813.098-.15.33.054 1.486.245 1.486-.245.33-.054.098.15.535.813 1.041 1.054.813.535.15.098-.054.33-.245 1.486.245 1.486.054.33-.15.098-.813.535-1.054 1.041-.535.813-.098.15-.33-.054-1.486-.245-1.486.245-.33.054-.098-.15-.535-.813-1.041-1.054-.813-.535-.15-.098z" />
                                <path d="M8 12a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0-1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                            </svg>
                        </div>
                        <h5 class="fw-bold">ISO Certified Certifications</h5>
                        <p class="text-secondary mb-0">Our verified certificates are recognized in top enterprise
                            ecosystems, containing a unique QR verification code.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Placement Success Stories Section -->
    <section class="section-padding placements-section" id="placements">
        <div class="container">
            <div class="row align-items-end mb-5" data-aos="fade-up">
                <div class="col-md-8 text-center text-md-start">
                    <span class="text-brand-blue fw-bold text-sm uppercase">Success Stories</span>
                    <h2 class="fw-bold h1 mt-2" style="font-family: 'Montserrat', sans-serif;">Our Job Placements</h2>
                    <p class="text-secondary mb-0">Read the real success stories of students who completed their training at
                        DigiCoders and landed premium IT roles.</p>
                </div>
                <div class="col-md-4 text-center text-md-end mt-3 mt-md-0">
                    <a href="https://thedigicoders.com/placement" class="btn-glass-sm" target="_blank"
                        rel="noopener noreferrer">
                        View All Placements <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Loader Skeletons (will be hidden once data is loaded) -->
            <div id="placement-loading-skeletons" class="row g-4">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="placement-skeleton-card"></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="placement-skeleton-card"></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 d-none d-md-block">
                    <div class="placement-skeleton-card"></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 d-none d-lg-block">
                    <div class="placement-skeleton-card"></div>
                </div>
            </div>

            <!-- Swiper Carousel Container (initially hidden, shown after API fetch) -->
            <div id="placements-carousel-wrap" class="placements-swiper-container swiper d-none" data-aos="fade-up"
                data-aos-delay="100">
                <div class="swiper-wrapper" id="placements-swiper-wrapper">
                    <!-- Dynamic slides injected here -->
                </div>
            </div>

            <!-- Error fallback state (initially hidden) -->
            <div id="placements-error-fallback" class="text-center d-none py-4">
                <div class="glass-card p-5 max-w-md mx-auto">
                    <div class="text-warning mb-3">
                        <i class="bi bi-exclamation-triangle fs-1"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Unable to Load Placement Banners</h5>
                    <p class="text-secondary mb-4">We are currently updating our job success stories. You can view our
                        verified placement photos in the gallery below.</p>
                    <a href="#gallery" class="btn btn-sm btn-premium">View Placement Gallery</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Course Programs / Training Formats -->
    <section class="section-padding bg-secondary bg-opacity-10" id="course-programs">
        <div class="container">
            <div class="text-center max-w-xl mx-auto mb-5" data-aos="fade-up">
                <span class="text-brand-blue fw-bold text-sm uppercase">Training Formats</span>
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
                            <h4 class="fw-bold mb-3" style="font-family: 'Montserrat', sans-serif; font-size: 1.25rem;">
                                Vocational Training</h4>
                            <p class="text-secondary text-sm mb-4">Designed for Polytechnic/Diploma students to explore the
                                IT industry and start an engineering career.</p>
                        </div>
                        <div
                            class="pt-3 border-top border-secondary border-opacity-10 d-flex align-items-center justify-content-between">
                            <span class="fs-5 fw-bold" style="color: var(--blue);">₹7,000</span>
                            <a href="https://thedigicoders.com/home/vocationaltraining"
                                class="fw-bold text-decoration-none d-inline-flex align-items-center gap-1 hover-arrow"
                                style="color: var(--blue);" target="_blank" rel="noopener noreferrer">
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
                            <h4 class="fw-bold mb-3" style="font-family: 'Montserrat', sans-serif; font-size: 1.25rem;">
                                Summer Training</h4>
                            <p class="text-secondary text-sm mb-4">Intensive summer sessions for engineering students to
                                master full-stack and modern tech stacks.</p>
                        </div>
                        <div
                            class="pt-3 border-top border-secondary border-opacity-10 d-flex align-items-center justify-content-between">
                            <span class="fs-5 fw-bold" style="color: var(--blue);">₹7,000</span>
                            <a href="https://thedigicoders.com/home/summertraining"
                                class="fw-bold text-decoration-none d-inline-flex align-items-center gap-1 hover-arrow"
                                style="color: var(--blue);" target="_blank" rel="noopener noreferrer">
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
                            <h4 class="fw-bold mb-3" style="font-family: 'Montserrat', sans-serif; font-size: 1.25rem;">
                                Winter Training</h4>
                            <p class="text-secondary text-sm mb-4">Short-term winter programs focusing on specialized skills
                                and real-world project development.</p>
                        </div>
                        <div
                            class="pt-3 border-top border-secondary border-opacity-10 d-flex align-items-center justify-content-between">
                            <span class="fs-5 fw-bold" style="color: var(--blue);">₹7,000</span>
                            <a href="https://thedigicoders.com/home/wintertraining"
                                class="fw-bold text-decoration-none d-inline-flex align-items-center gap-1 hover-arrow"
                                style="color: var(--blue);" target="_blank" rel="noopener noreferrer">
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
                            <h4 class="fw-bold mb-3" style="font-family: 'Montserrat', sans-serif; font-size: 1.25rem;">
                                Industrial Training</h4>
                            <p class="text-secondary text-sm mb-4">Exclusively for B.Tech/MCA final year students to bridge
                                the gap between academia and MNC standards.</p>
                        </div>
                        <div
                            class="pt-3 border-top border-secondary border-opacity-10 d-flex align-items-center justify-content-between">
                            <span class="fs-5 fw-bold" style="color: var(--blue);">₹7,000</span>
                            <a href="https://thedigicoders.com/home/industrialtraining"
                                class="fw-bold text-decoration-none d-inline-flex align-items-center gap-1 hover-arrow"
                                style="color: var(--blue);" target="_blank" rel="noopener noreferrer">
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
                            <h4 class="fw-bold mb-3" style="font-family: 'Montserrat', sans-serif; font-size: 1.25rem;">
                                Apprenticeship Training</h4>
                            <p class="text-secondary text-sm mb-4">Deep-dive professional training for final year students
                                aiming for high-salary job roles in IT.</p>
                        </div>
                        <div
                            class="pt-3 border-top border-secondary border-opacity-10 d-flex align-items-center justify-content-between">
                            <span class="fs-5 fw-bold" style="color: var(--blue);">₹30,000</span>
                            <a href="https://thedigicoders.com/home/apprenticeshiptraining"
                                class="fw-bold text-decoration-none d-inline-flex align-items-center gap-1 hover-arrow"
                                style="color: var(--blue);" target="_blank" rel="noopener noreferrer">
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
                            <h4 class="fw-bold mb-3" style="font-family: 'Montserrat', sans-serif; font-size: 1.25rem;">
                                Internship Training</h4>
                            <p class="text-secondary text-sm mb-4">Work on live commercial projects with our development
                                team and gain professional experience.</p>
                        </div>
                        <div
                            class="pt-3 border-top border-secondary border-opacity-10 d-flex align-items-center justify-content-between">
                            <span class="fs-5 fw-bold" style="color: var(--blue);">₹30,000</span>
                            <a href="https://thedigicoders.com/home/internshiptraining"
                                class="fw-bold text-decoration-none d-inline-flex align-items-center gap-1 hover-arrow"
                                style="color: var(--blue);" target="_blank" rel="noopener noreferrer">
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
                            <h4 class="fw-bold mb-3" style="font-family: 'Montserrat', sans-serif; font-size: 1.25rem;">
                                Project Training</h4>
                            <p class="text-secondary text-sm mb-4">Dedicated guidance for final year minor/major projects
                                following SDLC and industrial patterns.</p>
                        </div>
                        <div
                            class="pt-3 border-top border-secondary border-opacity-10 d-flex align-items-center justify-content-between">
                            <span class="fs-5 fw-bold" style="color: var(--blue);">₹7,000</span>
                            <a href="https://thedigicoders.com/home/projecttraining"
                                class="fw-bold text-decoration-none d-inline-flex align-items-center gap-1 hover-arrow"
                                style="color: var(--blue);" target="_blank" rel="noopener noreferrer">
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
                            <h4 class="fw-bold mb-3" style="font-family: 'Montserrat', sans-serif; font-size: 1.25rem;">
                                Syllabus Training</h4>
                            <p class="text-secondary text-sm mb-4">Covers academic curriculum with practical implementation
                                for B.Tech/Diploma 1st, 2nd & 3rd year.</p>
                        </div>
                        <div
                            class="pt-3 border-top border-secondary border-opacity-10 d-flex align-items-center justify-content-between">
                            <span class="fs-5 fw-bold" style="color: var(--blue);">₹7,000</span>
                            <a href="https://thedigicoders.com/home/syllabustraining"
                                class="fw-bold text-decoration-none d-inline-flex align-items-center gap-1 hover-arrow"
                                style="color: var(--blue);" target="_blank" rel="noopener noreferrer">
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
                            <h4 class="fw-bold mb-3" style="font-family: 'Montserrat', sans-serif; font-size: 1.25rem;">
                                Faculty Training</h4>
                            <p class="text-secondary text-sm mb-4">Upgradation programs for teachers and faculty of
                                engineering colleges on latest tech trends.</p>
                        </div>
                        <div
                            class="pt-3 border-top border-secondary border-opacity-10 d-flex align-items-center justify-content-between">
                            <span class="fs-5 fw-bold" style="color: var(--blue);">₹7,000</span>
                            <a href="https://thedigicoders.com/home/facultytraining"
                                class="fw-bold text-decoration-none d-inline-flex align-items-center gap-1 hover-arrow"
                                style="color: var(--blue);" target="_blank" rel="noopener noreferrer">
                                View more <i class="bi bi-arrow-right arrow-icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Plan & Pricing Section -->
    <section class="section-padding bg-secondary bg-opacity-10 pricing-section" id="pricing">
        <div class="container">
            <div class="text-center max-w-xl mx-auto mb-5" data-aos="fade-up">
                <span class="badge bg-brand-blue-10 text-brand-blue px-3 py-2 rounded-pill fw-semibold mb-3">Choose Your
                    Plan</span>
                <h2 class="fw-bold h1 mt-2" style="font-family: 'Montserrat', sans-serif;">Plan &amp; <span
                        style="color: var(--orange);">Pricing</span></h2>
                <p class="text-secondary">Learn with structured programs designed to upgrade skills, build confidence and
                    prepare you for real-world opportunities.</p>
            </div>

            <div class="row g-4 justify-content-center">
                <!-- Card 1: Summer Training -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="pricing-card" style="border-radius: 4px !important;">
                        <div class="ribbon-popular">Popular</div>
                        <div>
                            <span class="badge-plan badge-plan-blue" style="border-radius: 20px !important;">Best for
                                Students</span>

                            <h3 class="plan-title" style="font-family: 'Montserrat', sans-serif;">
                                Summer Training
                            </h3>

                            <div class="price-tag">
                                <span class="price-currency">₹</span>7,000
                            </div>

                            <ul class="feature-list">
                                <li class="feature-item">
                                    <i class="bi bi-check-circle-fill feature-icon"></i>
                                    Personal Student Panel Access
                                </li>

                                <li class="feature-item">
                                    <i class="bi bi-check-circle-fill feature-icon"></i>
                                    Daily Attendance & Progress Tracking
                                </li>

                                <li class="feature-item">
                                    <i class="bi bi-check-circle-fill feature-icon"></i>
                                    Notes, Assignments & Recorded Sessions
                                </li>

                                <li class="feature-item">
                                    <i class="bi bi-check-circle-fill feature-icon"></i>
                                    Online Practice Tests & Certificate Verification
                                </li>

                                <li class="feature-item">
                                    <i class="bi bi-check-circle-fill feature-icon"></i>
                                    Live Project + 1 Year Learning Portal Access
                                </li>

                                <li class="feature-item">
                                    <i class="bi bi-check-circle-fill feature-icon"></i>
                                    ISO Verified Certificate & Training Completion Letter
                                </li>
                            </ul>
                        </div>
                        <a href="https://thedigicoders.com/home/summertraining" target="_blank" rel="noopener noreferrer"
                            class="enroll-btn enroll-btn-blue">Enroll Now</a>
                    </div>
                </div>

                <!-- Card 2: Industrial Training -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="pricing-card" style="border-radius: 4px !important;">
                        <div>
                            <span class="badge-plan badge-plan-blue" style="border-radius: 20px !important;">Most
                                Enrolled</span>

                            <h3 class="plan-title" style="font-family: 'Montserrat', sans-serif;">
                                Industrial Training
                            </h3>

                            <div class="price-tag">
                                <span class="price-currency">₹</span>7,000
                            </div>

                            <ul class="feature-list">
                                <li class="feature-item"><i class="bi bi-check-circle-fill feature-icon"></i> 100% Practical
                                    Learning</li>

                                <li class="feature-item"><i class="bi bi-check-circle-fill feature-icon"></i> Live Project
                                    Development</li>

                                <li class="feature-item"><i class="bi bi-check-circle-fill feature-icon"></i> Expert
                                    Developer Mentorship</li>

                                <li class="feature-item"><i class="bi bi-check-circle-fill feature-icon"></i> Daily Coding
                                    Assignments</li>

                                <li class="feature-item"><i class="bi bi-check-circle-fill feature-icon"></i> Soft Skills &
                                    Interview Preparation</li>

                                <li class="feature-item"><i class="bi bi-check-circle-fill feature-icon"></i> Company
                                    Certificate & Project Completion Letter</li>
                            </ul>
                        </div>
                        <a href="https://thedigicoders.com/home/industrialtraining" target="_blank"
                            rel="noopener noreferrer" class="enroll-btn enroll-btn-blue">Enroll Now</a>
                    </div>
                </div>

                <!-- Card 3: Apprenticeship Training -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="pricing-card" style="border-radius: 4px !important;">
                        <div>
                            <span class="badge-plan badge-plan-blue" style="border-radius: 20px !important;">Career
                                Focused</span>

                            <h3 class="plan-title" style="font-family: 'Montserrat', sans-serif;">
                                Apprenticeship Training
                            </h3>

                            <div class="price-tag">
                                <span class="price-currency">₹</span>30,000
                            </div>

                            <ul class="feature-list">
                                <li class="feature-item"><i class="bi bi-check-circle-fill feature-icon"></i> 100% Placement
                                    Assistance</li>

                                <li class="feature-item"><i class="bi bi-check-circle-fill feature-icon"></i> Live Industry
                                    & Client Projects</li>

                                <li class="feature-item"><i class="bi bi-check-circle-fill feature-icon"></i> Dedicated
                                    Mentor & Code Reviews</li>

                                <li class="feature-item"><i class="bi bi-check-circle-fill feature-icon"></i> Mock
                                    Interviews & HR Preparation</li>

                                <li class="feature-item"><i class="bi bi-check-circle-fill feature-icon"></i> Resume,
                                    LinkedIn & Portfolio Support</li>

                                <li class="feature-item"><i class="bi bi-check-circle-fill feature-icon"></i> ISO Certified
                                    Training + Experience Letter</li>
                            </ul>
                        </div>
                        <a href="https://thedigicoders.com/home/apprenticeshiptraining" target="_blank"
                            rel="noopener noreferrer" class="enroll-btn enroll-btn-blue">Enroll Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Comparison Section -->
    <section class="section-padding comparison-section" id="comparison">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 950px;" data-aos="fade-up">
                <span
                    class="badge bg-brand-blue-10 text-brand-blue px-3 py-2 rounded-pill fw-semibold mb-3">Comparison</span>
                <h2 class="fw-bold mt-2 comp-title"
                    style="font-family: 'Montserrat', sans-serif; font-size: clamp(1.8rem, 3.2vw, 2.5rem); line-height: 1.25;">
                    What Sets <span style="color: var(--blue);">DigiCoders</span> Apart From Other Institutes</h2>
                <p class="comp-subtitle mx-auto" style="max-width: 600px;">We focus on real skills, practical training, and
                    career results — not just certificates.</p>
            </div>

            <div class="row g-4 align-items-stretch justify-content-center">
                <!-- DigiCoders Technologies -->
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                    <div class="comp-card comp-card-digicoders">
                        <div class="comp-logo-container">
                            <img src="{{ asset('assets/images/logo.png') }}" alt="DigiCoders Technologies Logo"
                                class="comp-logo-img logo-light">
                            <img src="{{ asset('assets/images/logo-white.png') }}" alt="DigiCoders Technologies Logo"
                                class="comp-logo-img logo-dark">
                            <h3 class="comp-logo-title">DigiCoders Technologies</h3>
                        </div>
                        <ul class="comp-list">
                            <li class="comp-item">
                                <span class="comp-item-icon-check" style="border-radius: 50% !important;"><i
                                        class="bi bi-check"></i></span>
                                <span>Affordable &amp; Value-Driven Fee Structure</span>
                            </li>
                            <li class="comp-item">
                                <span class="comp-item-icon-check" style="border-radius: 50% !important;"><i
                                        class="bi bi-check"></i></span>
                                <span>100% Practical &amp; Lab-Based Learning (5 Hours Daily)</span>
                            </li>
                            <li class="comp-item">
                                <span class="comp-item-icon-check" style="border-radius: 50% !important;"><i
                                        class="bi bi-check"></i></span>
                                <span>Active Industry Developers as Mentors &amp; Trainers</span>
                            </li>
                            <li class="comp-item">
                                <span class="comp-item-icon-check" style="border-radius: 50% !important;"><i
                                        class="bi bi-check"></i></span>
                                <span>Live Client Projects &amp; Real-World Case Studies</span>
                            </li>
                            <li class="comp-item">
                                <span class="comp-item-icon-check" style="border-radius: 50% !important;"><i
                                        class="bi bi-check"></i></span>
                                <span>Latest &amp; Industry-Relevant Up-to-date Curriculum</span>
                            </li>
                            <li class="comp-item">
                                <span class="comp-item-icon-check" style="border-radius: 50% !important;"><i
                                        class="bi bi-check"></i></span>
                                <span>Cloud Deployment, Git/GitHub &amp; DevTools Training</span>
                            </li>
                            <li class="comp-item">
                                <span class="comp-item-icon-check" style="border-radius: 50% !important;"><i
                                        class="bi bi-check"></i></span>
                                <span>Dedicated Placement Cell with 100% Placement Assistance</span>
                            </li>
                            <li class="comp-item">
                                <span class="comp-item-icon-check" style="border-radius: 50% !important;"><i
                                        class="bi bi-check"></i></span>
                                <span>Regular Mock Interviews &amp; Resume Building Workshops</span>
                            </li>
                            <li class="comp-item">
                                <span class="comp-item-icon-check" style="border-radius: 50% !important;"><i
                                        class="bi bi-check"></i></span>
                                <span>Verifiable ISO Certified Certificates with Online Verification Link</span>
                            </li>
                            <li class="comp-item">
                                <span class="comp-item-icon-check" style="border-radius: 50% !important;"><i
                                        class="bi bi-check"></i></span>
                                <span>Free Web Hosting &amp; Sub-domain for Every Student Portfolio</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Other Institutes -->
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
                    <div class="comp-card comp-card-others">
                        <div class="comp-logo-container">
                            <div class="d-flex align-items-center justify-content-center bg-danger bg-opacity-15 text-white"
                                style="width: 38px; height: 38px; font-size: 1.1rem; border-radius: 50% !important;"><i
                                    class="bi bi-x-lg"></i></div>
                            <h3 class="comp-logo-title text-secondary">Other Institutes</h3>
                        </div>
                        <ul class="comp-list">
                            <li class="comp-item">
                                <span class="comp-item-icon-cross" style="border-radius: 50% !important;"><i
                                        class="bi bi-x-lg"></i></span>
                                <span>High Fees with Compromised Training Quality</span>
                            </li>
                            <li class="comp-item">
                                <span class="comp-item-icon-cross" style="border-radius: 50% !important;"><i
                                        class="bi bi-x-lg"></i></span>
                                <span>Theory-Based Lectures with No Hands-On Daily Practice</span>
                            </li>
                            <li class="comp-item">
                                <span class="comp-item-icon-cross" style="border-radius: 50% !important;"><i
                                        class="bi bi-x-lg"></i></span>
                                <span>Traditional Teachers with No Real Industry Experience</span>
                            </li>
                            <li class="comp-item">
                                <span class="comp-item-icon-cross" style="border-radius: 50% !important;"><i
                                        class="bi bi-x-lg"></i></span>
                                <span>Outdated Dummy Projects or No Live Project Exposure</span>
                            </li>
                            <li class="comp-item">
                                <span class="comp-item-icon-cross" style="border-radius: 50% !important;"><i
                                        class="bi bi-x-lg"></i></span>
                                <span>Outdated Syllabus Not Matching Current Tech Standards</span>
                            </li>
                            <li class="comp-item">
                                <span class="comp-item-icon-cross" style="border-radius: 50% !important;"><i
                                        class="bi bi-x-lg"></i></span>
                                <span>No Knowledge of Deployment, Hosting, or Modern Tools</span>
                            </li>
                            <li class="comp-item">
                                <span class="comp-item-icon-cross" style="border-radius: 50% !important;"><i
                                        class="bi bi-x-lg"></i></span>
                                <span>Minimal or No Job Placement Support / Placement Claims Only</span>
                            </li>
                            <li class="comp-item">
                                <span class="comp-item-icon-cross" style="border-radius: 50% !important;"><i
                                        class="bi bi-x-lg"></i></span>
                                <span>No Interview Preparation, Personality, or Soft Skills Training</span>
                            </li>
                            <li class="comp-item">
                                <span class="comp-item-icon-cross" style="border-radius: 50% !important;"><i
                                        class="bi bi-x-lg"></i></span>
                                <span>Simple Paper Certificates with No Online Verification Value</span>
                            </li>
                            <li class="comp-item">
                                <span class="comp-item-icon-cross" style="border-radius: 50% !important;"><i
                                        class="bi bi-x-lg"></i></span>
                                <span>No Hosting Support — Project remains on Localhost Only</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. Live Projects -->
    <section class="section-padding bg-secondary bg-opacity-10">
        <div class="container">
            <div class="text-center max-w-xl mx-auto mb-5" data-aos="fade-up">
                <span class="text-brand-blue fw-bold text-sm uppercase">Practical Exposure</span>
                <h2 class="fw-bold h1 mt-2" style="font-family: 'Montserrat', sans-serif;">Live Projects Built by Students
                </h2>
                <p class="text-secondary">Students work in groups to design, build, and deploy production-grade software
                    applications.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="glass-card p-4 h-100">
                        <h6 class="text-brand-blue fw-bold uppercase mb-2">Web Application</h6>
                        <h5 class="fw-bold mb-3">Multi-vendor Ecommerce</h5>
                        <p class="text-secondary mb-0">Build shopping portals with cart systems, discount models, admin
                            sheets, and payment gateway callbacks.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="glass-card p-4 h-100">
                        <h6 class="text-brand-blue fw-bold uppercase mb-2">Enterprise Software</h6>
                        <h5 class="fw-bold mb-3">School ERP Portal</h5>
                        <p class="text-secondary mb-0">Management logs, online fee collections, grade reporting databases,
                            and teacher-parent SMS triggers.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="glass-card p-4 h-100">
                        <h6 class="text-brand-blue fw-bold uppercase mb-2">App Development</h6>
                        <h5 class="fw-bold mb-3">Real-time Chat App</h5>
                        <p class="text-secondary mb-0">Built using Flutter and Firebase, featuring instantaneous web-socket
                            messages, media shares, and profile locks.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. Placement Process -->
    <section class="section-padding">
        <div class="container">
            <div class="text-center max-w-xl mx-auto mb-5" data-aos="fade-up">
                <span class="text-brand-blue fw-bold text-sm uppercase">Job Gateway</span>
                <h2 class="fw-bold h1 mt-2" style="font-family: 'Montserrat', sans-serif;">Our Placement Process</h2>
                <p class="text-secondary">A step-by-step career path structure mapped to launch your software developer
                    role.</p>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="glass-panel p-4 h-100 text-center rounded-3">
                        <div class="fs-2 text-brand-blue fw-bold mb-3">01</div>
                        <h5 class="fw-bold mb-2">Syllabus Completion</h5>
                        <p class="text-secondary text-sm mb-0">Master the chosen technology stacks through practical-based
                            classroom coding.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="glass-panel p-4 h-100 text-center rounded-3">
                        <div class="fs-2 text-brand-blue fw-bold mb-3">02</div>
                        <h5 class="fw-bold mb-2">Capstone Project</h5>
                        <p class="text-secondary text-sm mb-0">Complete a corporate scale live-project, commit it to GitHub,
                            and deploy online.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="glass-panel p-4 h-100 text-center rounded-3">
                        <div class="fs-2 text-brand-blue fw-bold mb-3">03</div>
                        <h5 class="fw-bold mb-2">Mock Drills</h5>
                        <p class="text-secondary text-sm mb-0">Go through comprehensive technical code testing reviews and
                            communication checks.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="glass-panel p-4 h-100 text-center rounded-3">
                        <div class="fs-2 text-brand-blue fw-bold mb-3">04</div>
                        <h5 class="fw-bold mb-2">Hiring Drive</h5>
                        <p class="text-secondary text-sm mb-0">Participate in dedicated placement drives with local and
                            national corporate agencies.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- 11. Gallery -->
    <section class="section-padding" id="gallery">
        <div class="container">
            <div class="text-center max-w-xl mx-auto mb-5" data-aos="fade-up">
                <span class="text-brand-blue fw-bold text-sm uppercase">Campus Life</span>
                <h2 class="fw-bold h1 mt-2" style="font-family: 'Montserrat', sans-serif;">DigiCoders Gallery</h2>
                <p class="text-secondary">Glimpses of daily classroom training, industrial seminars, and certificate award
                    ceremonies.</p>
            </div>

            <!-- Filter Tabs -->
            <div class="d-flex justify-content-center gap-2 mb-4 flex-wrap">
                <button class="btn btn-sm btn-brand-blue rounded-pill px-3 py-2 filter-btn" data-filter="all">All
                    Photos</button>
                <button class="btn btn-sm btn-outline-brand-blue rounded-pill px-3 py-2 filter-btn"
                    data-filter="training">Class Training</button>
                <button class="btn btn-sm btn-outline-brand-blue rounded-pill px-3 py-2 filter-btn"
                    data-filter="placement">Placements</button>
                <button class="btn btn-sm btn-outline-brand-blue rounded-pill px-3 py-2 filter-btn"
                    data-filter="campus">Campus
                    Life</button>
            </div>

            <div class="row g-3" id="gallery-grid">
                <!-- Static Gallery Items -->
                <!-- Item 1: Class Training -->
                <div class="col-lg-3 col-md-4 col-6 gallery-item" data-category="training" data-aos="zoom-in">
                    <div class="glass-card overflow-hidden" style="border-radius: 4px;">
                        <div class="position-relative overflow-hidden"
                            style="height: 180px; background: rgba(0, 0, 0, 0.05);">
                            <img src="{{ asset('assets/gallery/digicoders-gorakhpur-classroom-cs-it-training.jpeg') }}"
                                class="w-100 h-100 object-fit-cover gallery-img" alt="Interactive Coding Classroom Session">
                        </div>
                        <div class="p-3">
                            <small class="text-brand-blue uppercase fw-semibold d-block text-xs mb-1">TRAINING</small>
                            <span class="fw-semibold text-sm d-block text-truncate"
                                title="Interactive Coding Classroom Session">Interactive Coding Classroom Session</span>
                        </div>
                    </div>
                </div>

                <!-- Item 2: Class Training -->
                <div class="col-lg-3 col-md-4 col-6 gallery-item" data-category="training" data-aos="zoom-in">
                    <div class="glass-card overflow-hidden" style="border-radius: 4px;">
                        <div class="position-relative overflow-hidden"
                            style="height: 180px; background: rgba(0, 0, 0, 0.05);">
                            <img src="{{ asset('assets/gallery/digicoders-gorakhpur-industrial-training-center.jpeg') }}"
                                class="w-100 h-100 object-fit-cover gallery-img"
                                alt="Students Working on Capstone Projects">
                        </div>
                        <div class="p-3">
                            <small class="text-brand-blue uppercase fw-semibold d-block text-xs mb-1">TRAINING</small>
                            <span class="fw-semibold text-sm d-block text-truncate"
                                title="Students Working on Capstone Projects">Students Working on Capstone Projects</span>
                        </div>
                    </div>
                </div>

                <!-- Item 3: Class Training -->
                <div class="col-lg-3 col-md-4 col-6 gallery-item" data-category="training" data-aos="zoom-in">
                    <div class="glass-card overflow-hidden" style="border-radius: 4px;">
                        <div class="position-relative overflow-hidden"
                            style="height: 180px; background: rgba(0, 0, 0, 0.05);">
                            <img src="{{ asset('assets/gallery/best-it-training-institute-gorakhpur-digicoders.jpeg') }}"
                                class="w-100 h-100 object-fit-cover gallery-img" alt="One-on-One Mentorship and Debugging">
                        </div>
                        <div class="p-3">
                            <small class="text-brand-blue uppercase fw-semibold d-block text-xs mb-1">TRAINING</small>
                            <span class="fw-semibold text-sm d-block text-truncate"
                                title="One-on-One Mentorship and Debugging">One-on-One Mentorship and Debugging</span>
                        </div>
                    </div>
                </div>

                <!-- Item 4: Placements -->
                <div class="col-lg-3 col-md-4 col-6 gallery-item" data-category="placement" data-aos="zoom-in">
                    <div class="glass-card overflow-hidden" style="border-radius: 4px;">
                        <div class="position-relative overflow-hidden"
                            style="height: 180px; background: rgba(0, 0, 0, 0.05);">
                            <img src="{{ asset('assets/gallery/digicoders-gorakhpur-placement.jpeg') }}"
                                class="w-100 h-100 object-fit-cover gallery-img" alt="Campus Hiring Drive & Placements">
                        </div>
                        <div class="p-3">
                            <small class="text-brand-blue uppercase fw-semibold d-block text-xs mb-1">PLACEMENT</small>
                            <span class="fw-semibold text-sm d-block text-truncate"
                                title="Campus Hiring Drive & Placements">Campus Hiring Drive & Placements</span>
                        </div>
                    </div>
                </div>

                <!-- Item 5: Campus Life -->
                <div class="col-lg-3 col-md-4 col-6 gallery-item" data-category="campus" data-aos="zoom-in">
                    <div class="glass-card overflow-hidden" style="border-radius: 4px;">
                        <div class="position-relative overflow-hidden"
                            style="height: 180px; background: rgba(0, 0, 0, 0.05);">
                            <img src="{{ asset('assets/gallery/digicoders-gorakhpur-hr-department-office.jpeg') }}"
                                class="w-100 h-100 object-fit-cover gallery-img"
                                alt="Collaborative Brainstorming in Meeting Room">
                        </div>
                        <div class="p-3">
                            <small class="text-brand-blue uppercase fw-semibold d-block text-xs mb-1">CAMPUS</small>
                            <span class="fw-semibold text-sm d-block text-truncate"
                                title="Collaborative Brainstorming in Meeting Room">Collaborative Brainstorming in Meeting
                                Room</span>
                        </div>
                    </div>
                </div>

                <!-- Item 6: Campus Life -->
                <div class="col-lg-3 col-md-4 col-6 gallery-item" data-category="campus" data-aos="zoom-in">
                    <div class="glass-card overflow-hidden" style="border-radius: 4px;">
                        <div class="position-relative overflow-hidden"
                            style="height: 180px; background: rgba(0, 0, 0, 0.05);">
                            <img src="{{ asset('assets/gallery/digicoders-gorakhpur-office-front-view.jpeg') }}"
                                class="w-100 h-100 object-fit-cover gallery-img" alt="Modern IT Labs & Startup Workspace">
                        </div>
                        <div class="p-3">
                            <small class="text-brand-blue uppercase fw-semibold d-block text-xs mb-1">CAMPUS</small>
                            <span class="fw-semibold text-sm d-block text-truncate"
                                title="Modern IT Labs & Startup Workspace">Modern IT Labs & Startup Workspace</span>
                        </div>
                    </div>
                </div>

               

                <!-- Item 7: Team at Buddha Institute -->
                <div class="col-lg-3 col-md-4 col-6 gallery-item" data-category="campus" data-aos="zoom-in">
                    <div class="glass-card overflow-hidden" style="border-radius: 4px;">
                        <div class="position-relative overflow-hidden"
                            style="height: 180px; background: rgba(0, 0, 0, 0.05);">
                            <img src="{{ asset('assets/gallery/digicoders-team-at-buddha-institute-of-technology.jpg') }}"
                                class="w-100 h-100 object-fit-cover gallery-img" alt="DigiCoders Team at Buddha Institute of Technology">
                        </div>
                        <div class="p-3">
                            <small class="text-brand-blue uppercase fw-semibold d-block text-xs mb-1">CAMPUS</small>
                            <span class="fw-semibold text-sm d-block text-truncate"
                                title="DigiCoders Team at Buddha Institute of Technology">Team at Buddha Institute</span>
                        </div>
                    </div>
                </div>

                <!-- Item 8: Trainers at Buddha Campus -->
                <div class="col-lg-3 col-md-4 col-6 gallery-item" data-category="campus" data-aos="zoom-in">
                    <div class="glass-card overflow-hidden" style="border-radius: 4px;">
                        <div class="position-relative overflow-hidden"
                            style="height: 180px; background: rgba(0, 0, 0, 0.05);">
                            <img src="{{ asset('assets/gallery/digicoders-trainers-buddha-campus-gorakhpur.jpg') }}"
                                class="w-100 h-100 object-fit-cover gallery-img" alt="DigiCoders Trainers at Buddha Campus Gorakhpur">
                        </div>
                        <div class="p-3">
                            <small class="text-brand-blue uppercase fw-semibold d-block text-xs mb-1">CAMPUS</small>
                            <span class="fw-semibold text-sm d-block text-truncate"
                                title="DigiCoders Trainers at Buddha Campus Gorakhpur">Trainers at Buddha Campus</span>
                        </div>
                    </div>
                </div>
                {{-- Dynamic code commented out
                @forelse($gallery as $g)
                <div class="col-lg-3 col-md-4 col-6 gallery-item" data-category="{{ $g->category }}" data-aos="zoom-in">
                    <div class="glass-card overflow-hidden" style="border-radius: 4px;">
                        <div class="position-relative overflow-hidden"
                            style="height: 180px; background: rgba(0, 0, 0, 0.05);">
                            <img src="{{ asset($g->image) }}" class="w-100 h-100 object-fit-cover gallery-img"
                                alt="{{ $g->title }}">
                        </div>
                        <div class="p-3">
                            <small class="text-brand-blue uppercase fw-semibold d-block text-xs mb-1">{{
                                strtoupper($g->category) }}</small>
                            <span class="fw-semibold text-sm d-block text-truncate" title="{{ $g->title }}">{{ $g->title ??
                                'Campus event' }}</span>
                        </div>
                    </div>
                </div>
                @empty
                <p class="text-center w-100 text-secondary">No gallery images seeded.</p>
                @endforelse
                --}}
            </div>
        </div>
    </section>

    <!-- 12. FAQ -->
    <section class="section-padding bg-secondary bg-opacity-10" id="faqs">
        <div class="container">
            <div class="text-center max-w-xl mx-auto mb-5" data-aos="fade-up">
                <span class="text-brand-blue fw-bold text-sm uppercase">General Answers</span>
                <h2 class="fw-bold h1 mt-2" style="font-family: 'Montserrat', sans-serif;">Frequently Asked Questions</h2>
                <p class="text-secondary">Have doubts? We address common queries about our training, batch structures, and
                    certifications.</p>
            </div>

            {{-- Static FAQ Data (Dynamic code commented out below) --}}
            {{-- @forelse($faqs as $index => $faq) ... @endforelse --}}

            @php
                $staticFaqs = [
                    ['q' => 'What is DigiCoders Technologies Pvt. Ltd.?', 'a' => 'DigiCoders Technologies Pvt. Ltd. is a professional IT Training and Internship company in Gorakhpur that provides practical training programs for Diploma (CS/IT), B.Tech (Computer Science/IT), BCA, MCA, and other technical students. We focus on live projects, industry-oriented learning, internship certification, and placement assistance.'],
                    ['q' => 'Which students can join DigiCoders training programs?', 'a' => 'Students pursuing Diploma in Computer Science or Information Technology, B.Tech (CS/IT), BCA, MCA, B.Sc IT, and fresh graduates can join our training programs. Beginners as well as students with basic programming knowledge are welcome.'],
                    ['q' => 'What types of training programs do you offer?', 'a' => 'We provide Summer Training, Winter Training, Industrial Training, Apprenticeship Training, Internship Programs, Full Stack Development Training, Web Development Training, Python Training, Java Training, PHP Laravel Training, Data Science, AI, and Digital Marketing courses.'],
                    ['q' => 'What is Summer Training?', 'a' => 'Summer Training is a practical learning program conducted during summer vacations. Students work on live projects, improve technical skills, and gain industry experience that helps them prepare for placements and future careers.'],
                    ['q' => 'What is Winter Training?', 'a' => 'Winter Training is designed for students who want to utilize their winter break to enhance programming, development, and software engineering skills through practical sessions and real-world projects.'],
                    ['q' => 'What is Industrial Training?', 'a' => 'Industrial Training provides students with real software development experience by working on live industry projects under experienced mentors. It helps bridge the gap between academic knowledge and professional requirements.'],
                    ['q' => 'What is Apprenticeship Training?', 'a' => 'Apprenticeship Training is an advanced practical program where students gain hands-on experience by working on real client-based projects while learning industry standards, teamwork, and software development practices.'],
                    ['q' => 'Do you provide Internship Certificates?', 'a' => 'Yes. After successfully completing the training or internship program and fulfilling the project requirements, students receive an Internship/Training Completion Certificate from DigiCoders Technologies Pvt. Ltd.'],
                    ['q' => 'Which programming languages and technologies are taught?', 'a' => 'We provide training in PHP, Laravel, Java, Python, C, C++, HTML, CSS, JavaScript, Bootstrap, React, MySQL, Android Development, Full Stack Development, Data Science, AI, and Digital Marketing.'],
                    ['q' => 'Are live projects included in the training?', 'a' => 'Yes. Students work on live projects such as E-Commerce Websites, College Management Systems, Hospital Management Systems, Attendance Systems, Portfolio Websites, and other real-world applications.'],
                    ['q' => 'Is the training suitable for beginners?', 'a' => 'Yes. Our programs start from basic concepts and gradually move to advanced topics, making them suitable for beginners as well as students who want to improve their existing skills.'],
                    ['q' => 'Do you provide placement assistance?', 'a' => 'Yes. DigiCoders provides placement assistance including resume preparation, technical interview guidance, aptitude preparation, mock interviews, and career counseling to help students start their IT careers.'],
                    ['q' => 'Why should students choose DigiCoders Technologies Pvt. Ltd.?', 'a' => 'Students choose DigiCoders because of practical training, experienced trainers, live projects, updated industry curriculum, internship certification, career guidance, and a supportive learning environment focused on real skill development.'],
                    ['q' => 'What is the duration of the training programs?', 'a' => 'Training duration depends on the selected program. Students can choose options such as 30 Days, 45 Days, 60 Days, 3 Months, or 6 Months according to their academic requirements and career goals.'],
                    ['q' => 'Do you provide project guidance for college students?', 'a' => 'Yes. We help Diploma, B.Tech, BCA, and MCA students build academic and major projects using modern technologies while explaining the complete development process and documentation.'],
                    ['q' => 'Will students receive practical coding experience?', 'a' => 'Absolutely. Every student writes code, builds projects, debugs applications, works with databases, and develops complete software solutions to gain confidence in real development environments.'],
                    ['q' => 'Can final-year students join internship programs?', 'a' => 'Yes. Final-year Diploma, B.Tech, BCA, and MCA students can join our internship programs to improve technical skills, build professional projects, and prepare for campus placements and job opportunities.'],
                    ['q' => 'What career opportunities are available after completing the training?', 'a' => 'After completing the training, students can apply for roles such as Web Developer, PHP Developer, Laravel Developer, Java Developer, Python Developer, Full Stack Developer, Software Engineer, Android Developer, Data Analyst, and Digital Marketing Executive.'],
                    ['q' => 'How can students enroll in DigiCoders training programs?', 'a' => 'Students can enroll by filling out the online registration form, contacting our admission team, visiting our training center, or connecting through phone, email, or WhatsApp for complete course information and admission guidance.'],
                    ['q' => 'Does DigiCoders provide both online and offline training?', 'a' => 'Yes. DigiCoders Technologies Pvt. Ltd. offers both classroom and online training programs, allowing students from Gorakhpur and other cities to learn from experienced trainers with access to practical sessions, live projects, and mentorship.'],
                ];
            @endphp

            {{-- 2-column FAQ layout: left col = even items, right col = odd items (no cross-column spacing) --}}
            <div class="row g-0 align-items-start" id="faqGrid">
                {{-- Left Column --}}
                <div class="col-md-6 pe-md-2" id="faqColLeft">
                    @foreach($staticFaqs as $i => $faq)
                        @if($i % 2 === 0)
                            <div class="faq-item mb-3 {{ $i >= 10 ? 'faq-extra d-none' : '' }}" data-aos="fade-up"
                                data-aos-delay="0">
                                <div class="accordion faq-accordion-independent" id="faqAcc{{ $i }}">
                                    <div class="accordion-item border rounded-3 shadow-sm overflow-hidden">
                                        <h2 class="accordion-header" id="faqH{{ $i }}">
                                            <button class="accordion-button collapsed fw-semibold faq-custom-btn" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#faqC{{ $i }}" aria-expanded="false"
                                                aria-controls="faqC{{ $i }}">
                                                <span class="faq-q-num me-2">Q{{ $i + 1 }}.</span>
                                                {{ $faq['q'] }}
                                            </button>
                                        </h2>
                                        <div id="faqC{{ $i }}" class="accordion-collapse collapse" aria-labelledby="faqH{{ $i }}">
                                            <div class="accordion-body text-secondary">
                                                <span class="faq-ans-label">Ans.</span> {{ $faq['a'] }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
                {{-- Right Column --}}
                <div class="col-md-6 ps-md-2" id="faqColRight">
                    @foreach($staticFaqs as $i => $faq)
                        @if($i % 2 !== 0)
                            <div class="faq-item mb-3 {{ $i >= 10 ? 'faq-extra d-none' : '' }}" data-aos="fade-up"
                                data-aos-delay="100">
                                <div class="accordion faq-accordion-independent" id="faqAcc{{ $i }}">
                                    <div class="accordion-item border rounded-3 shadow-sm overflow-hidden">
                                        <h2 class="accordion-header" id="faqH{{ $i }}">
                                            <button class="accordion-button collapsed fw-semibold faq-custom-btn" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#faqC{{ $i }}" aria-expanded="false"
                                                aria-controls="faqC{{ $i }}">
                                                <span class="faq-q-num me-2">Q{{ $i + 1 }}.</span>
                                                {{ $faq['q'] }}
                                            </button>
                                        </h2>
                                        <div id="faqC{{ $i }}" class="accordion-collapse collapse" aria-labelledby="faqH{{ $i }}">
                                            <div class="accordion-body text-secondary">
                                                <span class="faq-ans-label">Ans.</span> {{ $faq['a'] }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>

            {{-- View More / View Less buttons --}}
            <div class="text-center mt-4" id="faqToggleWrap">
                <button class="btn faq-toggle-btn px-4 py-2 rounded-3 fw-semibold" id="faqViewMore"
                    onclick="toggleFaqs(true)">
                    <i class="bi bi-chevron-down me-1"></i> View More FAQs
                </button>
                <button class="btn faq-toggle-btn px-4 py-2 rounded-3 fw-semibold d-none" id="faqViewLess"
                    onclick="toggleFaqs(false)">
                    <i class="bi bi-chevron-up me-1"></i> View Less
                </button>
            </div>
        </div>
    </section>

    <script>
        function toggleFaqs(show) {
            document.querySelectorAll('.faq-extra').forEach(el => {
                el.classList.toggle('d-none', !show);
            });
            document.getElementById('faqViewMore').classList.toggle('d-none', show);
            document.getElementById('faqViewLess').classList.toggle('d-none', !show);
            if (!show) {
                document.getElementById('faqs').scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        }
    </script>


    <!-- 13. Blog Section -->
    <section class="section-padding" id="blog">
        <div class="container">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-5"
                data-aos="fade-up">
                <div>
                    <span class="text-brand-blue fw-bold text-sm uppercase">Latest Updates</span>
                    <h2 class="fw-bold h1 mt-2" style="font-family: 'Montserrat', sans-serif;">Latest from Tech
                        Blog</h2>
                </div>
                <a href="https://thedigicoders.com/blog" class="btn-glass-sm mt-3 mt-md-0" target="_blank"
                    rel="noopener noreferrer">Explore All Posts</a>
            </div>

            <div class="d-none" id="blog-loading-skeletons" class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="blog-skeleton-card"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-skeleton-card"></div>
                </div>
                <div class="col-lg-4 col-md-6 d-none d-lg-block">
                    <div class="blog-skeleton-card"></div>
                </div>
            </div>

            <!-- Dynamic Blogs Swiper Container -->
            <div class="blogs-swiper-container swiper d-none" id="blogs-container-wrap">
                <div class="swiper-wrapper" id="blogs-swiper-wrapper">
                    <!-- Dynamic blog slides will be injected here -->
                </div>
                <!-- Pagination -->
                <div class="blogs-swiper-pagination text-center mt-4"></div>
            </div>

            <!-- Error fallback state (initially hidden) -->
            <div id="blogs-error-fallback" class="text-center d-none py-4">
                <div class="glass-card p-5 max-w-md mx-auto">
                    <div class="text-warning mb-3">
                        <i class="bi bi-exclamation-triangle fs-1"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Unable to Load Blog Posts</h5>
                    <p class="text-secondary mb-4">We are currently updating our database. You can read our live
                        blog posts directly on the main site.</p>
                    <a href="https://thedigicoders.com/blog" class="btn btn-sm btn-premium" target="_blank"
                        rel="noopener noreferrer">Visit DigiCoders Blog</a>
                </div>
            </div>
        </div>
    </section>

    <!-- 14. CTA Section -->
    <section class="cta-premium-section position-relative overflow-hidden section-padding" id="contact">
        <!-- Animated Radial Background Glows -->
        <div class="cta-bg-glow cta-bg-glow-orange"></div>
        <div class="cta-bg-glow cta-bg-glow-blue"></div>

        <div class="container position-relative" style="z-index: 3;">
            <div class="row g-4 align-items-center">
                <!-- Left Column: Copy & Actions -->
                <div class="col-lg-5 text-center text-lg-start" data-aos="fade-right" data-aos-duration="1000">
                    <div class="cta-pill-badge mb-3 d-inline-flex align-items-center gap-2">
                        <i class="bi bi-lightning-charge-fill text-brand-orange"></i>
                        <span>Start Learning Today</span>
                    </div>
                    <h2 class="cta-heading fw-bold mb-4">
                        Ready to <span class="cta-heading-accent">Enhance</span> Your Skills?
                    </h2>
                    <p class="cta-subtext mb-4 text-secondary">
                        Learn from experts, build real projects and accelerate your tech career with guided, structured
                        programs.
                    </p>
                    <div
                        class="cta-buttons-group d-flex flex-column flex-sm-row align-items-center justify-content-center justify-content-lg-center gap-3">
                        <a href="https://thedigicoders.com/contact"
                            class="btn cta-btn-outline d-flex align-items-center justify-content-center gap-2 w-100 w-sm-auto">
                            <i class="bi bi-envelope-fill"></i> Contact Us
                        </a>
                        <a href="https://thedigicoders.com/registration"
                            class="btn cta-btn-solid d-flex align-items-center justify-content-center gap-2 w-100 w-sm-auto">
                            <i class="bi bi-rocket-takeoff-fill"></i> Register Now
                        </a>
                    </div>
                </div>

                <!-- Right Column: Interactive Animated Dashboard -->
                <div class="col-lg-7 d-flex justify-content-center align-items-center position-relative mt-5 mt-lg-0"
                    data-aos="fade-left" data-aos-duration="1000">
                    <div class="cta-mockup-wrapper">
                        <!-- Embedded inner glows -->
                        <div class="cta-inner-glow cta-inner-glow-blue"></div>
                        <div class="cta-inner-glow cta-inner-glow-orange"></div>

                        <!-- Main Interactive Tablet Dashboard Mockup -->
                        <div class="cta-dashboard-screen">
                            <!-- Top Window Header Bar -->
                            <div class="cta-screen-header d-flex align-items-center justify-content-between">
                                <div class="cta-dots d-flex gap-1">
                                    <span class="cta-dot red"></span>
                                    <span class="cta-dot yellow"></span>
                                    <span class="cta-dot green"></span>
                                </div>
                                <div class="cta-address-bar text-xs text-secondary opacity-75">digicoders.com/lms/dashboard
                                </div>
                                <div style="width: 32px;"></div> <!-- Spacer -->
                            </div>

                            <!-- Screen Main Content Grid -->
                            <div class="cta-screen-body d-flex">
                                <!-- Mock Sidebar -->
                                <div class="cta-sidebar d-flex flex-column align-items-center gap-3 pt-3">
                                    <div class="cta-sidebar-icon active"><i class="bi bi-grid-1x2-fill"></i></div>
                                    <div class="cta-sidebar-icon"><i class="bi bi-journal-code"></i></div>
                                    <div class="cta-sidebar-icon"><i class="bi bi-trophy-fill"></i></div>
                                    <div class="cta-sidebar-icon"><i class="bi bi-gear-fill"></i></div>
                                </div>

                                <!-- Main Interactive Workspace -->
                                <div class="cta-main-panel flex-grow-1 p-3">
                                    <!-- Student Header Info -->
                                    <div class="cta-student-card d-flex align-items-center gap-3 mb-3">
                                        <div class="cta-student-avatar d-flex align-items-center justify-content-center">
                                            <i class="bi bi-person-circle fs-3 text-brand-blue"></i>
                                        </div>
                                        <div class="cta-student-info flex-grow-1">
                                            <div class="cta-skeleton text-line-short mb-1"></div>
                                            <div class="cta-skeleton text-line-long"></div>
                                        </div>
                                    </div>

                                    <!-- Skill Index Graph (SVG Animated Chart) -->
                                    <div class="cta-chart-card mb-3 p-2 rounded">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <span class="cta-chart-label text-xs fw-semibold">Skill Level Progression</span>
                                            <span class="cta-chart-value text-xs fw-bold text-success">+85%</span>
                                        </div>
                                        <div class="cta-chart-container">
                                            <svg viewBox="0 0 200 80" class="cta-chart-svg" width="100%" height="80">
                                                <defs>
                                                    <linearGradient id="chart-area-glow" x1="0" y1="0" x2="0" y2="1">
                                                        <stop offset="0%" stop-color="#006DAB" stop-opacity="0.35" />
                                                        <stop offset="100%" stop-color="#006DAB" stop-opacity="0.0" />
                                                    </linearGradient>
                                                </defs>
                                                <!-- Grid Guides -->
                                                <line x1="0" y1="20" x2="200" y2="20" stroke="rgba(255,255,255,0.06)"
                                                    stroke-width="0.5" />
                                                <line x1="0" y1="40" x2="200" y2="40" stroke="rgba(255,255,255,0.06)"
                                                    stroke-width="0.5" />
                                                <line x1="0" y1="60" x2="200" y2="60" stroke="rgba(255,255,255,0.06)"
                                                    stroke-width="0.5" />

                                                <!-- Chart Fill Gradient Area -->
                                                <path d="M 0 80 L 0 70 Q 25 55 50 65 T 100 35 T 150 45 T 200 15 L 200 80 Z"
                                                    fill="url(#chart-area-glow)" />
                                                <!-- Drawing Path Line -->
                                                <path d="M 0 70 Q 25 55 50 65 T 100 35 T 150 45 T 200 15" fill="none"
                                                    stroke="url(#cta-chart-stroke)" stroke-width="2.5"
                                                    stroke-linecap="round" class="cta-chart-line-path" />
                                                <!-- Pulse Dot at End of Path -->
                                                <circle cx="200" cy="15" r="3.5" fill="var(--orange)"
                                                    class="cta-chart-pulse-dot" />
                                                <defs>
                                                    <linearGradient id="cta-chart-stroke" x1="0%" y1="0%" x2="100%" y2="0%">
                                                        <stop offset="0%" stop-color="var(--blue)" />
                                                        <stop offset="100%" stop-color="var(--orange)" />
                                                    </linearGradient>
                                                </defs>
                                            </svg>
                                        </div>
                                    </div>

                                    <!-- Quick Stats Row -->
                                    <div class="row g-2">
                                        <div class="col-6">
                                            <div class="cta-stat-box p-2 rounded text-center">
                                                <div class="cta-stat-box-num fw-bold text-brand-blue"
                                                    style="font-size: 1.1rem; line-height: 1.2;">120+</div>
                                                <div class="cta-stat-box-desc text-secondary" style="font-size: 0.65rem;">
                                                    Lessons Complete</div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="cta-stat-box p-2 rounded text-center">
                                                <div class="cta-stat-box-num fw-bold text-brand-orange"
                                                    style="font-size: 1.1rem; line-height: 1.2;">94%</div>
                                                <div class="cta-stat-box-desc text-secondary" style="font-size: 0.65rem;">
                                                    Average Quiz Score</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Floating Interactive IDE Coding snippet -->
                        <div class="cta-floating-card code-snippet p-2 shadow">
                            <div class="code-header d-flex gap-1 mb-2">
                                <span class="dot-red"></span>
                                <span class="dot-yellow"></span>
                                <span class="dot-green"></span>
                            </div>
                            <div class="code-body font-monospace text-xs" style="line-height: 1.4; font-size: 0.7rem;">
                                <div class="code-line"><span class="code-keyword">const</span> learner = <span
                                        class="code-string">"You"</span>;</div>
                                <div class="code-line"><span class="code-keyword">function</span> <span
                                        class="code-func">enhanceSkills</span>() {</div>
                                <div class="code-line" style="padding-left: 10px;"><span class="code-keyword">return</span>
                                    <span class="code-string">"Success 🚀"</span>;
                                </div>
                                <div class="code-line">}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 15. Google Map -->
    <section class="section-padding position-relative" style="height: 400px; margin-bottom: -1px;">
        <div class="container h-100 d-flex align-items-center">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3561.803328514588!2d83.2692523!3d26.7392969!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399147380139859b%3A0x708768ccb2c065c9!2sBuddha%20Institute%20of%20Technology!5e0!3m2!1sen!2sin!4v1718000000000"
                width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade" title="DigiCoders Technologies Location Map"></iframe>
        </div>
    </section>

    <!-- Gallery Filter Tag Actions script -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Swiper Marquee Initialization
            const swiper = new Swiper('.mySwiper', {
                slidesPerView: 'auto',
                spaceBetween: 20,
                loop: true,
                speed: 4000,
                freeMode: true,
                autoplay: {
                    delay: 0,
                    disableOnInteraction: false,
                    pauseOnMouseEnter: true,
                },
                allowTouchMove: true,
            });

            // Placements API Fetch and Carousel Initialization
            const loadPlacements = async () => {
                const skeletonContainer = document.getElementById('placement-loading-skeletons');
                const carouselWrap = document.getElementById('placements-carousel-wrap');
                const swiperWrapper = document.getElementById('placements-swiper-wrapper');
                const errorFallback = document.getElementById('placements-error-fallback');

                // Try live HTTPS first, then local HTTP endpoints (helpful for local dev without SSL)
                const endpoints = [
                    'https://thedigicoders.com/api/placements?type=banner',
                    'http://thedigicoders.com/api/placements?type=banner',
                    'http://localhost/thedigicoders-com/api/placements?type=banner'
                ];

                let data = null;
                for (const url of endpoints) {
                    try {
                        const response = await fetch(url);
                        if (response.ok) {
                            data = await response.json();
                            console.log(`Successfully fetched placements from: ${url}`);
                            break;
                        }
                    } catch (e) {
                        console.warn(`Failed to fetch placements from ${url}:`, e);
                    }
                }

                try {
                    if (!data) {
                        throw new Error('All placement API endpoints failed or returned non-200 responses.');
                    }

                    // Filter active placements where banner type is strictly "banner"
                    const activePlacements = data.filter(item => item.status === 'true' && item.banner === 'banner');

                    if (activePlacements.length === 0) {
                        throw new Error('No active placements with banner type "banner" found');
                    }

                    // Populate slides
                    swiperWrapper.innerHTML = '';
                    activePlacements.forEach(item => {
                        const slide = document.createElement('div');
                        slide.className = 'swiper-slide';

                        slide.innerHTML = `
                                            <div class="placement-slide-card">
                                                <img src="${item.photo}" 
                                                     alt="${item.alt_text || item.title || 'Placement Success story'}" 
                                                     title="${item.title || 'Placement Success story'}"
                                                     loading="lazy" 
                                                     onerror="this.parentElement.parentElement.style.display='none';">
                                            </div>
                                        `;
                        swiperWrapper.appendChild(slide);
                    });

                    // Hide skeletons & show carousel wrap
                    if (skeletonContainer) skeletonContainer.classList.add('d-none');
                    if (carouselWrap) carouselWrap.classList.remove('d-none');

                    // Initialize Swiper for placements
                    new Swiper('.placements-swiper-container', {
                        slidesPerView: 'auto',
                        spaceBetween: 24,
                        loop: true,
                        speed: 5000,
                        freeMode: true,
                        autoplay: {
                            delay: 0,
                            disableOnInteraction: false,
                        },
                        allowTouchMove: true,
                    });

                } catch (error) {
                    console.error('Error loading placement data:', error);
                    // Hide skeletons & show error fallback state
                    if (skeletonContainer) skeletonContainer.classList.add('d-none');
                    if (errorFallback) errorFallback.classList.remove('d-none');
                }
            };

            loadPlacements();

            // Blogs API Fetch and Render
            const loadBlogs = async () => {
                const skeletonContainer = document.getElementById('blog-loading-skeletons');
                const blogsContainerWrap = document.getElementById('blogs-container-wrap');
                const blogsSwiperWrapper = document.getElementById('blogs-swiper-wrapper');
                const errorFallback = document.getElementById('blogs-error-fallback');

                const endpoints = [
                    'https://thedigicoders.com/api/blogs',
                    'http://thedigicoders.com/api/blogs',
                    'http://localhost/thedigicoders-com/api/blogs'
                ];

                let data = null;
                for (const url of endpoints) {
                    try {
                        const response = await fetch(url);
                        if (response.ok) {
                            data = await response.json();
                            console.log(`Successfully fetched blogs from: ${url}`);
                            break;
                        }
                    } catch (e) {
                        console.warn(`Failed to fetch blogs from ${url}:`, e);
                    }
                }

                try {
                    if (!data) {
                        throw new Error('All blog API endpoints failed or returned non-200 responses.');
                    }

                    // Format date utility
                    const formatDate = (dateStr) => {
                        try {
                            const date = new Date(dateStr);
                            return date.toLocaleDateString('en-US', { month: 'short', day: 'numeric', year: 'numeric' });
                        } catch (e) {
                            return dateStr;
                        }
                    };

                    // Get all active blogs with location 'gorakhpur' (limit to 12 for clean swiper loop sizing)
                    const activeBlogs = data.filter(item => {
                        const statusMatch = item.status === 'true';
                        const locationVal = (item.location || item.city || item.branch || '').toLowerCase();
                        return statusMatch && locationVal.includes('gorakhpur');
                    }).slice(0, 12);

                    if (activeBlogs.length === 0) {
                        throw new Error('No active blogs for Gorakhpur found');
                    }

                    blogsSwiperWrapper.innerHTML = '';
                    activeBlogs.forEach(item => {
                        const slide = document.createElement('div');
                        slide.className = 'swiper-slide';

                        // Clean title from HTML tags
                        const cleanTitle = item.title.replace(/<\/?[^>]+(>|$)/g, "");

                        // Use meta_description or fallback to excerpt of stripped content
                        const cleanDesc = item.meta_description || item.content.replace(/<\/?[^>]+(>|$)/g, "").substring(0, 130) + '...';

                        slide.innerHTML = `
                                            <div class="blog-premium-card">
                                                <div class="blog-card-img-wrap">
                                                    <img src="${item.img}" 
                                                         alt="${cleanTitle}" 
                                                         loading="lazy"
                                                         onerror="this.src='https://thedigicoders.com/public/uploads/blog/default.png';">
                                                </div>
                                                <div class="blog-card-body">
                                                    <h4 class="blog-card-title" title="${cleanTitle}">
                                                        <a href="https://thedigicoders.com/blog-details/${item.url}" target="_blank" rel="noopener noreferrer">${cleanTitle}</a>
                                                    </h4>
                                                    <p class="blog-card-desc">${cleanDesc}</p>
                                                    <div class="blog-card-footer">
                                                        <span class="text-secondary text-xs">${formatDate(item.date)}</span>
                                                        <a href="https://thedigicoders.com/blog-details/${item.url}" 
                                                           class="blog-card-btn" 
                                                           target="_blank" 
                                                           rel="noopener noreferrer">
                                                            Read Post <i class="bi bi-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        `;
                        blogsSwiperWrapper.appendChild(slide);
                    });

                    // Hide skeletons & show swiper wrapper
                    if (skeletonContainer) skeletonContainer.classList.add('d-none');
                    if (blogsContainerWrap) blogsContainerWrap.classList.remove('d-none');

                    // Initialize Swiper for blogs with a delay and continuous autoplay
                    new Swiper('.blogs-swiper-container', {
                        slidesPerView: 'auto',
                        spaceBetween: 24,
                        loop: true,
                        autoplay: {
                            delay: 3500, // pause on each slide for 3.5 seconds
                            disableOnInteraction: false,
                        },
                        speed: 800, // duration of slide transitions
                        pagination: {
                            el: '.blogs-swiper-pagination',
                            clickable: true,
                        },
                    });

                } catch (error) {
                    console.error('Error loading blog posts:', error);
                    // Hide skeletons & show error fallback state
                    if (skeletonContainer) skeletonContainer.classList.add('d-none');
                    if (errorFallback) errorFallback.classList.remove('d-none');
                }
            };

            loadBlogs();

            // Gallery Filter Logic
            const filterBtns = document.querySelectorAll('.filter-btn');
            const galleryItems = document.querySelectorAll('.gallery-item');

            filterBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    // Update active states
                    filterBtns.forEach(b => {
                        b.classList.remove('btn-brand-blue');
                        b.classList.add('btn-outline-brand-blue');
                    });
                    btn.classList.add('btn-brand-blue');
                    btn.classList.remove('btn-outline-brand-blue');

                    const filterValue = btn.getAttribute('data-filter');

                    galleryItems.forEach(item => {
                        if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
                            item.classList.remove('d-none');
                        } else {
                            item.classList.add('d-none');
                        }
                    });
                });
            });

            // Redirect to contact page with course pre-selected on Program modal register click
            document.querySelectorAll('.index-program-register').forEach(btn => {
                btn.addEventListener('click', () => {
                    const programName = btn.getAttribute('data-program-name');
                    window.location.href = "https://thedigicoders.com/registration";
                });
            });

            // Gallery Image Zoom Modal Logic
            const galleryModalElement = document.getElementById('galleryZoomModal');
            if(galleryModalElement) {
                const galleryModal = new bootstrap.Modal(galleryModalElement);
                const galleryModalImg = document.getElementById('galleryZoomModalImg');

                document.querySelectorAll('.gallery-img').forEach(img => {
                    img.style.cursor = 'pointer';
                    img.addEventListener('click', function() {
                        galleryModalImg.src = this.src;
                        galleryModalImg.alt = this.alt;
                        galleryModal.show();
                    });
                });
            }
        });
    </script>

    <!-- Gallery Zoom Modal -->
    <div class="modal fade" id="galleryZoomModal" tabindex="-1" aria-labelledby="galleryZoomModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content bg-transparent border-0">
                <div class="modal-header border-0 pb-0 position-absolute top-0 end-0 z-3">
                    <button type="button" class="btn-close btn-close-white fs-4 m-2" data-bs-dismiss="modal" aria-label="Close" style="text-shadow: 0 0 10px rgba(0,0,0,0.8); filter: invert(1) grayscale(100%) brightness(200%);"></button>
                </div>
                <div class="modal-body p-0 text-center position-relative">
                    <img src="" id="galleryZoomModalImg" class="img-fluid rounded shadow-lg" alt="Gallery Zoom" style="max-height: 90vh; object-fit: contain; border: 4px solid rgba(255,255,255,0.2);">
                </div>
            </div>
        </div>
    </div>
@endsection