<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\UserLoginModel;
use App\Models\ContributerModel;
use Session;
use DB;
use Response;

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
    

    public function saveData(Request $request) {
        //print_r('hi');exit;
        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $email = $request->input('email');
        $password = $request->input('password');
        $phone = $request->input('phone');
        

        $saveuserdata = new UserLoginModel;

        $saveuserdata->	user_fname = $firstname;
        $saveuserdata->	user_lname = $lastname;
        $saveuserdata->	user_email = $email;
        $saveuserdata->	user_password = $password;
        $saveuserdata->	user_number = $phone;

        $saveuserdata->save();

        if(!$saveuserdata->id){
            return redirect()->back()->withSuccess('Try again!');
        }else{
            session()->put('userid', $saveuserdata->id);
            $sql="select * from user_detail where id='$saveuserdata->id'";
            $userdata=DB::select($sql);
            //print_r($userdata);exit;
            return view('Userprofile',compact('userdata'));
    
        }
     }


        public function SaveCharityData(Request $request){
        

         $firstname = $request->input('firstname');
         $lastname = $request->input('lastname');
         $email = $request->input('email');
         $phone = $request->input('phone');
         $type = $request->input('type');
         $password = $request->input('password');
         $city = $request->input('city');
         $address = $request->input('address');
         $detail = $request->input('detail');

        $savecharitydata = new ContributerModel;

        $savecharitydata-> contributer_fname = $firstname;
        $savecharitydata-> contributer_lname = $lastname;
        $savecharitydata-> contributer_email = $email;
        $savecharitydata-> contributer_number = $phone;
        $savecharitydata-> contributer_logo_path = " ";

        $savecharitydata-> contributer_type = $type;
        $savecharitydata-> contributer_password = $password;
        $savecharitydata-> contributer_city = $city;
        $savecharitydata-> contributer_address = $address;
        $savecharitydata-> contributer_detail = $detail;

        $savecharitydata->save();

        if(!$savecharitydata->id){
            return redirect()->back()->withSuccess('Try again!');
        }else{
            return redirect('/CharityName');
        }
     }




    }