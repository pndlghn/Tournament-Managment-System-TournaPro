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
            ['name' => 'League of Legends', 'slug' => 'lol', 'logo' => 'lol.png'],
            ['name' => 'Valorant', 'slug' => 'valorant', 'logo' => 'valorant.webp'],
            ['name' => 'Mobile Legends', 'slug' => 'mlbb', 'logo' => 'mlbb.png'],
            ['name' => 'PUBG Mobile', 'slug' => 'pubg', 'logo' => 'pubgm.png'],
            ['name' => 'Counter-Strike 2', 'slug' => 'cs2', 'logo' => 'csgo2.png'],
        ]);
    }
}
