<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Changelog extends Model
{
    use HasFactory;

    protected $table = 'changelogs';

    protected $fillable = [
        'title',
        'image',
        'type',
        'description',
    ];
}