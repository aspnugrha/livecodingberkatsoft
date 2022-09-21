<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TopRatedController extends Controller
{
    public function index()
    {
        $response = Http::get('https://api.themoviedb.org/3/movie/top_rated?api_key=c17663909b650175249435dbafa389c1&language=en-US&page=1');
        $data = $response->json();
        // dd($data);
        return view('top_rated.index', [
            'active'        => 'toprated',
            'title_halaman' => 'Top Rated',
            'data'          => $data,
        ]);
    }
}
