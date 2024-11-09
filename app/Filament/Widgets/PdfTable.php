<?php

namespace App\Filament\Widgets;

use App\Models\Pdf;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class PdfTable extends BaseWidget
{
    public function table(Table $table): Table
    {
        return $table
            ->query(
                Pdf::query()
                    ->orderBy('created_at', 'desc')
            )
            ->columns([
                TextColumn::make('title'),
                TextColumn::make('description'),
                ImageColumn::make('images')
                            ->label('Image')
                            ->disk('public')
                            ->width(50)
                            ->height(50),
                TextColumn::make('created_at')
                    ->date(),
            ]);
    }
}
