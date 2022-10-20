<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sliders;

class HomeController extends Controller
{
    //
    public function index(){
        $sliders = Sliders::all()->random(3);
        return view('welcome', compact('sliders'));
  
    }
}
