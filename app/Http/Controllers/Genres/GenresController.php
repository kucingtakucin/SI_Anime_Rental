<?php

namespace App\Http\Controllers\Genres;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Laravel\Lumen\Application;

class GenresController extends Controller
{
    /**
     * @return View|Application
     */
    public function index()
    {
        return view('Genres.index');
    }
}
