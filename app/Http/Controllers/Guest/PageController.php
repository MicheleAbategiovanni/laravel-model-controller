<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    function index()
    {
        $movies = Movie::all();

        dump($movies);

        return view("index", compact('movies'));
    }
}
