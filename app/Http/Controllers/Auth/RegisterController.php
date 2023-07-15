<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function store(Request $request)
    {
        $request->validate([
           
            'name'=>'required|regex:/^[\p{L}\p{M}\s.\-]+$/u',
            'email'=>'required|email',
            'password'=>'required|confirmed'
        ]);
        echo "<pre>";
    print_r($request->all());
        $user = new User;
        $user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->password=Hash::make($request->input('password'));
        $user->role=$request->input('role');
       
        $user->save();
        return redirect('/login');
        //Auth::login($user);

       

    }
}
