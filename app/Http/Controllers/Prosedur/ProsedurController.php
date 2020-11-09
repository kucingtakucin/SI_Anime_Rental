<?php

namespace App\Http\Controllers\Prosedur;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Laravel\Lumen\Application;

class ProsedurController extends Controller
{
    /**
     * @return View|Application
     */
    public function index()
    {
        return view('Prosedur.index');
    }
}
