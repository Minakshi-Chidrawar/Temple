<?php

namespace App\Http\Controllers;

use File;
use App\Image;
use App\Album;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Image as IntervensionImage;
use Illuminate\Pagination\Paginator;
use Illuminate\Database\Eloquent\Collection;

class ImageController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin', ['only' => ['index', 'addImage',
            'destroy', 'store']]);
    }
    
    public function index()
    {
        $images = Image::get();

        return view('gallery.createAlbum', compact('images'));
    }

    public function gallery()
    {
        $gallery = Album::with('images')
                            ->orderBy('created_at', 'desc')
                            ->paginate(12);

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
            'image' => 'required',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg'
        ]);
        
        $album = Album::create([
            'name' => $request->get('album')
        ]);

        $this->uploadAndSaveImages($request, $album->id);

        return "<div class='alert alert-success'>Album created successfully!</div>";
    }

    public function addImage(Request $request)
    {
        $this->uploadAndSaveImages($request, request('id'));

        return redirect()->back()->with('message', 'Image/s added successfully!');
    }

    public function destroy(Image $image)
    {
        File::delete($image->name);
        $image->delete();
        
        return redirect()->back()->with('message', 'Image deleted successfully!');
    }

    public function uploadAndSaveImages($request, $albumId)
    {      
        if($request->hasFile('image'))
        {
            foreach ($request->file('image') as $image)
            {
                $basename = rand(1111,9999).time();
                $original = $basename . '.' . $image->getClientOriginalExtension();
                $thumbnail = $basename . '_thumb.' . $image->getClientOriginalExtension();
                $thumbnail_path = 'upload/' . $thumbnail;

                $thumbnail_img = IntervensionImage::make($image)
                                        ->fit(250, 250)
                                        ->save($thumbnail_path);

                $image->move(public_path('upload/'), $original);

                Image::create([
                    'original' => 'upload/' . $original,
                    'thumbnail' => $thumbnail_path,
                    'album_id' => $albumId
                ]);
            }	
        }
    }
}
