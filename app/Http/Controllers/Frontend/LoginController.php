<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class LoginController extends Controller
{
    public function index()
    {
        return view('frontend.login');
    }

    public function login_user(Request $request)
    {
        echo "test test test";

        $validate = $request->validate([
            'firstname' => 'required|min:6',
            'lastname' => 'required',
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6',
            'email' => 'required|email|unique:users,email',
            'city' => 'required',
            'country' => 'required',
        ]);

        if($validate){

            $user = new User;

            $user->firstname = $request['firstname'];
            $user->lastname = $request['lastname'];
            $user->password = md5($request['password']);
            $user->email = $request['email'];
            $user->country = $request['country'];
            $user->city = $request['city'];
            $user->save();
        }
       return redirect('/login');        
    }
}
