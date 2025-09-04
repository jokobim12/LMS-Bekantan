<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MahasiswaResource\Pages;
use App\Models\Mahasiswa;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Resource;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\Filter;

class MahasiswaResource extends Resource
{
    protected static ?string $model = Mahasiswa::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $navigationGroup = 'Manage';
    protected static ?string $navigationLabel = 'Kelola Mahasiswa';
    protected static ?string $pluralLabel = 'Mahasiswa';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('mhsId')
                    ->label('ID Mahasiswa')
                    ->required()
                    ->maxLength(12),
                TextInput::make('nim')
                    ->label('NIM')
                    ->required()
                    ->maxLength(10),
                TextInput::make('namaLengkap')
                    ->label('Nama Lengkap')
                    ->required()
                    ->maxLength(250),
                TextInput::make('noHp')
                    ->label('No HP')
                    ->maxLength(20),
                TextInput::make('alamat')
                    ->label('Alamat')
                    ->maxLength(255),
                Select::make('jenisKelamin')
                    ->label('Jenis Kelamin')
                    ->options([
                        'L' => 'Laki-laki',
                        'P' => 'Perempuan',
                    ])
                    ->required(),
                DatePicker::make('tanggalLahir')
                    ->label('Tanggal Lahir'),
                TextInput::make('tempatLahir')
                    ->label('Tempat Lahir')
                    ->maxLength(100),
                TextInput::make('angkatan')
                    ->label('Angkatan')
                    ->maxLength(4),
                Select::make('userId')
                    ->label('Akun Login')
                    ->relationship('user', 'name') // ganti 'name' ke 'email' jika field user kamu tidak ada 'name'
                    ->searchable()
                    ->required(),
                Select::make('prodiId')
                    ->label('Program Studi')
                    ->relationship('programStudi', 'nama') // ganti 'nama' sesuai dengan field di tabel program_studi
                    ->searchable()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('mhsId')->label('ID')->searchable(),
                TextColumn::make('nim')->label('NIM')->searchable(),
                TextColumn::make('namaLengkap')->label('Nama')->searchable(),
                TextColumn::make('jenisKelamin')->label('JK')->sortable(),
                TextColumn::make('angkatan')->label('Angkatan'),
                TextColumn::make('user.name')->label('User'),
                TextColumn::make('programStudi.nama')->label('Prodi'),
            ])

            ->filters([
                // Filter berdasarkan Nama Lengkap (text search)
                Filter::make('namaLengkap')
                    ->form([
                        Forms\Components\TextInput::make('namaLengkap')->label('Cari Nama'),
                    ])
                    ->query(function ($query, $data) {
                        if ($data['namaLengkap']) {
                            $query->where('namaLengkap', 'like', '%' . $data['namaLengkap'] . '%');
                        }
                    }),
                // Filter berdasarkan NIM
                Filter::make('nim')
                    ->form([
                        Forms\Components\TextInput::make('nim')->label('Cari NIM'),
                    ])
                    ->query(function ($query, $data) {
                        if ($data['nim']) {
                            $query->where('nim', 'like', '%' . $data['nim'] . '%');
                        }
                    }),
                // Filter berdasarkan Angkatan
                Filter::make('angkatan')
                    ->form([
                        Forms\Components\TextInput::make('angkatan')->label('Angkatan'),
                    ])
                    ->query(function ($query, $data) {
                        if ($data['angkatan']) {
                            $query->where('angkatan', $data['angkatan']);
                        }
                    }),
                // SelectFilter untuk Prodi dan Jenis Kelamin tetap!
                SelectFilter::make('prodiId')
                    ->label('Program Studi')
                    ->relationship('programStudi', 'nama')
                    ->searchable()
                    ->preload(),
                SelectFilter::make('jenisKelamin')
                    ->label('Jenis Kelamin')
                    ->options([
                        'L' => 'Laki-laki',
                        'P' => 'Perempuan',
                    ]),
            ])

            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMahasiswas::route('/'),
            'create' => Pages\CreateMahasiswa::route('/create'),
            'edit' => Pages\EditMahasiswa::route('/{record}/edit'),
        ];
    }
}
