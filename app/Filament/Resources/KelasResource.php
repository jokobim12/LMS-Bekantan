<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KelasResource\Pages;
use App\Models\Kelas;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Resource;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;

class KelasResource extends Resource
{
    protected static ?string $model = Kelas::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';
    protected static ?string $navigationGroup = 'Manage';
    protected static ?string $navigationLabel = 'Kelola Kelas';
    protected static ?string $pluralLabel = 'Kelas';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('kelasId')
                    ->label('ID Kelas')
                    ->required()
                    ->maxLength(12)
                    ->unique(ignoreRecord: true),
                TextInput::make('nama')
                    ->label('Nama Kelas')
                    ->required()
                    ->maxLength(255),
                TextInput::make('tahunAjaran')
                    ->label('Tahun Ajaran')
                    ->required()
                    ->maxLength(20),
                Select::make('pengajarId')
                    ->label('Pengajar')
                    ->relationship('pengajar', 'nama') // field 'nama' di model Pengajar
                    ->required(),
                Select::make('mkId')
                    ->label('Mata Kuliah')
                    ->relationship('matakuliah', 'nama') // field 'nama' di model Matakuliah
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('kelasId')
                    ->label('ID Kelas')
                    ->searchable(),
                TextColumn::make('nama')
                    ->label('Nama Kelas')
                    ->searchable(),
                TextColumn::make('tahunAjaran')
                    ->label('Tahun Ajaran'),
                TextColumn::make('pengajar.nama')
                    ->label('Pengajar')
                    ->searchable(),
                TextColumn::make('matakuliah.nama')
                    ->label('Mata Kuliah')
                    ->searchable(),
            ])
            ->filters([
                // Tambahkan filter jika perlu
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            // Tambahkan RelationManagers jika perlu
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKelas::route('/'),
            'create' => Pages\CreateKelas::route('/create'),
            'edit' => Pages\EditKelas::route('/{record}/edit'),
        ];
    }
}
