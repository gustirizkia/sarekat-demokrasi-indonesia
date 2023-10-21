<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Berita;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use App\Models\KategoriBerita;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\BeritaResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\BeritaResource\RelationManagers;
use Filament\Forms\Get;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;

class BeritaResource extends Resource
{
    protected static ?string $model = Berita::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';
    protected static $navigationLable = "Berita";
    protected static ?string $navigationGroup = 'Berita';
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        FileUpload::make("image")
                            ->label("Image")->required()->image()
                            ->directory("berita")
                            ->columnSpan(2),
                        Select::make("kategori_berita_id")
                            ->label("Kategori Berita")
                            ->options(KategoriBerita::all()->pluck("nama", "id"))
                            ->relationship(name: 'kategori', titleAttribute: 'nama')
                            ->createOptionForm([
                                TextInput::make("nama")->label("Nama")->required()
                            ])
                            ->searchable()
                            ->required(),
                        TextInput::make("judul_berita")
                            ->placeholder("Judul berita ....")
                            ->label("Judul Berita")->required()
                            ->live()
                            ->afterStateUpdated(function (Get $get, Set $set, ?string $old, ?string $state) {
                                if (($get('slug') ?? '') !== Str::slug($old)) {
                                    return;
                                }
                            
                                $set('slug', Str::slug($state));
                            }),
                        TextInput::make("slug")->readOnly(),

                        RichEditor::make("isi_berita")
                            ->label("Body Berita")->required()->columnSpan(2),
                        TextInput::make("meta_deskripsi")
                                ->label("Meta Deskripsi"),
                        
                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make("judul_berita")->label("Judul"),
                ImageColumn::make("image")->label("Image")
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                DeleteAction::make()
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
            'index' => Pages\ListBeritas::route('/'),
            'create' => Pages\CreateBerita::route('/create'),
            'edit' => Pages\EditBerita::route('/{record}/edit'),
        ];
    }    
}
