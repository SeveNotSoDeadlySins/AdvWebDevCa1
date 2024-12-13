<?php

namespace App\Http\Controllers;
use App\Models\FortniteSkinWiki;
use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Fetch all players
        $players = Player::with('fortniteskinwikis')->get();
        return view('Players.index', compact('players'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (auth()->user()->admin !== 1) {
            return redirect()->route('FortniteSkinWiki.index')->with('error', 'Access Denied');
        }
    
        // Fetch all Fortnite Skin records
        $fortniteskinwikis = FortniteSkinWiki::all();
    
        // Pass the collection to the view
        return view('Players.create', compact('fortniteskinwikis'));
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if(auth()->user()->admin !== 1)  {
            return redirect()->route('FortniteSkinWiki.index')->with('error', 'Access Denied');
        }

        $validated = $request->validate([
            'username' => 'required',
            'email' => 'required',
            'level' => 'required|integer|max:1000',
            'pfp' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'fortniteskinwikis' => 'array',
        ]);


        if ($request->hasFile('pfp')) {
            $imageName = time().'.'.$request->pfp->extension();
            $request->pfp->move(public_path('images/Players'), $imageName);
            $validated['pfp'] = $imageName; // Add the profile picture to validated data
        }

        $players = Player::create($validated);

        if ($request->has('fortniteskinwikis')) {
            $players->fortniteskinwikis()->attach($request->fortniteskinwikis);  // Sync the many-to-many relationship
        }

        // Redirect to the Players index with a success message
        return redirect()->route('Players.index')->with('success', 'Player created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Player $player)
    {
    try {
        $player->load('fortniteskinwikis');
    } 
    catch (\Exception $e) {
        return response()->json(['error' => $e->getMessage()]);
    }        
    return(view('Players.show',compact('player')));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Player $player)
    {
        $fortniteskinwikis = FortniteSkinWiki::all();
    
        // Get the player's associated Fortnite skins
        $fortniteskinwikiPlayers = $player->fortniteskinwikis->pluck('id')->toArray();
    
        return view('Players.edit', compact('player', 'fortniteskinwikis', 'fortniteskinwikiPlayers'));
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Player $player)
    {
        $validatedData  = $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|integer',
            'level' => 'required|integer|max:1000',
            'pfp' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $FortniteSkinWiki->update($validatedData);

        if($request->has('fortniteskinwikis')) {
            $player->fortniteskinwikis()->sync($request->fortniteskinwikis);
        }


        return redirect()->route('FortniteSkinWikis.index')->with('success', 'Skin updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Player $player)
    {
        $player->fortniteskinwikis()->detach();
        $player->delete();

        return redirect()->route('Players.index')->with('success', 'Player deleted successfully');
    }
}
