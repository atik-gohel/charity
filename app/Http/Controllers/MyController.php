<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //
    function menu()
    {
        return view('about');
    }

    function donate_list()
    {
        return view('donate-list');
    }
}
