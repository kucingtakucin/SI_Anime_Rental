<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Laravel\Lumen\Application;

class HomeController extends Controller
{
    /**
     * @return View|Application
     */
    public function index()
    {
        return view('Home.index');
    }
}
