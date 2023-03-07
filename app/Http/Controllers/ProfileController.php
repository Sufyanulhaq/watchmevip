<?php

namespace App\Http\Controllers;
use App\Models\profile;
use App\Models\User;
use Image;
use DB;
use Illuminate\Support\Carbon;

use Auth;
use Hash;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    // register new user

    public function profile(Request $request){
        $validateData = $request->validate([
            'email' => 'required|unique:users|max:255',
        ]);
       



        $user = new User();
        $user->name=$request->username;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->save();

        



        $random_img = 'img/profile.jpg'; 
        profile::insert([
            'userId' => $user->id,
            'username' => $request->username,
            'photo' => $random_img,
            'created_at' => Carbon::now(),
        ]);
        $notification = array(
            'message' => 'Registration Successfully !',
            'alert_type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }
    // update profile

    public function ProfileUpdate(Request $request,$id){
     
        $input = [  
                'fullname' => $request->name
                ,'bio' => $request->bio
                ,'dob' => $request->birthdate
                ,'gender' => $request->gender
                ,'genderPronoun' => $request->pronoun
                ,'location' => $request->location
                ,'webUrl' => $request->website
                ,'updated_at' => Carbon::now()
            ];

            profile::where('userId', '=', $id)->update($input);
               
            $notification = array(
                'message' => 'Profile has been updated!',
                'alert_type' => 'success'
            );
            return Redirect()->back()->with($notification);
    }


    // change pass
    public function ProfileUpdatePass($id, Request $request){
    
    $curetn = $request->password;
     $hashedPassword = Auth::user()->password;
      if (!Hash::check($request->password , $hashedPassword)) {
           $notification = array(
                    'message' => 'Your current password is incorrect',
                    'alert_type' => 'warning'
                );
                return Redirect()->back()->with($notification);
        }
         else{
            $users = User::find(Auth::user()->id);
            $users->password = Hash::make($request->new_password);
            $users->save();
             $notification = array(
                    'message' => 'Your password has been changed!',
                    'alert_type' => 'success'
                );
                return Redirect()->back()->with($notification);
        }
        
    
}

    
}
