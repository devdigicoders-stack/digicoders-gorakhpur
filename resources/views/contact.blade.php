@extends('layouts.app')

@section('content')
<section class="section-padding bg-secondary bg-opacity-10 py-5">
    <div class="container text-center">

        <h1 class="display-5 fw-bold mb-3" style="font-family: 'Montserrat', sans-serif;">Contact DigiCoders Technologies</h1>
        <p class="lead text-secondary max-w-xl mx-auto">Have doubts or queries? Get in touch with our team of counselors and engineering leads.</p>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-5" data-aos="fade-right">
                <h3 class="fw-bold mb-4" style="font-family: 'Montserrat', sans-serif;">Headquarters Office</h3>
                <p class="text-secondary mb-4">Visit our tech training and development headquarters in Gorakhpur. Walk-in queries are open from Monday through Saturday (09:00 AM to 06:30 PM).</p>
                
                <div class="d-flex flex-column gap-3 mb-4">
                    <div class="d-flex gap-3">
                        <div class="text-primary mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                              <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                              <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"/>
                            </svg>
                        </div>
                        <span class="text-secondary text-sm">{{ $settings['contact_address'] ?? 'Gorakhpur, UP' }}</span>
                    </div>
                    <div class="d-flex align-items-center gap-3">
                        <div class="text-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                              <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                            </svg>
                        </div>
                        <span class="text-secondary fw-semibold">{{ $settings['contact_phone'] ?? '9801017529' }}</span>
                    </div>
                    <div class="d-flex align-items-center gap-3">
                        <div class="text-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                              <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.03 4.992L11.188 8 8 9.958 4.812 8 1.03 10.375A1 1 0 0 0 2 11h12a1 1 0 0 0 .97-.625zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
                            </svg>
                        </div>
                        <span class="text-secondary fw-semibold">{{ $settings['contact_email'] ?? 'digicoderstech@gmail.com' }}</span>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-7" data-aos="fade-left">
                <div class="glass-card p-4 p-md-5">
                    <form id="ajax-contact-form" action="{{ route('contact.submit') }}" method="POST">
                        @csrf
                        <div id="form-message-container" class="mb-4 d-none"></div>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="name" class="form-label text-sm fw-semibold text-secondary">Full Name</label>
                                <input type="text" class="form-control rounded-3 bg-transparent text-primary" id="name" name="name" required placeholder="Enter name">
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label text-sm fw-semibold text-secondary">Email Address</label>
                                <input type="email" class="form-control rounded-3 bg-transparent text-primary" id="email" name="email" required placeholder="name@domain.com">
                            </div>
                            <div class="col-md-6">
                                <label for="phone" class="form-label text-sm fw-semibold text-secondary">Phone Number</label>
                                <input type="tel" class="form-control rounded-3 bg-transparent text-primary" id="phone" name="phone" required placeholder="10-digit phone number">
                            </div>
                            <div class="col-md-6">
                                <label for="course" class="form-label text-sm fw-semibold text-secondary">Select Training Program</label>
                                <select class="form-select rounded-3 bg-transparent text-primary" id="course" name="course">
                                    <option value="" class="text-dark">Select Course</option>
                                    @foreach($courses as $c)
                                        <option value="{{ $c->name }}" class="text-dark">{{ $c->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="message" class="form-label text-sm fw-semibold text-secondary">Your Message</label>
                                <textarea class="form-control rounded-3 bg-transparent text-primary" id="message" name="message" rows="4" required placeholder="Type your query..."></textarea>
                            </div>
                            <div class="col-12 text-end mt-4">
                                <button type="submit" class="btn-premium w-100" id="form-submit-btn">
                                    Send Inquiry
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Google Map -->
<section class="position-relative" style="height: 400px; margin-bottom: -1px;">
    <iframe src="{{ $settings['google_map_embed'] ?? '' }}" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="DigiCoders Technologies Location Map"></iframe>
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {
    // Pre-select training program and write message based on query params
    const urlParams = new URLSearchParams(window.location.search);
    const courseParam = urlParams.get('course');
    if (courseParam) {
        const courseSelect = document.getElementById('course');
        if (courseSelect) {
            for (let i = 0; i < courseSelect.options.length; i++) {
                if (courseSelect.options[i].value.toLowerCase() === courseParam.toLowerCase()) {
                    courseSelect.selectedIndex = i;
                    break;
                }
            }
        }
        const messageArea = document.getElementById('message');
        if (messageArea) {
            messageArea.value = `Hello! I would like to inquire about the "${courseParam}" training program. Please share admission deadlines, fees, and batch schedules.`;
        }
    }

    const contactForm = document.getElementById('ajax-contact-form');
    const submitBtn = document.getElementById('form-submit-btn');
    const messageContainer = document.getElementById('form-message-container');

    if (contactForm) {
        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();
            submitBtn.disabled = true;
            submitBtn.innerHTML = 'Sending query...';

            const formData = new FormData(contactForm);

            fetch(contactForm.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(res => res.json())
            .then(data => {
                submitBtn.disabled = false;
                submitBtn.innerHTML = 'Send Inquiry';
                messageContainer.classList.remove('d-none');

                if (data.success) {
                    messageContainer.className = 'alert alert-success rounded-3 mb-4';
                    messageContainer.innerHTML = data.message;
                    contactForm.reset();
                } else {
                    const errs = data.errors ? data.errors.join('<br>') : 'An unexpected error occurred.';
                    messageContainer.className = 'alert alert-danger rounded-3 mb-4';
                    messageContainer.innerHTML = errs;
                }
            })
            .catch(err => {
                submitBtn.disabled = false;
                submitBtn.innerHTML = 'Send Inquiry';
                messageContainer.classList.remove('d-none');
                messageContainer.className = 'alert alert-danger rounded-3 mb-4';
                messageContainer.innerHTML = 'Failed to connect to the server. Please try calling directly.';
            });
        });
    }
});
</script>
@endsection
