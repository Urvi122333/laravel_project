<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;

class CustomAuthController extends Controller
{
    public function login(){
       return view("auth.login");
    }
    public function registration(){
       return view("auth.registration");
    }
    public function registerUser(Request $request){
      $request->validate([
         'fname'=>'required',
         'lname'=>'required',
         'email'=>'required|email|unique:users',
         'mobno'=>'required|max:10',
         'password'=>'required'
      ]);
      $user =new User();
      $user->fname=$request->fname;
      $user->lname=$request->lname;
      $user->email=$request->email;
      $user->mobno=$request->mobno;
      $user->password=Hash::make($request->password);
      $res= $user->save();
      if($res){
         return back()->with('success',"You have registered successfully");
      }else{
         return back()->with('fail',"Something went wrong");
      }
   }
   public function loginUser(Request $request){
      $request->validate([
         'mobno'=>'required|max:10',
         'password'=>'required'
      ]);
      $user =new User();
      $user->mobno=$request->mobno;
      $user->password=Hash::make($request->password);
      $user=User::where('mobno','=',$request->mobno)->first();

      if($user){
         if(Hash::check($request->password,$user->password)){
            $request->session()->put('loginId',$user->id);
            return redirect('dashboard');
         }else{
            return back()->with('fail',"Password not match");
         }
      }else{
         return back()->with('fail',"Mobile No not registered");
      }
   }
   public function dashboard(){
      $data=array();
      if(Session::has('loginId')){
         $data=User::where('id','=',Session::get('loginId'))->first();
      }
      return view('auth.dashboard',compact('data'));
   }
   public function logout(){
      if(Session::has('loginId')){
         Session::pull('loginId');
         return redirect('login');
      }
   }
}
