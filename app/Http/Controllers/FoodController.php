<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Food;
use\Auth;

class FoodController extends Controller
{
  
    public  function insert_food(){
        return view('food.insert');
       
    }

    public function add( Request $request){
     
        $this->validate(
            $request,[
                'food_name'=>'required',
                'price'=>'required',
                'photo'=>'required',
               
            ]
        );
       
$food= new food();


$food->food_name= $request->food_name;
$food->price= $request->price;

$photoDBPath="";
  $file = $request->photo;
       
        if($file){
             $fileExtension = $file->getClientOriginalExtension();  
            $photoDBPath = "/files/food/photos/".time().'.'.$fileExtension;
            $file->move(public_path("/files/food/photos/"), $photoDBPath);
           
        }

// $file = time().'-'.$request->photo;
$food->photo =  $photoDBPath;

$food->save();



return back()->with(['success'=>'food add success']);


    }

    public function show(){
        $food= food::all();
        return view('food.show',compact('food'));
    
}

public function delete($id){

    $food= food::findOrFail($id);
     $food->delete();


    return back()->with(['success'=>'food delete successfuly']);
}

public function edit($id){

    $food= food::findOrFail($id);
     
        return view('food.edit',compact('food'));
  

}

public function  update(Request $request,$id){

    $food=food::findOrFail($id);
    
$food->food_name= $request->food_name;
$food->price= $request->price;

$photoDBPath="";
  $file = $request->photo;
       
        if($file){
             $fileExtension = $file->getClientOriginalExtension();  
            $photoDBPath = "/files/food/photos/".time().'.'.$fileExtension;
            $file->move(public_path("/files/food/photos/"), $photoDBPath);
           
        }

// $file = time().'-'.$request->photo;
$food->photo =  $photoDBPath;

$food->save();

    return redirect()->route('show.food')->with(['success'=>'food edit success']);


}


}
