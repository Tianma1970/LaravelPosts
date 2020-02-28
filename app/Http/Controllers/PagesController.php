<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('upload/index');
    }

    public function uploadFile(Request $request)
    {
        if ($request->input('submit') != null ) {
            $file = $request->file('file');

            //File details
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $tempPath = $file->getRealPath();
            $fileSize = $file->getSize();
            $mimeType = $file->getMimeType();

            // Valid File Extensions
            $valid_extension = array("jpg","jpeg","png", "pdf", "zip");

            // 2MB in Bytes
            $maxFileSize = 2097152;

            // Check file extension
            if(in_array(strtolower($extension),$valid_extension)){

            // Check file size
            if($fileSize <= $maxFileSize){

             // File upload location
             $location = 'images';

             // Upload file
             $file->move($location,$filename);

             Session::flash('message','Upload Successful.');
          }

        }

      }

      //dump($fileSize);
      // Redirect to index
      return redirect()->action('PagesController@index')->with('success', 'file loaded successfully');
   }

        }



