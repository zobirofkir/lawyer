<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PdfResource\Pages;
use App\Models\Pdf;
use Filament\Actions\Action;
use Filament\Actions\EditAction;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PdfResource extends Resource
{
    protected static ?string $model = Pdf::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'PDFs';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->required()
                    ->label('Title'),
                
                FileUpload::make('pdf')
                    ->required()
                    ->preserveFilenames()
                    ->disk('public')
                    ->directory('pdfs')
                    ->label('PDF File'),
                
                Textarea::make('description')
                    ->label('Description'),
                
                FileUpload::make('images')
                    ->multiple()
                    ->required()
                    ->preserveFilenames()
                    ->disk('public')
                    ->directory('images')
                    ->label('Images'),
            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label('Title')
                    ->sortable()
                    ->searchable(),
                
                TextColumn::make('description')->limit(20),

                ImageColumn::make('images')
                            ->label('Image')
                            ->disk('public')
                            ->width(50)
                            ->height(50),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\Action::make('downloadPdf')
                    ->label('PDF')
                    ->action(function (Pdf $record) {
                        return response()->download(storage_path("app/public/{$record->pdf}"));
                    })
                    ->requiresConfirmation(),
                    Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListPdfs::route('/'),
            'create' => Pages\CreatePdf::route('/create'),
            'edit' => Pages\EditPdf::route('/{record}/edit'),
        ];
    }
}
