<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    public function up()
    {
        // Creates the reviews table.
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fortnite_skin_wiki_id')->constrained()->onDelete('cascade'); // Link to FortniteSkinWiki table
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('comment');
            $table->integer('rating');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
