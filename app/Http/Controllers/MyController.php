<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

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
    

    public function insert(Request $request) {
        $fristname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $email = $request->input('email');
        $password = $request->input('password');
        $phone = $request->input('phone');

        $savedata = new UserLoginModel;

        $savedata->	user_fname = $fristname;
        $savedata->	user_lname = $lastname;
        $savedata->	user_email = $email;
        $savedata->	user_password = $password;
        $savedata->	user_number = $phone;

        $savedata->save();
     }

}
