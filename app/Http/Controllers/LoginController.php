<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function  signin(){
        return view('layout.login');
    }


   public function login(Request $request){
    if($request->isMethod('post')){

        $this->validate(
            $request,[
                'email'=>'required|email',
                'password'=>'required',
            ]
        );


        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
          
       
                return view('layout.master');
            }
           
        }else
     return \redirect()->back();
       
   

    public function logout(){
        Auth::logout();
        return \redirect()->route('home');
    }

}
