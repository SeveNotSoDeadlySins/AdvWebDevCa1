<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seeding all the datbases
        $this->call(PlayerSeeder::class);
        $this->call(FortniteSkinWikiSeeder::class);
        $this->call(CathegorySeeder::class);
    }
}
