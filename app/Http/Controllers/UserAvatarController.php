<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserAvatarController extends Controller
{
    /**
     * Ypdate the Avatar for the user
     *
     * @param Request $request
     * @return Response
     */

     public function update(Request $request)
     {
         $path = $request->file('avatar')->store('avatars/'.$request->user()->id, 'images');

         return $path;
     }
}
