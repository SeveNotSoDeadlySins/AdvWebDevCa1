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
    public function index()
    {
        $FortniteSkinWikis = FortniteSkinWiki::all(); //Fecth all fortnite skins
        return view('FortniteSkinWikis.index', compact('FortniteSkinWikis'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('FortniteSkinWikis.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Name' => 'required',
            'Rarity' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'Price' => 'required|integer',
            'SeasonRelease' => 'required|integer',
        ]);
        if($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images/FortniteSkinWikis') , $image);
        }
        FortniteSkinWiki::create([
            'Name' => $request->Name,
            'Rarity'=> $request->Rarity,
            'image'=>$imageName,
            'Price'=>$request->Price,
            'SeasonRelease'=>$request->SeasonRelease
        ]);
        return to_route('FortniteSkinWikis.index')->with('success' , 'Fortnite Skin created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(FortniteSkinWiki $FortniteSkinWikis)
    {
        return view('FortniteSkinWikis.show')->with('FortniteSkinWiki', $FortniteSkinWikis);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FortniteSkinWiki $FortniteSkinWikis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FortniteSkinWiki $FortniteSkinWikis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FortniteSkinWiki $FortniteSkinWikis)
    {
        //
    }
}
