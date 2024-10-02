<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LessonResource\Pages;
use App\Filament\Resources\LessonResource\RelationManagers;
use App\Models\Lesson;
use App\Models\Module;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Support\RawJs;
use Filament\Tables;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LessonResource extends Resource
{
    protected static ?string $model = Lesson::class;

    protected static ?string $modelLabel = 'Aula';

    protected static ?string $pluralModelLabel = 'Aulas';

    protected static ?string $navigationIcon = 'heroicon-o-video-camera';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Título')
                    ->columnSpanFull()
                    ->required()
                    ->maxLength(255),


                Section::make('Informações do vídeo')
                    ->description('Informações sobre o conteúdo do vídeo, acessos, duração, etc.')
                    ->columns(3)
                    ->schema([
                        Forms\Components\TextInput::make('video')
                            ->label('URL do vídeo')
                            ->url()
                            ->suffixIcon('heroicon-m-globe-alt')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\Select::make('module_id')
                            ->label('Módulo')
                            ->placeholder('Selecione um módulo')
                            ->options(Module::all()->pluck('name', 'id'))
                            ->required(),
                        Forms\Components\TextInput::make('duration')
                            ->label('Duração')
                            ->mask(RawJs::make(<<<'JS'
                                $input => '99:99:99';
                            JS))
                            ->required(),

                    ]),

                Forms\Components\Textarea::make('description')
                    ->label('Descrição')
                    ->columnSpan('full')
                    ->rows(3),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('uuid')
                    ->label('UUID')
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('name')
                    ->label('Título')
                    ->searchable(),
                Tables\Columns\TextColumn::make('video')
                    ->label('URL do vídeo')
                    ->copyMessage('URL do vídeo copiada')
                    ->copyableState('Copiar URL do vídeo')
                    ->copyable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('module.name')
                    ->label('Módulo')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('duration')
                    ->label('Duração')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Criado em')
                    ->dateTime('d/m/Y H:i:s')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Atualizado em')
                    ->dateTime('d/m/Y H:i:s')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('module_id')
                    ->label('Módulo')
                    ->options(fn() => Module::all()->pluck('name', 'id')->toArray()),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLessons::route('/'),
            'create' => Pages\CreateLesson::route('/create'),
            'edit' => Pages\EditLesson::route('/{record}/edit'),
        ];
    }
}