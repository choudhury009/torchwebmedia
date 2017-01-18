<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Display the home page.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        return view('home');
    }

    public function aboutUs()
    {
        return view('aboutUs');
    }

    public function portfolio()
    {
        return view('websites');
    }

    public function contact()
    {
        return view('contact');
    }
}
