<?php

namespace App\Http\Controllers;

use Auth;
use App\Motto;
use Illuminate\Http\Request;
use DB;

class MottoController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $user = Auth::user();

        return view('/motto/create', ['user'  =>  $user]);
    }

    public function store(Request $request)
    {
        $user = Auth::user();
        $user->motto = $request->input('content');
        $user->save();

        return view('/home');
    }






}
