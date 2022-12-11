<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postimage extends Model
{
    use HasFactory;
    public function viewImage(){
        $imageData= Postimage::all();
        return view('uploadImage.view_image', compact('imageData'));
    }
}

