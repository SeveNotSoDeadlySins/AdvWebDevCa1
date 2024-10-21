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
        Schema::create('fortnite_skin_wikis', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('vbuck_price');
            $table->string('rarity');
            $table->integer('season');
            $table->string('image')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fortnite_skin_wikis');
    }
};
