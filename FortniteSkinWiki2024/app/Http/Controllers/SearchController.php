<?php

namespace App\Http\Controllers;
use App\Models\FortniteSkinWiki;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function searchSkins(Request $request)
    {
        $query = $request->input('query');

        if ($query) {
            // Query the database for the 'name' that are like the $query or the data that i typed into the searchbar
            $skins = FortniteSkinWiki::where('name', 'LIKE', '%' . $query . '%')
                        ->limit(10)
                        ->get(['name']); //Only check the name colunm
            return response()->json($skins);
        }

        return response()->json([]);
    }
}
