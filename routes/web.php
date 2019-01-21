<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
<<<<<<< HEAD
=======
Route::redirect('/', '/login');
>>>>>>> b09e64ee7638e3514cdb897764e656746ada7664

// login
Route::redirect('/', '/login');
Route::get('/login','LoginController@login');
Route::post('/login/checklogin','LoginController@checklogin');
Route::get('/login/successlogin','LoginController@successlogin');
Route::get('/login/logout','LoginController@logout');
// Route::get('/master', function(){
//     return view('layout.master');
// });



// food routes
  //insert food
Route::get('add_newfood',[
    'uses'=>'foodController@insert_food',
    'as'=>'insert.new.food',
    ]);
  
    // add food to DB

    Route::post('add_newfood',[
        'uses'=>'foodController@add',
        'as'=>'add.new.food',
        ]);

    // show food

    Route::get('show_food',[
        'uses'=>'foodController@show',
        'as'=>'show.food',
        ]);

    // edit food

    Route::get('edit_food/{id}',[
        'uses'=>'foodController@edit',
        'as'=>'edit.food',
        ]);

    // update food

    Route::post('edit_food/{id}',[
        'uses'=>'foodController@update',
        'as'=>'update.food',
        ]);

    // delete food

    Route::get('delete_food/{id}',[
        'uses'=>'foodController@delete',
        'as'=>'delet.food',
        ]);

    // add to menu

    Route::get('add_tomenu',[
        'uses'=>'foodController@show',
        'as'=>'add.menu',
        ]);

   // show today menu
    
   Route::get('show/menu',[
    'uses'=>'MenuController@index',
    'as'=>'show.menu',
    ]);

   // create staff
   
   Route::get('staff/register',[
    'uses'=>'StaffController@register',
    'as'=>'staff.register',
    ]);

    // add staff into DB

    Route::post('staff/register',[
        'uses'=>'StaffController@add',
        'as'=>'staff.add',
        ]);

   // show staff
   Route::get('staff/show',[
    'uses'=>'StaffController@show',
    'as'=>'staff.show',
    ]);

    // delete staff
    Route::post('staff/delete',[
        'uses'=>'StaffController@delete',
        'as'=>'staff.delete',
        ]);
    

    // edit staff
    Route::post('staff/register',[
        'uses'=>'StaffController@add',
        'as'=>'staff.edit',
        ]);
   
     // show attendace

    //  Route::post('staff/attendance',[
    //     'uses'=>'StaffController@attendance',
    //     'as'=>'staff.attendance',
    //     ]);



Route::get('/attendance', function(){
    return view('staff.attendance');
});







// Route::get('/home', 'HomeController@index')->name('home');
