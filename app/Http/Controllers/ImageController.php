<?php

namespace App\Http\Controllers;

use File;
use App\Image;
use App\Album;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index()
    {
        $images = Image::get();

        return view('gallery.home', compact('images'));
    }

    public function store(Request $request)
    {
        if($request->hasFile('image'))
        {
            Image::create([
                'name' => $request->file('image')->store('uploads', 'public'),
                'album_id' => 1
            ]);
        }
        // $path = public_path() . '/upload/' . Carbon::now()->isoFormat("DDMMYYYY") . '/';   
   
        // if(!File::isDirectory($path)){
        //     File::makeDirectory($path, 0777, true);
        // }

        // $imageName = request()->file->getClientOriginalName();
        // request()->file->move($path, $imageName);

        // return response()->json(['uploaded' => $path . $imageName]);
    }
}
