<?php

use App\Livewire\Pages\Course\Index;
use App\Livewire\Pages\Course\Show;
use App\Livewire\Pages\Landing\Landing;
use Illuminate\Support\Facades\Route;

Route::get('/', Landing::class)->name('home');


Route::prefix('cursos')->group(function () {
    Route::get('/', Index::class)->name('course');
    Route::get('/{course}', Show::class)->name('course.show');
});
