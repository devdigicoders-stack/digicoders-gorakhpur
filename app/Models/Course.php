<?php

namespace App\Models;

use Database\Factories\CourseFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    /** @use HasFactory<CourseFactory> */
    use HasFactory;

    protected $guarded = [];

    protected function casts(): array
    {
        return [
            'syllabus' => 'array',
            'projects' => 'array',
            'faq' => 'array',
            'reviews' => 'array',
            'is_popular' => 'boolean',
        ];
    }
}
