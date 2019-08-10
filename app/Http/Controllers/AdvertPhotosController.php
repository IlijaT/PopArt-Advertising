<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Advert;

class AdvertPhotosController extends Controller
{
    public function store(Request $request, Advert $advert)
    {

        $file = $request->file('file');
        $name = time() . $file->getClientOriginalName();

        $file->move('adverts/photos', $name);

        $advert->photos()->create(['path' => "/flyers/photos/{$name}"]);

        return 'done';
    }
}
