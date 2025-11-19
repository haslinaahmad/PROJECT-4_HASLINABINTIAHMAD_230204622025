<?php

namespace App\Http\Controllers;

class AboutController extends Controller
{
    public function index()
    {
        $title = "About Me";
        return view('about', compact('title'));
    }
}
