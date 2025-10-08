<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('template');
    }
    
    public function about(): string
    {
        return view('about');
    }
    
    public function contact(): string
    {
        return view('contact');
    }
}
