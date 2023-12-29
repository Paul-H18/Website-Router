<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(): \Illuminate\Contracts\View\View
    {
        $title = "Home";

        return view('home.home', compact("title"));
    }
}
