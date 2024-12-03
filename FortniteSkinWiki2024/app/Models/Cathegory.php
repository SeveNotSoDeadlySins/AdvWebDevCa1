<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cathegory extends Model
{
    use HasFactory;

    // The cathory is being mass filled with these parameters
    protected $fillable = [
        'user_id',
        'fortnite_skin_wiki_id',
        'cathegory_id',
        'cathegory_name'
    ];

    public function FortniteSkinWiki()
    {
        return $this->belongsTo(FortniteSkinWiki::class);
    }
}
