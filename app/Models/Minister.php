<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Minister extends Model
{
    use HasFactory;

    protected $table = 'ministers';

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