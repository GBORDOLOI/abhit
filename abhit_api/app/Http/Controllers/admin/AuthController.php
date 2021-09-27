<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    protected function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('admin.dashboard')
                        ->withSuccess('Signed in');
        } else {
            return redirect()->back()->withErrors(['Credentials doesn\'t match with our record'])->withInput($request->input());
        }
    }

    protected function login()
    {
        # code...
        // if (auth()->user()) {
        //     return redirect(route('admin.dashboard'));
        // } else {
            return redirect(route('login'));
        // }
    }

    protected function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
