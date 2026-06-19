<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('duration');
            $table->string('eligibility');
            $table->integer('fees');
            $table->json('syllabus')->nullable();
            $table->json('projects')->nullable();
            $table->text('certification')->nullable();
            $table->text('placement')->nullable();
            $table->json('faq')->nullable();
            $table->json('reviews')->nullable();
            $table->string('image')->nullable();
            $table->boolean('is_popular')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
