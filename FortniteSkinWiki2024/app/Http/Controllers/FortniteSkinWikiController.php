<?php

namespace App\Http\Controllers;
use App\Models\FortniteSkinWiki;
use Illuminate\Http\Request;

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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
