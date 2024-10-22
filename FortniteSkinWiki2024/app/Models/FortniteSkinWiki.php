<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FortniteSkinWiki extends Model
{
    Use HasFactory;

    protected $fillable = [
        'Name',
        'Rarity',
        'image',
        'Price',
        'SeasonRelease'
    ];
}