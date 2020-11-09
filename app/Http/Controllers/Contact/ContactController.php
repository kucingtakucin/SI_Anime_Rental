<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Laravel\Lumen\Application;

class ContactController extends Controller
{
    /**
     * @return View|Application
     */
    public function index()
    {
        return view('Contact.index');
    }
}
