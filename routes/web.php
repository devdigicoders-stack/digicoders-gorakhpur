<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// SEO Static Files
Route::get('/sitemap.xml', [HomeController::class, 'sitemap'])->name('sitemap');
Route::get('/robots.txt', [HomeController::class, 'robots'])->name('robots');

// Frontend Pages
Route::view('/', 'index')->name('home');
Route::redirect('/courses', 'https://thedigicoders.com/courses')->name('courses.index');
Route::redirect('/about', 'https://thedigicoders.com/about')->name('about');
Route::redirect('/services', 'https://thedigicoders.com/placement')->name('services');
Route::redirect('/team', 'https://thedigicoders.com/our-expert')->name('team');
Route::redirect('/contact', 'https://thedigicoders.com/contact')->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

// Blog Module
Route::redirect('/blog', 'https://thedigicoders.com/blog')->name('blog.index');
Route::get('/blog/{slug}', function ($slug) {
    return redirect('https://thedigicoders.com/blog-details/'.$slug);
})->name('blog.show');

// Admin Panel Guest Routes
Route::middleware('guest')->group(function () {
    Route::get('/admin/login', [AdminController::class, 'showLogin'])->name('login');
    Route::post('/admin/login', [AdminController::class, 'login']);
});

// Admin Panel Protected Routes
Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::post('/logout', [AdminController::class, 'logout'])->name('logout');
    Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');

    // Courses CRUD
    Route::resource('courses', AdminController::class.'@course')->except(['show']);
    Route::get('/courses', [AdminController::class, 'coursesIndex'])->name('courses.index');
    Route::get('/courses/create', [AdminController::class, 'coursesCreate'])->name('courses.create');
    Route::post('/courses', [AdminController::class, 'coursesStore'])->name('courses.store');
    Route::get('/courses/{id}/edit', [AdminController::class, 'coursesEdit'])->name('courses.edit');
    Route::put('/courses/{id}', [AdminController::class, 'coursesUpdate'])->name('courses.update');
    Route::delete('/courses/{id}', [AdminController::class, 'coursesDestroy'])->name('courses.destroy');

    // Blogs CRUD
    Route::get('/blogs', [AdminController::class, 'blogsIndex'])->name('blogs.index');
    Route::get('/blogs/create', [AdminController::class, 'blogsCreate'])->name('blogs.create');
    Route::post('/blogs', [AdminController::class, 'blogsStore'])->name('blogs.store');
    Route::get('/blogs/{id}/edit', [AdminController::class, 'blogsEdit'])->name('blogs.edit');
    Route::put('/blogs/{id}', [AdminController::class, 'blogsUpdate'])->name('blogs.update');
    Route::delete('/blogs/{id}', [AdminController::class, 'blogsDestroy'])->name('blogs.destroy');

    // Gallery CRUD
    Route::get('/gallery', [AdminController::class, 'galleryIndex'])->name('gallery.index');
    Route::post('/gallery', [AdminController::class, 'galleryStore'])->name('gallery.store');
    Route::delete('/gallery/{id}', [AdminController::class, 'galleryDestroy'])->name('gallery.destroy');

    // Testimonials CRUD
    Route::get('/testimonials', [AdminController::class, 'testimonialsIndex'])->name('testimonials.index');
    Route::get('/testimonials/create', [AdminController::class, 'testimonialsCreate'])->name('testimonials.create');
    Route::post('/testimonials', [AdminController::class, 'testimonialsStore'])->name('testimonials.store');
    Route::get('/testimonials/{id}/edit', [AdminController::class, 'testimonialsEdit'])->name('testimonials.edit');
    Route::put('/testimonials/{id}', [AdminController::class, 'testimonialsUpdate'])->name('testimonials.update');
    Route::delete('/testimonials/{id}', [AdminController::class, 'testimonialsDestroy'])->name('testimonials.destroy');

    // FAQs CRUD
    Route::get('/faqs', [AdminController::class, 'faqsIndex'])->name('faqs.index');
    Route::get('/faqs/create', [AdminController::class, 'faqsCreate'])->name('faqs.create');
    Route::post('/faqs', [AdminController::class, 'faqsStore'])->name('faqs.store');
    Route::get('/faqs/{id}/edit', [AdminController::class, 'faqsEdit'])->name('faqs.edit');
    Route::put('/faqs/{id}', [AdminController::class, 'faqsUpdate'])->name('faqs.update');
    Route::delete('/faqs/{id}', [AdminController::class, 'faqsDestroy'])->name('faqs.destroy');

    // Contact Messages Management
    Route::get('/messages', [AdminController::class, 'messagesIndex'])->name('messages.index');
    Route::post('/messages/{id}/read', [AdminController::class, 'messagesMarkRead'])->name('messages.read');
    Route::delete('/messages/{id}', [AdminController::class, 'messagesDestroy'])->name('messages.destroy');

    // SEO Settings
    Route::get('/seo', [AdminController::class, 'seoIndex'])->name('seo.index');
    Route::put('/seo/{id}', [AdminController::class, 'seoUpdate'])->name('seo.update');

    // Global Settings
    Route::get('/settings', [AdminController::class, 'settingsIndex'])->name('settings.index');
    Route::put('/settings', [AdminController::class, 'settingsUpdate'])->name('settings.update');

    // Backup
    Route::get('/backup', [AdminController::class, 'backup'])->name('backup');
});

// Dynamic SEO URL for courses (Must be placed at the bottom to avoid routing collisions)
Route::get('/{slug}', function () {
    return redirect('https://thedigicoders.com/courses');
})->where('slug', '[a-zA-Z0-9\-]+-training-gorakhpur')->name('courses.show');
