<?php
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Game;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Game::insert([
            ['name' => 'League of Legends', 'slug' => 'league-of-legends', 'logo' => 'lol.png', 'banner' => 'lol.jpeg'],
            ['name' => 'Valorant', 'slug' => 'valorant', 'logo' => 'valorant.webp', 'banner' => 'Valorant_banner.webp'],
            ['name' => 'Mobile Legends', 'slug' => 'mobile-legends-bang-bang', 'logo' => 'mlbb.png', 'banner' => 'mlbb.jpg'],
            ['name' => 'PUBG Mobile', 'slug' => 'pubg-mobile', 'logo' => 'pubgm.png', 'banner' => 'pubgm.jpg'],
            ['name' => 'Counter-Strike 2', 'slug' => 'counter-strike-2', 'logo' => 'csgo2.png', 'banner' => 'csgo2.jpg'],
            
        ]);
    }
}
