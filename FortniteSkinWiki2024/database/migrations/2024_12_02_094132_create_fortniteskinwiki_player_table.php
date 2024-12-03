<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('fortniteskinwiki_player', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fortnite_skin_wikis_id')->contrained()->onDelete('cascade');
            $table->foreignId('players_id')->contrained()->onDelete('cascade');
            $table->timestamps();        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fortniteskinwiki_player');
    }
};
