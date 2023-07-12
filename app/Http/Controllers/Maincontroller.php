<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Movies;

class Maincontroller extends Controller
{
    public function index() {

        $movies = Movie :: all();

        return view('home', compact('movies'));
    }
}
