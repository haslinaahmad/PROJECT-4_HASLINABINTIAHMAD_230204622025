<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $title = "Contact Me";
        return view('contact', compact('title'));
    }

    public function send(Request $request)
    {
        return "Form sent!";
    }
}
