<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Contact;
use App\Models\Course;
use App\Models\Faq;
use App\Models\Gallery;
use App\Models\Seo;
use App\Models\Setting;
use App\Models\Testimonial;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class AdminController extends Controller
{
    // 1. Authentication Handlers
    public function showLogin(): View
    {
        return view('admin.login');
    }

    public function login(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials, $request->has('remember'))) {
            $request->session()->regenerate();

            return redirect()->intended(route('admin.dashboard'));
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }

    // 2. Dashboard Analytics
    public function dashboard(): View
    {
        $coursesCount = Course::count();
        $blogsCount = Blog::count();
        $galleryCount = Gallery::count();
        $testimonialsCount = Testimonial::count();
        $faqsCount = Faq::count();
        $messagesCount = Contact::count();
        $unreadMessagesCount = Contact::where('is_read', false)->count();

        $latestMessages = Contact::orderBy('created_at', 'desc')->take(5)->get();

        return view('admin.dashboard', compact(
            'coursesCount',
            'blogsCount',
            'galleryCount',
            'testimonialsCount',
            'faqsCount',
            'messagesCount',
            'unreadMessagesCount',
            'latestMessages'
        ));
    }

    // Helper for hosting-safe image upload
    private function handleImageUpload(Request $request, string $inputName, string $dirName, ?string $oldPath = null): ?string
    {
        if ($request->hasFile($inputName)) {
            $file = $request->file($inputName);
            $filename = time().'_'.uniqid().'.'.$file->getClientOriginalExtension();
            // Shared hosting safe path: public/assets/uploads/dirName/
            $destinationPath = public_path('assets/uploads/'.$dirName);
            if (! file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }
            $file->move($destinationPath, $filename);

            // Delete old file if exists
            if ($oldPath && file_exists(public_path($oldPath))) {
                @unlink(public_path($oldPath));
            }

            return 'assets/uploads/'.$dirName.'/'.$filename;
        }

        return $oldPath;
    }

    // 3. Courses CRUD
    public function coursesIndex(): View
    {
        $courses = Course::all();

        return view('admin.courses.index', compact('courses'));
    }

    public function coursesCreate(): View
    {
        return view('admin.courses.create');
    }

    public function coursesStore(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|unique:courses,slug|max:255',
            'duration' => 'required|string|max:100',
            'eligibility' => 'required|string|max:255',
            'fees' => 'required|numeric',
            'certification' => 'nullable|string',
            'placement' => 'nullable|string',
            'image_file' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'is_popular' => 'boolean',
        ]);

        $imagePath = $this->handleImageUpload($request, 'image_file', 'courses');

        // Parse structures
        $syllabus = $request->input('syllabus') ? json_decode($request->input('syllabus'), true) : [];
        $projects = $request->input('projects') ? json_decode($request->input('projects'), true) : [];
        $faq = $request->input('faq') ? json_decode($request->input('faq'), true) : [];
        $reviews = $request->input('reviews') ? json_decode($request->input('reviews'), true) : [];

        Course::create([
            'name' => $data['name'],
            'slug' => $data['slug'],
            'duration' => $data['duration'],
            'eligibility' => $data['eligibility'],
            'fees' => $data['fees'],
            'certification' => $data['certification'],
            'placement' => $data['placement'],
            'image' => $imagePath,
            'is_popular' => $request->has('is_popular'),
            'syllabus' => $syllabus,
            'projects' => $projects,
            'faq' => $faq,
            'reviews' => $reviews,
        ]);

        return redirect()->route('admin.courses.index')->with('success', 'Course created successfully.');
    }

    public function coursesEdit(int $id): View
    {
        $course = Course::findOrFail($id);

        return view('admin.courses.edit', compact('course'));
    }

    public function coursesUpdate(Request $request, int $id): RedirectResponse
    {
        $course = Course::findOrFail($id);
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|unique:courses,slug,'.$id.'|max:255',
            'duration' => 'required|string|max:100',
            'eligibility' => 'required|string|max:255',
            'fees' => 'required|numeric',
            'certification' => 'nullable|string',
            'placement' => 'nullable|string',
            'image_file' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        $imagePath = $this->handleImageUpload($request, 'image_file', 'courses', $course->image);

        $syllabus = $request->input('syllabus') ? json_decode($request->input('syllabus'), true) : [];
        $projects = $request->input('projects') ? json_decode($request->input('projects'), true) : [];
        $faq = $request->input('faq') ? json_decode($request->input('faq'), true) : [];
        $reviews = $request->input('reviews') ? json_decode($request->input('reviews'), true) : [];

        $course->update([
            'name' => $data['name'],
            'slug' => $data['slug'],
            'duration' => $data['duration'],
            'eligibility' => $data['eligibility'],
            'fees' => $data['fees'],
            'certification' => $data['certification'],
            'placement' => $data['placement'],
            'image' => $imagePath,
            'is_popular' => $request->has('is_popular'),
            'syllabus' => $syllabus,
            'projects' => $projects,
            'faq' => $faq,
            'reviews' => $reviews,
        ]);

        return redirect()->route('admin.courses.index')->with('success', 'Course updated successfully.');
    }

    public function coursesDestroy(int $id): RedirectResponse
    {
        $course = Course::findOrFail($id);
        if ($course->image && file_exists(public_path($course->image))) {
            @unlink(public_path($course->image));
        }
        $course->delete();

        return redirect()->route('admin.courses.index')->with('success', 'Course deleted successfully.');
    }

    // 4. Blogs CRUD
    public function blogsIndex(): View
    {
        $blogs = Blog::all();

        return view('admin.blogs.index', compact('blogs'));
    }

    public function blogsCreate(): View
    {
        return view('admin.blogs.create');
    }

    public function blogsStore(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|unique:blogs,slug|max:255',
            'category' => 'required|string|max:100',
            'content' => 'required|string',
            'seo_title' => 'nullable|string|max:255',
            'seo_description' => 'nullable|string',
            'seo_keywords' => 'nullable|string',
            'featured_image_file' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'status' => 'required|string|in:draft,published',
        ]);

        $featuredImage = $this->handleImageUpload($request, 'featured_image_file', 'blogs');

        Blog::create([
            'title' => $data['title'],
            'slug' => $data['slug'],
            'category' => $data['category'],
            'content' => $data['content'],
            'seo_title' => $data['seo_title'],
            'seo_description' => $data['seo_description'],
            'seo_keywords' => $data['seo_keywords'],
            'featured_image' => $featuredImage,
            'status' => $data['status'],
        ]);

        return redirect()->route('admin.blogs.index')->with('success', 'Blog created successfully.');
    }

    public function blogsEdit(int $id): View
    {
        $blog = Blog::findOrFail($id);

        return view('admin.blogs.edit', compact('blog'));
    }

    public function blogsUpdate(Request $request, int $id): RedirectResponse
    {
        $blog = Blog::findOrFail($id);
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|unique:blogs,slug,'.$id.'|max:255',
            'category' => 'required|string|max:100',
            'content' => 'required|string',
            'seo_title' => 'nullable|string|max:255',
            'seo_description' => 'nullable|string',
            'seo_keywords' => 'nullable|string',
            'featured_image_file' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'status' => 'required|string|in:draft,published',
        ]);

        $featuredImage = $this->handleImageUpload($request, 'featured_image_file', 'blogs', $blog->featured_image);

        $blog->update([
            'title' => $data['title'],
            'slug' => $data['slug'],
            'category' => $data['category'],
            'content' => $data['content'],
            'seo_title' => $data['seo_title'],
            'seo_description' => $data['seo_description'],
            'seo_keywords' => $data['seo_keywords'],
            'featured_image' => $featuredImage,
            'status' => $data['status'],
        ]);

        return redirect()->route('admin.blogs.index')->with('success', 'Blog updated successfully.');
    }

    public function blogsDestroy(int $id): RedirectResponse
    {
        $blog = Blog::findOrFail($id);
        if ($blog->featured_image && file_exists(public_path($blog->featured_image))) {
            @unlink(public_path($blog->featured_image));
        }
        $blog->delete();

        return redirect()->route('admin.blogs.index')->with('success', 'Blog deleted successfully.');
    }

    // 5. Gallery Operations
    public function galleryIndex(): View
    {
        $items = Gallery::orderBy('created_at', 'desc')->get();

        return view('admin.gallery.index', compact('items'));
    }

    public function galleryStore(Request $request): RedirectResponse
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'category' => 'required|string|in:training,placement,campus',
            'image_file' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:3072',
        ]);

        $imagePath = $this->handleImageUpload($request, 'image_file', 'gallery');

        Gallery::create([
            'title' => $request->input('title'),
            'category' => $request->input('category'),
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.gallery.index')->with('success', 'Gallery image uploaded.');
    }

    public function galleryDestroy(int $id): RedirectResponse
    {
        $item = Gallery::findOrFail($id);
        if ($item->image && file_exists(public_path($item->image))) {
            @unlink(public_path($item->image));
        }
        $item->delete();

        return redirect()->route('admin.gallery.index')->with('success', 'Gallery image deleted.');
    }

    // 6. Testimonials Operations
    public function testimonialsIndex(): View
    {
        $testimonials = Testimonial::all();

        return view('admin.testimonials.index', compact('testimonials'));
    }

    public function testimonialsCreate(): View
    {
        return view('admin.testimonials.create');
    }

    public function testimonialsStore(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'student_name' => 'required|string|max:255',
            'course_name' => 'required|string|max:255',
            'company_name' => 'nullable|string|max:255',
            'review_text' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
            'student_image_file' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:1024',
        ]);

        $imagePath = $this->handleImageUpload($request, 'student_image_file', 'testimonials');

        Testimonial::create([
            'student_name' => $data['student_name'],
            'course_name' => $data['course_name'],
            'company_name' => $data['company_name'],
            'review_text' => $data['review_text'],
            'rating' => $data['rating'],
            'student_image' => $imagePath,
        ]);

        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial added.');
    }

    public function testimonialsEdit(int $id): View
    {
        $testimonial = Testimonial::findOrFail($id);

        return view('admin.testimonials.edit', compact('testimonial'));
    }

    public function testimonialsUpdate(Request $request, int $id): RedirectResponse
    {
        $t = Testimonial::findOrFail($id);
        $data = $request->validate([
            'student_name' => 'required|string|max:255',
            'course_name' => 'required|string|max:255',
            'company_name' => 'nullable|string|max:255',
            'review_text' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
            'student_image_file' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:1024',
        ]);

        $imagePath = $this->handleImageUpload($request, 'student_image_file', 'testimonials', $t->student_image);

        $t->update([
            'student_name' => $data['student_name'],
            'course_name' => $data['course_name'],
            'company_name' => $data['company_name'],
            'review_text' => $data['review_text'],
            'rating' => $data['rating'],
            'student_image' => $imagePath,
        ]);

        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial updated.');
    }

    public function testimonialsDestroy(int $id): RedirectResponse
    {
        $t = Testimonial::findOrFail($id);
        if ($t->student_image && file_exists(public_path($t->student_image))) {
            @unlink(public_path($t->student_image));
        }
        $t->delete();

        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial deleted.');
    }

    // 7. FAQs Operations
    public function faqsIndex(): View
    {
        $faqs = Faq::all();

        return view('admin.faqs.index', compact('faqs'));
    }

    public function faqsCreate(): View
    {
        return view('admin.faqs.create');
    }

    public function faqsStore(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
            'category' => 'required|string|max:100',
        ]);

        Faq::create($data);

        return redirect()->route('admin.faqs.index')->with('success', 'FAQ added.');
    }

    public function faqsEdit(int $id): View
    {
        $faq = Faq::findOrFail($id);

        return view('admin.faqs.edit', compact('faq'));
    }

    public function faqsUpdate(Request $request, int $id): RedirectResponse
    {
        $faq = Faq::findOrFail($id);
        $data = $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
            'category' => 'required|string|max:100',
        ]);

        $faq->update($data);

        return redirect()->route('admin.faqs.index')->with('success', 'FAQ updated.');
    }

    public function faqsDestroy(int $id): RedirectResponse
    {
        $faq = Faq::findOrFail($id);
        $faq->delete();

        return redirect()->route('admin.faqs.index')->with('success', 'FAQ deleted.');
    }

    // 8. Contact Messages Operations
    public function messagesIndex(): View
    {
        $messages = Contact::orderBy('created_at', 'desc')->get();

        return view('admin.messages.index', compact('messages'));
    }

    public function messagesMarkRead(int $id): RedirectResponse
    {
        $m = Contact::findOrFail($id);
        $m->update(['is_read' => true]);

        return back()->with('success', 'Message marked as read.');
    }

    public function messagesDestroy(int $id): RedirectResponse
    {
        $m = Contact::findOrFail($id);
        $m->delete();

        return back()->with('success', 'Message deleted.');
    }

    // 9. SEO Settings
    public function seoIndex(): View
    {
        $seos = Seo::all();

        return view('admin.seo.index', compact('seos'));
    }

    public function seoUpdate(Request $request, int $id): RedirectResponse
    {
        $seo = Seo::findOrFail($id);
        $data = $request->validate([
            'meta_title' => 'required|string|max:255',
            'meta_description' => 'required|string',
            'meta_keywords' => 'required|string',
            'og_image_file' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        $ogImage = $this->handleImageUpload($request, 'og_image_file', 'seo', $seo->og_image);

        $seo->update([
            'meta_title' => $data['meta_title'],
            'meta_description' => $data['meta_description'],
            'meta_keywords' => $data['meta_keywords'],
            'og_image' => $ogImage,
        ]);

        return redirect()->route('admin.seo.index')->with('success', 'SEO configuration updated.');
    }

    // 10. Global Settings
    public function settingsIndex(): View
    {
        $settings = Setting::pluck('value', 'key')->all();

        return view('admin.settings.index', compact('settings'));
    }

    public function settingsUpdate(Request $request): RedirectResponse
    {
        $data = $request->except(['_token', '_method']);
        foreach ($data as $key => $value) {
            Setting::updateOrCreate(['key' => $key], ['value' => $value]);
        }

        return redirect()->route('admin.settings.index')->with('success', 'Global configurations updated.');
    }

    // 11. Database Backup Exporter
    public function backup(): BinaryFileResponse|RedirectResponse
    {
        try {
            $tables = DB::select('SHOW TABLES');
            $dbNameAttr = 'Tables_in_'.config('database.connections.mysql.database');

            $sqlDump = "-- DigiCoders Technologies Database Backup\n";
            $sqlDump .= '-- Generated on '.date('Y-m-d H:i:s')."\n\n";

            foreach ($tables as $table) {
                $tableName = $table->$dbNameAttr;

                // Show create table
                $createTableQuery = DB::select("SHOW CREATE TABLE `{$tableName}`");
                $createTableSqlAttr = 'Create Table';
                $sqlDump .= "DROP TABLE IF EXISTS `{$tableName}`;\n";
                $sqlDump .= $createTableQuery[0]->$createTableSqlAttr.";\n\n";

                // Select table rows
                $rows = DB::table($tableName)->get();
                foreach ($rows as $row) {
                    $rowArray = (array) $row;
                    $columns = array_map(fn ($col) => "`{$col}`", array_keys($rowArray));
                    $values = array_map(function ($val) {
                        if (is_null($val)) {
                            return 'NULL';
                        }

                        return "'".addslashes($val)."'";
                    }, array_values($rowArray));

                    $sqlDump .= "INSERT INTO `{$tableName}` (".implode(', ', $columns).') VALUES ('.implode(', ', $values).");\n";
                }
                $sqlDump .= "\n\n";
            }

            $filename = 'backup_'.date('Y_m_d_His').'.sql';
            $filePath = storage_path('app/'.$filename);

            file_put_contents($filePath, $sqlDump);

            return response()->download($filePath)->deleteFileAfterSend(true);
        } catch (\Exception $e) {
            return redirect()->route('admin.dashboard')->with('error', 'Backup execution failed: '.$e->getMessage());
        }
    }
}
