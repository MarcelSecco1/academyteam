<?php

namespace App\Filament\Resources\CoursesMinisterResource\Pages;

use App\Filament\Resources\CoursesMinisterResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCoursesMinisters extends ListRecords
{
    protected static string $resource = CoursesMinisterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
