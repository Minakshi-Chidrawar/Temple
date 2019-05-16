<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use Carbon\Carbon;

class ImageController extends Controller
{
    public function index()
    {
    	return view('image.image-view');
    }

    public function store(Request $request)
    {
        $path = public_path() . '/upload/' . Carbon::now()->isoFormat("DDMMYYYY") . '/';   
   
        if(!File::isDirectory($path)){
            File::makeDirectory($path, 0777, true);
        }

        $imageName = request()->file->getClientOriginalName();
        request()->file->move($path, $imageName);

        return response()->json(['uploaded' => $path . $imageName]);
    }
}
