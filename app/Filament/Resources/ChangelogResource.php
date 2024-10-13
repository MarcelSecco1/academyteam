<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ChangelogResource\Pages;
use App\Filament\Resources\ChangelogResource\RelationManagers;
use App\Models\Changelog;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ChangelogResource extends Resource
{
    protected static ?string $model = Changelog::class;

    protected static ?string $modelLabel = 'Atualização';
    protected static ?string $pluralModelLabel = 'Atualizações';

    protected static ?string $navigationIcon = 'heroicon-o-megaphone';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('image')
                    ->label('Imagem')
                    ->required()
                    ->image()
                    ->columnSpan('full'),
                TextInput::make('title')
                    ->label('Título')
                    ->required(),
                TextInput::make('type')
                    ->label('Tipo')
                    ->required(),
                Textarea::make('description')
                    ->label('Descrição')
                    ->required()
                    ->columnSpan('full'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->label('Imagem')
                    ->circular()
                    ->sortable(),
                Tables\Columns\TextColumn::make('title')
                    ->label('Título')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('type')
                    ->label('Tipo')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('description')
                    ->label('Descrição')
                    ->searchable()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListChangelogs::route('/'),
            'create' => Pages\CreateChangelog::route('/create'),
            'edit' => Pages\EditChangelog::route('/{record}/edit'),
        ];
    }
}