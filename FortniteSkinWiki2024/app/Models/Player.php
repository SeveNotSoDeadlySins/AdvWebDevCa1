<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Player extends Model
{
    use HasFactory;

    protected $fillable = ['username', 'email', 'level']; 


    public function fortnite_skin_wikis()
    {
        return $this->belongsToMany(Fortnite_skin_wiki::class);
    }
}
