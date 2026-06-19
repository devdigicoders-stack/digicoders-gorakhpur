@extends('layouts.app')

@section('content')
<!-- Course Hero Banner -->
<section class="section-padding bg-secondary bg-opacity-10 py-5">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-7" data-aos="fade-right">
                <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 rounded-pill fw-semibold mb-3">Industry Professional Course</span>
                <h1 class="display-5 fw-bold mb-3" style="font-family: 'Montserrat', sans-serif;">{{ $course->name }}</h1>
                <p class="lead text-secondary mb-4">Master high-end concepts through 100% practical industrial training based in Gorakhpur.</p>
                
                <div class="row g-3">
                    <div class="col-6 col-md-3">
                        <div class="p-3 bg-body rounded-3 text-center border">
                            <small class="text-secondary d-block text-xs uppercase">Duration</small>
                            <span class="fw-bold text-primary">{{ $course->duration }}</span>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="p-3 bg-body rounded-3 text-center border">
                            <small class="text-secondary d-block text-xs uppercase">Eligibility</small>
                            <span class="fw-bold text-primary text-sm">{{ Str::limit($course->eligibility, 12) }}</span>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="p-3 bg-body rounded-3 text-center border">
                            <small class="text-secondary d-block text-xs uppercase">Course Fee</small>
                            <span class="fw-bold text-primary">&#8377; {{ number_format($course->fees) }}</span>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="p-3 bg-body rounded-3 text-center border">
                            <small class="text-secondary d-block text-xs uppercase">Format</small>
                            <span class="fw-bold text-primary">Classroom</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-5" data-aos="fade-left">
                <!-- Inline Quick Registration Card -->
                <div class="glass-card p-4">
                    <h5 class="fw-bold mb-3">Register For Next Batch</h5>
                    <form id="course-inquiry-form" action="{{ route('contact.submit') }}" method="POST">
                        @csrf
                        <div id="course-form-message" class="d-none"></div>
                        <input type="hidden" name="course" value="{{ $course->name }}">
                        <div class="mb-3">
                            <input type="text" class="form-control rounded-3 bg-transparent text-primary" name="name" required placeholder="Full Name">
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control rounded-3 bg-transparent text-primary" name="email" required placeholder="Email Address">
                        </div>
                        <div class="mb-3">
                            <input type="tel" class="form-control rounded-3 bg-transparent text-primary" name="phone" required placeholder="10-digit phone number">
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control rounded-3 bg-transparent text-primary" name="message" rows="3" required placeholder="Write your goals..."></textarea>
                        </div>
                        <button type="submit" class="btn-premium w-100" id="course-form-submit">Reserve Seat</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Syllabus and Modules -->
<section class="section-padding">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-8" data-aos="fade-right">
                <h3 class="fw-bold mb-4" style="font-family: 'Montserrat', sans-serif;">Complete Syllabus &amp; Chapters</h3>
                <div class="accordion" id="syllabusAccordion">
                    @forelse($course->syllabus ?? [] as $index => $module)
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="sylHeading{{ $index }}">
                                <button class="accordion-button {{ $index > 0 ? 'collapsed' : '' }}" type="button" data-bs-toggle="collapse" data-bs-target="#sylCollapse{{ $index }}" aria-expanded="{{ $index === 0 ? 'true' : 'false' }}" aria-controls="sylCollapse{{ $index }}">
                                    {{ $module['title'] }}
                                </button>
                            </h2>
                            <div id="sylCollapse{{ $index }}" class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}" aria-labelledby="sylHeading{{ $index }}" data-bs-parent="#syllabusAccordion">
                                <div class="accordion-body">
                                    <ul class="d-flex flex-column gap-2 mb-0">
                                        @foreach($module['topics'] ?? [] as $topic)
                                            <li class="text-secondary text-sm d-flex align-items-center gap-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right text-primary" viewBox="0 0 16 16">
                                                  <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                                </svg>
                                                <span>{{ $topic }}</span>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @empty
                        <p class="text-secondary">Syllabus is being updated.</p>
                    @endforelse
                </div>

                <!-- Live Projects during training -->
                <div class="mt-5">
                    <h3 class="fw-bold mb-3" style="font-family: 'Montserrat', sans-serif;">Capstone Assignments Covered</h3>
                    <ul class="list-unstyled d-flex flex-column gap-3">
                        @forelse($course->projects ?? [] as $project)
                            <li class="p-3 glass-panel rounded-3 border d-flex gap-3 align-items-start">
                                <div class="text-primary mt-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-1">{{ $project }}</h6>
                                    <p class="text-secondary text-sm mb-0">Build, test logic, clean queries, and secure session management before deploying to online servers.</p>
                                </div>
                            </li>
                        @empty
                            <p class="text-secondary">Projects data is being compiled.</p>
                        @endforelse
                    </ul>
                </div>
            </div>
            
            <div class="col-lg-4" data-aos="fade-left">
                <!-- Certification Card -->
                <div class="glass-panel p-4 rounded-3 border mb-4">
                    <h5 class="fw-bold mb-3">ISO Certified Verification</h5>
                    <p class="text-secondary text-sm">{{ $course->certification ?? 'Receive a recognized training completion certificate including online project credentials validation.' }}</p>
                </div>
                
                <!-- Placement Support -->
                <div class="glass-panel p-4 rounded-3 border mb-4">
                    <h5 class="fw-bold mb-3">Placement Support</h5>
                    <p class="text-secondary text-sm">{{ $course->placement ?? 'Get 100% placement Support, resume optimizations, and mock technical drills.' }}</p>
                </div>

                <!-- Student Reviews -->
                @if(!empty($course->reviews))
                    <div class="glass-panel p-4 rounded-3 border">
                        <h5 class="fw-bold mb-3">Student Reviews</h5>
                        <div class="d-flex flex-column gap-3">
                            @foreach($course->reviews as $r)
                                <div class="p-3 bg-body rounded border">
                                    <div class="d-flex justify-content-between align-items-center mb-1">
                                        <span class="fw-bold text-sm">{{ $r['student'] }}</span>
                                        <span class="text-warning text-sm">★★★★★</span>
                                    </div>
                                    <p class="text-secondary text-sm mb-0">"{{ $r['text'] }}"</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>

<!-- Course specific FAQs -->
@if(!empty($course->faq))
<section class="section-padding bg-secondary bg-opacity-10">
    <div class="container">
        <h3 class="fw-bold text-center mb-4" style="font-family: 'Montserrat', sans-serif;">Course FAQ</h3>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="accordion" id="courseFaqAccordion">
                    @foreach($course->faq as $fIndex => $f)
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqH{{ $fIndex }}">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqC{{ $fIndex }}" aria-expanded="false" aria-controls="faqC{{ $fIndex }}">
                                    {{ $f['question'] }}
                                </button>
                            </h2>
                            <div id="faqC{{ $fIndex }}" class="accordion-collapse collapse" aria-labelledby="faqH{{ $fIndex }}" data-bs-parent="#courseFaqAccordion">
                                <div class="accordion-body">
                                    {{ $f['answer'] }}
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

<script>
document.addEventListener('DOMContentLoaded', () => {
    const courseForm = document.getElementById('course-inquiry-form');
    const submitBtn = document.getElementById('course-form-submit');
    const messageContainer = document.getElementById('course-form-message');

    if (courseForm) {
        courseForm.addEventListener('submit', (e) => {
            e.preventDefault();
            submitBtn.disabled = true;
            submitBtn.innerHTML = 'Submitting query...';

            const formData = new FormData(courseForm);

            fetch(courseForm.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(res => res.json())
            .then(data => {
                submitBtn.disabled = false;
                submitBtn.innerHTML = 'Reserve Seat';
                messageContainer.classList.remove('d-none');

                if (data.success) {
                    messageContainer.className = 'alert alert-success rounded-3 mb-3 text-sm';
                    messageContainer.innerHTML = data.message;
                    courseForm.reset();
                } else {
                    const errs = data.errors ? data.errors.join('<br>') : 'An unexpected error occurred.';
                    messageContainer.className = 'alert alert-danger rounded-3 mb-3 text-sm';
                    messageContainer.innerHTML = errs;
                }
            })
            .catch(err => {
                submitBtn.disabled = false;
                submitBtn.innerHTML = 'Reserve Seat';
                messageContainer.classList.remove('d-none');
                messageContainer.className = 'alert alert-danger rounded-3 mb-3 text-sm';
                messageContainer.innerHTML = 'Failed to submit. Please try calling our desk.';
            });
        });
    }
});
</script>
@endsection
