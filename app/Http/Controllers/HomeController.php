<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $links = config('headermenu');

        return view('home', compact('links'));
    }
}
