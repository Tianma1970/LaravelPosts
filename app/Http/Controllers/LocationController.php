<?php

namespace App\Http\Controllers;

use App\Location;
use Auth;
use Illuminate\Http\Request;
use DB;

class LocationController extends Controller
{
    public function edit()
    {
        $user = Auth::user();

        return view('/locations/create', [
            'user'  => $user
        ]);
    }

    public function store(Request $request)
    {
        $user = Auth::user();
        $user->location = $request->input('content');
        $user->save();

        return view('/home');
    }
}
