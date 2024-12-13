<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Cathegory;


class CathegorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentTimestamp = Carbon::now();
        Cathegory::insert([
            ['fortnite_skin_wiki_id' => '1' , 'cathegory_name' => 'Legendary', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['fortnite_skin_wiki_id' => '2' , 'cathegory_name' => 'Legendary', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['fortnite_skin_wiki_id' => '3' , 'cathegory_name' => 'Legendary', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['fortnite_skin_wiki_id' => '4' , 'cathegory_name' => 'Legendary', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['fortnite_skin_wiki_id' => '5' , 'cathegory_name' => 'Legendary', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
        ]);
    }
}
