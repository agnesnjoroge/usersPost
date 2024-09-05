<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(Request $request){
      $data = $request -> validate([
        'name' => 'required',
        'email' => 'required',
        'password' => 'required'
        ]);
      $user = User::create($data);
      auth()->login($user);
      
      return redirect('/');
    }
    public function login(Request $request){
      $data = $request -> validate([
        'lname' => 'required',
        'lpassword' => 'required'
        ]);
        
        if (auth()->attempt([
          'name' => $data['lname'],
          'password' => $data['lpassword']
          ])){
          $request->session()->regenerate();
          }
        return redirect('/');
        
    }
    public function logout(){
      auth() ->logout();
      return redirect('/');
    }
    public function showUsers(){
      $users = User::all();
      return view('users',['users' => $users]);
    }
}
