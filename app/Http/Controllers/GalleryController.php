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

class GalleryController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin', ['only' => ['destroy']]);
    }

    public function destroy(Album $album)
    {
        $images = Album::findOrFail($album->id)->images;
        $this->deleteFromImages($images);

        $album->delete();
        
        return redirect()->back()->with('message', 'Gallery deleted successfully!');
    }

    public function deleteFromImages($images)
    {
        foreach($images as $image)
        {
            File::delete($image->thumbnail);
            File::delete($image->original);

            $image->delete();
        }
    }
}