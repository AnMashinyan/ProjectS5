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
        $decision_5 = Decision::where('category_id',5)->get()->all();
        $decision_6 = Decision::where('category_id',6)->get()->all();
        return view('home.index', compact('decision','decision_5','decision_6'));
    }
}
