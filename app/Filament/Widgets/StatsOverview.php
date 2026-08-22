<?php

namespace App\Filament\Widgets;

use App\Models\Post;
use App\Models\Message;
use App\Models\Teacher;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Berita & Pengumuman', Post::count())
                ->description('Artikel yang diterbitkan')
                ->descriptionIcon('heroicon-m-document-text')
                ->color('primary'),
            Stat::make('Pengaduan Masuk', Message::count())
                ->description('Pesan dari halaman Kontak')
                ->descriptionIcon('heroicon-m-envelope')
                ->color('success'),
            Stat::make('Total Guru & Tendik', Teacher::count())
                ->description('Staf pengajar aktif')
                ->descriptionIcon('heroicon-m-users')
                ->color('warning'),
        ];
    }
}
