<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public function FortniteSkinWiki()
    {
        return $this->belongsTo(FortniteSkinWiki::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class); //user who posted the review
    }
}

<div test>