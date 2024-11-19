<?php

namespace App\Models;

<<<<<<< HEAD
=======
use Illuminate\Database\Eloquent\Factories\HasFactory;
>>>>>>> ffd8475c1335c0bb50ccc3269fdf7c901b32e564
use Illuminate\Database\Eloquent\Model;

class Cathegory extends Model
{
    use HasFactory;
<<<<<<< HEAD

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
=======
>>>>>>> ffd8475c1335c0bb50ccc3269fdf7c901b32e564
}
