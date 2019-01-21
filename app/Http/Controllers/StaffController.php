<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\staff;
use\Auth;

class StaffController extends Controller
{
  
    public function register(){
        return view('staff.register');
    }


    public function add( Request $request){
     
        $this-> validate(
            $request,[
                'name'=>'required',
                'father_name'=>'required',
                'address'=>'required',
                'age'=>'required',
                'salary'=>'required',
                'phone'=>'required',
                'photo'=>'required',
               
            ]
        );
       
        $staff= new staff();


        $staff->name= $request->name;
        $staff->father_name= $request->father_name;
        $staff->address= $request->address;
        $staff->age= $request->age;
        $staff->salary= $request->salary;
        $staff->phone= $request->phone;

        $photoDBPath="";
        $file = $request->photo;
            
            if($file){
                    $fileExtension = $file->getClientOriginalExtension();  
                $photoDBPath = "/files/food/photos/".time().'.'.$fileExtension;
                $file->move(public_path("/files/food/photos/"), $photoDBPath);
                
            }

        // $file = time().'-'.$request->photo;
        $staff->photo =  $photoDBPath;

        $staff->save();



        return back()->with(['success'=>'staff added successfully']);


        }

        public function show(){
            $staff=staff::all();
            return view('staff.show',compact('staff'));
        }


        public function attendance(){
            return view('staff.attendance');
        }
}
