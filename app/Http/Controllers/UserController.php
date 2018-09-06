<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use Auth;

class UserController extends Controller
{
    public function logout(){
        Auth::logout();
        return redirect()->route('home.index');
    }

    public function getRegister() {
      return view('user.register'); 
    }

    public function PostRegister(Request $request){
        $this->Validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:3|',
        ]);

        $user = new User([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' =>bcrypt($request->input('password'))
            
        ]);
        $user->save();
        Auth::login($user);
        return redirect()->route('home.index');
    }

    public function getLogin(){
        return view('user.login');
    }

    public function postLogin(Request $request){
        $this->Validate($request, [
            'email' => 'required',
            'password' => 'required|min:3',
        ]);

        if (Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password')])){
                return redirect()->route('user.page');
            }
            return redirect()->back();
    }

    public function page(){
        return view('user.page');
    }

}
