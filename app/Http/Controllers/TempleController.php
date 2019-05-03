<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\ContactUs;

class TempleController extends Controller
{
    public function index()
    {
        return view('temple.index');
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

        Mail::to("minakshichidrawar@gmail.com")->send(new ContactUs($request));

        return back()->with('success', 'Thanks for contacting us!');
    }
}
