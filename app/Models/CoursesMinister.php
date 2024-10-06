<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoursesMinister extends Model
{
    use HasFactory;

    protected $table = 'courses_ministers';

    protected $fillable = [
        'name',
        'email',
        'image'
    ];

    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
