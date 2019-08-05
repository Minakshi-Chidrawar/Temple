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

    public function gallery()
    {
        $gallery = Album::with('images')->get();

        return view('gallery.gallery', compact('gallery'));
    }

    public function show($id)
    {
        $gallery = Album::findOrFail($id);

        return view('gallery.images', compact('gallery'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'album' => 'required|min:3|max:50',
            'image' => 'required'
        ]);
        
        $album = Album::create([
            'name' => $request->get('album')
        ]);

        if($request->hasFile('image'))
        {
            foreach ($request->file('image') as $image)
            {
                $path = $image->store('uploads', 'public');
                Image::create([
                    'name' => $path,
                    'album_id' => $album->id
                ]);
            }
        }

        return "<div class='alert alert-success'>Album created successfully!</div>";
    }

    public function destroy()
    {
        $id = request('id');

        $image = Image::findOrFail($id);
        $filename = $image->name;
        $image->delete();

        \Storage::delete('public/'.$filename);
        return redirect()->back()->with('message', 'Image deleted successfully!');
    }
}
