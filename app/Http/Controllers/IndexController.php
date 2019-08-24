<?php

namespace App\Http\Controllers;

use App\Content;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contents = Content::orderBy('updated_at', 'desc')
                            ->paginate(12);

        return view('content.contents', compact('contents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $content = new Content();

        return view('content.create', compact('content'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validateRequest();

        Content::create([
            'title' => request('title'),
            'description' => request('description'),
            'slug' => request('slug'),
        ]);

        return redirect('contents')->with('message', 'Content added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(content $content)
    {
        return view('content.edit', compact('content'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Content $content)
    {
        $content->Update($this->validateRequest());

        return redirect('contents')->with('message', 'Content updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Content $content)
    {
        //dd($content);
        $content->delete();
        
        return redirect('contents')->with('message', 'Content deleted successfully!');
    }

    public function validateRequest()
    {
        return request()->validate([
            'title' => 'required|min:3',
            'description' => 'required|min:25',
            'slug' => 'required|min:5',
        ]);
    }
}
