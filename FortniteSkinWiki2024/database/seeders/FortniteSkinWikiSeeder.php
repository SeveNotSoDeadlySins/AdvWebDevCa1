<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FortniteSkinWiki;
use Carbon\Carbon;

class FortniteSkinWikiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentTimestamp = Carbon::now();
        FortniteSkinWiki::insert([
            ['name'=>'A.I.M.', 'vbuck_price' => "2000", 'rarity' => 'Legendary' ,'season' => "6" , 'image' => 'BlackKnight.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Arachne", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "6" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Ark", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "7" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Backlash", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "4" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"BattleHound", 'vbuck_price' => "2000", 'rarity' => "Legendary" ,'season' => "3" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"BlackKnight", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "8" , 'image' => 'BlackKnight.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Blackheart", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "4" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Blastoff", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "4" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Calamity", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "6" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Carbide", 'vbuck_price' => "2000", 'rarity' => "Legendary" ,'season' => "4" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"ChompSr.", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "5", "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Crackshot", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "1" ,'image' => 'CrackShot.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Criterion", 'vbuck_price' => "2000", 'rarity' => "Legendary" ,'season' => "4" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"CuddleTeamLeader", 'vbuck_price' => "2000", 'rarity' => "Legendary" ,'season' => "2" ,'image' => 'CuddleTeamLeader.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Cyclo", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "2" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"DarkVanguard", 'vbuck_price' => "2000", 'rarity' => "Legendary" ,'season' => "3" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"DarkVertex", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "9" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"DarkVoyager", 'vbuck_price' => "2000", 'rarity' => "Legendary" ,'season' => "3" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Deadeye", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "1" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Deadfire", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "6" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Dire", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "6" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"DJBop", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "7" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Drift", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "5" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"DynamoDancer", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "4" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Enforcer", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "5" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Eon", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "6" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"EternalKnight", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "3" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Fade", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "3" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Fate", 'vbuck_price' => "2000", 'rarity' => "Legendary" ,'season' => "4" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Firebrand", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "4" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Flytrap", 'vbuck_price' => "2000", 'rarity' => "Legendary" ,'season' => "4" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Frostbite", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "5" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Fusion", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "1" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Galaxia", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "4" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"GalaxyScout", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "2" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"GearSpecialistMaya", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "2" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Glimmer", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "7" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Glow", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "10" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Havoc", 'vbuck_price' => "2000", 'rarity' => "Legendary" ,'season' => "3" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Hime", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "5" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Hunter", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "4" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Hybrid", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "8" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Hypersonic", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "4" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Inferno", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "8" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"JohnWick", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "9" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Joltara", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "4" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Krampus", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "7" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Leviathan", 'vbuck_price' => "2000", 'rarity' => "Legendary" ,'season' => "3" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"LoveRanger", 'vbuck_price' => "2000", 'rarity' => "Legendary" ,'season' => "2" ,'image' => 'LoveRanger.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Luxe", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "8" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Lynx", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "7" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Magnus", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "5" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Malice", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "8" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Menace", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "5" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Midas", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "2" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"MidasRex", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "4" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"MoistyMerman", 'vbuck_price' => "2000", 'rarity' => "Legendary" ,'season' => "4" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Musha", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "5" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Oblivion", 'vbuck_price' => "2000", 'rarity' => "Legendary" ,'season' => "4" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Omega", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "4" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Omen", 'vbuck_price' => "2000", 'rarity' => "Legendary" ,'season' => "4" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Oppressor", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "10" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Oro", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "2" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"P.A.N.D.ATeamLeader", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "5" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Polarity", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "4" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"PowerChord", 'vbuck_price' => "2000", 'rarity' => "Legendary" ,'season' => "3" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Predator", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "5" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Ragnarok", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "5" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Raptor", 'vbuck_price' => "2000", 'rarity' => "Legendary" ,'season' => "1" ,'image' => 'Raptor.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Ravage", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "1" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Raven", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "5" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"RedKnight", 'vbuck_price' => "2000", 'rarity' => "Legendary" ,'season' => "1",'image' => 'RedKnight.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Rex", 'vbuck_price' => "2000", 'rarity' => "Legendary" ,'season' => "3" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"RogueSpiderKnight", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "10" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"RoseTeamLeader", 'vbuck_price' => "2000", 'rarity' => "Legendary" ,'season' => "3" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Rox", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "9" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Ruin", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "8" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Sentinel", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "9" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Shogun", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "6" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Singularity", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "9" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"SkyStalker", 'vbuck_price' => "2000", 'rarity' => "Legendary" ,'season' => "4" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Sorana", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "1" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"SpiderKnight", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "6" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"SpireAssassin", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "6" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Supersonic", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "8" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Tempest", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "9" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"TheIceKing", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "7" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"TheIceQueen", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "7" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"TheMightyVolt", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "4" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"ThePrisoner", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "7" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"TheReaper", 'vbuck_price' => "2000", 'rarity' => "Legendary" ,'season' => "3" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"TheScientist", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "10" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"TheVisitor", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "4" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"TriceraOps", 'vbuck_price' => "2000", 'rarity' => "Legendary" ,'season' => "3" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Valkyrie", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "5"  , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Valor", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "4" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Velocity", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "9" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Vendetta", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "9" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Vertex", 'vbuck_price' => "2000", 'rarity' => "Legendary" ,'season' => "4" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Vi", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "5" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Wanderlust", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "4" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Warpaint", 'vbuck_price' => "2000", 'rarity' => "Legendary" ,'season' => "3" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"WildCard", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "5" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Wukong", 'vbuck_price' => "2000", 'rarity' => "Legendary" ,'season' => "2",'image' => 'Wukong.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Zenith", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "7" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Zero", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "1" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp]
        ]);
    }
}
