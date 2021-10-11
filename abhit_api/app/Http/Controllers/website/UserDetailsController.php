<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserDetails;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserDetailsController extends Controller
{

    public function myAccount(Request $request){
        $user_details = UserDetails::where('email',Auth::user()->email)->first();
        return view('website.my_account.my_account')->with('user_details',$user_details);
    }


    public function userDetails(Request $request){

        $firstname = $request->fname;
        $lastname = $request->lname;
        $email = $request->email;
        $phone = $request->phone;
        $education = $request->education;
        $gender = $request->gender;

        $user_details = UserDetails::where('email',Auth::user()->email )->exists();

        if($user_details == true){
            UserDetails::where('email', Auth::user()->email)
                        ->update([
                            'firstname' => $firstname,'lastname' => $lastname, 'email' => $email, 'phone' => $phone, 'education' => $education, 'gender' => $gender
                        ]);
        }else{
            UserDetails::create([
                'firstname' => $firstname,
                'lastname' => $lastname,
                'email'  => $email,
                'phone' => $phone,
                'education' => $education,
                'gender' => $gender
            ]);
        }
        User::where('email', Auth::user()->email)->update(['firstname' => $firstname,'lastname' => $lastname,'email' => $email]);
        
        return response()->json(['message' => 'Profile details updated']);
    }

    public function uploadPhoto(Request $request){
        
        $image = $request->file('image');

        $request->validate([
            'image' => 'required | mimes:jpg,jpeg,png'
        ]);
        $new_imgage_name = time().'-'.Auth::user()->lastname.Auth::user()->firstname.'.'.$image->extension();
        $image_path = $image->move(public_path('files/profile'), $new_imgage_name);
        UserDetails::where('email', Auth::user()->email)->update(['image' => $new_imgage_name]);
        return response()->json(['message' => 'Profile photo uploaded']);
    }

    public function updatePassword(Request $request){
        $currentPassword = $request->currentPassword;
        $newPassword = $request->newPassword;
        $confirmPassword = $request->confirmPassword;

        $request->validate([
            'currentPassword' => 'required',
            'newPassword' => 'required',
            'confirmPassword' => 'required'
        ]);

        $user_details = User::where('email',Auth::user()->email)->first();
        if(Hash::check($currentPassword, $user_details->password)) {
            User::where('email', Auth::user()->email)->update(['password' => Hash::make($newPassword)]);
            return response()->json(['message' => 'Password updated']);
        }else{
            return response()->json(['message' => 'Something went wrong']);
        }
    }
}
