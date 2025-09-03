<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PengajarResource\Pages;
use App\Models\Pengajar;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Resource;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;

class PengajarResource extends Resource
{
    protected static ?string $model = Pengajar::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';
     protected static ?string $navigationGroup = 'Manage';
    protected static ?string $navigationLabel = 'Kelola Pengajar';
    protected static ?string $pluralLabel = 'Pengajar';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('pengajarId')
                    ->label('ID Pengajar')
                    ->required()
                    ->maxLength(12),
                TextInput::make('nip')
                    ->label('NIP')
                    ->maxLength(30),
                TextInput::make('nama')
                    ->label('Nama')
                    ->required()
                    ->maxLength(100),
                TextInput::make('noHp')
                    ->label('No. HP')
                    ->maxLength(15),
                TextInput::make('alamat')
                    ->label('Alamat')
                    ->maxLength(255),
                TextInput::make('pendidikanTerakhir')
                    ->label('Pendidikan Terakhir')
                    ->maxLength(50),
                TextInput::make('bidangIlmu')
                    ->label('Bidang Ilmu')
                    ->maxLength(50),
                Select::make('userId')
                    ->label('User Login')
                    ->relationship('user', 'name') // pastikan di model User ada field 'name'
                    ->searchable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('pengajarId')->label('ID')->searchable(),
                TextColumn::make('nip')->label('NIP')->searchable(),
                TextColumn::make('nama')->label('Nama')->searchable(),
                TextColumn::make('noHp')->label('No. HP'),
                TextColumn::make('alamat')->label('Alamat')->limit(20),
                TextColumn::make('pendidikanTerakhir')->label('Pendidikan'),
                TextColumn::make('bidangIlmu')->label('Bidang Ilmu'),
                TextColumn::make('user.name')->label('User Login'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPengajars::route('/'),
            'create' => Pages\CreatePengajar::route('/create'),
            'edit' => Pages\EditPengajar::route('/{record}/edit'),
        ];
    }
}
