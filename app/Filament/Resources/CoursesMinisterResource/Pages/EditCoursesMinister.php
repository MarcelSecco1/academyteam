<?php

namespace App\Filament\Resources\CoursesMinisterResource\Pages;

use App\Filament\Resources\CoursesMinisterResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCoursesMinister extends EditRecord
{
    protected static string $resource = CoursesMinisterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
