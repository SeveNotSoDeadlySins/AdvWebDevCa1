<?php

namespace App\Http\Controllers;
use App\Models\Review;
use App\Models\FortniteSkinWiki;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function store(Request $request, $fortniteSkinWikiId)
    {
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',//cant be under a 1 star review.
            'comment' => 'required|string|max:255',// cant be more then 255 characters.
        ]);
    
        $fortniteSkinWiki = FortniteSkinWiki::findOrFail($fortniteSkinWikiId);
    
        $review = new Review(); //Makes the new Review
        $review->rating = $request->input('rating'); 
        $review->comment = $request->input('comment');
        $review->user_id = auth()->id();
        $review->fortniteSkinWiki()->associate($fortniteSkinWiki);
        $review->save();
    
        return redirect()->back()->with('success', 'Review added successfully!');
    }
}

