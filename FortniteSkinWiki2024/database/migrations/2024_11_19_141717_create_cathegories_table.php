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
        Schema::create('cathegories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fortnite_skin_wiki_id')->constrained()->onDelete('cascade');
            $table->text('cathegory_name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cathegories');
    }
};