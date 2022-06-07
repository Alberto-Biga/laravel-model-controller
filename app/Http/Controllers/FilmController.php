<?php

namespace App\Http\Controllers;
use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function index(){
        
        $films = Film::all();

        // dump($films);

        return view('pages.film.index', compact('films'));
    }
}
