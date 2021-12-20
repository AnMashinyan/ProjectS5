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
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'advice' => $request->advice,
            'password' => bcrypt($request->password)
        ]);

        session()->flash('success', 'Դուք հաջողությամբ գրանցվել եք');
//        Auth::login($user);
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
        ]);
        if (Auth::attempt([
                'email' => $request->email,
                'password' => $request->password,
            ]) && Auth::user()->verified == 1) {
            session()->flash('success', "Ողջյուն");
            if (Auth::user()->is_admin) {
                return redirect()->route('admin.index');
            }
            if (Auth::user()->advice == 1 || Auth::user()->advice == 2 || Auth::user()->advice == 3 || Auth::user()->advice == 4) {
                return redirect()->route('home.index');
            }
        }
        session()->flash('error', "Սխալ էլ․ փոստ կամ Գաղտնաբառ");
        Auth::logout();
        return redirect()->route('login.create');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login.create');
    }
}