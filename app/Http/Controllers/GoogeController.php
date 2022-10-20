<?php

namespace App\Http\Controllers;

use App\Models\GoolgeReview;
use Illuminate\Http\Request;

class GoogeController extends Controller
{
    //
    public function index(){
        $services = GoolgeReview:: all();

        $reviews_count = count($services);
        $review_stars = GoolgeReview::sum('stars');
        $stars_1 = GoolgeReview::where('stars','=',1)->count();
        $stars_2 = GoolgeReview::where('stars','=',2)->count();
        $stars_3 = GoolgeReview::where('stars','=',3)->count();
        $stars_4 = GoolgeReview::where('stars','=',4)->count();
        $stars_5 = GoolgeReview::where('stars','=',5)->count();

        return view('google-reviews',compact('services','reviews_count','review_stars','stars_1','stars_2','stars_3','stars_4','stars_5'));
    }
}
