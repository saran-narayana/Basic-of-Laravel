<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\MonthController;
use App\Http\Controllers\postcontroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
 

// Route::get('/',function(){
// return view('home');
// });

// Route::get('/contact',function(){
//     return view('contact');
//     });


// Route::get('/user-form',function(){
//     return view('user_form');
// });



// Route::post('get-userdata',function(Request $request){
//    $name = $request->input('name');
//    $age = $request->input('age');
//    $phone = $request->input('phone');

// //    return 'Hi ,My name is ' .$name.' and My Age is '.$age.' and My Phone Number is '.$phone.'';
// return redirect('user-form')->with('message','successfully form submitted');
// });



// middleware
// Route::get('month/{num}', function ($num){
//     if($num==1){
//         return 'JANUARY
//          <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus eos adipisci magnam alias explicabo minima hic, quos aspernatur perspiciatis deserunt aut, optio accusamus culpa id consequuntur, maiores commodi omnis labore!';
//     } else if($num==2){
//         return 'FEBUARY';
//     } else if($num==3){
//         return 'MARCH';
//     }
// })->middleware('month');


//controller
Route::get('login', [LoginController::class,'login_form']);
  
Route::post('login', [LoginController::class,'login_process']);

Route::get('forget-password', [LoginController::class,'forget_password']);

Route::get('post/{id}',[postcontroller::class,'show']);

Route::get('month/{num}',[MonthController::class,'numTOMonth']);


