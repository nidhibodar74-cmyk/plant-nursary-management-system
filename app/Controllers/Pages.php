<?php

namespace App\Controllers;

class Pages extends BaseController
{
     public function create()
    {
        return view('create');
    }
    public function aboutUs()
    {
        return view('about_us');
    }

    public function report()
    {
        return view('report');
    }
    
}
