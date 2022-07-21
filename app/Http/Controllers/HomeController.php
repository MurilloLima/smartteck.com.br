<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.pages.index');
    }

    public function contact()
    {
        // return view('home.pages.contact');
    }

    public function store(Request $request)
    {
    }

    public function noticias()
    {
        // return view('home.pages.noticias');
    }
}
