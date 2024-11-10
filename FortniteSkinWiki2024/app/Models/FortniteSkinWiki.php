<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FortniteSkinWiki extends Model
{
    Use HasFactory;

    protected $fillable = ['name', 'vbuck_price', 'rarity', 'season', 'image'];

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

}
