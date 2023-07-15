<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\EmpDetController;
use Illuminate\Support\Facades\Gate;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/project',function(){
 return view('register');
});

Route::post('get_userdata',function(Request $request){
   // dd($request->all());

    $email=$request->input('email');
    $pwd=$request->input('pwd');
     return 'hi, your email id is : '.$email. ' & password is : '.$pwd;

});
//above routes just for practice
//login-register-curd below started

Route::view('register','auth.register')->middleware('guest');
Route::post('store',[RegisterController::class,'store']);
Route::view('home','home')->middleware('auth');

Route::view('login','auth.login')->middleware('guest')->name('login');
Route::post('authenticate',[LoginController::class,'authenticate']);

Route::get('logout', [LoginController::class,'logout']);

Route::view('empdetails','empinfo.empdetails');

Route::get('empdet', [EmpDetController::class, 'empdet'])->middleware(['auth']);

Route::get('add-emp', [EmpDetController::class, 'create']);
Route::post('add-emp', [EmpDetController::class, 'store']);

Route::get('edit-employee/{id}',[EmpDetController::class, 'editemployee']);
Route::put('update-employee/{id}',[EmpDetController::class, 'update'] );

Route::get('viewprofile/{id}',[EmpDetController::class, 'viewempprofile1']);

Route::get('delete-employee/{id}',[EmpDetController::class, 'delete']);
Route::view('sidebar','layouts.master');






