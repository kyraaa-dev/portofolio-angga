<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed Settings
        \App\Models\Setting::create(['key' => 'name', 'value' => 'ANGGA WIRANATA']);
        \App\Models\Setting::create(['key' => 'title', 'value' => 'Web Developer']);
        \App\Models\Setting::create(['key' => 'description', 'value' => 'Membangun aplikasi web yang efisien dan mudah digunakan, dengan fokus pada ekosistem Laravel dan React.']);
        \App\Models\Setting::create(['key' => 'logo_initials', 'value' => 'AW']);
        
        // Seed Stats
        \App\Models\Stat::create(['number' => '2+', 'label' => 'TAHUN PENGALAMAN']);
        \App\Models\Stat::create(['number' => '5', 'label' => 'PROJEK DISELESAIKAN']);
        \App\Models\Stat::create(['number' => '1+', 'label' => 'KLIEN']);
        \App\Models\Stat::create(['number' => '95%', 'label' => 'TINGKAT KEBERHASILAN']);

        // Seed Skills
        $skills = ['REACT NATIVE', 'TYPESCRIPT', 'PHP', 'MYSQL', 'TAILWINDCSS', 'INTERFACE DESIGN', 'LARAVEL'];
        foreach ($skills as $skill) {
            \App\Models\Skill::create(['name' => $skill]);
        }

        // Seed Projects
        \App\Models\Project::create([
            'title' => 'SILUKOR SISTEM INFORMASI LAYANAN USULAN KEANGGOTAAN KORPRI',
            'category' => 'Unggulan',
            'logo_svg' => '<svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 12h-4l-3 9L9 3l-3 9H2"></path></svg>',
            'link' => '#'
        ]);
        \App\Models\Project::create([
            'title' => 'SISDUKOR SISTEM INFORMASI DUTA KORPRI',
            'category' => 'Unggulan',
            'logo_svg' => '<svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 12h-4l-3 9L9 3l-3 9H2"></path></svg>',
            'link' => '#'
        ]);
        \App\Models\Project::create([
            'title' => 'KasFlow - Personal Cash Flow Manager',
            'category' => 'Selesai',
            'logo_svg' => '<svg viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>',
            'link' => 'https://kyraaa-dev.github.io/kasflow-app/'
        ]);
        \App\Models\Project::create([
            'title' => 'Jelajahin - AI Travel Assistant & Itinerary Planner',
            'category' => 'Selesai',
            'logo_svg' => '<svg viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76"></polygon></svg>',
            'link' => 'https://project-travel-six.vercel.app/'
        ]);
        \App\Models\Project::create([
            'title' => 'E-MutZ KORPRI - Rekapitulasi Pemesanan Mutz ASN',
            'category' => 'Selesai',
            'logo_svg' => '<svg viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>',
            'link' => 'https://github.com/kyraaa-dev/aplikasi-rekap-pemesanan'
        ]);
    }
}
