<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        if(Auth::id())
        {
            $user_type =Auth()->user()->usertype;

            if($user_type == 'admin')
            {
                return view('admin.index');
            }
            else if($user_type =='user')
            {
                return view ('home.index');

            }
            else
            {
                return redirect()-> back();
            }

        }
    }
}
