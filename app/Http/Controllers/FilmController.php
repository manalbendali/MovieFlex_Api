<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function show($day)
    {
        return Film::where('dayOfTheWeek', 'LIKE', '%' . $day . '%')->get();
    }
}
