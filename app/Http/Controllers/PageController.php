<?php

namespace App\Http\Controllers;

use App\Models\File;

class PageController extends Controller
{
    public function index()
    {
        return view('index', [
            "file" => File::all(),
        ]);
    }
    public function buy()
    {
        return view('/buy', [
            "file" => File::all()
        ]);
    }
    public function signin()
    {
        return view('/login', [
            "file" => File::all()
        ]);
    }
    public function signup()
    {
        return view('/signup', [
            "file" => File::all()
        ]);
    }
}
