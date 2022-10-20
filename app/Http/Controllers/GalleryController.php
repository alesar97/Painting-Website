<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\VideoGallery;
use App\Models\PreviousWorks;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    //
    public function images(){
        $images = Gallery::where('image_type','=','image')->get();
        return view('gallery.images',compact('images'));
    }
    public function videos(){
        $images = VideoGallery::all();
        return view('gallery.videos',compact('images'));
    }
    public function previousWorks(){
        $previousWorks = PreviousWorks::all();
        return view('gallery.previous_works',compact('previousWorks'));
    }
}
