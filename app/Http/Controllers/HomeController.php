<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        $response = Http::get('https://api.themoviedb.org/3/movie/now_playing?api_key=c17663909b650175249435dbafa389c1&language=en-US&page=1');
        $data = $response->json();
        // dd($data);
        return view('home.now_playing', [
            'active'    => 'now_playing',
            'title_halaman' => 'Now Playing',
            'data'      => $data,
        ]);
    }

    public function show($id)
    {
        $response = Http::get('https://api.themoviedb.org/3/movie/' . $id . '?api_key=c17663909b650175249435dbafa389c1&language=en-US');
        $data = $response->json();
        // dd($data);
        return view('home.selengkapnya', [
            'active'    => 'now_playing',
            'title_halaman' => 'Now Playing',
            'data'      => $data,
        ]);
    }

    public function popular()
    {
        $response = Http::get('https://api.themoviedb.org/3/movie/popular?api_key=c17663909b650175249435dbafa389c1&language=en-US&page=1');
        $data = $response->json();
        // dd($data);
        return view('home.popular', [
            'active'    => 'popular',
            'title_halaman' => 'Popular',
            'data'      => $data,
        ]);
    }

    public function top_rated()
    {
        $response = Http::get('https://api.themoviedb.org/3/movie/top_rated?api_key=c17663909b650175249435dbafa389c1&language=en-US&page=1');
        $data = $response->json();
        // dd($data);
        return view('home.top_rated', [
            'active'    => 'top_rated',
            'title_halaman' => 'Top Rated',
            'data'      => $data,
        ]);
    }

    public function upcoming()
    {
        $response = Http::get('https://api.themoviedb.org/3/movie/upcoming?api_key=c17663909b650175249435dbafa389c1&language=en-US&page=1');
        $data = $response->json();
        // dd($data);
        return view('home.upcoming', [
            'active'    => 'upcoming',
            'title_halaman' => 'Up Coming',
            'data'      => $data,
        ]);
    }
}
