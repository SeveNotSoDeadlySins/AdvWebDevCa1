<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FortniteSkinWiki;


class fortnite_skin_wiki_playerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        fortnite_skin_wiki_player::insert([
            ['fortnite_skin_wiki_id' => 1 , 'player_id' => 1],
            ['fortnite_skin_wiki_id' => 2 , 'player_id' => 3],
            ['fortnite_skin_wiki_id' => 1 , 'player_id' => 1],
            ['fortnite_skin_wiki_id' => 2 , 'player_id' => 2],
            ['fortnite_skin_wiki_id' => 4 , 'player_id' => 1],
        ]);
    }
}
