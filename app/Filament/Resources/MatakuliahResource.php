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
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\Filter;

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
                    ->maxLength(12)
                    ->formatStateUsing(fn ($state) => 'MK' . $state)
                        ->default(function () {
        $lastId = \App\Models\MataKuliah::orderBy('mkId', 'desc')->first()?->mkId;
        if ($lastId) {
            // Ambil angka di belakang MK
            $number = (int) str_replace('MK', '', $lastId);
            $newNumber = str_pad($number + 1, 2, '0', STR_PAD_LEFT);
        } else {
            $newNumber = '01';
        }
        return $newNumber; // Hanya angka, prefix nanti ditambah di bawah
    }),
                TextInput::make('nama')
                    ->label('Nama Mata Kuliah')
                    ->required()
                    ->maxLength(100),
                TextInput::make('sksTeori')
                    ->label('SKS Teori')
                    ->numeric()
                    ->required()
                    ->minValue(0)
                    ->maxValue(3),
                TextInput::make('sksPraktikum')
                    ->label('SKS Praktikum')
                    ->numeric()
                    ->required()
                    ->minValue(0)
                    ->maxValue(3),
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

            ->filters([
                // Filter berdasarkan Nama Lengkap (text search)
                Filter::make('nama')
                    ->form([
                        Forms\Components\TextInput::make('nama')->label('Cari Nama Mata Kuliah'),
                    ])
                    ->query(function ($query, $data) {
                        if ($data['nama']) {
                            $query->where('nama', 'like', '%' . $data['nama'] . '%');
                        }
                    }),
                // Filter berdasarkan Semester
                Filter::make('semester')
                    ->form([
                        Forms\Components\TextInput::make('semester')->label('Cari Semester'),
                    ])
                    ->query(function ($query, $data) {
                        if ($data['semester']) {
                            $query->where('semester', 'like', '%' . $data['semester'] . '%');
                        }
                    }),
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
