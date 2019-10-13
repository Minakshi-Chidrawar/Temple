<?php

namespace App\Http\Controllers;

use App\Album;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function search(Request $request){
        
        dd($$request);

        if($request->ajax()) {
            $data = Album::where('name', 'LIKE', '%' . $request->search . '%')
                ->get();
            
            $output = '';
            if (count($data)>0) {
                $output = '<ul class="list-group" style="display: block; position: relative; z-index: 1">';

                foreach ($data as $row){
                    $output .= '<li class="list-group-item">'.$row->name.'</li>';
                }

                $output .= '</ul>';
            }
            else {
                $output .= '<li class="list-group-item">'.'No results'.'</li>';
            }
            return $output;
        }
        else
        {
            $gallery = Album::with('images')
                        ->orderBy('created_at', 'desc')
                        ->paginate(12);

            return view('gallery.gallery', compact('gallery'));
        }
    }

    public function results(Request $request)
    {
        dd($request);

        $gallery = Album::where('name', 'like' , '%' . $request->search . '%')
                    ->with('images')
                    ->orderBy('created_at', 'desc')
                    ->paginate(12);

        return view('gallery.gallery', compact('gallery'));

    }
}
