<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;



class Img extends Model
{
    use HasFactory, Sluggable; //SoftDeletes

    protected $fillable = ['title', 'description', 'thumbnail', 'img'];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function uploadImage(Request $request, $image = null) //static
{
    if ($request->hasFile('thumbnail')) {
    if ($image) {
    Storage::delete($image);
    }
    $folder = date('Y-m-d');
//return $request->file('thumbnail')->store("public/images/{$folder}");

        return $request->file('thumbnail')->store("public/images");



}
        return null;
}



    public function getImage()
    {
        if (!$this->thumbnail) {
            return asset('assets/caregiverPage/img/no-image.jpg');
        }

        return asset('storage/' . $this->thumbnail);





 }

    public function uploadImg(Request $request, $img = null) //static
    {
        return null;
    }

    public function getImg()
    {
//        return asset('storage/' . $this->img);
    }
}
