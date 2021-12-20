<?php

namespace App\Http\Controllers;

use App\Models\Decision;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VerifiedController extends Controller
{
    public function index()
    {
        $decision = Decision::where('category_id',Auth::user()->advice)->get()->all();
        return view('home.index', compact('decision'));
    }
}
