<?php

namespace App\Http\Controllers;
use App\Models\Review;
use App\Models\FortniteSkinWiki;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function store(Request $request, FortniteSkinWiki $fortniteSkinWiki)
    {
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',//cant be under a 1 star review.
            'comment' => 'required|string|max:255',// cant be more then 255 characters.
        ]);
    
        $fortniteSkinWiki->reviews()->create([
            'user_id' => auth()->id(),
            'rating' => $request->input('rating'),
            'comment' => $request->input('comment'),
            'fortnite_skin_wiki_id' => $request->fortnite_skin_wiki_id
        ]);
    
        return redirect()->route('FortniteSkinWikis.show', $fortniteSkinWiki)->with('success', 'Rewiew added successfully');
    }

    public function edit(Review $review) {
        if(auth()->user()->id !== $review->user_id && auth()->user()->admin !== 1){
            return redirect()->route('FortniteSkinWikis.index')->with('error', 'Access Denied.'); 
        }
    
        return view('reviews.edit', compact('review'));
    }
    

    public function update(Request $request, Review $review)
    {
        $review->update($request->only(['rating', 'comment']));

        return redirect()->route('FortniteSkinWikis.show', $review->FortniteSkinWiki->id)
        ->with('success', 'Review updated successfully!');
    }

    public function destroy(Review $review)
    {
        $review->delete();

        return redirect()->route('FortniteSkinWikis.index')->with('success', 'Review deleted successfully');
    }
}

