<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class StartPageController extends Controller
{
    /**
     * Show the start page
     */
    public function index()
    {
        return view('startpage', ['languages' => [[ "name" => "English", "id" => "en" ],[ "name" => "French", "id" => "fr" ]]]);
    }
}