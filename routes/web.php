<?php

use App\Livewire\Pages\Changelog\Index as ChangelogIndex;
use App\Livewire\Pages\Course\Index as CourseIndex;
use App\Livewire\Pages\Course\Show;
use App\Livewire\Pages\Landing\Landing;
use App\Livewire\Pages\Team\Index as TeamIndex;
use App\Models\Course;
use Illuminate\Support\Facades\Route;

Route::get('/', Landing::class)->name('home');


Route::prefix('cursos')->group(function () {
    Route::get('/', CourseIndex::class)->name('course');
    Route::get('/{course}', Show::class)->name('course.show');
});

Route::get('/atualizacoes', ChangelogIndex::class)->name('changelog');
Route::get('/time', TeamIndex::class)->name('team');


Route::get('/500', function () {
    return view('errors.500');
});