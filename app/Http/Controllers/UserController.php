<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    //
    public function registerUser(Request $req)
    {
        // dd($req->all());
        $req->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
        ]);

        User::create([
            'name' => $req->name,
            'email' => $req->email,
            'password' => Hash::make($req->password),

        ]);

        return redirect()->route('login');
    }

    public function loginUser(Request $req)
    {
        // dd($req->all());

        $req->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(Auth::attempt($req->only('email', 'password'))) {
            return redirect()->route('dashboard');
        } else{
            return back()->with('fail', 'Your Email or Password is');

            return redirect()->route('login');

        }
    }

    public function logout()
    {
        auth()->logout();
        
        return redirect()->route('login');
    }
}
