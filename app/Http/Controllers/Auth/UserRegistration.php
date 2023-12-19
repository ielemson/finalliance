<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Country;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Brian2694\Toastr\Facades\Toastr;
use Monarobase\CountryList\CountryList;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
// use App\Mail\WelcomeEmail;
use App\Mail\UserWelcome;
use Illuminate\Support\Facades\Mail;
class UserRegistration extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $countries = Country::all();
        // return view('frontend.auth.register');
        return view('frontend.auth.register',compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'name' => 'required',
            'lname' => 'required',
            'mname' => 'required',
            'username' => 'required',
            'country' => 'required',
            'email' => 'required|email|unique:users',
            'mobile' => 'required|numeric|unique:users',
            'password' => 'required|confirmed',
        ],

        [
            'fname.required' => 'First name is required',
            'lname.required' => 'Last name is required',
            'mname.required' => 'Middle name is required',
            'username.required' => 'User name is required',
            'country.required' => 'Country is required',
            'email.required' => 'Email is required',
            'email.email' => 'Invalid email',
            'mobile.required' => 'Mobile number is required',
            // 'mobile.numeric' => 'Invalid mobile number',
            'password.required' => 'Password is required',
            'password.confirmed' => 'Password Mismatch',
        ]
    
    );
     
    $input = $request->all();
    $input['password'] = bcrypt($input['password']);
    $user = User::create($input);
    $user->assignRole('User');
    // Toastr::success('Registration Successful');
    Toastr::success('Registration Successful', 'Info', ["positionClass" => "toast-bottom-right"]);
    Mail::to($user->email)->send(new UserWelcome());
      return redirect()->route('customer.login');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
