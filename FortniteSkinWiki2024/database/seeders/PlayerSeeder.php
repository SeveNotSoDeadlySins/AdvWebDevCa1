<?php

namespace Database\Seeders;

use App\Models\Player;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Player::insert([
            ['username' => 'EpicGamer1' , 'email' => 'epicgamer@gmail.com', 'level' => '350'],
            ['username' => 'FrekyNurati' , 'email' => 'frekynurati@gmail.com', 'level' => '130'],
            ['username' => 'Mongraal' , 'email' => 'mongraal@gmail.com', 'level' => '1001'],
            ['username' => 'Bugha' , 'email' => 'bugha@gmail.com', 'level' => '630'],
            ['username' => 'Peterbot' , 'email' => 'peterbot@gmail.com', 'level' => '154'],
        ]);
    }
}
