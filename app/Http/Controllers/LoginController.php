<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;

class LoginController extends Controller
{
  function login(){
      return view('layout.login');
  }

  function checklogin(Request $request){
     $this->validate($request,[
       'email' => 'required|email',
       'password' => 'required|alphaNum|min:3'
     ]);

      $user_data=array(
        'email' => $request->get('email'),
        'password'=> $request->get('password'),
      );

      if(Auth::attempt($user_data)){
        return redirect('/login/master');
      }else{
        return back()->with('error','Wrong login details');
      }
  }

  function successlogin(){
    return view('layout.master');
  }
   function logout(){
     Auth::logout();
     return redirect('login');
   }



}