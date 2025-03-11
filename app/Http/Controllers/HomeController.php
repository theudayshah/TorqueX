<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //This will provide home-page
    public function index()
    {
        return view('index');
    }
}
