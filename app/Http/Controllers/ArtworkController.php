<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\ArtworksController;
use App\Models\artworks;
use App\Models\exhibition;
use App\Models\artists;

class ArtworkController extends Controller
{
     public function index(){
        $artworks = artworks::all();
        $artists = artists::all();
        $exhibitions = exhibition::all();
        return view("/artworks",compact("artworks","artists","exhibitions"));
    }
    public function insert(Request $request){
        artworks::create([
        "title" => $request->input('title'),
        "artist_id" => $request->input('artist_id'),
        "exhibition_id" => $request->input('exhibition_id'),
        ]);
        

        return redirect()->route('artworks');
    }

    public function edit($id)
{   
    $artwork = artworks::findOrFail($id);
    $artists = artists::all();
    $exhibitions = exhibition::all();

    return view('artworks', compact('artwork', 'artists', 'exhibitions'));
}   


}
