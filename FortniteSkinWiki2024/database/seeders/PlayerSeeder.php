<?php

namespace Database\Seeders;

use App\Models\Player;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentTimestamp = Carbon::now();
        Player::insert([
            ['username' => 'EpicGamer1' , 'email' => 'epicgamer@gmail.com', 'level' => '350', 'pfp' => 'pfp1.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['username' => 'FrekyNurati' , 'email' => 'frekynurati@gmail.com', 'level' => '130', 'pfp' => 'pfp1.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['username' => 'Mongraal' , 'email' => 'mongraal@gmail.com', 'level' => '1001', 'pfp' => 'pfp1.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['username' => 'Bugha' , 'email' => 'bugha@gmail.com', 'level' => '630', 'pfp' => 'pfp1.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['username' => 'Peterbot' , 'email' => 'peterbot@gmail.com', 'level' => '154', 'pfp' => 'pfp1.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
        ]);
    }
}
