<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
     public function processLogin(Request $request)
        {
            $username = $request->input('username');
            $password = $request->input('password');

         
            $adminUser = "admin";
            $adminPass = "12345"; 

            if ($username === $adminUser && $password === $adminPass) {
                session(['user' => $username]);
                return redirect()->route('admin.manage')->with('success', 'Welcome Admin!');
            }

            return back()->withErrors(['login' => 'Invalid username or password.']);
        }
}
