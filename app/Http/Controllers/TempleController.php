<?php

namespace App\Http\Controllers;

use Mail;
use App\Image;
use App\Album;
use App\Event;
use App\Content;
use Carbon\Carbon;
use App\Mail\ContactUs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TempleController extends Controller
{
    public function index()
    {
        $event = $this->upComingEvent();

        $content = Content::where('slug', 'LIKE', '%timing%')->get()[0];

        $gallery = Album::with('images')
                            ->orderBy('created_at', 'desc')
                            ->first();

        $carousel = Album::with('images')->where('name', 'home')->get()[0];

        return view('temple.index', compact('event', 'gallery', 'content', 'carousel'));
    }

    public function aboutTemple()
    {
        return view('temple.aboutTemple');
    }

    public function mission()
    {
        return view('temple.mission');
    }

    public function horoscope()
    {
        return view('temple.horoscope');
    }

    public function donation()
    {
        return view('temple.donation');
    }
    
    public function aarati()
    {
        return view('temple.aarati');
    }

    public function gayatriMantra()
    {
        return view('temple.gayatriMantra');
    }

    public function mataji()
    {
        return view('temple.mataji');
    }

    public function hanumanChalisa()
    {
        return view('temple.hanumanChalisa');
    }

    public function inTempleActivities()
    {
        return view('temple.inTempleActivities');
    }

    public function outTempleActivities()
    {
        return view('temple.outTempleActivities');
    }

    public function easyFundRaising()
    {
        return view('temple.easyFundRaising');
    }

    public function templeExtension()
    {
        return view('temple.templeExtension');
    }

    public function create()
    {
        return view('temple.contact');
    }

    public function store(Request $request)
    { 
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ]);

        Mail::to("jasmaicha@gmail.com")->send(new ContactUs($request));

        return back()->with('success', 'Thanks for contacting us!');
    }

    public function upComingEvent()
    {
        $date = Carbon::now()->toDateString();
        return Event::where('startDate', '>', $date)->orderBy('startDate', 'asc')
                        ->first();
    }
}
