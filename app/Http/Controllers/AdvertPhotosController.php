<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Advert;

class AdvertPhotosController extends Controller
{
    public function store(Advert $advert)
    {
        request()->validate(['photo' => 'required|mimes:jpg,jpeg,png,bmp']);

        $file = request()->file('photo')->store('photos', 'public');

        $advert->photos()->create([
            'path' => $file
        ]);

        return $file;
    }
}
