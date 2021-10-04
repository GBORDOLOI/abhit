<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use validator;

class WebsiteAuthController extends Controller
{
    public function signup(Request $request){

        $fullname = $request->fullname;
        $email = $request->email;
        $password = $request->password;
        $confirm_pwd = $request->confirm_pwd;
       

        $request->validate([
            'fullname' => 'required',
            'email' => 'required',
            'password' => 'required | min:5 | confirmed',
        ]);

        $check_email_exists = User::where('email',$email)->exists();
        if($check_email_exists){
            return response()->json(['message' => 'Oops! Email already exists', 'status' => 422]);
        }else{

            $create = User::create([
                'name' => $fullname,
                'email' => $email,
                'role_id' => 2,
                'password' => Hash::make($password)
            ]);

            if($create){
                return response()->json(['message'=> 'Signup Successfull', 'status' => 201]);
            }else{
                return response()->json(['message'=> 'Oops! Something went wrong', 'status' => 500]);
            }
        }

    }


    public function login(Request $request){

        $email = $request->email;
        $password = $request->password;

        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('website.dashboard');
        } else {
            return redirect()->back()->withErrors(['Credentials doesn\'t match with our record'])->withInput($request->input());
        }
        

    }

    public function logout(Request $request){
    
        Auth::logout();
        return redirect('');
    }
}
