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

    function contact_us()
    {
        return view('contactus');
    }

    
    function CharityName()
    {
        return view('CharityName');
    }
      
    function Userprofile()
    {
        return view('Userprofile');
    }  

    function login()
    {
        return view('login');
    }

    function signup_contributer()
    {
        return view('signup-contributer');
    }

    function signup_user()
    {
        return view('signup-user');
    }
    
}
