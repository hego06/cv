<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
 
class LoginController extends Controller
{
    function login(Request $request)
    {
        $rules = [
            'email' => 'email|required',
            'password' => 'required'
        ];

        $credentials = $this->validate($request,$rules);

        if(Auth::attempt($credentials))
        {
            return redirect()->route('admin.index');
        }

        return back();
    }
    
    function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
