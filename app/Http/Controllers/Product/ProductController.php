<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Laravel\Lumen\Application;

class ProductController extends Controller
{
    /**
     * @return View|Application
     */
    public function index()
    {
        return view('Product.index');
    }
}
