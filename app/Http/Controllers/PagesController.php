<?php

namespace App\Http\Controllers;

use Auth;
use Session;
use App\User;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('upload/index');
    }

   public function store(Request $request)
   {
       $user = Auth::user();
       //dump($request->file('image')); // detta är en tillfällig fil
       $tmpImage = $request->file('image');
       // move the tmpImage to a permanent place
       $filename = 'user_image' . $user->id . '.' . $tmpImage->getClientOriginalExtension();
       $tmpImage->move('images', $filename);

       $user->user_image = $filename; // where you moved the file to

       $user->save();

       return redirect('/home');
   }

}
