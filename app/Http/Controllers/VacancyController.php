<?php

namespace App\Http\Controllers;

use App\Vacancy;
use Illuminate\Http\Request;

class VacancyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vacancies = Vacancy::get();

        return view('vacancy.vacancies', compact('vacancies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vacancy = new Vacancy();
        return view('vacancy.create', compact('vacancy'));
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
            'role' => 'nullable',
            'description' => 'required|min:5',
            'postDate' => 'date',
            'closingDate' => 'nullable|date',
            'note' => 'nullable',
        ]);

        Vacancy::create([
            'title' => request('title'),
            'role' => request('role'),
            'description' => request('description'),
            'postDate' => request('postDate'),
            'closingDate' => request('closingDate'),
            'email'  => 'jasmaicha@gmail.com',
            'mobile' => '07882253540',
            'note' => request('note'),
        ]);

        return redirect('\vacancies')->with('message', 'Vacancy added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vacancy  $vacancy
     * @return \Illuminate\Http\Response
     */
    public function show(Vacancy $vacancy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vacancy  $vacancy
     * @return \Illuminate\Http\Response
     */
    public function edit(Vacancy $vacancy)
    {
        return view('vacancy.edit', compact('vacancy'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vacancy  $vacancy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vacancy $vacancy)
    {
        $vacancy->update($this->validateRequest());

        return redirect('\vacancies')->with('message', 'Vacancy updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vacancy  $vacancy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vacancy $vacancy)
    {
        $vacancy->delete();

        return redirect('\vacancies');
    }

    public function validateRequest()
    {
        return request()->validate([
            'title' => 'required|min:3',
            'role' => 'nullable',
            'description' => 'required|min:5',
            'postDate' => 'date',
            'closingDate' => 'nullable|date',
            'note' => 'nullable',
        ]);
    }
}
