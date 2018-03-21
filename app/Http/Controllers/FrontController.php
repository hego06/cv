<?php

namespace App\Http\Controllers;

use App\User;
use DateTime;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    function __construct()
    {
        Carbon::setLocale('es');
    }

    function index()
    {
        $id = 1;
        $user = User::findOrFail($id);
        $skills = $user->skills()->get()->toArray();
        $educations = $user->educations()->get();
        $experiences = $user->experiences()->get();

        return view('front.index', compact('user','skills','educations','experiences'));
    }

    function admin(){
        return view('admin.index');
    }
}
