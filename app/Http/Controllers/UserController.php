<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'advice' => 'required',
            'name' => 'required|min:3',
            'surname' => 'required|min:3',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:3',
        ],
        [
            'advice.required' => 'Select the type',
            'name.required' => 'Write your name',
            'surname.required' => 'Write your surname',
            'email.required' => 'Fill the email',
            'email.email' => 'Such email address does not exist',
            'email.unique' => 'Such email address exists',
            'password.required' => 'Fill your password',
        ]);

        $user = User::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'advice' => $request->advice,
            'password' => bcrypt($request->password)
        ]);

        session()->flash('success', 'You have successfully registered.
        You can login after admin approval.');
        return redirect()->route('login.create');
    }

    public function loginForm()
    {
        return view('user.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ],
        [
            'email.required' => 'Fill in Email the address',
            'email.email' => 'Such email address does not exist',
            'password.required' => 'Fill in the password',
        ]);
        if (Auth::attempt([
                'email' => $request->email,
                'password' => $request->password,
            ]) && Auth::user()->verified == 1) {
            session()->flash('success', "Hello");
            if (Auth::user()->is_admin) {
                return redirect()->route('admin.index');
            }

            if($user_id = Auth::user()->id){

                return redirect()->route('login.create');
            }
        }
        session()->flash('error', "Incorrect email Email or Password");
        Auth::logout();
        return redirect()->route('login.create');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login.create');
    }




}

