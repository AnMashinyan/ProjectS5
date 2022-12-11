<?php
namespace App\Http\Controllers;

use App\Models\Img;
use Illuminate\Http\Request;


class ImageController extends Controller
{
    public function index()
    {
        $imgs = Img::orderBy('id', 'desc')->paginate(10);
        return view('imgs.show', compact('imgs'));
    }

}
