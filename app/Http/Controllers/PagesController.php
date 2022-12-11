<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function indexPage()
    {

        return view('main.index');

    }

    public function create()
    {
        $title = "hi about";
;
        return view('user.create');


    }

    public function login()
    {
     return view('user.login');
    }

    public function caregiver(){
        return view('main.admin');
}
public function about(){
        return view(('main.about'));
}
public function signs(){
        return view(('main.signs'));
}
public function whatIsDementia(){
        return view(('main.whatIsDementia'));
}
public function types(){
        return view(('main.types'));
}


}
