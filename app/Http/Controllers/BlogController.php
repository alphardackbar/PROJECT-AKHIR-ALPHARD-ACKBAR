<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function homee()
    {
        return view("homee");
    }
    public function tentang()
    {
        return view("tentang");
    }
    public function kontak()
    {
        return view("kontak");
    }
}
