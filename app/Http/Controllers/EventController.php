<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin', ['only' => ['create', 'edit', 'update', 'destroy', 'store']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::get();
        
        return view('event.events', compact('events'));
    }

    public function create()
    {
        return view('event.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:3',
            'description' => 'required|min:5',
            'startDate' => 'date',
            'endDate' => 'nullable|date',
            'sponsor' => 'nullable'
        ]);
        //dd($request);

        Event::create([
            'title' => request('title'),
            'description' => request('description'),
            'startDate' => request('startDate'),
            'endDate' => request('endDate'),
            'sponsor' => request('sponsor'),
        ]);

        return redirect()->back()->with('message', 'Event added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::findOrFail($id);

        return view('event.event', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //dd($id);
        $event = Event::findOrFail($id);

        //dd($event);

        return view('event.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $event = Event::findOrFail($id);
        $event->Update($request->all());

        return redirect()->back()->with('message', 'Event updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        $id = request('id');
        $event = Event::findOrFail($id);

        $event->delete();
        
        return redirect()->back()->with('message', 'Event deleted successfully!');
    }
}
