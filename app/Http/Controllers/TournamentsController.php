<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Game;


class TournamentsController
{
     // Untuk menampilkan halaman berdasarkan slug
     public function show($slug)
     {
        
        $game = Game::where('slug', $slug)->firstOrFail();
        return view('tournaments', compact('game'));
        
     }
   

}
