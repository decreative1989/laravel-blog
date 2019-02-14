<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Web\Album;

class GalleryController extends Controller
{
    public function index()
    {
        $albums = Album::whereDisable(false)->get();
        return view('layouts.frontend.varsity.gallery', compact('albums'));
    }
}
