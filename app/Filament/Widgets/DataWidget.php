<?php

namespace App\Filament\Widgets;

use App\Models\Blog;
use App\Models\Pdf;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class DataWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Pdfs', Pdf::count())
                                ->description('Products ')
                                ->descriptionIcon('heroicon-m-arrow-trending-up')
                                ->chart([1, 10, 5, 2, 20, 30, 45])
                                ->color('success'),

            Stat::make('Total Blogs', Blog::count())
                                ->description('Products ')
                                ->descriptionIcon('heroicon-m-arrow-trending-up')
                                ->chart([1, 10, 5, 2, 20, 30, 45])
                                ->color('success'),

            Stat::make('Total Users', User::count())
                                    ->description('Products ')
                                    ->descriptionIcon('heroicon-m-arrow-trending-up')
                                    ->chart([1, 10, 5, 2, 20, 30, 45])
                                    ->color('success'),

        ];
    }
}
