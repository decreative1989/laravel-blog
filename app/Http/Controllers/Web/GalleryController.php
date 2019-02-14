<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Web\Album;
use App\Models\Web\Gallery;

class GalleryController extends Controller
{
    public function index()
    {
        $albums = Album::whereDisable(false)->get();
        $gallery = Gallery::all();

        dd($albums,$gallery);
        return view('layouts.frontend.varsity.gallery');
    }
}
