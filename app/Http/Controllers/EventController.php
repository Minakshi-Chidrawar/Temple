<?php

namespace App\Http\Controllers;

use App\Event;
use App\User;
use Illuminate\Http\Request;
use App\Notifications\NewEvent;
use Illuminate\Pagination\Paginator;

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
        $events = Event::orderBy('created_at', 'desc')
                        ->paginate(12);
        
        return view('event.events', compact('events'));
    }

    public function create()
    {
        $event = new Event();

        return view('event.create', compact('event'));
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

        $event = Event::create([
            'title' => request('title'),
            'description' => request('description'),
            'startDate' => request('startDate'),
            'endDate' => request('endDate'),
            'sponsor' => request('sponsor'),
        ]);

        $this->notifyUsers($event);

        return redirect('events')->with('message', 'Event added successfully!');
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
    public function edit(Event $event)
    {
        return view('event.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        $event->Update($this->validateRequest());
        $this->notifyUsers($event);

        return redirect('events')->with('message', 'Event updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event->delete();
        
        return redirect('events')->with('message', 'Event deleted successfully!');
    }

    public function validateRequest()
    {
        return request()->validate([
            'title' => 'required|min:3',
            'description' => 'required|min:25',
            'startDate' => 'date',
            'endDate' => 'nullable|date',
            'sponsor' => 'nullable'
        ]);
    }

    public function notifyUsers($event)
    {
        $users = User::get();

        foreach ($users as $user)
        {
            $user->notify(new NewEvent($event));
        }  
    }
}
