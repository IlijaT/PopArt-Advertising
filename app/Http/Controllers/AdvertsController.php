<?php

namespace App\Http\Controllers;

use App\Advert;
use Illuminate\Http\Request;

class AdvertsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adverts = Advert::paginate(15);
        return view('adverts.index', ['adverts' => $adverts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adverts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {

        $this->validate(request(), [
            'title' => 'required|max:255',
            'description' => 'required',
            'state' => 'required',
            'price' => 'numeric',
            'street' => 'required',
            'city' => 'required',
            'country' => 'required',
            'phone' => 'required'
        ]);

        $advert = auth()->user()->publish(
            new Advert([
                'title' => request('title'),
                'description' => request('description'),
                'state' => request('state'),
                'price' => request('price'),
                'street' => request('street'),
                'city' => request('city'),
                'country' => request('country'),
                'phone' => request('phone'),
            ])
        );

        session()->flash('message', 'Your advert has now been published.');

        return redirect("/adverts/{$advert->id}");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Advert  $advert
     * @return \Illuminate\Http\Response
     */
    public function show(Advert $advert)
    {
        return view('adverts.show', ['advert' => $advert]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Advert  $advert
     * @return \Illuminate\Http\Response
     */
    public function edit(Advert $advert)
    {
        return view('adverts.edit', ['advert' => $advert]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Advert  $advert
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Advert $advert)
    {
        $this->validate(request(), [
            'title' => 'required|max:255',
            'description' => 'required',
            'state' => 'required',
            'price' => 'numeric',
            'street' => 'required',
            'city' => 'required',
            'country' => 'required',
            'phone' => 'required'
        ]);

        $advert->update([
            'title' => request('title'),
            'description' => request('description'),
            'state' => request('state'),
            'price' => request('price'),
            'street' => request('street'),
            'city' => request('city'),
            'country' => request('country'),
            'phone' => request('phone'),
        ]);

        session()->flash('message', 'Your advert has now been updated.');

        return redirect("/adverts/{$advert->id}");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Advert  $advert
     * @return \Illuminate\Http\Response
     */
    public function destroy(Advert $advert)
    {
        //
    }
}
