<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AnggotakelasResource\Pages;
use App\Models\Anggotakelas;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Resource;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DateTimePicker;
use Filament\Tables\Columns\TextColumn;

class AnggotakelasResource extends Resource
{
    protected static ?string $model = Anggotakelas::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-plus';
    protected static ?string $navigationGroup = 'Resource';
    protected static ?string $navigationLabel = 'Anggota Kelas';
    protected static ?string $pluralLabel = 'Anggota Kelas';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('anggotaKelasId')
                    ->label('ID Anggota Kelas')
                    ->required()
                    ->maxLength(12),
                Select::make('userId')
                    ->label('User')
                    ->relationship('user', 'name') // ganti 'name' ke 'email' jika user tidak punya kolom name
                    ->searchable()
                    ->required(),
                Select::make('kelasId')
                    ->label('Kelas')
                    ->relationship('kelas', 'nama') // pastikan kolom 'nama' ada di kelas
                    ->searchable()
                    ->required(),
                DateTimePicker::make('createdAt')
                    ->label('Tanggal Gabung')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('anggotaKelasId')->label('ID')->searchable(),
                TextColumn::make('user.name')->label('User')->searchable(),
                TextColumn::make('kelas.nama')->label('Kelas')->searchable(),
                TextColumn::make('createdAt')->label('Tanggal Gabung')->dateTime(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAnggotakelas::route('/'),
            'create' => Pages\CreateAnggotakelas::route('/create'),
            'edit' => Pages\EditAnggotakelas::route('/{record}/edit'),
        ];
    }
}
