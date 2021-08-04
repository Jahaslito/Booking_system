<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
     public function __construct(){
         $this->middleware('auth');
     }
     public function index()
    {
        return view('customerViews/profile');
    }
    // public function edit(User $user){
    //      $user=Auth::user();
    //       return view ('customerViews.profile',['user'=>'user']);
    //   }
      public function edit(Request $request)
      {
  
          $request->validate([
            'name' => ['required', 'string', 'max:255'],
            //'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            //'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone_number' => ['required', 'numeric', 'min:11'],
            'nationality' => ['required', 'string', 'max:255'],
  
              
          ]);
          $userid=Auth::id();
          $user=user::find($userid);
          $user->name=$request->get('name');
          $user->phone_number=$request->get('phone_number');
          $user->nationality=$request->get('nationality');
          $user->gender=$request->get('gender');
          $user->date_of_birth=$request->get('dob');

         
          $user->save();
          Session::put('Success','The user has been edited successfully');
          return back();
      }
  

    //  public function Update(User $user,Request $request){
    //     //  if(Auth::user()->email ==request('email')){
    //         $user=Auth::user();
            
    //         $request->validate(request(),[
    //         'name' => ['required', 'string', 'max:255'],
    //         //'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //         //'password' => ['required', 'string', 'min:8', 'confirmed'],
    //         'phone_number' => ['required', 'numeric', 'min:11'],
    //         'nationality' => ['required', 'string', 'max:255'],
    //         ]);
    //         $user->name=request->get('name');
    //         $user->phone_number=request->get('phone_number');
    //         $user->nationality=request->get('nationality');
    //         $user->gender=request->get('gender');
    //         $user->date_of_birth=request->get('dob');
    //         $user->Update();
    //         return back();

            

    //      }

    //  //}
}
