<?php

namespace App\Http\Controllers;
use App\Models\FortniteSkinWiki;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class FortniteSkinWikiController extends Controller
{
    /**
     * Display a listing of the resource.
     */ 
    public function index(Request $request)
    {
        $season = $request->input('season');
        $rarity = $request->input('rarity');
        $name = $request->input('name');
        $user = $request->input('user');


        //Starts to make the query
        $query = FortniteSkinWiki::query();
    
        if (!empty($season)) {
            $query->where('season', $season);
        }

        if (!empty($rarity)) {
            $query->where('rarity', $rarity);
        }

        if (!empty($name)) {
            $query->where('name', 'LIKE', "{$name}%");
        }

        $FortniteSkinWikis = $query->get();

        return view('FortniteSkinWikis.index', [
            'FortniteSkinWikis' => $FortniteSkinWikis,
            'season' => $season,
            'rarity' => $rarity,
            'name' => $name,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(auth()->user()->admin !== 1){
            return redirect()->route('FortniteSkinWikis.index')->with('error', 'Access denied');
        }
        return view('FortniteSkinWikis.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'rarity' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'vbuck_price' => 'required|integer',
            'season' => 'required|integer',
        ]);
        if($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images/FortniteSkinWikis') , $imageName);
        }
        FortniteSkinWiki::create([
            'name' => $request->name,
            'rarity'=> $request->rarity,
            'image'=>$imageName,
            'vbuck_price'=>$request->vbuck_price,
            'season'=>$request->season,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        return to_route('FortniteSkinWikis.index')->with('success' , 'Fortnite Skin created!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $fortniteSkinWiki = FortniteSkinWiki::with('reviews.user')->findOrFail($id);
    
        return view('FortniteSkinWikis.show', compact('fortniteSkinWiki'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FortniteSkinWiki $FortniteSkinWiki)
    {
        if(auth()->user()->admin !== 1){
            return redirect()->route('FortniteSkinWikis.index')->with('error', 'Access denied');
        }
        
        return view('FortniteSkinWikis.edit', compact('FortniteSkinWiki'));
    }

    public function update(Request $request, FortniteSkinWiki $FortniteSkinWiki)
    {
        $validatedData  = $request->validate([
            'name' => 'required|string|max:255',
            'vbuck_price' => 'required|integer',
            'rarity' => 'required|string|max:50',
            'season' => 'required|integer',
            'image' => 'nullable|string',
        ]);

        $FortniteSkinWiki->update($validatedData);

        return redirect()->route('FortniteSkinWikis.index')->with('success', 'Skin updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FortniteSkinWiki $FortniteSkinWiki)
    {
        if(auth()->user()->admin !== 1){
            return redirect()->route('FortniteSkinWikis.index')->with('error', 'Access denied');
        }
        $FortniteSkinWiki->delete();
    
        
        return redirect()->route('FortniteSkinWikis.index')->with('success', 'Skin deleted successfully');
        // Redirect with a success message
    }

    
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function cathegories()
    {
        return $this->hasMany(Cathegory::class);
    }
}