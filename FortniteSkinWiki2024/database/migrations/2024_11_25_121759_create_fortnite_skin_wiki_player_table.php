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
        Schema::create('fortnite_skin_wiki_player', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fortnite_skin_wiki_id')->contrained()->onDelete('cascade');
            $table->foreignId('player_id')->contrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fortnite_skin_wiki_player');
    }
};
