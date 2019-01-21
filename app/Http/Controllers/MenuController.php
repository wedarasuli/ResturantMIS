<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\food;
use App\menu;
use Auth;

class MenuController extends Controller
{
     public function index(){

        $menu=menu::all();
     
        return view ('menu.home',compact('menu'));
    }
}
