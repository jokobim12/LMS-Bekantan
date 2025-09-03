<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MatakuliahResource\Pages;
use App\Models\MataKuliah;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Resource;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;

class MatakuliahResource extends Resource
{
    protected static ?string $model = MataKuliah::class;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';
protected static ?string $navigationGroup = 'Manage';    
protected static ?string $navigationLabel = 'Kelola Mata Kuliah';
    protected static ?string $pluralLabel = 'Mata Kuliah';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('mkId')
                    ->label('ID Mata Kuliah')
                    ->required()
                    ->maxLength(12),
                TextInput::make('nama')
                    ->label('Nama Mata Kuliah')
                    ->required()
                    ->maxLength(100),
                TextInput::make('sksTeori')
                    ->label('SKS Teori')
                    ->numeric()
                    ->required(),
                TextInput::make('sksPraktikum')
                    ->label('SKS Praktikum')
                    ->numeric()
                    ->required(),
                TextInput::make('semester')
                    ->label('Semester')
                    ->numeric()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('mkId')->label('ID')->searchable(),
                TextColumn::make('nama')->label('Nama Mata Kuliah')->searchable(),
                TextColumn::make('sksTeori')->label('SKS Teori'),
                TextColumn::make('sksPraktikum')->label('SKS Praktikum'),
                TextColumn::make('semester')->label('Semester'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMatakuliahs::route('/'),
            'create' => Pages\CreateMatakuliah::route('/create'),
            'edit' => Pages\EditMatakuliah::route('/{record}/edit'),
        ];
    }
}
