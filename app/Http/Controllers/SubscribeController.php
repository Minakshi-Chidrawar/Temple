<?php

namespace App\Http\Controllers;

use Mail;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Mail\WelcomeNewSubsciberMail;

class SubscribeController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => 'nullable',
        ]);

        $user = User::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => Hash::make('PassWord123'),
            ]);
             
        Mail::to($user->email)->send(new WelcomeNewSubsciberMail($user));
        return redirect('events')->with('message', 'You have SUBSCRIBED successfully!');
    }
}
