<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('about', [
            "title" => "About",
            "name" => "Bang Iqbal",
            "email" => "iqbalkurniawan@gmail.com",
            "work" => "Remote worker is the best",
            "image" => "iqbal.jpg"
        ]);
    }
}
