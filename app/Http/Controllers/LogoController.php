<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class LogoController extends Controller
{
    public function upload_logo()
    {

        return view('upload_logo/index');
    }


public function store_logo(Request $request)
   {
       $user = Auth::user();
       //dump($request->file('image')); // detta är en tillfällig fil
       $tmpImage = $request->file('logo');
       // move the tmpImage to a permanent place
       $filename = 'admin_logo' . $user->id . '.' . $tmpImage->getClientOriginalExtension();
       $tmpImage->move('images', $filename);

       $logos->admin_logo = $filename; // where you moved the file to

       $logos->save();

       return redirect('/home', [
           'logos'  => $logos
       ]);
   }
}
