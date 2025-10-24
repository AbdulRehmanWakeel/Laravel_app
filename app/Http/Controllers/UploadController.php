<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    function upload(Request $req){
        $req->validate([
            'file' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);        
        $path = $req->file('file')->store('uploads', 'public');
        // $path = $req->file('file')->storeAs('uploads', 'dummy4.pdf', 'public');

        // echo "upload function called";
        return view('display', ['path' => $path]);    
    }
}

