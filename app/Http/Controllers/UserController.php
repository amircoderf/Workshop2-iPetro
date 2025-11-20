<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
        public function showLogin()
    {
        return view('login');
    }


        public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        //check both tables neext time
        $user = DB::table('inspector')
                    ->where('email', $request->email)
                    ->where('password', $request->password) // later use hashing
                    ->first();

        if ($user) {
            Session::put('user', $user);
            return redirect('/welcome');
        }

        return back()->with('error', 'Invalid email or password.');
    }

}
