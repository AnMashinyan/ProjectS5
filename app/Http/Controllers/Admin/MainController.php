<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
//        $decision = Decision::get()->all();
        $users = User::where('verified',0)->get();
        return view('admin.index', compact('users'));
    }

    public function confirm($user){
        User::where('id',$user)->update(['verified'=>1]);
        return redirect()->back();
    }
}
