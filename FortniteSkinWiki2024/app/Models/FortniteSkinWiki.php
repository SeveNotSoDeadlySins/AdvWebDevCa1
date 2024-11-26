<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FortniteSkinWiki extends Model
{
    Use HasFactory;

    // setting the protected $fillable property in a model specifies which attributes can be mass-assigned
    protected $fillable = ['name', 'vbuck_price', 'rarity', 'season', 'image'];

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function cathegories()
    {
        return $this->hasMany(Cathegory::class);
    }

    public function players()
    {
        return $this->belongsToMany(Player::class);
    }
}