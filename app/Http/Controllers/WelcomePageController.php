<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class WelcomePageController extends Controller
{
    /**
     * Show the welcome page
     */
    public function show()
    {
        return view('welcome');
    }
}