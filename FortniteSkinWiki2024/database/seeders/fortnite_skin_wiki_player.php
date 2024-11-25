<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class fortnite_skin_wiki_player extends Seeder
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
            ['fortnite_skin_wiki_id' => 1 , 'player_id' => 1],
        ]);
    }
}
