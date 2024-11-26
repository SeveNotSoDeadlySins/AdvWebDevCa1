<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FortniteSkinWiki;
use Carbon\Carbon;
use App\Models\Player;
use App\Models\HasFactory;


class FortniteSkinWikiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // When the database is seeded all of the data within the inseart is put into the database.
        $currentTimestamp = Carbon::now();
        $FortniteSkinWikis = [
            ['name'=>'A.I.M.', 'vbuck_price' => "2000", 'rarity' => 'Legendary' ,'season' => "6" , 'image' => 'AIM.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Arachne", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "6" , "image" => 'Arachne.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Ark", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "7" , "image" => 'Ark.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Backlash", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "4" , "image" => 'Backlash.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"BattleHound", 'vbuck_price' => "2000", 'rarity' => "Legendary" ,'season' => "3" , "image" => 'BattleHound.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"BlackKnight", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "8" , 'image' => 'BlackKnight.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Blackheart", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "4" , "image" => 'Blackheart.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Blastoff", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "4" , "image" => 'Blastoff.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Calamity", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "6" , "image" => 'Calamity.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Carbide", 'vbuck_price' => "2000", 'rarity' => "Legendary" ,'season' => "4" , "image" => 'Carbide.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"ChompSr.", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "5", "image" => 'ChompSr.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Crackshot", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "1" ,'image' => 'CrackShot.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Criterion", 'vbuck_price' => "2000", 'rarity' => "Legendary" ,'season' => "4" , "image" => 'Criterion.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"CuddleTeamLeader", 'vbuck_price' => "2000", 'rarity' => "Legendary" ,'season' => "2" ,'image' => 'CuddleTeamLeader.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Cyclo", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "2" , "image" => 'Cyclo.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"DarkVanguard", 'vbuck_price' => "2000", 'rarity' => "Legendary" ,'season' => "3" , "image" => 'DarkVanguard.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"DarkVertex", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "9" , "image" => 'DarkVertex.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"DarkVoyager", 'vbuck_price' => "2000", 'rarity' => "Legendary" ,'season' => "3" , "image" => 'DarkVoyager.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Deadeye", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "1" , "image" => 'DeadEye.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Deadfire", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "6" , "image" => 'Deadfire.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Dire", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "6" , "image" => 'Dire.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"DJBop", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "7" , "image" => 'DjBop.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Drift", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "5" , "image" => 'Drift.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"DynamoDancer", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "4" , "image" => 'DynamoDancer.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Enforcer", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "5" , "image" => 'Enforcer.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Eon", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "6" , "image" => 'Eon.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"EternalKnight", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "3" , "image" => 'EternalKnight.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Fade", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "3" , "image" => 'Fade.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Fate", 'vbuck_price' => "2000", 'rarity' => "Legendary" ,'season' => "4" , "image" => 'Fate.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Firebrand", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "4" , "image" => 'FireBrand.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Flytrap", 'vbuck_price' => "2000", 'rarity' => "Legendary" ,'season' => "4" , "image" => 'Flytrap.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Frostbite", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "5" , "image" => 'Frostbite.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Fusion", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "1" , "image" => 'Fusion.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Galaxia", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "4" , "image" => 'Galaxia.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"GalaxyScout", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "2" , "image" => 'GalaxyScout.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"GearSpecialistMaya", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "2" , "image" => 'GearSpecialistMaya.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Glimmer", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "7" , "image" => 'Glimmer.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Glow", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "10" , "image" => 'Glow.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Havoc", 'vbuck_price' => "2000", 'rarity' => "Legendary" ,'season' => "3" , "image" => 'Havoc.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Hime", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "5" , "image" => 'Hime.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Hunter", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "4" , "image" => 'Hunter.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Hybrid", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "8" , "image" => 'Hybrid.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Hypersonic", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "4" , "image" => 'Hypersonic.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Inferno", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "8" , "image" => 'Inferno.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"JohnWick", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "9" , "image" => 'JohnWick.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Joltara", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "4" , "image" => 'Joltara.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Krampus", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "7" , "image" => 'Krampus.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Leviathan", 'vbuck_price' => "2000", 'rarity' => "Legendary" ,'season' => "3" , "image" => 'Leviathan.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"LoveRanger", 'vbuck_price' => "2000", 'rarity' => "Legendary" ,'season' => "2" ,'image' => 'LoveRanger.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Luxe", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "8" , "image" => 'Luxe.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Lynx", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "7" , "image" => 'Lynx.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Magnus", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "5" , "image" => 'Magnus.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Malice", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "8" , "image" => 'Malice.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Menace", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "5" , "image" => 'Manace.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Midas", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "2" , "image" => 'Midas.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"MidasRex", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "4" , "image" => 'MidasRex.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"MoistyMerman", 'vbuck_price' => "2000", 'rarity' => "Legendary" ,'season' => "4" , "image" => 'MoistyMerman.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Musha", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "5" , "image" => 'Musha.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Oblivion", 'vbuck_price' => "2000", 'rarity' => "Legendary" ,'season' => "4" , "image" => 'Oblivion.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Omega", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "4" , "image" => 'Omega.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Omen", 'vbuck_price' => "2000", 'rarity' => "Legendary" ,'season' => "4" , "image" => 'Omen.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Oppressor", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "10" , "image" => 'Oppressor.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Oro", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "2" , "image" => 'Oro.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"P.A.N.D.ATeamLeader", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "5" , "image" => 'PandaTeamLeader.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Polarity", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "4" , "image" => 'Polarity.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"PowerChord", 'vbuck_price' => "2000", 'rarity' => "Legendary" ,'season' => "3" , "image" => 'PowerChord.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Predator", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "5" , "image" => 'Predator.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Ragnarok", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "5" , "image" => 'Ragnarok.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Raptor", 'vbuck_price' => "2000", 'rarity' => "Legendary" ,'season' => "1" ,'image' => 'Raptor.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Ravage", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "1" , "image" => 'Ravage.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Raven", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "5" , "image" => 'Raven.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"RedKnight", 'vbuck_price' => "2000", 'rarity' => "Legendary" ,'season' => "1",'image' => 'RedKnight.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Rex", 'vbuck_price' => "2000", 'rarity' => "Legendary" ,'season' => "3" , "image" => 'Rex.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"RogueSpiderKnight", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "10" , "image" => 'RogueSpiderKnight.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"RoseTeamLeader", 'vbuck_price' => "2000", 'rarity' => "Legendary" ,'season' => "3" , "image" => 'RoseTeamleader.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Rox", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "9" , "image" => 'Rox.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Ruin", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "8" , "image" => 'Ruin.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Sentinel", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "9" , "image" => 'Sentinel.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Shogun", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "6" , "image" => 'Shogun.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Singularity", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "9" , "image" => 'Singularity.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"SkyStalker", 'vbuck_price' => "2000", 'rarity' => "Legendary" ,'season' => "4" , "image" => 'SkyStalker.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Sorana", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "1" , "image" => 'Sorana.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"SpiderKnight", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "6" , "image" => 'SpiderKnight.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"SpireAssassin", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "6" , "image" => 'SpireAssassin.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Supersonic", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "8" , "image" => 'SuperSonic.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Tempest", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "9" , "image" => 'Tempest.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"TheIceKing", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "7" , "image" => 'TheIceKing.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"TheIceQueen", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "7" , "image" => 'TheIceQueen.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"TheMightyVolt", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "4" , "image" => 'TheMightyVolt.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"ThePrisoner", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "7" , "image" => 'ThePrisoner.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"TheReaper", 'vbuck_price' => "2000", 'rarity' => "Legendary" ,'season' => "3" , "image" => 'TheReaper.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"TheScientist", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "10" , "image" => '', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"TheVisitor", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "4" , "image" => 'TheVisitor.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"TriceraOps", 'vbuck_price' => "2000", 'rarity' => "Legendary" ,'season' => "3" , "image" => 'TriceraOps', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Valkyrie", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "5"  , "image" => 'Valkyrie.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Valor", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "4" , "image" => 'Valor.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Velocity", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "9" , "image" => 'Velocity.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Vendetta", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "9" , "image" => 'Vendetta.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Vertex", 'vbuck_price' => "2000", 'rarity' => "Legendary" ,'season' => "4" , "image" => 'Vertex.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Vi", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "5" , "image" => 'VI.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Wanderlust", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "4" , "image" => 'WanderLust.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Warpaint", 'vbuck_price' => "2000", 'rarity' => "Legendary" ,'season' => "3" , "image" => 'Warpaint.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"WildCard", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "5" , "image" => 'WildCard.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Wukong", 'vbuck_price' => "2000", 'rarity' => "Legendary" ,'season' => "2",'image' => 'Wukong.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Zenith", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "7" , "image" => 'Zenith.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp],
            ['name'=>"Zero", 'vbuck_price' => "2000", 'rarity' => "Legendary",'season' => "1" , "image" => 'Zero.jpg', 'created_at' => $currentTimestamp , 'updated_at' => $currentTimestamp]
        ];

        foreach ($FortniteSkinWikis as $skinData)
        {
            $fortniteSkinWiki = FortniteSkinWiki::create(array_merge($skinData, [
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp
            ]));
        
            $players = Player::inRandomOrder()->take(2)->pluck('id')->toArray();
        
            $fortniteSkinWiki->players()->attach($players);
        }       
    }
}