<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class DashboardStats extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Guru & Staf', \App\Models\Teacher::count())
                ->description('Jumlah tenaga pendidik aktif')
                ->descriptionIcon('heroicon-m-users')
                ->color('primary'),
            Stat::make('Pengaduan Masuk', \App\Models\Complaint::count())
                ->description('Total laporan pengaduan masyarakat')
                ->descriptionIcon('heroicon-m-exclamation-triangle')
                ->color('warning'),
            Stat::make('Berita & Info', \App\Models\Post::count())
                ->description('Publikasi sekolah')
                ->descriptionIcon('heroicon-m-newspaper')
                ->color('success'),
        ];
    }
}
