<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::All();
        return view('movies.index', compact('movies'));
    }
    public function movie($id)
    {
        $movie = Movie::find($id);
        return view('movies.show', compact('movie'));
    }
}
