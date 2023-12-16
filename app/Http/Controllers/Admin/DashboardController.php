<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
use Auth;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        if(Auth::user()->hasRole('Admin')){
            $user = User::get();
            return view('admin.dashboard',compact('user'));
        } else {
            return redirect('/user/dashboard');
        }
       
    }
}
