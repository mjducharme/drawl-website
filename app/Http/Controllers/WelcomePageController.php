<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class WelcomePageController extends Controller
{
    /**
     * Show the welcome page
     */
    public function show($locale)
    {
        \App::setLocale($locale);
        return view('welcome',
        [    'locale' => \App::getLocale() ]);
    }
}