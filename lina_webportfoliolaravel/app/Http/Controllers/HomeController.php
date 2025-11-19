<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $title = "Welcome To My Portfolio";
        return view('home', compact('title'));
    }
}
