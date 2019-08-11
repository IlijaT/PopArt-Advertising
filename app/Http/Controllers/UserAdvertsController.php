<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserAdvertsController extends Controller
{
    public function index(User $user)
    {
        $adverts = $user->adverts()->latest()->paginate(15);

        return view('adverts.index', compact('adverts', 'user'));
    }
}
