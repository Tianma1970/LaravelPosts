<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;//man behöver egentligen inte detta namespace
use DB;

class LocationController extends Controller
{
    public function create()
    {
        $user = Auth::user();

        return view('/locations/create', [
            'user'  => $user
        ]);
    }

    public function store()
    {
        $user = Auth::user();
        $user->location = $request->input('content');
        $user->save();


        return view('/home');
    }
}
