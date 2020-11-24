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
    function index()
    {
        $charityuserdata=ContributerModel::all();
        $sql="select * from contributer LIMIT 8";
            $charityuserdata=DB::select($sql);
        // print_r ($charitylist);exit;
        return view('index',compact('charityuserdata')); 
    }
    
    function menu()
    {
        return view('about');
    }

    function donate_list()
    {

        $charityuserdata=ContributerModel::all();
        // print_r ($charitylist);exit;
        return view('donate-list',compact('charityuserdata'));

    }

    function CharityName($id)
    {
        // $charitylist=ContributerModel::findorFail($id);
        $charityuserdata=DB::table('contributer')->where('id',$id)->get();
        // print_r ($charitylist);exit;  
        return view('CharityName',compact('charityuserdata'));
       
    }
        

    function contact_us()
    {
        return view('contactus');
    }

    
  
    function Userprofile()
    {
        return view('Userprofile');
    }  

    function logout(){
        Session::flush();
            //logout user
            auth()->logout();
            // redirect to homepage
             return Redirect("/login")->with('message', array('type' => 'success', 'text' => 'You have successfully logged out'));
        
    }



    



    function login()
    {
        return view('login');
    }  

    function userdashboard()
    {
        $userid = session()->get('userid');
          

            $sql="select * from user_detail where id='$userid'";
            $userdata=DB::select($sql);

            if(count($userdata)>0){
                return view('Userprofile',compact('userdata'));   
            }   
    }  
    function charitydashboard()
    {
        $charityid = session()->get('charityid');
          

            $sql="select * from contributer where id='$charityid'";
            $charityuserdata=DB::select($sql);
            // print_r($charitydata);exit;

            if(count($charityuserdata)>0){
                return view('CharityName',compact('charityuserdata'));   
            }   
    }  



    function checkdata(Request $request)
    {

       
        $email = $request->input('email');
        $password = $request->input('password');
          

            $sql="select * from user_detail where user_email='$email' and user_password='$password' ";
            $userdata=DB::select($sql);

            if(count($userdata)>0){
                session()->put('userid', $userdata[0]->id); 
                return redirect('/userdashboard');
   
            }else{
                    $sqlc="select * from contributer where contributer_email='$email' and contributer_password='$password' ";
                    $charityuserdata=DB::select($sqlc);
                    if(count($charityuserdata)>0){
                        session()->put('charityid', $charityuserdata[0]->id);
                        return redirect('/charitydashboard');


                    }else{
                        return redirect()->back()->withSuccess('Invalid Email or Password');            
                    }
            }
    }

    function signup_contributer()
    {
        return view('signup-contributer');
    }

    function signup_user()
    {
        return view('signup-user');
    }
    

    public function saveData(Request $request) 
    {
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

        if(!$saveuserdata->id)
        {
            return redirect()->back()->withSuccess('Try again!');
        }
        else
        {
            session()->put('userid', $saveuserdata->id);
            $sql="select * from user_detail where id='$saveuserdata->id'";
            $userdata=DB::select($sql);
            //print_r($userdata);exit;
            return view('Userprofile',compact('userdata'));
        }
    }





    public function SaveCharityData(Request $request)
    {
        

        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $type = $request->input('type');
        $password = $request->input('password');
        $city = $request->input('city');
        $address = $request->input('address');
        $detail = $request->input('detail');
        $charitynametitle = $request->input('charitynametitle');

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
       $savecharitydata-> contributer_charityname = $charitynametitle;

       $savecharitydata->save();

        //     if(!$savecharitydata->id){
        //         return redirect()->back()->withSuccess('Try again!');
        //     }else{
        //         return redirect('/CharityName');
        //     }
        //  }
        if(!$savecharitydata->id)
        {
            return redirect()->back()->withSuccess('Try again!');
        }   
        else
        {
            session()->put('charityuserid', $savecharitydata->id);
            $sql="select * from contributer where id='$savecharitydata->id'";
            $charityuserdata=DB::select($sql);
            //print_r($userdata);exit;
            return view('CharityName',compact('charityuserdata'));

        }
       
    }


    
    

    

       
}