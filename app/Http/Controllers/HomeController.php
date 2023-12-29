<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index(): \Illuminate\Contracts\View\View
    {
        $title = "Home";
        $websites = [];

        $websites = Storage::json("public/websites.json");

        return view('home.home', compact("title", "websites"));
    }
}
