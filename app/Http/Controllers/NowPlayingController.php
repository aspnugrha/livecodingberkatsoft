<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class NowPlayingController extends Controller
{
    public function index()
    {
        $response = Http::get('https://api.themoviedb.org/3/movie/now_playing?api_key=c17663909b650175249435dbafa389c1&language=en-US&page=1');
        $data = $response->json();
        // dd($data);
        return view('now_playing.index', [
            'active'        => 'nowplaying',
            'title_halaman' => 'Now Playing',
            'data'          => $data,
        ]);
    }
}
