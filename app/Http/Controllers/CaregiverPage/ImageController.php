<?php

namespace App\Http\Controllers\CaregiverPage;

use App\Http\Controllers\Controller;

use App\Models\Img;
use Illuminate\Http\Request;
use Svg\Tag\Image;

class ImageController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $imgs = Img::orderBy('id', 'desc')->paginate(10);
        return view('caregiverPage.imgs.index', compact('imgs'));
    }

    public function create()
    {
        return view('caregiverPage.imgs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'nullable',

            'thumbnail' => 'nullable|image',
            'img' => 'nullable|mimes:pdf,doc,docx,djvu,djv,jpg',
        ]);
        $data = $request->all();
        $data['thumbnail'] = (new \App\Models\Img)->uploadImage($request);
        $data['img'] = (new \App\Models\Img)->uploadImg($request);
        $img = Img::create($data);
        return redirect()->route('imgs.index')->with('success', 'Added');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $img = Img::find($id);
        return view('caregiverPage.imgs.edit', compact('img'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'thumbnail' => 'nullable|image',
            'img' => 'nullable|mimes:pdf,doc,docx,djvu,djv,jpg',
        ]);
        $img = Img::find($id);
        $data = $request->all();
        if ($file = (new \App\Models\Img)->uploadImage($request, $img->thumbnail)) {
            $data['thumbnail'] = $file;
        }
        if ($file = (new \App\Models\Img)->uploadImg($request, $img->img)) {
            $data['img'] = $file;
        }
        $img->update($data);
//        $img->tags()->sync($request->tags);
        return redirect()->route('imgs.index')->with('success', 'Changed');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $img = Img::find($id);
        $img->delete();
        return redirect()->route('imgs.index')->with('success', 'Deleted');
    }



}
