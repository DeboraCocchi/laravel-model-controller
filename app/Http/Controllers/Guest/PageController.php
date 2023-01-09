<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isNull;

class PageController extends Controller
{
    public function index (){
        return view('home');
    }

    public function movies (){
        $movies=Movie::all();

        // dd($movies);
        return view('film', compact('movies'));
    }

    public function getMovieDetails($id){
        $movie=Movie::find($id);
        if(is_null($id)||$id==11||$id<1) abort(404);


        return view('movie-details', compact('movie'));
    }
}
