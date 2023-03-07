<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // dashboard
    public function dashboard()
    {
      return view('dashboard.index');
    }


     // notification
     public function notification()
     {
       return view('notification.index');
     }


    // messages
    public function messages()
    {
    return view('messages.index');
    }


    // bookmarks
    public function bookmarks()
    {
    return view('bookmarks.index');
    }



      // lists
      public function lists()
      {
        return view('lists.index');
      }
 
 
     // subscription
     public function subscription()
     {
     return view('subscription.index');
     }
 
 
     // profile
     public function profile()
     {
     return view('profile.index');
     }


      // setting
      public function setting()
      {
      return view('setting.index');
      }


      // help
      public function help()
      {
      return view('help.index');
      }

      //setting_account
      public function setting_account()
      {
      return view('setting.setting_account');
      }

 
}
