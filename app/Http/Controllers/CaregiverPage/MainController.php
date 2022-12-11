<?php

namespace App\Http\Controllers\CaregiverPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('caregiverPage.index');
    }
}
