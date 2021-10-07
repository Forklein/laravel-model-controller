<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
        $movie = Movie::All();
        dd($movie);
        return view('movies.index');
    }
}
