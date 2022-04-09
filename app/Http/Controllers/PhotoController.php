<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public static function uploadPhoto(Request $request){
        $request->validate(['photo'=>'required']);
        $request->file('photo')->store('photos/');
        return redirect ('photo');
    }
}
