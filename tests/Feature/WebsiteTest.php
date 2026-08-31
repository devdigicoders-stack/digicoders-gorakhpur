<?php

namespace Tests\Feature;

use App\Models\Blog;
use App\Models\Course;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class WebsiteTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        // Seed initial database structure for test isolation
        $this->seed();
    }

    /**
     * Test the Homepage loads successfully with proper assets.
     */
    public function test_homepage_loads(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('No.1 Choice for Summer Training');
        $response->assertSee('Winter Training');
        $response->assertSee('State-of-the-art Labs');
    }

    /**
     * Test Courses listing archive page.
     */
    public function test_courses_index_loads(): void
    {
        $response = $this->get('/courses');

        $response->assertStatus(302);
        $response->assertRedirect('https://thedigicoders.com/courses');
    }

    /**
     * Test specific SEO Course dynamic slug resolves.
     */
    public function test_course_detail_loads(): void
    {
        $course = Course::first();

        $response = $this->get('/'.$course->slug);

        $response->assertStatus(302);
        $response->assertRedirect('https://thedigicoders.com/courses');
    }

    /**
     * Test Blog listing page.
     */
    public function test_blog_index_loads(): void
    {
        $response = $this->get('/blogs');

        $response->assertStatus(200);
        $response->assertSee('Stay Updated with');
    }

    /**
     * Test dynamic Blog details page resolves.
     */
    public function test_blog_show_loads(): void
    {
        Http::fake([
            'thedigicoders.com/api/*' => Http::response([
                [
                    'id' => 1,
                    'title' => 'Test Blog Title',
                    'url' => 'test-blog-slug',
                    'content' => 'Test blog content',
                    'status' => 'true',
                    'img' => 'https://thedigicoders.com/public/uploads/blog/default.png',
                    'date' => now()->toDateString(),
                    'location' => 'gorakhpur',
                    'category' => 'trends',
                ],
            ], 200),
        ]);

        $response = $this->get('/blogs/test-blog-slug');

        $response->assertStatus(200);
        $response->assertSee('Test Blog Title');
    }

    /**
     * Test Contact Page views.
     */
    public function test_contact_page_loads(): void
    {
        $response = $this->get('/contact');

        $response->assertStatus(302);
        $response->assertRedirect('https://thedigicoders.com/contact');
    }

    /**
     * Test About Us Page loads.
     */
    public function test_about_page_loads(): void
    {
        $response = $this->get('/about');

        $response->assertStatus(302);
        $response->assertRedirect('https://thedigicoders.com/about');
    }

    /**
     * Test Services Page loads.
     */
    public function test_services_page_loads(): void
    {
        $response = $this->get('/services');

        $response->assertStatus(302);
        $response->assertRedirect('https://thedigicoders.com/placement');
    }

    /**
     * Test Team Page loads.
     */
    public function test_team_page_loads(): void
    {
        $response = $this->get('/team');

        $response->assertStatus(302);
        $response->assertRedirect('https://thedigicoders.com/our-expert');
    }

    /**
     * Test valid AJAX contact form submission saves details.
     */
    public function test_contact_form_submits_successfully(): void
    {
        $response = $this->postJson('/contact', [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '9876543210',
            'course' => 'PHP Web Development Training',
            'message' => 'Interested in 2 months industrial training.',
        ]);

        $response->assertStatus(200);
        $response->assertJson([
            'success' => true,
        ]);

        $this->assertDatabaseHas('contacts', [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '9876543210',
        ]);
    }

    /**
     * Test invalid mobile phone formatting fails validation.
     */
    public function test_contact_form_validation_fails_on_bad_inputs(): void
    {
        $response = $this->postJson('/contact', [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '12345', // Short invalid phone
            'course' => 'PHP Web Development Training',
            'message' => 'Short message',
        ]);

        $response->assertStatus(422);
        $response->assertJson([
            'success' => false,
        ]);
    }

    /**
     * Test XML Sitemap compiles.
     */
    public function test_xml_sitemap_loads(): void
    {
        $response = $this->get('/sitemap.xml');

        $response->assertStatus(200);
        $response->assertHeader('Content-Type', 'text/xml; charset=UTF-8');
        $response->assertSee('urlset');
    }

    /**
     * Test Robots.txt loads.
     */
    public function test_robots_txt_loads(): void
    {
        $response = $this->get('/robots.txt');

        $response->assertStatus(200);
        $response->assertHeader('Content-Type', 'text/plain; charset=UTF-8');
        $response->assertSee('User-agent');
        $response->assertSee('Sitemap');
    }

    /**
     * Test Admin login redirects guest.
     */
    public function test_admin_dashboard_redirects_guests(): void
    {
        $response = $this->get('/admin');

        $response->assertRedirect(route('login'));
    }

    /**
     * Test authentic admin login resolves dashboard.
     */
    public function test_admin_can_login_and_view_dashboard(): void
    {
        $user = User::first();

        $response = $this->post('/admin/login', [
            'email' => $user->email,
            'password' => 'Password123!',
        ]);

        $response->assertRedirect(route('admin.dashboard'));

        $this->assertAuthenticatedAs($user);
    }
}
