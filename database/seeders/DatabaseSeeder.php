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
        \App\Models\Stat::create(['number' => '1+', 'label' => 'TAHUN PENGALAMAN']);
        \App\Models\Stat::create(['number' => '1+', 'label' => 'PROJEK DISELESAIKAN']);
        \App\Models\Stat::create(['number' => '1+', 'label' => 'KLIEN']);
        \App\Models\Stat::create(['number' => '95%', 'label' => 'TINGKAT KEBERHASILAN']);

        // Seed Skills
        $skills = ['REACT NATIVE', 'TYPESCRIPT', 'PHP', 'MYSQL', 'TAILWINDCSS', 'INTERFACE DESIGN', 'LARAVEL'];
        foreach ($skills as $skill) {
            \App\Models\Skill::create(['name' => $skill]);
        }

        // Seed Projects
        \App\Models\Project::create([
            'title' => 'Korpri Application System',
            'category' => 'Unggulan',
            'logo_svg' => '<svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 12h-4l-3 9L9 3l-3 9H2"></path></svg>',
            'link' => '#'
        ]);
    }
}
